<?php

abstract class Models_Entities_Rows_Abstract {
    
    protected $_columns = array();
    protected $_data = array();
    
    //This converts the data into a standard object.
    public function getData()
    {
        $data = new stdclass;
        foreach($this->_data as $key => $value)
        {
            $data->$key = $value;
        }
        
        return $data;
    }
    
    public function getColumns()
    {
        return $this->_columns;
    }
    
    public function save()
    {
        return false;
    }
    
    public function __set($column, $value)
    {
        if(in_array($column, $this->_columns) && (!isset($this->_data[$column]) || $this->_data[$column] != $value)) 
        {
            $this->_data[$column] = $value;
        }
    }
}