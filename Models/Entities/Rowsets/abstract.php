<?php

abstract class Models_Entities_Rowsets_Abstract {
    protected $_rows = array();
    
    public function find($key, $value)
    {
        foreach($this->_rows as $row)
        {
            //This checks if the row object has a column equivalent to the value based on the $key
            if($row->$key == $value)
            {
                return $row;
            }
        }
        
        return null;
    }
    
    public function save()
    {   
        return true;
    }
    
    public function getRows()
    {
        return $this->_rows;
    }
}