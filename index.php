<?php

require_once 'Animals/Cat.php';

$commandoCat = new Cat();
$commandoCat
    ->setName('Commando')
    ->setAge(10);

$commandoCatArray = $commandoCat->toArray();
foreach ($commandoCatArray as $key => $value) {
    echo "$key: $value<br>";
}
