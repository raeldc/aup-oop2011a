<?php

require_once 'autoload.php';

$person = new Models_Entities_Rows_Person();

$stream = fopen("php://stdin", "r");

foreach($person->getColumns() as $column)
{
    echo ucwords($column).":";
    $person->$column = trim(fgets($stream));
}

$person->save();
var_dump($person->getData());die();