<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbWIS";
$sql = "SELECT * FROM tblUsers";

function dbQuery($servername, $username, $password, $dbname, $sql)
{
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $res = array();
        while ($row = $result->fetch_assoc()) {
            array_push($res, $row);
        }
        return $res;
    } 
    
    else {
        $res = "0 results";
        return $res;
    }

    $conn->close();
}

?>
