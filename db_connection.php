<?php
$db_connection = mysqli_connect("localhost","root","Mario456luis$","login_registration");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>