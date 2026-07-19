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

    mysqli_query(
        $conn,
        "DELETE
        FROM calendar_events
        WHERE id='$id'"
    );

    header("Location: index.php?success=1");
    exit();
}

?>