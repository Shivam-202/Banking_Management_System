<?php
    include "connection.php";

    $getid = $_GET['custumid'];

   echo $sql = "DELETE FROM customer WHERE Id = $getid";
    mysqli_query($conn,$sql) or die("Query Failed");
    header("Location: http://localhost/PHP_Projects/Bank_Management/users.php");
?>