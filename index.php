<?php

require_once 'autoload.php';

$rowset = new Models_Entities_Rowsets_Json();

var_dump($rowset->getRows());

