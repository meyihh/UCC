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
    $id = intval($_GET['id']);

    $query = mysqli_query(
        $conn,
        "SELECT image
         FROM community_services
         WHERE id='$id'"
    );

    if(mysqli_num_rows($query) > 0)
    {
        $row = mysqli_fetch_assoc($query);

        if(file_exists("../../logo/".$row['image']))
        {
            unlink("../../logo/".$row['image']);
        }

        mysqli_query(
            $conn,
            "DELETE FROM community_services
             WHERE id='$id'"
        );
    }
}

header("Location: index.php?success=1");
exit();

?>