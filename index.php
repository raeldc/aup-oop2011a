<?php

require_once 'autoload.php';

$person = new Models_Entities_Rows_Person();

$person->firstname = "Israel";
$person->lastname = "Canasa";
var_dump($person->getData());die();