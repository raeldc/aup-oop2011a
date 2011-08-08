<?php

abstract class Models_Entities_Rows_Abstract {
    
    protected $_modified = array();
    protected $_data = array();
    
    public function save()
    {
        $this->_modified = array();
        return false;
    }
    
    public function __set($column, $value)
    {
        if(!isset($this->_data[$column]) || ($this->_data[$column] != $value) || $this->isNew()) 
        {
            parent::__set($column, $value);

            $this->_modified[$column] = true;
            $this->_status            = null;
        } 
    }
    
}