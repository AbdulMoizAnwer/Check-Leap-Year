<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year</title>
</head>
<body>
    <!-- Write a PHP program to find whether a given year is a leap year or not
    Test Data : 2016
    Expected Output :
    2016 is a leap year. -->
    <h1>Find Whether the Year You Entered is Leap Year or Not.</h1>
    <form action="#" method="POST">
        <label>Enter Year.</label>
        <input type="text" name="year1">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $n1 = $_POST['year1'];
    if((0 == $n1 % 4) & (0 != $n1 % 100) | (0 == $n1 % 400))
        echo "$n1 is a Leap Year."; 
    else  
        echo "$n1 is not a Leap Year.";    
        }
?>
