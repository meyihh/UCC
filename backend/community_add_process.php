<?php

session_start();
include 'config.php';

if(isset($_POST['add_community']))
{
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $status = $_POST['status'];

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    $newName = time() . "_" . $image;

    move_uploaded_file(
        $tmp,
        "../logo/" . $newName
    );

    mysqli_query(
        $conn,
        "INSERT INTO community_services
        (
            title,
            description,
            image,
            status
        )
        VALUES
        (
            '$title',
            '$description',
            '$newName',
            '$status'
        )"
    );

    header("Location: ../admin/CommunityExtensionServices/index.php?success=1");
    exit();
}
?>