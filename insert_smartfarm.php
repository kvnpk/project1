<?php
include "connect.php";
$zone = $_POST['zone'];

$sql = "INSERT INTO tbl_smartfarm (zone, board, temp, humi, dmy)
VALUES ('$zone', '$_POST[board]', '$_POST[temp]', '$_POST[humi]', now()";

if ($conn->query($sql) === TRUE) {
    echo "New record created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->server;
}

$conn->close();
?>