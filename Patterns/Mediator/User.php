<?php

include_once ("Chatroom.php");
class User {
       private $name;
       public function User($name){
              $this->name  = $name;
       }
       public function getName() {
          return $this->name;
       }
       public function setName($name) {
          $this->name = $name;
       }
       public function sendMessage($message){
          ChatRoom::showMessage($this,$message);
       }
    }