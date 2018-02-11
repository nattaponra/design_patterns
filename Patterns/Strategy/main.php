<?php
include_once 'ArrayOutput.php';
include_once 'JsonStringOutput.php';
include_once 'SerializedArrayOutput.php';
include_once 'SomeClient.php';


$client = new SomeClient();
$client->setInput(array("first_name"=>"Nattapon","last_name"=>"Rakthong"));

// Want an array?
$client->setOutput(new ArrayOutput());
$data = $client->loadOutput();
print_r($data);

// Want some JSON?
$client->setOutput(new JsonStringOutput());
$data = $client->loadOutput();
print_r($data);