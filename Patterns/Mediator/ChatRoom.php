<?php
include_once ("User.php");
class ChatRoom {
   public static function showMessage(User $user, $message){
      print_r(date("H:i:s"). " [".$user->getName()."] : ".$message."\n");
    
   }
}