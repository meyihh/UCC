<?php

include 'config.php';

if(isset($_POST['add_carousel']))
{
    $title = mysqli_real_escape_string(
        $conn,
        $_POST['title']
    );

    $status = $_POST['status'];

    $imageName =
        time() . "_" .
        basename($_FILES['image']['name']);

    $tmpName =
        $_FILES['image']['tmp_name'];

    move_uploaded_file(
        $tmpName,
        "../logo/" . $imageName
    );

    mysqli_query(
        $conn,
        "INSERT INTO carousel_images
        (
            image,
            title,
            status
        )
        VALUES
        (
            '$imageName',
            '$title',
            '$status'
        )"
    );

    header("Location: ../admin/carousel/index.php?success=added");
    exit();
}