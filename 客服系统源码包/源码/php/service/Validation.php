<?php

class Validation extends Service
{
    public function validate($value, $validators)
    {
        $errors = array();
        
        foreach($validators as $errorMessage => $validator)
        {
            if(!$validator->validate($value))
            {
                $errors[] = $errorMessage;
            }
        }
        
        return count($errors) > 0 ? $errors : null;
    }
}

// Validators

interface Validator
{
    function validate($value);
}

class MailValidator implements Validator
{
    public function validate($value)
    {
        return preg_match('/^[-+\\.0-9=a-z_]+@([-0-9a-z]+\\.)+([0-9a-z]){2,}$/i', $value) === 1;
    }
}

class LengthValidator implements Validator
{
    private $min;
    private $max;
    
    public function __construct($min, $max = 9999)
    {
        $this->min = $min;
        $this->max = $max;
    }
    
    public function validate($value)
    {
        return $this->min <= strlen($value) && strlen($value) <= $this->max;
    }
}

class RangeValidator implements Validator
{
    private $min;
    private $max;
    
    public function __construct($min, $max = 9999)
    {
        $this->min = $min;
        $this->max = $max;
    }
    
    public function validate($value)
    {
        return $this->min <= $value && $value <= $this->max;
    }
}

class NotBlankValidator implements Validator
{
    public function validate($value)
    {
        return !empty($value);
    }
}

class NumberValidator implements Validator
{
    public function validate($value)
    {
        return is_numeric($value);
    }
}

class EqualsValidator implements Validator
{
    private $secondValue;
    
    public function __construct($secondValue)
    {
        $this->secondValue = $secondValue;
    }
    
    public function validate($value)
    {
        return $value == $this->secondValue;
    }
}

?>
