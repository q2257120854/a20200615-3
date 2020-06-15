<?php

class DepartmentModel extends Model
{
    // Getters & setters

    public function getTableName()
    {
        return 'mirrormx_customer_chat_department';
    }

    public function getLinkingTableName()
    {
        return 'mirrormx_customer_chat_user_department';
    }

    public function getColumns()
    {
        return array('name', 'description');
    }

    // Methods

    public static function repo()
    {
        return new DepartmentModel;
    }

    public function findAllFull()
    {
        // Query

        $result = self::$db->query(

            'Select d.*, Group_Concat(r.user_id) As operators From ' . $this->getTableName() . ' d ' .
                'Left Join ' . $this->getLinkingTableName() . ' r On d.id = r.department_id ' .
            'Group By d.id'
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

    public function findAllOnline()
    {
        // Query

        $result = self::$db->query(

            'Select d.*, If(Count(u.id) > 0, "online", "offline") As status From ' . $this->getTableName() . ' d ' .

                'Left Join ' . $this->getLinkingTableName() . ' r On d.id = r.department_id ' .
                'Left Join ' . UserModel::repo()->getTableName() . ' u On ' .

                    'u.last_activity >= ? And u.roles Like "%OPERATOR%" And u.id = r.user_id ' .

            'Group By d.id'

            , array(date(UserModel::DATE_TIME_FORMAT, time() - UserModel::ONLINE_TIME))
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

    public function save($updateOperators = false)
    {
        $result = parent::save();

        // Update related operators

        if($updateOperators)
        {
            $result = $result && self::$db->execute('Delete From ' . $this->getLinkingTableName() . ' Where department_id = ?', array($this->id));

            if(isset($this->operators) && is_array($this->operators))
            {
                $num       = count($this->operators);
                $valuesStr = str_repeat('(?,?),', $num - 1) . '(?,?)';
                $values    = array();

                foreach($this->operators as $operatorId)
                {
                    $values[] = $operatorId;
                    $values[] = $this->id;
                }

                $result = $result && self::$db->execute('Insert Into ' . $this->getLinkingTableName() . ' Values ' . $valuesStr, $values);
            }
        }

        return $result;
    }

    public function postRead($data)
    {
        $data = parent::postRead($data);

        if(isset($data['operators']) && is_string($data['operators']))
        {
            $data['operators'] = explode(',', $data['operators']);

            foreach($data['operators'] as &$operator)
            {
                $operator = intval($operator);
            }
        }

        if(isset($data['id'])) $data['id'] = intval($data['id']);

        return $data;
    }
}

?>
