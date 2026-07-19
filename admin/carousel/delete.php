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

$imageQuery = mysqli_query(
    $conn,
    "SELECT * FROM carousel_images
     WHERE id='$id'"
);

if(mysqli_num_rows($imageQuery) == 0)
{
    header("Location: index.php");
    exit();
}

$image = mysqli_fetch_assoc($imageQuery);

$imagePath = "../../logo/" . $image['image'];

if(file_exists($imagePath))
{
    unlink($imagePath);
}

mysqli_query(
    $conn,
    "DELETE FROM carousel_images
     WHERE id='$id'"
);

header("Location: index.php?success=deleted");
exit();