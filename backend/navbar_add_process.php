<?php

session_start();
include 'config.php';

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $title = htmlspecialchars($_POST['title']);
    $url = htmlspecialchars($_POST['url']);
    $parent_id = intval($_POST['parent_id']);
    $sort_order = intval($_POST['sort_order']);
    $status = $_POST['status'];

    mysqli_query(
        $conn,
        "INSERT INTO navbar_menu
        (
            title,
            url,
            parent_id,
            sort_order,
            status
        )
        VALUES
        (
            '$title',
            '$url',
            '$parent_id',
            '$sort_order',
            '$status'
        )"
    );

    header("Location: ../admin/dashboard.php?success");
    exit();
}
?>