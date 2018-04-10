<?php
include_once ("Observer.php");
include_once ("Subject.php");

class HexaObserver extends Observer{

   public function HexaObserver(Subject $subject){
      $this->subject = $subject;
      $this->subject->attach($this);
   }

  
   public function update() {
      print_r("Hex String: " .dechex($this->subject->getState())); 
      print_r("\n");
   }
}