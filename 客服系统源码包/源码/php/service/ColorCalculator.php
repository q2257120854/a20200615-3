<?php

class ColorCalculator extends Service
{
    protected $minCode;
    protected $maxCode;
    
    public function __construct()
    {
        $this->minCode = 0;
        $this->maxCode = 15;
        
        $this->c0Code = ord('0');
        $this->caCode = ord('a');
    }
    
    public function add($colorA, $colorB)
    {
        $colorA = $this->prepareInput($colorA);
        $colorB = $this->prepareInput($colorB);
        
        $color =
        
            $this->addColor($colorA[0] . $colorA[1], $colorB[0] . $colorB[1]) .
            $this->addColor($colorA[2] . $colorA[3], $colorB[2] . $colorB[3]) .
            $this->addColor($colorA[4] . $colorA[5], $colorB[4] . $colorB[5])
        ;
        
        return $this->prepareOutput($color);
    }
    
    public function sub($colorA, $colorB)
    {
        $colorA = $this->prepareInput($colorA);
        $colorB = $this->prepareInput($colorB);
        
        $color =
        
            $this->subColor($colorA[0] . $colorA[1], $colorB[0] . $colorB[1]) .
            $this->subColor($colorA[2] . $colorA[3], $colorB[2] . $colorB[3]) .
            $this->subColor($colorA[4] . $colorA[5], $colorB[4] . $colorB[5])
        ;
        
        return $this->prepareOutput($color);
    }
    
    protected function prepareInput($color)
    {
        $color = trim($color, '#');
        
        if(strlen($color) == 3)
        {
            $color = $color[0] . $color[0] . $color[1] . $color[1] . $color[2] . $color[2];
        }
        
        return strtolower($color);
    }
    
    protected function prepareOutput($color)
    {
        return '#' . $color;
    }
    
    protected function addColor($aa, $bb)
    {
        $a1 = $aa[0];
        $a2 = $aa[1];
        $b1 = $bb[0];
        $b2 = $bb[1];
        
        // Convert to char codes
        
        $a1 = $this->getCode($a1);
        $a2 = $this->getCode($a2);
        $b1 = $this->getCode($b1);
        $b2 = $this->getCode($b2);
        
        // Add
        
        $c1 = $a1 + $b1;
        $c2 = $a2 + $b2;
        
        if($c2 > $this->maxCode)
        {
            if($c1 < $this->maxCode) $c2 = $this->minCode + $c2 % ($this->maxCode + 1);
            else                     $c2 = $this->maxCode;
            
            $c1++;
        }
        
        $c1 = min($this->maxCode, max($this->minCode, $c1));
        $c2 = min($this->maxCode, max($this->minCode, $c2));
        
        return $this->getChar($c1) . $this->getChar($c2);
    }
    
    protected function subColor($aa, $bb)
    {
        $a1 = $aa[0];
        $a2 = $aa[1];
        $b1 = $bb[0];
        $b2 = $bb[1];
        
        // Convert to char codes
        
        $a1 = $this->getCode($a1);
        $a2 = $this->getCode($a2);
        $b1 = $this->getCode($b1);
        $b2 = $this->getCode($b2);
        
        // Subtract
        
        $c1 = $a1 - $b1;
        $c2 = $a2 - $b2;
        
        if($c2 < $this->minCode)
        {
            if($c1 > $this->minCode) $c2 = 1 + $this->maxCode - ($this->minCode - $c2);
            else                     $c2 = $this->minCode;
            
            $c1--;
        }
        
        $c1 = min($this->maxCode, max($this->minCode, $c1));
        $c2 = min($this->maxCode, max($this->minCode, $c2));
        
        return $this->getChar($c1) . $this->getChar($c2);
    }
    
    protected function getCode($c)
    {
        $code = ord($c);
        
        if($code >= $this->caCode) $code -= $this->caCode - 10;
        else                       $code -= $this->c0Code;
        
        return $code;
    }
    
    protected function getChar($code)
    {
        if($code >= 10) return chr($this->caCode + ($code - 10));
        
        return chr($this->c0Code + $code);
    }
}

?>