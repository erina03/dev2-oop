<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="title" id="" placeholder="Title">
        <br>

        <input type="text" name="author" id="" placeholder="Author">
        <br>

        <input type="number" name="price" id="" placeholder="Price">
        <br>

        <input type="submit" value="submit" name="btn_submit">
    </form>
</body>
</html>
<?php
include "Book.php";

if (isset($_POST['btn_submit'])) {
    // $title = $_POST['title'];
    // $author = $_POST['author'];
    // $price = $_POST['price'];


    //instantiation a class
    $book = new Book($_POST['title'],$_POST['author'],$_POST['price']);

    //setters
    // $book->setDetails($title,$author,$price);

    // $book->setDetails($_POST['title'],$_POST['author'],$_POST['price']);
    // $book->setTitle($title);
    // $book->setAuthor($author);
    // $book->setPrice($price);

//     echo "Title:" . $book->getTitle() . "<br>";
//     echo "Author:" . $book->getAuthor() . "<br>";
//     echo "Price:" . $book->getPrice() . "<br>";


echo $book->getDetails();
}
?>