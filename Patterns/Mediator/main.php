<?php
include "User.php";
$robert = new User("Robert");
$john   = new User("John");

$robert->sendMessage("Hi! John!");
$john->sendMessage("Hello! Robert!");  