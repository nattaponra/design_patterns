<?php
include_once ("Observer.php");
include_once ("Subject.php");

class BinaryObserver extends Observer{

   public function BinaryObserver(Subject $subject){
      $this->subject = $subject;
      $this->subject->attach($this);
   }

  
   public function update() {
      print_r("Binary String: " .decbin($this->subject->getState())); 
      print_r("\n");
   }
}