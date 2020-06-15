<?php

class TalkModel extends Model
{
    // Constants

    const DATE_FORMAT      = 'Y-m-d';
    const DATE_TIME_FORMAT = 'Y-m-d H:i:s';

    const LAST_MESSAGES_TIME_DELAY = 86400; // 24 hours (in seconds) // maximum age of previous messages displayed in the current talk
    const ARCHIVE_INTERVAL         =  3600; //  1 hour  (in seconds) // frequency of the old talks archiving procedure
    const ARCHIVE_TIME_LIMIT       = 86400; // 24 hours (in seconds) // how long inactivity does it take to consider a talk old (to be archived)

    const STATE_NEW         = 'new';
    const STATE_IN_PROGRESS = 'in_progress';
    const STATE_CLOSED      = 'closed';

    // Constructor

    public function initialize()
    {
        parent::initialize();

        $this->state = self::STATE_NEW;
        $this->owner = null;
    }

    // Getters & setters

    public function getTableName()
    {
        return 'mirrormx_customer_chat_talk';
    }

    public function getColumns()
    {
        return array('state', 'department_id', 'owner', 'last_activity', 'extra');
    }

    // Methods

    public static function repo()
    {
        return new TalkModel;
    }

    // Hooks

    public function preSave()
    {
        $result = parent::preSave();

        if(!isset($this->id)) // New talk
        {
            // Store current time for new talks

            $result['last_activity'] = date(self::DATE_TIME_FORMAT);
        }

        if(isset($result['extra'])) $result['extra'] = json_encode($result['extra']);

        return $result;
    }

    public function postRead($data)
    {
        $data = parent::postRead($data);

        $data['id']    = intval($data['id']);
        $data['owner'] = intval($data['owner']);

        if(isset($data['extra'])) $data['extra'] = json_decode($data['extra']);

        return $data;
    }

    public function getTalkIdForGuest($guestId, $departmentId = null)
    {
        $memory = self::$services->get('memory.talks_map');

        // Find talk ID if already exists

        $talkId = $memory->get($guestId);

        if($talkId !== null)
        {
            return $talkId;
        }
        else // Create new talk
        {
            $talk = new TalkModel();

            if(!empty($departmentId))
            {
                $talk->department_id = intval($departmentId);
            }

            $talk->save();

            $memory->set($guestId, $talk->id);

            return $talk->id;
        }
    }

    public function getTalkIdForUsers($user1, $user2)
    {
        $memory = self::$services->get('memory.talks_map');

        // Sort ids

        if($user1 > $user2)
        {
            $tmp   = $user1;
            $user1 = $user2;
            $user2 = $tmp;
        }

        // Find talk ID if already exists

        $talkId = $memory->get("{$user1}_$user2");

        if($talkId)
        {
            return $talkId;
        }
        else // Create new talk
        {
            $talk = new TalkModel();
            $talk->save();

            $memory->set("{$user1}_$user2", $talk->id);

            return $talk->id;
        }
    }

    public function getUserTalkMap()
    {
        $memory = self::$services->get('memory.talks_map');

        return $memory->getData();
    }

    public function getTalkDepartmentMap($talks)
    {
        $talks = self::$db->query(

            'Select id, department_id From ' . $this->getTableName() . ' Where id In (' . join($talks, ',') .  ')'
        );

        $result = array();

        if($talks)
        {
            foreach($talks as &$talk)
            {
                $result[$talk['id']] = $talk['department_id'];
            }
        }

        if(empty($result))
        {
            return null;
        }

        return $result;
    }

    public function removeTalksFromMap($talkIds)
    {
        $memory   = self::$services->get('memory.talks_map');
        $talksMap = $memory->getData();

        unset($talksMap['talkidlast']);

        foreach($talkIds as $talkId)
        {
            $i = array_search($talkId, $talksMap);

            if($i)
            {
                $memory->remove($i);
            }
        }
    }

    public function stayAlive()
    {
        // Update last activity time

        $this->last_activity = date(self::DATE_TIME_FORMAT);
    }

    public function isObsolete()
    {
        return strtotime($this->last_activity) + self::LAST_MESSAGES_TIME_DELAY < time();
    }

    public function checkForObsoleteTalks($userId, &$talks)
    {
        $oldTalks = array();
        $count    = count($talks);

        foreach($talks as $talkId => $messages)
        {
            // Check if last message is obsolete

            $lastMessage = $messages[count($messages) - 1];

            if($lastMessage->isObsolete())
            {
                $oldTalks[] = $talkId;
            }
        }

        // Unwatch the talk

        UserModel::repo()->removeWatchedTalks($userId, $oldTalks);

        // Remove from current talks

        $this->removeTalksFromMap($oldTalks);

        return $oldTalks;
    }

    public function archiveTalks($talkIds)
    {
        // Return if nothing to archive

        if(empty($talkIds))
        {
            return;
        }

        foreach($talkIds as &$talkId)
        {
            $talkId = intval($talkId);
        }

        $idsStr = join(',', $talkIds);

        // Set talks' states to closed

        return self::$db->execute('UPDATE ' . self::repo()->getTableName() . ' SET state = "' . self::STATE_CLOSED . '" WHERE id IN( ' . $idsStr  . ')');
    }

    public function archiveOldTalks()
    {
        // Limit this activity's frequency

        $memory          = self::$services->get('memory.stats');
        $time            = time();
        $lastArchiveTime = intval($memory->get('lastArchiveTime'));

        if($lastArchiveTime + self::ARCHIVE_INTERVAL < $time)
        {
            $memory->set('lastArchiveTime', $time);

            // Get all talks wihout recent activity

            $timeLimit = date(self::DATE_TIME_FORMAT, $time - self::ARCHIVE_TIME_LIMIT);

            $talks = $this->findBy(array(

                'last_activity' => array('<',  $timeLimit),
                'state'         => array('<>', self::STATE_CLOSED)
            ));

            // Remove talks from the state files

            if(!empty($talks))
            {
                $talkIds = array();

                foreach($talks as &$talk)
                {
                    $talkIds[] = $talk->id;

                    // Typing status

                    UserModel::repo()->clearTypingStatus($talk->id);
                }

                // Talks map

                $this->removeTalksFromMap($talkIds);

                // Watched talks

                UserModel::repo()->removeWatchedTalksAll($talkIds);

                // Close all talks without recent activity

                $result = self::$db->execute(

                    'UPDATE ' . self::repo()->getTableName() . ' SET state = ? WHERE state <> ? AND last_activity < ?',

                    array(self::STATE_CLOSED, self::STATE_CLOSED, $timeLimit)
                );

                return $result;
            }
        }

        return true;
    }

    public function queryNumberOfTalks($query)
    {
        $db = self::$db;

        // Query database

        $params = array();

        $params[] = $query['fromDate'];
        $params[] = $query['toDate'];

        $dbResults = $db->query(

            'Select ' . $this->getDateExpForUnit($query['unit']) . ' As d, Count(*) As n From ' . $this->getTableName() . ' Where last_activity Between ? And ? Group By d Order By d Desc',

            $params
        );

        if($dbResults)
        {
            foreach($dbResults as &$row)
            {
                Utils::removeNumericKeys($row);
            }

            return $dbResults;
        }

        return array();
    }

    protected function getDateExpForUnit($unit)
    {
        switch($unit)
        {
            case 'year'   : return 'Date_Format(last_activity, "%Y-01-01")';
            case 'quarter': return 'Date_Add(Date_Format(last_activity, "%Y-01-01"), Interval Quarter(last_activity) Quarter)';
            case 'month'  : return 'Date_Format(last_activity, "%Y-%m-01")';
            case 'week'   : return 'Date_Sub(Date(last_activity), Interval DayOfWeek(last_activity) - 2 Day)';
            default       :
            case 'day'    : return 'Date(last_activity)';
        }
    }

    public function clear()
    {
        // Close old talks

        $this->archiveOldTalks();

        // Clear database entries

        $result  = MessageModel::repo()->clear();
        $result &= self::$db->execute('DELETE FROM ' . $this->getTableName() . ' WHERE state = ?', array(self::STATE_CLOSED));
        $result &= SharedFileModel::repo()->clear();
        $result &= UserModel::repo()->clearNonTalkingGuests();

        return !!$result;
    }
}

?>
