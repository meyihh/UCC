<?php

include 'config.php';

if(isset($_POST['update_facility']))
{
    $id = $_POST['id'];
    $title = htmlspecialchars($_POST['title']);
    $status = $_POST['status'];

    if(!empty($_FILES['image']['name']))
    {
        $query = mysqli_query(
            $conn,
            "SELECT image
            FROM facilities
            WHERE id='$id'"
        );

        $row = mysqli_fetch_assoc($query);

        if(file_exists("../logo/" . $row['image']))
        {
            unlink("../logo/" . $row['image']);
        }

        $image = time() . "_" . $_FILES['image']['name'];

        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            "../logo/" . $image
        );

        $stmt = mysqli_prepare(
            $conn,
            "UPDATE facilities
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
            "UPDATE facilities
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

    header("Location: ../admin/facilities/index.php?success=1");
    exit();
}

?>