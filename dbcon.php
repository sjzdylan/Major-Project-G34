<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('mpg34groceries-firebase-adminsdk-rrmah-de7d438aa5.json')
    ->withDatabaseUri('https://mpg34groceries-default-rtdb.asia-southeast1.firebasedatabase.app/');

$database = $factory->createDatabase();

?>