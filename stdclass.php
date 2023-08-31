<?php

$object = new stdClass();

$object->name = "João";
$object->age = 12;
$object->document = "00000000000";

$person = (object)[
    "name"=>"Pedro",
    "age"=> 17,
    "document"=>"11111111111",
];

var_dump($person->name);