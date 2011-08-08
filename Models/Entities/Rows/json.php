<?php

class Models_Entities_Rows_Json extends Models_Entities_Rows_Abstract {
    
    protected $_modified = array();
    protected $_data = array();
    
    public function save()
    {
        $data = json_encode($this->_data);
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