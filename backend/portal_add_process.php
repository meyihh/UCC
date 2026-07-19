<?php

include 'config.php';

if(isset($_POST['add_portal']))
{
    $title = mysqli_real_escape_string(
        $conn,
        $_POST['title']
    );

    $description = mysqli_real_escape_string(
        $conn,
        $_POST['description']
    );

    $url = mysqli_real_escape_string(
        $conn,
        $_POST['url']
    );

    $status = $_POST['status'];

    $logo =
        time() . "_" .
        $_FILES['logo']['name'];

    move_uploaded_file(
        $_FILES['logo']['tmp_name'],
        "../logo/" . $logo
    );

    mysqli_query(
        $conn,
        "INSERT INTO portals
        (
            title,
            description,
            url,
            logo,
            status
        )
        VALUES
        (
            '$title',
            '$description',
            '$url',
            '$logo',
            '$status'
        )"
    );

    header(
        "Location: ../admin/portal/index.php?success=added"
    );
}