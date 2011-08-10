<?php

abstract class Models_Entities_Rows_Abstract {
    
    protected $_columns = array();
    protected $_data = array();
    
    public function getData()
    {
        return $this->_data;
    }
    
    public function save()
    {
        return false;
    }
    
    public function __set($column, $value)
    {
        if(in_array($column, $this->_columns) && (!isset($this->_data[$column]) || ($this->_data[$column] != $value))) 
        {
            parent::__set($column, $value);
            $this->_data[$column] = $value;
        }
    }
}