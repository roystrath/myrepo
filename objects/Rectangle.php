<?php
/*************************
A simple rectangle class *
 *************************/
 require_once 'Shape.php';

class Rectangle implements Shape{
  //class attributes
  private $width;
  private $height;

  function __construct($height,$width){
    //initialize class properties
    $this->width = $width;
    $this->height = $height;
  }
  /**
   * implements getArea for Rectangles
   * @return float
   */
  public function getArea(){
    return $this->width * $this->height;
  }

  //@TODO : Add getters and setters for class properties
}
?>
