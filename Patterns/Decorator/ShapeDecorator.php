<?php
include_once ("Shape.php");
abstract class ShapeDecorator implements Shape {
   protected $decoratedShape;

   public function ShapeDecorator(Shape $decoratedShape){
      $this->decoratedShape = $decoratedShape;
   }

   public function draw(){
       $this->decoratedShape->draw();
   }	
}