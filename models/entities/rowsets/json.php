<?php

class Models_Entities_Rowsets_Json extends Models_Entities_Rowsets_Abstract 
{
    public function __construct() {
        $this->_rows = json_decode(file_get_contents(Config::instance()->path));
    }

    public function save()
    {
        $rows = array();
        
        //We should convert the row object into data(array) format
        //      If we don't do this, json_encode won't be able to convert it into a string.
        foreach($this->_rows as $row)
        {
            $rows[] = $row->getData();
        }
        
        $data = json_encode($rows);
        return file_put_contents(Config::instance()->path, $data);
    }
}