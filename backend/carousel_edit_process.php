<?php

include 'config.php';

if(isset($_POST['update_carousel']))
{
    $id = $_POST['id'];

    $title = mysqli_real_escape_string(
        $conn,
        $_POST['title']
    );

    $status = $_POST['status'];

    if(!empty($_FILES['image']['name']))
    {
        $old = mysqli_query(
            $conn,
            "SELECT * FROM carousel_images
             WHERE id='$id'"
        );

        $oldData = mysqli_fetch_assoc($old);

        unlink(
            "../logo/" .
            $oldData['image']
        );

        $imageName =
            time() . "_" .
            basename($_FILES['image']['name']);

        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            "../logo/" . $imageName
        );

        mysqli_query(
            $conn,
            "UPDATE carousel_images
            SET
                image='$imageName',
                title='$title',
                status='$status'
            WHERE id='$id'"
        );
    }
    else
    {
        mysqli_query(
            $conn,
            "UPDATE carousel_images
            SET
                title='$title',
                status='$status'
            WHERE id='$id'"
        );
    }

    header("Location: ../admin/carousel/index.php?success=updated");
    exit();
}