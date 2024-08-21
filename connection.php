<?php
$host = "localhost";
$username = "root"; 
$password = ""; 
$database = "ims"; 


$conn = new mysqli($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM student";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br><table border='1' cellpadding='10' >";
    echo "<tr style='background-color:purple;'><th>Student ID</th><th>Student Name</th><th>Student Address</th><th>Student Phone</th><th>Student Grade</th></tr>";

    
    while ($row = $result->fetch_assoc()) {
        echo "<tr style='background-color:grey'>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['grade'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No data in Table";
}


?>
