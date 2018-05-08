<?php
/********************
A simple test class *
 ********************/
require_once 'Shape.php';
require_once 'Circle.php';
require_once 'Rectangle.php';

//create a circle object
$circle = new Circle(30);
//create a rectangle object
$rect = new Rectangle(4,5);

//create a funtion that returns the area of a Shape
function calculateArea(Shape $shape){
  return $shape->getArea();
}

//outputs here
echo 'The area of my circle is : '
.calculateArea($circle);
echo '<br/>';
echo 'The area of my rectangle is : '.
calculateArea($rect);
 ?>
