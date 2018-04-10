<?php
include_once ("Observer.php");
class Subject {
	
   private $observers;
   private $state;

   public function getState() {
      return $this->state;
   }

   public function setState($state) {
      $this->state = $state;
      $this->notifyAllObservers();
   }

   public function attach(Observer $observer){
       $this->observers[] = $observer;		
   }

   public function notifyAllObservers(){
     foreach($this->observers as $observer){
       $observer->update();
     }
   } 	
}