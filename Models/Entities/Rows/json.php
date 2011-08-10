<?php

class Models_Entities_Rows_Json extends Models_Entities_Rows_Abstract {
    
    protected $_modified = array();
    protected $_data = array();
    
    public function save()
    {
        $data = json_encode($this->_data);
        return file_put_contents(Config::instance()->path, $data);
    }
}