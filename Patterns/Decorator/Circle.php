<?php
include_once ("Shape.php");
class Circle implements Shape {
       public function draw() {
           print_r("Shape: Circle\n");
       }
}