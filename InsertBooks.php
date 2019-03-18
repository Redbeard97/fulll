<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>KINGSLAYER</h2></center>
<br>
 
<?php
include("DBConnection.php");
 
$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];
$username=$_POST["username"];
$phonenumber=$_POST["phonenumber"];
$query = "insert into book(isbn,title,author,edition,publication,username,phonenumber) values('$isbn','$title','$author','$edition','$publication','$username','$phonenumber')"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);
 
?>
 
<h3> Book information is inserted successfully </h3>
 
<a href="SearchBooks.php"> To search for the Book information click here </a>
 <a href = "EnterBook.php"> To add another the book </a>
</body>