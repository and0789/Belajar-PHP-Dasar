<?php

$first = [
    "first_name" => "Andre"
];

$last = [
    "first_name" => "Budi",
    "last_name" => "Septian"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Andre",
    "last_name" => "Septian"
];

$b = [
    "last_name" => "Septian",
    "first_name" => "Andre"
];

var_dump($a == $b);
var_dump($a === $b);