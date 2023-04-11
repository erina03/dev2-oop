<?php

class Fruit //Fruit is parent class
{
    public $name;
    public $color;
    // private $weight;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "The fruit is $this->name and the color is $this->color.<br>";
    }

    protected function intro2()
    {
        echo "This is intro 2.";
    }
}
# INHERITANCE
//create child(sub) class = strawberry is now child(sub)-class
//Strawberry is inherited from Fruit

class Strawberry extends Fruit
//child class will inherit the public $ protected properties $ methods from the parent class
{
    public function msg()
    {
        echo "Am I a fruit or berry?<br>";

         $this->intro2();
    }
}

//$strawberry is the object of the child class.
$strawberry = new Strawberry('strawberry', 'red');
//construct function is also inherited to sub class.so you have to put data into().
$strawberry->intro() . "<br>";
$strawberry->msg() . "<br>";

#THIS IS NOT OK or ERROR(cuz outside of both class Pclass & Cclass)
// $strawberry->intro2() . "<br>"; 










//instantiating a class
// $mango = new Fruit;

// $mango->name ='Mango'; //ok
// // $mango->color = "Yellow"; //not OK

// // $mango->weight =300;

// //output
// echo "Name:". $mango->name ."<br>";
