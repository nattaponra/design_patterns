<?php
class Memento {
    private $state;

    public function Memento($state){
        $this->state = $state;
    }

    public function getState(){
        return $this->state;
    }	
}