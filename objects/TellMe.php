<?php
  /********************************************************
   * A simple PHP Class that returns your browser details *
   ********************************************************/
  class TellMe{
    //class properties/attributes

    //Accessible only within the class
    //Needs getter and setter
    private $browserDetails;
    //Accessible by 'others'
    public $p_browserDetails;
    //Accessible only by 'children'
    protected $pd_browserDetails;

    /****************
    class behaviors *
     ****************/
    /**
     * constructor - remember this? @Java 101?
     * @return null
     */
    function __construct(){
      //Static function :)
      TellMe::showMeTheMoney();
      //@TODO : how would you call a private method?

      //@TODO: how would you call a public method??

    }

<<<<<<< HEAD
=======


>>>>>>> feature-objects
    /**
     * method that returns browser details
     * @return array
     */
    public static function showMeTheMoney(){
       var_dump($_SERVER);
    }
  }
  //Instantiation
  new TellMe();
  //@TODO : Instead of calling the method in the constructor, create an object and call it
  //@Submit your changes and push them to your repo :)
?>
