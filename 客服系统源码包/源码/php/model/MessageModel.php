<?php

class MessageModel extends Model
{
    // Constants

    const TO_ID_ALL                = -1;
    const USER_ID_SYSTEM           = -2;
    const LAST_MESSAGES_TIME_DELAY = 86400; // maximum age of previous messages displayed in the current talk: 24 hours (in seconds)
    const QUERY_HISTORY_LIMIT      = 21;    // maximum number of history entries queries at once
    const DATE_TIME_FORMAT         = 'Y-m-d H:i:s';

    const EXTRA_USER_INVITE = 'user_invite';
    const EXTRA_USER_LEAVE  = 'user_leave';
    const EXTRA_TALK_START  = 'talk_start';
    const EXTRA_TALK_CLOSE  = 'talk_close';
    const EXTRA_TALK_OWNER  = 'talk_owner';
    const EXTRA_FILES       = 'files';

    // Constructor

    public function initialize()
    {
        parent::initialize();

        $this->talk_id = null;
        $this->to_id   = self::TO_ID_ALL;
    }

    // Getters & setters

    public function getTableName()
    {
        return 'mirrormx_customer_chat_message';
    }

    public function getColumns()
    {
        return array('from_id', 'to_id', 'body', 'datetime', 'talk_id', 'extra');
    }

    // Methods

    public static function repo()
    {
        return new MessageModel;
    }

    public function preSave()
    {
        $result = parent::preSave();

        if(!isset($this->id)) // New message
        {
            // Encode from/to users data

            $result = $this->getData();

            // Store current time for new messages

            $this->datetime = $result['datetime'] = date(self::DATE_TIME_FORMAT);
        }

        if(isset($result['extra'])) $result['extra'] = json_encode($result['extra']);

        return $result;
    }

    public function postRead($data)
    {
        $data = parent::postRead($data);

        $data['id']      = intval($data['id']);
        $data['from_id'] = intval($data['from_id']);
        $data['to_id']   = intval($data['to_id']);
        $data['talk_id'] = intval($data['talk_id']);

        if(isset($data['extra']))
        {
            $data['extra'] = json_decode($data['extra']);

            $extra = $data['extra'];
            $id    = $data['id'];

            // Get related upload

            if($extra->type === self::EXTRA_FILES)
            {
                $upload = UploadModel::repo()->findOneBy(array('message_id' => $id));

                if($upload)
                {
                    $data['upload'] = $upload;
                }
            }
        }

        return $data;
    }

    public function queryHistory($query)
    {
        $db = self::$db;

        if(empty($query)) $query = array();

        if(!isset($query['limit']) || intval($query['limit']) > self::QUERY_HISTORY_LIMIT)
        {
            $query['limit'] = self::QUERY_HISTORY_LIMIT;
        }

        if(!isset($query['offset']))
        {
            $query['offset'] = 0;
        }

        $params = array($query['fromDate'], $query['toDate']);

        // Create user details query

        $userDetailsQuery = '';

        if(isset($query['name']) || isset($query['mail']))
        {
            $userDetailsQuery = ' AND from_id IN (SELECT id FROM ' . UserModel::repo()->getTableName() . ' WHERE ';

            $glue = '';

            foreach(array('name', 'mail') as $key)
            {
                if(isset($query[$key]))
                {
                    $userDetailsQuery .= $glue . $key . " LIKE ?";
                    $params[] = '%' . $query[$key] . '%';
                    $glue = ' OR ';
                }
            }

            $userDetailsQuery .= ')';
        }

        // Query database

        $params[] = $query['offset'];
        $params[] = $query['limit'];

        $dbResults = $db->query(

            'SELECT * FROM ' . $this->getTableName() .
            ' t1 INNER JOIN (SELECT talk_id From ' . $this->getTableName() . ' i1 WHERE (SELECT Count(*) From ' . $this->getTableName() . ' i2 Where i1.talk_id = i2.talk_id) > 1 And ' .
            ' datetime BETWEEN ? AND ?' .
            $userDetailsQuery . ' Group By talk_id ORDER BY datetime DESC LIMIT ?, ?) t2 ON t1.talk_id = t2.talk_id ORDER BY datetime DESC',

            $params
        );

        // Group the results into talks

        $talks = array();

        if(is_array($dbResults))
        {
            foreach($dbResults as &$message)
            {
                $talkId = $message['talk_id'];

                if(!isset($talks[$talkId])) $talks[$talkId] = array();

                $message = $this->createInstance($this->postRead($message));

                Utils::removeNumericKeys($message);

                $talks[$talkId][] = $message;
            }
        }

        // Create the result set

        $results = array();

        foreach($talks as &$talk)
        {
            $results[] = $talk;
        }

        return $results;
    }

    public function getTalkForTranscript($talkId)
    {
        // Find the talk

        $messages = $this->getTalk($talkId);
        $result   = array();
        $users    = array();

        foreach($messages as &$m)
        {
            // Filter out system messages

            if($m->from_id == self::USER_ID_SYSTEM) continue;

            if(isset($m->extra))
            {
                if($m->extra->type == self::EXTRA_TALK_START) continue;
            }

            // Query users

            if(!isset($users[$m->from_id]))
            {
                $users[$m->from_id] = UserModel::repo()->find($m->from_id);
            }

            $m->author = $users[$m->from_id]->getReadableName();

            // Add emoticons

            $m->body = $this->_addEmoticonsToBody($m->body);

            $result[] = $m;
        }

        return array('users' => $users, 'talk' => $result);
    }

    static protected $EMOTICONS = array(

        '&gt;:|' => '<i class="emot emot-9"></i>',
        '&gt;:D' => '<i class="emot emot-10"></i>',
        ':)'     => '<i class="emot emot-1"></i>',
        ';)'     => '<i class="emot emot-2"></i>',
        ':('     => '<i class="emot emot-3"></i>',
        ':D'     => '<i class="emot emot-4"></i>',
        ':P'     => '<i class="emot emot-5"></i>',
        '=)'     => '<i class="emot emot-6"></i>',
        ':|'     => '<i class="emot emot-7"></i>',
        '=|'     => '<i class="emot emot-8"></i>',
        'o_O'    => '<i class="emot emot-11"></i>',
        '=O'     => '<i class="emot emot-12"></i>',
        '&lt;3'  => '<i class="emot emot-13"></i>',
        ':S'     => '<i class="emot emot-14"></i>',
        ':*'     => '<i class="emot emot-15"></i>',
        ':$'     => '<i class="emot emot-16"></i>',
        '=B'     => '<i class="emot emot-17"></i>',
        ':-D'    => '<i class="emot emot-18"></i>',
        ';-D'    => '<i class="emot emot-19"></i>',
        '*-D'    => '<i class="emot emot-20"></i>'
    );

    protected function _addEmoticonsToBody($body)
    {
        return str_replace(array_keys(self::$EMOTICONS), array_values(self::$EMOTICONS), $body);
    }

    public function queryMessagesPerTalk($query)
    {
        $db = self::$db;

        // Query database

        $params = array();

        $params[] = $query['fromDate'];
        $params[] = $query['toDate'];

        $dbResults = $db->queryOne(

            'Select Count(*) As num_talks, Sum(le10) As num_le10, Sum(le20) As num_le20, Sum(le30) As num_le30, Sum(h30) As num_h30

            From (
                Select Count(*) Between 0 And 10 As le10, Count(*) Between 11 And 20 As le20, Count(*) Between 21 And 30 As le30, Count(*) > 30 As h30
                From ' . $this->getTableName() . '
                Where datetime Between ? And ?
                Group By talk_id
            ) r',

            $params
        );

        if($dbResults)
        {
            return Utils::removeNumericKeys($dbResults);
        }

        return array();
    }

    public function clear()
    {
        // Remove all model entries

        return self::$db->execute('DELETE FROM ' . $this->getTableName());
    }

    public function getTalk($talkId, $lastMsgId = null)
    {
        // Find all messages from the talk

        $query = array('talk_id' => $talkId);

        // Limit to the ones after given ID

        if($lastMsgId)
        {
            $query['id'] = array('>', $lastMsgId);
        }

        return $this->findBy($query);
    }

    public function getTalks($ids, $lastMessageId = 0, $fullData = false, $includeNew = true)
    {
        // Include new talks if desired

        if($includeNew)
        {
            // Get all new talks

            $newTalks = TalkModel::repo()->findBy(array('state' => TalkModel::STATE_NEW));

            if(!empty($newTalks))
            {
                // Collect talk IDS

                $newTalkIds = array();

                foreach($newTalks as $talk)
                {
                    $newTalkIds[] = $talk->id;
                }

                // Join all the IDs

                $ids = array_unique(array_merge($ids, $newTalkIds));
            }
        }

        // Return if nothing to query

        if(count($ids) < 1)
        {
            return array();
        }

        // Prepare the query

        sort($ids);

        $query = 'SELECT * FROM ' . $this->getTableName() . ' WHERE id > ? AND datetime >= ? AND (talk_id BETWEEN ? AND ?)';

        // Get data

        $dbResult = self::$db->query($query, array($lastMessageId, date(self::DATE_TIME_FORMAT, time() - self::LAST_MESSAGES_TIME_DELAY), $ids[0], end($ids)));

        $talks = array();

        if($dbResult)
        {
            // Group messages into talks and filter out the unrelated ones

            foreach($dbResult as $messageRow)
            {
                // Filter out the unrelated ones

                $talkId = $messageRow['talk_id'];

                if(in_array($talkId, $ids))
                {
                    // Group into talk

                    if(!isset($talks[$talkId]))
                    {
                        $talks[$talkId] = array();
                    }

                    // Remove unnecessary fields

                    $message = $this->createInstance($this->postRead($messageRow));

                    if(!$fullData)
                    {
                        unset($message->talk_id);
                    }

                    $talks[$talkId][] = $message;
                }
            }
        }

        return $talks;
    }

    public function getOperatorTalks($operatorId, $watchedTalksIds, $lastMessageId = 0, $includeNew = true)
    {
        $watchedTalksStr = '';

        if(count($watchedTalksIds) > 0)
        {
            $watchedTalksStr = ' m.talk_id In (' . implode($watchedTalksIds, ',') . ') Or';
        }

        $result = self::$db->query(

            'Select *
            From ' . $this->getTableName() . ' m
            Where id > ? And (' . $watchedTalksStr . ' m.talk_id In(

                Select id
                From ' . TalkModel::repo()->getTableName() . ' t
                Where state = ? And (t.department_id Is Null Or t.department_id In(

                    Select department_id From ' . DepartmentModel::repo()->getLinkingTableName() . ' r
                    Where r.user_id = ?
                ))
            ))'

            , array($lastMessageId, TalkModel::STATE_NEW, $operatorId)
        );

        $talks = array();

        if($result)
        {
            // Group messages into talks and filter out the unrelated ones

            foreach($result as &$messageRow)
            {
                // Group into talk

                $talkId = $messageRow['talk_id'];

                if(!isset($talks[$talkId]))
                {
                    $talks[$talkId] = array();
                }

                $message = $this->createInstance($this->postRead($messageRow));

                $talks[$talkId][] = $message;
            }

            // Remove messages from inactive users

            $talksToClose = array();

            foreach($talks as $talkId => $messages)
            {
                $user = null;
                $msg  = $messages[0];

                if(isset($msg->extra) && $msg->extra->type === MessageModel::EXTRA_TALK_START)
                {
                    $user = UserModel::repo()->find($msg->from_id);
                }
                else for($i = count($messages) - 1; $i >= 0; $i--)
                {
                    $msg = $messages[$i];

                    if($msg->from_id !== self::USER_ID_SYSTEM)
                    {
                        $user = UserModel::repo()->find($msg->from_id);
                        break;
                    }
                }

                if($user && !$user->isOnline())
                {
                    unset($talks[$talkId]);

                    if(!$user->hasValidSession())
                    {
                        $talksToClose[] = $talkId;
                    }
                }
            }

            if(!empty($talksToClose))
            {
                TalkModel::repo()->archiveTalks($talksToClose);

                // Unwatch the talk

                UserModel::repo()->removeWatchedTalks($operatorId, $talksToClose);

                // Remove from current talks

                TalkModel::repo()->removeTalksFromMap($talksToClose);
            }
        }

        return $talks;
    }

    public function isObsolete()
    {
        return strtotime($this->datetime) + self::LAST_MESSAGES_TIME_DELAY < time();
    }
}

?>
