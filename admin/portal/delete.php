<?php

session_start();

if(!isset($_SESSION['admin_id']))
{
    header("Location: ../login.php");
    exit();
}

include '../../backend/config.php';

if(!isset($_GET['id']))
{
    header("Location: index.php");
    exit();
}

$id = (int)$_GET['id'];

$query = mysqli_query(
    $conn,
    "SELECT *
     FROM portals
     WHERE id='$id'"
);

if(mysqli_num_rows($query) == 0)
{
    header("Location: index.php");
    exit();
}

$portal = mysqli_fetch_assoc($query);

$logoPath =
    "../../logo/" .
    $portal['logo'];

if(file_exists($logoPath))
{
    unlink($logoPath);
}

mysqli_query(
    $conn,
    "DELETE FROM portals
     WHERE id='$id'"
);

header(
    "Location: index.php?success=deleted"
);

exit();
?>