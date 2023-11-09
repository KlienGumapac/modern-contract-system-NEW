<?php
    include 'database.php';

    $id = $_GET['id'];
    $status = $_GET['status'];

    $updateQuery = "UPDATE information SET status=$status WHERE id=$id";

    mysqli_query($conn, $updateQuery);
    header('location:index.php');


?>