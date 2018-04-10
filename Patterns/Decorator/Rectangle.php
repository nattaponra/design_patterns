<?php
include_once ("Shape.php");
class Rectangle implements Shape {
   public function draw() {
      print_r("Shape: Rectangle\n");
   }
}