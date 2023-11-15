<?php 
 //connect with database
 $conn = mysqli_connect('localhost', 'sumeya', 'think two', 'my_pizza');
 // check the connection
 if(!$conn){
echo 'Connection error: ' . mysqli_connect_error();
 }
?>

<html lang="en">
<?php include('templates/header.php'); ?>
<?php include('templates/footer.php'); ?>
</html>