<?php

session_start();
include 'config.php';

if(isset($_GET['id']))
{
    $id = intval($_GET['id']);

    // Delete all child menus first
    mysqli_query(
        $conn,
        "DELETE FROM navbar_menu
        WHERE parent_id='$id'"
    );

    // Delete selected menu
    mysqli_query(
        $conn,
        "DELETE FROM navbar_menu
        WHERE id='$id'"
    );

    header("Location: ../admin/dashboard.php?success");
    exit();
}
?>