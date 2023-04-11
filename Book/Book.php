<?php

class Book
{
    /*
    access MODIFIERS

    1.public = can be access inside and outside of the class.
                properties help difine the class.EXMPLE cover = inside,tag = outside.
    2.Private = can be accessed ONLY within the class. NO for outside
    3.protected(parent class) = can be accessed within the class and inside of the subclass(inheritance継承)
                  (method and property)
                  only subclass can inherite to protected class.also can have more than 1 sub(child)class
    */

    //this-> use to access properties and methods if currently inside of the class.

    //How to create properties(they can have defalt value)
    public $title;
    public $author;
    public $price;
    public $published_date;
    // public $summary;


    // constructor
    /*two underbar*/
    public function __construct($title,$author,$price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }





    private $summary;


    //How to create methods
    //no need to use ($)at title
    public function displaySummary()
    {
        echo $this->summary . "<br>";
        //   variable->properties
    }

    private function displayAuthor()
    {
        echo $this->author;
    }



    public function setDetails($title, $author, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }
    //setters(one of methods for public)
    //give the variable.same as $title = $_POST['title'].

    public function setTitle($title)
    {
        $this->title = $title;
    }
    // getters

    //use it to display. echo.
    public function getTitle()
    {
        return $this->title;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function getAuthor()
    {
        return $this->author;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function getDetails()
    {
        echo $this->msg();
        echo "title" . $this->title . "<br>";
        echo "author" . $this->author . "<br>";
        echo "price" . $this->price . "<br>";
    }

    public function msg()
    {
        return "Welcome to school!" . "<br>";
    }
}

//Instantiating(instant) a class(object has to be outside of method)

//$prog_lang is now an object/instance of the class Book
//$prog_lang can now access properties and methods of the class

//$prog_lang = new Book;

//access public properties outside is okay
// echo "Title: " .$prog_lang->title ."<br>";
// echo "Author: " .$prog_lang->author ."<br>";
// echo "Price: " .$prog_lang->price ."<br>";
// echo "Date: " .$prog_lang->published_date ."<br>";

//access Public methods outside is okay
// echo "Summary: " ,$prog_lang->displaySummary() ."<br>";


/*
private is only inside of class.
public is both okay inside and outside of class.
*/


//access private properties outside is NOT okay
// echo "Date: " .$prog_lang->summary ."<br>";

//access private methods outside is NOT okay
// echo "Author:" .$prog_lang->displayAuthor()."<br>";

// echo "<br><br>";
//instantiating a class
//$ math is now an object
// $math = new Book;

/*UPDATE the data.*/
// $math->title = 'Analysis II';
// echo "Title:". $math->title."<br>";

// $math->author = "ME";
// echo "Author:". $math->author."<br>";

// $math->price = "100,000yen";
// echo "Price:". $math->price."<br>";

// $math->summary = 'This is new summary'; this doesnt work cuz its private.
// echo "<br>";

//instantiating a class
// $book = new Book;



//setter
// $book->setTitle("English");
// $book->setAuthor("ME");
// $book->setPrice("100,000");
//getter
// echo "Title:" . $book->getTitle()."<br>";
// echo "Author:" .$book->getAuthor()."<br>";
// echo "Price:" .$book->getPrice()."<br>";


/*
get should have each of getter.

multiple return cannot accept
echo can accept.
*/
