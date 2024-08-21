<?php
require_once 'connection.php'; 
$sql = "UPDATE student SET 
    name='manal', 
    address='abozaied', 
    phone='01112536987', 
    grade='4.2' 
    WHERE id=45"; 

$result = $conn->query($sql);

if ($result === TRUE) {
    echo "<h2>Record updated successfully</h2>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
