<?php

session_start();

if(!isset($_SESSION['admin_id']))
{
    header("Location: ../login.php");
    exit();
}

include '../../backend/config.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $query = mysqli_query(
        $conn,
        "SELECT image
        FROM news
        WHERE id='$id'"
    );

    $row = mysqli_fetch_assoc($query);

    if(file_exists("../../logo/" . $row['image']))
    {
        unlink("../../logo/" . $row['image']);
    }

    mysqli_query(
        $conn,
        "DELETE FROM news
        WHERE id='$id'"
    );

    header("Location: index.php?success=1");
    exit();
}

?>