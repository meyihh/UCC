<?php

include 'config.php';

if(isset($_POST['create_admin']))
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $hashedPassword = password_hash(
        $password,
        PASSWORD_DEFAULT
    );

    $check = mysqli_query(
        $conn,
        "SELECT * FROM admins
         WHERE username='$username'"
    );

    if(mysqli_num_rows($check) > 0)
    {
        header(
            "Location: ../admin/login.php?created=1"
        );
        exit();
    }

    mysqli_query(
        $conn,
        "INSERT INTO admins(username,password)
         VALUES('$username','$hashedPassword')"
    );

    header(
        "Location: ../create_admin.php?success=1"
    );
    exit();
}