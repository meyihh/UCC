<?php

include 'config.php';

if(isset($_POST['update_event']))
{
    $id = $_POST['id'];
    $title = htmlspecialchars($_POST['title']);
    $event_date = $_POST['event_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];

    $stmt = mysqli_prepare(
        $conn,
        "UPDATE calendar_events
        SET
            title=?,
            event_date=?,
            end_date=?,
            status=?
        WHERE id=?"
    );

    mysqli_stmt_bind_param(
        $stmt,
        "ssssi",
        $title,
        $event_date,
        $end_date,
        $status,
        $id
    );

    mysqli_stmt_execute($stmt);

    header("Location: ../admin/calendar/index.php?success=1");
    exit();
}

?>  