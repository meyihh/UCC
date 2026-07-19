<?php

session_start();
include 'config.php';

if(isset($_POST['update_community']))
{
    $id = intval($_POST['id']);

    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $status = $_POST['status'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM community_services
        WHERE id='$id'"
    );

    $row = mysqli_fetch_assoc($query);

    $imageName = $row['image'];

    if(!empty($_FILES['image']['name']))
    {
        if(file_exists("../logo/".$imageName))
        {
            unlink("../logo/".$imageName);
        }

        $newImage = time().'_'.$_FILES['image']['name'];

        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            "../logo/".$newImage
        );

        $imageName = $newImage;
    }

    mysqli_query(
        $conn,
        "UPDATE community_services
        SET
            title='$title',
            description='$description',
            image='$imageName',
            status='$status'
        WHERE id='$id'"
    );

    header("Location: ../admin/CommunityExtensionServices/index.php?success=1");
    exit();
}
?>