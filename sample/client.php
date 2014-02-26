<?php

include_once('../vendor/autoload.php');

$client = new \Snide\Osrc\Client();
die(print_r($client->fetchUser(new \Snide\Osrc\Model\User('pdenis'))));