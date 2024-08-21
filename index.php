<?php
require_once "connection.php" ;
$name="nada" ;
$address="street453" ;
$phone ="011456789123" ;
$grade="2.5" ;

$additems = "INSERT INTO student (name ,address ,phone ,grade) VALUES ('$name','$address','$phone','$grade') ";
if($conn->query($additems) === TRUE){
    echo "<br>";
    echo "<h2>New records created successfully</h2>";
}else {
    echo "Error: ". $sql. "<br>". $conn->error;
}
echo "<h3>Welcome Student</h3>";

?>