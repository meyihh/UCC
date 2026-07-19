<?php

include 'config.php';

if(isset($_POST['add_facility']))
{
    $title = htmlspecialchars($_POST['title']);
    $status = $_POST['status'];

    $image = time() . "_" . $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    move_uploaded_file(
        $tmp_name,
        "../logo/" . $image
    );

    $stmt = mysqli_prepare(
        $conn,
        "INSERT INTO facilities
        (
            title,
            image,
            status
        )
        VALUES
        (?, ?, ?)"
    );

    mysqli_stmt_bind_param(
        $stmt,
        "sss",
        $title,
        $image,
        $status
    );

    mysqli_stmt_execute($stmt);

    header("Location: ../admin/facilities/index.php?success=1");
    exit();
}

?>