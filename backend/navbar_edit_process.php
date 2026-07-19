<?php

session_start();
include 'config.php';

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $id = intval($_POST['id']);

    $title = htmlspecialchars($_POST['title']);
    $url = htmlspecialchars($_POST['url']);
    $parent_id = intval($_POST['parent_id']);
    $sort_order = intval($_POST['sort_order']);
    $status = $_POST['status'];

    mysqli_query(
        $conn,
        "UPDATE navbar_menu
        SET
            title='$title',
            url='$url',
            parent_id='$parent_id',
            sort_order='$sort_order',
            status='$status'
        WHERE id='$id'"
    );

    header("Location: ../admin/dashboard.php?success");
    exit();
}
?>