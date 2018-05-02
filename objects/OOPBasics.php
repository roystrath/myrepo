<?php
/*********************************
Recap of OOP Fundamentals in PHP *
 *********************************/
class Car{
  //properties of car
  public $engine;
  public $wheels;
  public $body;
  public $model;

  //@TODO : Does PHP allow constructor overloading??
  /*function __construct(){
    @Legal or not in PHP??
  }*/
  //constructor
  //The method executed when you
  //create a new object
  public function __construct($model,$engine){
    $this->engine = $engine;
    $this->model = $model;
  }

  /**
   * Start the car
   * @return string
   */
  public function start(){
    echo "Chong'iong'io...";
  }
  /**
   * Motion
   * @param  string $direction
   * @return string
   */
  public function move($direction = "Forward"){
    echo $direction;
  }
}

  /*create a new object
  $vitz = new Car();
  $vitz->start();
  $vitz->move();

  //@TODO: Allow every object to accept a make and engine size
  $pajero = new Car('Mitsubishi','3000cc');
  echo "{$pajero::start()},
  I'm now cruzzing on
  {$pajero->engine} in a
  {$pajero->model}!!";
  //@TODO : Create another object
  echo '<br/>';

  $peugo = new Car('Pijoet','2000cc');
  echo "{$peugo::start()},
  I'm now cruzzing on
  {$peugo->engine} in a
  {$peugo->model}!!";
*/
  //Abstraction 101
  abstract class HomoSapien{
    public $legs;
    abstract function move();
  }

  class Baboon extends HomoSapien{
    //implementing an abstract method here
    public function move(){
      echo 'I move on all fours';
    }
  }

  class Human extends HomoSapien{
    //implementing an abstract method here
    public function move(){
      echo "I'm bipedal! Haha!";
    }
  }

  $baboon = new Baboon();
  $baboon::move();

  $mtu = new Human();
  $mtu->move();

 ?>
