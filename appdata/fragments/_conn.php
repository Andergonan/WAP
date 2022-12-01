<?php
// connection
$conn = mysqli_connect("localhost", "root", "", "comics");
// check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>