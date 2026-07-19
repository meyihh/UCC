<?php

include 'config.php';

if(isset($_POST['add_event']))
{
    $title = htmlspecialchars($_POST['title']);
    $event_date = $_POST['event_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];

    $stmt = mysqli_prepare(
        $conn,
        "INSERT INTO calendar_events
        (
            title,
            event_date,
            end_date,
            status
        )
        VALUES
        (?, ?, ?, ?)"
    );

    mysqli_stmt_bind_param(
        $stmt,
        "ssss",
        $title,
        $event_date,
        $end_date,
        $status
    );

    mysqli_stmt_execute($stmt);

    header("Location: ../admin/calendar/index.php?success=1");
    exit();
}

?>