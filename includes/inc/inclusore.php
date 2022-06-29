<?php
include_once __DIR__ . '/../functions.php';
include __DIR__ . '/../vars.php'; // TODO: capire perchè funzionava con 'vars.php'

$gender = 'male';
$birth_year = 1990;

$età = differenza($birth_year, 2022);