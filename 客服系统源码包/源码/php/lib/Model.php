<?php

abstract class Model
{
    // Constants

    const CANCEL_SAVE_ID    =  -1;
    const BATCH_QUERY_LIMIT = 100;

    // Fields

    protected static $db;
    protected static $services;

    // Constructor

    public function __construct($data = null, $rawData = false)
    {
        self::$services = ServiceContainer::getInstance();
        self::$db       = self::$services->get('db');

        $this->initialize();

        if($data)
        {
            $rawData ? $this->setRawData($data) : $this->setData($data);
        }
    }

    public function initialize()
    {
    }

    // Getters & setters

    public function getTableName()
    {
        throw new Exception('Specify the table name');
    }

    public function getColumns()
    {
        return array();
    }

    public function setData($data)
    {
        foreach($data as $key => $value)
        {
            if(!empty($value))
            {
                $this->$key = $value;
            }
        }
    }

    public function getData()
    {
        $data = array();

        foreach($this as $key => $value)
        {
            $data[$key] = $value;
        }

        return $data;
    }

    public function setRawData($data)
    {
        $this->setData($this->postRead($data));
    }

    public function toJson()
    {
        return json_encode($this->getData());
    }

    // Methods

    public function find($id)
    {
        return $this->findOneBy(array('id' => $id));
    }

    public function findMulti($ids)
    {
        if(!is_array($ids)) return array();

        for($i = 0, $len = count($ids); $i < $len; $i++)
        {
            $ids[$i] = intval($ids[$i]);
        }

        $objects = array();
        $query   = 'SELECT * FROM ' . $this->getTableName() . ' WHERE id IN (' . implode(',', $ids) . ')';

        // Get data

        $dbResult = self::$db->query($query);

        if($dbResult)
        {
            foreach($dbResult as $row)
            {
                $objects[$row['id']] = $this->createInstance($this->postRead($row));
            }
        }

        return $objects;
    }

    public function findAll($orderBy = array(), $join = array())
    {
        $query = 'SELECT * FROM ' . $this->getTableName();

        // Handle joining

        if(!empty($join))
        {
            $joinTable      = $join['table'];
            $joinColumn     = $join['column'];
            $joinSelfColumn = $join['selfColumn'];

            $query .= ' LEFT JOIN ' . $joinTable . ' ON (' .

                $this->getTableName() . '.' . $joinSelfColumn .
                ' = ' .
                $joinTable . '.' . $joinColumn .

            ')';
        }

        // Handle ordering

        if(!empty($orderBy))
        {
            foreach($orderBy as $name => $type)
            {
                if(is_numeric($name))
                {
                    $name = $type;
                    $type = 'ASC';
                }

                $query .= " ORDER BY $name $type,";
            }

            // Cut the last comma (,) off

            $query = substr($query, 0, -1);
        }

        // Query

        $result = self::$db->query($query);

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

    public function findBy($options, $logicalOperator = 'AND', $orderBy = array(), $join = array())
    {
        // Return everything if no options given

        if(empty($options))
        {
            return $this->findAll($orderBy, $join);
        }

        $query  = 'SELECT * FROM ' . $this->getTableName();
        $params = array();

        // Handle joining

        if(!empty($join))
        {
            $joinTable      = $join['table'];
            $joinColumn     = $join['column'];
            $joinSelfColumn = $join['selfColumn'];

            $query .= ' LEFT JOIN ' . $joinTable . ' ON (' .

                $this->getTableName() . '.' . $joinSelfColumn .
                ' = ' .
                $joinTable . '.' . $joinColumn .

            ')';
        }

        $query .= ' WHERE ';

        // Build the query

        $keys  = array_keys($options);
        $key   = $keys[0];
        $value = $options[$key];

        $op = '=';
        $v  = $value;

        if(is_array($value) && count($value))
        {
            $op = $value[0];
            $v  = $value[1];
        }

        $params[] = $v;

        if(strtolower($op) === 'between')
        {
            $query .= "`$key` $op ? AND ?";

            $params[] = $value[2];
        }
        else
        {
            $query .= "`$key` $op ?";
        }

        foreach(array_slice($options, 1) as $key => $value)
        {
            $op = '=';
            $v  = $value;

            if(is_array($value) && count($value))
            {
                $op = $value[0];
                $v  = $value[1];
            }

            $query .= " $logicalOperator `$key` $op ?";

            $params[] = $v;
        }

        // Handle ordering

        if(!empty($orderBy))
        {
            foreach($orderBy as $name => $type)
            {
                if(is_numeric($name))
                {
                    $name = $type;
                    $type = 'ASC';
                }

                $query .= " ORDER BY $name $type,";
            }

            // Cut the last comma (,) off

            $query = substr($query, 0, -1);
        }

        // Execute the query

        $result = self::$db->query($query, $params);

        if($result)
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

    public function findOneBy($options, $logicalOperator = 'AND', $join = array())
    {
        $query  = 'SELECT * FROM ' . $this->getTableName();
        $params = array();

        // Handle joining

        if(!empty($join))
        {
            $joinTable      = $join['table'];
            $joinColumn     = $join['column'];
            $joinSelfColumn = $join['selfColumn'];

            $query .= ' LEFT JOIN ' . $joinTable . ' ON (' .

                $this->getTableName() . '.' . $joinSelfColumn .
                ' = ' .
                $joinTable . '.' . $joinColumn .

            ')';
        }

        $query .= ' WHERE ';

        // Build the query

        $keys  = array_keys($options);
        $key   = $keys[0];
        $value = $options[$key];

        $op = '=';
        $v  = $value;

        if(is_array($value) && count($value))
        {
            $op = $value[0];
            $v  = $value[1];
        }

        $params[] = $v;

        if(strtolower($op) === 'between')
        {
            $query .= "`$key` $op ? AND ?";

            $params[] = $value[2];
        }
        else
        {
            $query .= "`$key` $op ?";
        }

        foreach(array_slice($options, 1) as $key => $value)
        {
            $op = '=';
            $v  = $value;

            if(is_array($value) && count($value))
            {
                $op = $value[0];
                $v  = $value[1];
            }

            $query .= " $logicalOperator `$key` $op ?";

            $params[] = $v;
        }

        // Execute the query

        $result = self::$db->queryOne($query, $params);

        if($result)
        {
            // Construct the object representing the result and return it

            return $this->createInstance($this->postRead($result));
        }

        // Indicate error

        return false;
    }

    public function save()
    {
        $options = $this->preSave();

        if(isset($this->id) && $this->id == self::CANCEL_SAVE_ID) return; // Entity storing was cancelled

        $query  = '';
        $params = null;

        // Check whether it's a create or update operation

        if(isset($this->id)) // Update
        {
            $query  = 'UPDATE ' . $this->getTableName() . ' SET ';
            $params = array();

            $keys  = array_keys($options);
            $key   = $keys[0];
            $value = $options[$key];

            $query .= "`$key` = ?";

            $params[] = $value;

            foreach(array_slice($options, 1) as $key => $value)
            {
                $query .= ", `$key` = ?";

                $params[] = $value;
            }

            $query .= ' WHERE id = ?';

            $params[] = $this->id;
        }
        else // Create entry
        {
            $query  = 'INSERT INTO ' . $this->getTableName() . '(';
            $params = array();

            $keys  = array_keys($options);
            $key   = $keys[0];
            $value = $options[$key];

            $query .= "`$key`";

            $params[] = $value;

            foreach(array_slice($options, 1) as $key => $value)
            {
                $query .= ", `$key`";

                $params[] = $value;
            }

            $query .= ') VALUES(?' . str_repeat(', ?', count($options) - 1) . ')';
        }

        // Execute the query

        $result = self::$db->execute($query, $params);

        if($result && !isset($this->id))
        {
            $this->id = self::$db->lastInsertId();
        }

        return $result;
    }

    public function remove()
    {
        if(!isset($this->id))
        {
            return false;
        }

        return self::$db->execute('DELETE FROM ' . $this->getTableName() . ' WHERE id = ?', array($this->id));
    }

    public function validate()
    {
        throw new Exception('Implement model\'s validation');

        // Return errors

        return null;
    }

    public function preSave()
    {
        // Return the data in its raw database form

        $result = array();

        foreach($this->getColumns() as $column)
        {
            if(isset($this->$column))
            {
                $result[$column] = $this->$column;
            }
        }

        return $result;
    }

    public function postRead($data)
    {
        // Transform the data from database raw form to objects

        Utils::removeNumericKeys($data);

        return $data;
    }

    // Helpers

    protected function createInstance($data = null)
    {
        $className = get_class($this);

        return new $className($data);
    }
}

?>
