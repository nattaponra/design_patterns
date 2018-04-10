<?php
include_once ("Circle.php");
include_once ("Rectangle.php");
include_once ("RedShapeDecorator.php");
include_once ("RedShapeDecorator.php");

$circle = new Circle();
$redCircle = new RedShapeDecorator(new Circle());

$redRectangle = new RedShapeDecorator(new Rectangle());
print_r("Circle with normal border");
$circle->draw();

print_r("\nCircle of red border");
$redCircle->draw();

print_r("\nRectangle of red border");
$redRectangle->draw();