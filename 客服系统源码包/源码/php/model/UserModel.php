<?php

class UserModel extends Model
{
    const GUEST_SESSION_TIME  = 600;                        // 10 minutes (in seconds)
    const TYPING_STATUS_TIME  =   5;                        // lifetime of the typing status validity
    const TYPING_CLEAR_TIME   = 600;                        // 10 minutes (in seconds)
    const ONLINE_TIME         =  30;                        // 30 seconds of not responding before considering user's offline
    const AVATAR_SIZE         =  40;                        // used for resizing avatars after an upload
    const DEFAULT_AVATARS_DIR = 'upload/default-avatars';
    const DEFAULT_AVATAR_PATH = 'img/avatar.png';
    const DATE_TIME_FORMAT    = 'Y-m-d H:i:s';

    // Static methods

    public static function getDefaultAvatars()
    {
        $result = array();

        // Read all images from the default avatars directory

        foreach(glob(ROOT_DIR . '/../' . self::DEFAULT_AVATARS_DIR . '/*') as $path)
        {
            $result[] = self::DEFAULT_AVATARS_DIR . '/' . basename($path);
        }

        return $result;
    }

    // Getters & setters

    public function getTableName()
    {
        return 'mirrormx_customer_chat_user';
    }

    public function getColumns()
    {
        return array('name', 'mail', 'password', 'image', 'roles', 'last_activity', 'info');
    }

    public function getData($raw = false)
    {
        $data = parent::getData();

        if(!$raw)
        {
            // Hide the password field

            unset($data['password']);
        }

        // Remove all integer indexed entries

        for($i = 0; $i < count($data); $i++)
        {
            unset($data[$i]);
        }

        return $data;
    }

    public function getBasicData()
    {
        return array(

            'name' => $this->name,
            'mail' => $this->mail
        );
    }

    public function toJson()
    {
        $data = $this->getData();

        // Hide the password field

        unset($data['password']);

        return $data;
    }

    public function getReadableName()
    {
        if($this->isGuest()) return strrpos($this->name, '-') !== false ? substr($this->name, 0, strrpos($this->name, '-')) : $this->name;

        return $this->name;
    }

    // Methods

    public function hasRole($role)
    {
        return is_array($this->roles) && array_search($role, $this->roles) !== false;
    }

    public function isGuest()
    {
        return $this->hasRole('GUEST') && count($this->roles) === 1;
    }

    public function stayAlive($id, $info = null)
    {
        $infoSet = '';
        $input   = array(date(self::DATE_TIME_FORMAT));

        if(!empty($info))
        {
            $infoSet = ', info = ?';

            $input[] = $info;
        }

        $input[] = $id;

        self::$db->execute(

            'UPDATE ' . $this->getTableName() . ' SET last_activity = ?' . $infoSet . ' WHERE id = ?',

            $input
        );
    }

    // Reset last activity time (used when logging user out)

    public function resetLastActivity($id)
    {
        return self::$db->execute('UPDATE ' . $this->getTableName() . ' SET last_activity = 0 WHERE id = ?', array($id));
    }

    public function updateTypingStatus($userId, $talkId, $isTyping)
    {
        $memory = self::$services->get('memory');
        $time   = time();

        // Check if it's time to clear the memory

        $lastClearTime = $memory->get('lastClearTime');

        if($lastClearTime + self::TYPING_CLEAR_TIME < $time)
        {
            $memory->clear();
            $memory->set('lastClearTime', $time);
        }

        // Update user's status

        $key  = 't' . $talkId;
        $val  = $memory->get($key);
        $data = array();

        if(!empty($val))
        {
            $data = $this->parseTypingData($val);
        }

        $this->setTypingEntry($data, $userId, $time);

        if($isTyping) $memory->set($key, $this->encodeTypingData($data));
        else          $memory->remove($key);
    }

    public function clearTypingStatus($talkId)
    {
        self::$services->get('memory')->remove('t' . $talkId);
    }

    public function getTypingStatus($userId, $talkId)
    {
        $memory = self::$services->get('memory');
        $time   = time();

        $dataStr = $memory->get('t' . $talkId);

        if(empty($dataStr)) return false;

        $data = $this->parseTypingData($dataStr);

        foreach($data as $entry)
        {
            if($entry[0] != $userId && $entry[1] + self::TYPING_STATUS_TIME >= $time)
            {
                return true;
            }
        }

        return false;
    }

    protected function parseTypingData($dataStr)
    {
        $data = explode(',', $dataStr);

        foreach($data as &$entry)
        {
            $entry = explode(':', $entry);
        }

        return $data;
    }

    protected function setTypingEntry(&$data, $userId, $time)
    {
        foreach($data as &$entry)
        {
            if($entry[0] == $userId)
            {
                // Modify existing entry

                $entry[1] = $time;

                return;
            }
        }

        // Add new entry

        $data[] = array($userId, $time);
    }

    protected function encodeTypingData($data)
    {
        foreach($data as &$entry)
        {
            $entry = implode(':', $entry);
        }

        return implode(',', $data);
    }

    public function generateGuest($name, $mail)
    {
        return new UserModel(array(

            'name'          => $name . '-' . time(),
            'mail'          => $mail,
            'password'      => 'x',
            'roles'         => array('GUEST'),
            'last_activity' => date(self::DATE_TIME_FORMAT)
        ));
    }

    public function hasValidSession()
    {
        $lastActivityTime = strtotime($this->last_activity);

        return time() - $lastActivityTime <= self::GUEST_SESSION_TIME;
    }

    public function isOnline()
    {
        $lastActivityTime = strtotime($this->last_activity);

        return time() - $lastActivityTime <= self::ONLINE_TIME;
    }

    // Get given operator with departments

    public function findOperatorFull($id)
    {
        // Query

        $result = self::$db->queryOne(

            'Select u.*, Group_Concat(r.department_id) As departments From ' . $this->getTableName() . ' u ' .
                'Left Join ' . DepartmentModel::repo()->getLinkingTableName() . ' r On u.id = r.user_id ' .
            'Where u.id = ? ' .
            'Group By u.id'

            , array($id)
        );

        if($result)
        {
            // Return the result

            return $this->createInstance($this->postRead($result));
        }

        // Indicate error

        return false;
    }

    // Get all operators with their departments

    public function findOperatorsFull()
    {
        // Query

        $result = self::$db->query(

            'Select u.*, Group_Concat(r.department_id) As departments From ' . $this->getTableName() . ' u ' .
                'Left Join ' . DepartmentModel::repo()->getLinkingTableName() . ' r On u.id = r.user_id ' .
            'Where u.roles Like "%OPERATOR%" ' .
            'Group By u.id'
        );

        if(is_array($result))
        {
            $objects = array();

            // Construct the objects representing the result set

            foreach($result as $value)
            {
                $objects[] = $this->createInstance($this->postRead($value));
            }

            // Return the result

            return $objects;
        }

        // Indicate error

        return false;
    }

    // Check if any operators is available to handle the given talk

    public function hasOperatorForTalk($talkId)
    {
        // Query

        $talk = TalkModel::repo()->find($talkId);

        if($talk)
        {
            $result;

            if(!empty($talk->department_id))
            {
                // Count online operators from the given department and talk owner, if any

                $result = self::$db->queryOne(

                    'Select Count(*) As numOnline From ' . $this->getTableName() . ' ' .
                    'Where (id = ? Or id In (' .

                        'Select user_id From ' . DepartmentModel::repo()->getLinkingTableName() . ' ' .
                        'Where department_id = ?' .

                    ')) And last_activity >= ?'

                    , array($talk->owner, $talk->department_id, date(self::DATE_TIME_FORMAT, time() - self::ONLINE_TIME))
                );
            }
            else
            {
                // Count all online operators

                $result = self::$db->queryOne(

                    'Select Count(*) As numOnline From ' . $this->getTableName() . ' Where last_activity >= ? And roles Like "%OPERATOR%"'

                    , array(date(self::DATE_TIME_FORMAT, time() - self::ONLINE_TIME))
                );

            }

            return $result['numOnline'] > 0;
        }

        return false;
    }

    public function isOperatorOnline()
    {
        $operators = $this->findBy(array(

            'last_activity' => array('>=', date(self::DATE_TIME_FORMAT, time() - self::ONLINE_TIME)),
            'roles'         => array('LIKE', '%OPERATOR%')
        ));

        return $operators && count($operators) > 0;
    }

    // Used for "avatar" eye catcher

    public function getSomeOperator()
    {
        // Find online operator

        $operator = $this->findOneBy(array(

            'last_activity' => array('>=', date(self::DATE_TIME_FORMAT, time() - self::ONLINE_TIME)),
            'roles'         => array('LIKE', '%OPERATOR%')
        ));

        if(!$operator)
        {
            // Find any operator

            $operator = $this->findOneBy(array('roles' => array('LIKE', '%OPERATOR%')));
        }

        return $operator;
    }

    public function getAllOnline()
    {
        $users = $this->findBy(array(

            'last_activity' => array('>=', date(self::DATE_TIME_FORMAT, time() - self::ONLINE_TIME)),

        ), 'And', array('name'));

        $result = array();

        if($users)
        {
            foreach($users as &$user)
            {
                // Hide the password field

                $result[] = $user->getData();
            }
        }

        return $result;
    }

    // Removes all guests without messages and valid session from the database

    public function clearNonTalkingGuests()
    {
        $timeLimit = date(self::DATE_TIME_FORMAT, time() - self::GUEST_SESSION_TIME);

        return self::$db->execute('Delete From ' . $this->getTableName() . ' Where roles = ? And last_activity < ? And id Not In (

                Select from_id From ' . MessageModel::repo()->getTableName() . '
            )',

            array('GUEST', $timeLimit)
        );
    }

    public function countGuestsOnline()
    {
        $users = $this->findBy(array(

            'last_activity' => array('>=', date(self::DATE_TIME_FORMAT, time() - self::ONLINE_TIME)),
            'roles'         => array('LIKE', '%GUEST%')
        ));

        return count($users);
    }

    public function getWatchedTalks($userId)
    {
        $watchedTalksString = self::$services->get('memory.watched_talks')->get($userId);

        if(!empty($watchedTalksString))
        {
            $result = explode(',', $watchedTalksString);

            foreach($result as &$talkId)
            {
                $talkId = intval($talkId);
            }

            return $result;
        }

        return array();
    }

    public function setWatchedTalks($userId, $talkIds)
    {
        $memory = self::$services->get('memory.watched_talks');

        if(empty($talkIds))
        {
            $memory->remove($userId);
        }
        else
        {
            $talksString = implode(',', $talkIds);
            $memory->set($userId, $talksString);
        }

        $memory->save();

        return $talkIds;
    }

    public function addWatchedTalks($userId, $talkIds)
    {
        return $this->setWatchedTalks($userId, array_unique(array_merge($this->getWatchedTalks($userId), $talkIds)));
    }

    public function removeWatchedTalks($userId, $talkIds)
    {
        if(empty($talkIds)) return;

        $watchedTalks = $this->getWatchedTalks($userId);

        $this->setWatchedTalks($userId, array_diff($watchedTalks, $talkIds));
    }

    public function removeWatchedTalksAll($talkIds)
    {
        // Get all users watching talks

        $userIds = self::$services->get('memory.watched_talks')->getKeys();

        // Unwatch talks for each user

        foreach($userIds as $userId)
        {
            $this->removeWatchedTalks($userId, $talkIds);
        }
    }

    public static function repo()
    {
        return new UserModel;
    }

    public function save($updateDepartments = false)
    {
        $result = parent::save();

        // Update related departments

        if($updateDepartments)
        {
            $result = $result && self::$db->execute('Delete From ' . DepartmentModel::repo()->getLinkingTableName() . ' Where user_id = ?', array($this->id));

            if(isset($this->departments) && is_array($this->departments))
            {
                $num       = count($this->departments);
                $valuesStr = str_repeat('(?,?),', $num - 1) . '(?,?)';
                $values    = array();

                foreach($this->departments as $departmentId)
                {
                    $values[] = $this->id;
                    $values[] = $departmentId;
                }

                $result = $result && self::$db->execute('Insert Into ' . DepartmentModel::repo()->getLinkingTableName() . ' Values ' . $valuesStr, $values);
            }
        }

        return $result;
    }

    public function preSave()
    {
        $result = parent::preSave();

        if(isset($result['roles'])) $result['roles'] = implode(',', $result['roles']);
        if(isset($result['info']))  $result['info']  = json_encode($result['info']);

        return $result;
    }

    public function postRead($data)
    {
        $data = parent::postRead($data);

        if(isset($data['roles'])) $data['roles'] = explode(',', $data['roles']);
        if(isset($data['info']))  $data['info']  = json_decode($data['info'], true);

        if(isset($data['departments']) && is_string($data['departments']))
        {
            $data['departments'] = explode(',', $data['departments']);

            foreach($data['departments'] as &$department)
            {
                $department = intval($department);
            }
        }

        return $data;
    }
}

?>
