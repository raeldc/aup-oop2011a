<?php

class Models_Entities_Rows_Person extends Models_Entities_Rows_Json 
{
    public function __construct()
    {
        $this->_columns = array(
            'firstname',
            'lastname',
            'age',
            'occupation'
        );
    }
}