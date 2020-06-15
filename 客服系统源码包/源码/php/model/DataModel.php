<?php

class DataModel extends Model
{
    // Static methods
    
    public static function repo($type)
    {
        return new DataModel($type);
    }
    
    // Fields
    
    public $type;
    
    // Constructor
    
    public function __construct($type, $data = null, $rawData = null)
    {
        parent::__construct($data, $rawData);
        
        $this->type = $type;
    }
    
    // Getters & setters
    
    public function getTableName()
    {
        return 'mirrormx_customer_chat_data';
    }
    
    public function getColumns()
    {
        return array('type', 'key', 'value');
    }
    
    // Methods
    
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

                $query .= " WHERE `type` = '{$this->type}' ORDER BY $name $type,";
            }

            // Cut the last comma (,) off
            
            $query = substr($query, 0, -1);
        }
        
        // Query
        
        $result = self::$db->query($query);
        
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
    
    public function findBy($options, $logicalOperator = 'AND', $orderBy = array(), $join = array())
    {
        $options['type'] = $this->type;
        
        return parent::findBy($options, $logicalOperator, $orderBy, $join);
    }
    
    public function findOneBy($options, $logicalOperator = 'AND', $join = array())
    {
        $options['type'] = $this->type;
        
        return parent::findOneBy($options, $logicalOperator, $join);
    }
    
    // Helpers
    
    protected function createInstance($data = null)
    {
        return new DataModel($this->type, $data);
    }
}

?>
