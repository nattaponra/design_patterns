<?php
include_once ("Observer.php");
include_once ("Subject.php");

class OctalObserver extends Observer{

   public function OctalObserver(Subject $subject){
      $this->subject = $subject;
      $this->subject->attach($this);
   }

  
   public function update() {
      print_r("Octal String: " .decoct($this->subject->getState())); 
      print_r("\n");
   }
}