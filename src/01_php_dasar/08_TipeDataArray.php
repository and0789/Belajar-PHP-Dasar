<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Andre", "Septian", "Alhassan"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Joko";
var_dump($names);

var_dump(count($names));

$and = array(
    "id" => "and",
    "name" => "Andre Septian",
    "age" => 30,
    "address" => array(
        "city" => "Bandung",
        "country" => "Indonesia"
    )
);
var_dump($and);

var_dump($and["address"]["country"]);
var_dump($and["name"]);

$budi = [
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 35,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($budi);