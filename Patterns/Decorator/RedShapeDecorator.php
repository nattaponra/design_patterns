<?php
include_once ("Shape.php");
include_once ("ShapeDecorator.php");
class RedShapeDecorator extends ShapeDecorator {

       public function RedShapeDecorator(Shape $decoratedShape) {
          parent::__construct($decoratedShape);	
       }
       public function draw() {
          $this->decoratedShape->draw();	       
          $this->setRedBorder($this->decoratedShape);
       }
       private function setRedBorder(Shape $decoratedShape){
           print_r("Border Color: Red\n");
       }
}