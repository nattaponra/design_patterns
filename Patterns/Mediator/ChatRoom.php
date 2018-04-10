<?php
include_once ("User.php");
class ChatRoom {
   public static function showMessage(User $user, $message){
      print_r(date("H:i:s"));
      print_r("[".$user->getName()."] : ");
      print_r($message);
      print_r("\n");
    
   }
}