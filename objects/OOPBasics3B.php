<?php

class Remember{

    //attributes/ properties
    private $oop;

    //constructor that echoes "hello"
    public function __construct() {
        print "Hello";
    }

    //methods/behaviours

    //get value of oop
    public function getOop() {
        return $this->oop;
    }

    //set new value for $oop
    public function setOop($param) {
        $this->oop = $param;
    }

    //encapsulation
    public function storeInMemory($event) {
        #stores event in memory
    }
}
    #create an object
    $newObject = new Remember();

    #encapsulation
    $event = 'Birthday';

    #in encapsulation (hiding the internal details of an object), we know what the function does but not how it works
    $newObject->storeInMemory($event);

?>