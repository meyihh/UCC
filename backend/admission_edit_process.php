<?php

include 'config.php';

if(isset($_POST['update_admission']))
{
    $id = $_POST['id'];
    $title = htmlspecialchars($_POST['title']);
    $status = $_POST['status'];

    if(!empty($_FILES['image']['name']))
    {
        $getOldImage = mysqli_query(
            $conn,
            "SELECT image
            FROM admissions
            WHERE id='$id'"
        );

        $oldRow = mysqli_fetch_assoc($getOldImage);

        if(file_exists("../logo/" . $oldRow['image']))
        {
            unlink("../logo/" . $oldRow['image']);
        }

        $image = time() . "_" . $_FILES['image']['name'];

        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            "../logo/" . $image
        );

        $stmt = mysqli_prepare(
            $conn,
            "UPDATE admissions
            SET
                title=?,
                image=?,
                status=?
            WHERE id=?"
        );

        mysqli_stmt_bind_param(
            $stmt,
            "sssi",
            $title,
            $image,
            $status,
            $id
        );
    }
    else
    {
        $stmt = mysqli_prepare(
            $conn,
            "UPDATE admissions
            SET
                title=?,
                status=?
            WHERE id=?"
        );

        mysqli_stmt_bind_param(
            $stmt,
            "ssi",
            $title,
            $status,
            $id
        );
    }

    mysqli_stmt_execute($stmt);

    header("Location: ../admin/admissions/index.php?success=1");
    exit();
}

?>