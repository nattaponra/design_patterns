<?php
include_once ("Memento.php");
 
class CareTaker {
    private $mementoLists;

    public function add(Memento $state){
       $this->mementoLists[] = $state;
    }

    public function get($index){
        return $this->mementoLists[$index];
    }
}