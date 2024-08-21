<?php
require_once 'connection.php'; 

$sql ="DELETE FROM   student WHERE id=20";
$result =$conn->query($sql);
if($result=== true){
    echo "<h2>Record deleted successfully </h2>";
}else{
    echo "Error: ". $sql. "<br>". $conn->error;
}


?>