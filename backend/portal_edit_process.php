<?php

include 'config.php';

if(isset($_POST['update_portal']))
{
    $id = (int)$_POST['id'];

    $title = mysqli_real_escape_string(
        $conn,
        $_POST['title']
    );

    $description = mysqli_real_escape_string(
        $conn,
        $_POST['description']
    );

    $url = mysqli_real_escape_string(
        $conn,
        $_POST['url']
    );

    $status = mysqli_real_escape_string(
        $conn,
        $_POST['status']
    );

    $portalQuery = mysqli_query(
        $conn,
        "SELECT *
         FROM portals
         WHERE id='$id'"
    );

    $portal = mysqli_fetch_assoc(
        $portalQuery
    );

    $logo = $portal['logo'];

    if(
        isset($_FILES['logo']) &&
        $_FILES['logo']['error'] == 0
    )
    {
        $newLogo =
            time() . "_" .
            basename($_FILES['logo']['name']);

        move_uploaded_file(
            $_FILES['logo']['tmp_name'],
            "../logo/" . $newLogo
        );

        if(
            !empty($logo) &&
            file_exists("../logo/" . $logo)
        )
        {
            unlink("../logo/" . $logo);
        }

        $logo = $newLogo;
    }

    mysqli_query(
        $conn,
        "UPDATE portals
         SET
         title='$title',
         description='$description',
         url='$url',
         logo='$logo',
         status='$status'
         WHERE id='$id'"
    );

    header(
        "Location: ../admin/portal/index.php?success=updated"
    );

    exit();
}
?>