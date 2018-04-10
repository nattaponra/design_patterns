<?php

include_once ("Subject.php");

abstract class Observer {
   protected  $subject;
   public abstract function update();
}