<?php
/**********************
A simple circle class *
 **********************/
require_once 'Shape.php';

class Circle implements Shape{
  //class property
  private $radius;

  function __construct($radius){
    //initialize class properties
    $this->radius = $radius;
  }

  /**
   * implement getArea for Circle
   * @return float
   */
  public function getArea(){
    //@TODO : Round off the area to the nearest 10
    return pi() * $this->radius * $this->radius;
  }
  //@TODO : Add getters and setters for class properties

}

 ?>
