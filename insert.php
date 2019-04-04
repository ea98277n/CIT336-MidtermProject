<?php
/* Inserts the data to the table */
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "CIT336midterm");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$drink = mysqli_real_escape_string($link, $_GET['drink']);
$size = mysqli_real_escape_string($link, $_GET['size']);
$price = mysqli_real_escape_string($link, $_GET['price']);
 
// attempt insert query execution
$sql = "INSERT INTO sales (drink, size, price) VALUES ('$drink', '$size', '$price')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
