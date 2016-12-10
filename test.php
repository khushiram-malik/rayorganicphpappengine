<?php
require_once "dbconn.php";
echo 'Hello world!';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "KMALIKk!1";
$dbname = "world";

// Create connection
$dbconn = new DataBaseConn();
$conn = $dbconn->get_Conn();

$sql = "select * from city";
$result = $conn->query($sql);
echo $result->num_rows;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: ".$row["ID"]."- name: ".$row["Name"]."- CountryCode: ".$row["CountryCode"]."- Population: ".

        $row["Population"]."- District: ".$row["District"]. "<hr>";
    }
} else {
    echo "0 results";
}


$conn->close();

?>
