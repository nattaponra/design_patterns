<?php
include_once ("Subject.php");
include_once ("HexaObserver.php");
include_once ("OctalObserver.php");
include_once ("BinaryObserver.php");

$subject = new Subject();
    
 new HexaObserver($subject);
 new OctalObserver($subject);
 new BinaryObserver($subject);
    
print_r("First state change: 15 ");	
$subject->setState(15);
print_r("Second state change: 10 ");	
$subject->setState(10);
   