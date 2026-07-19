<?php
session_start();

include 'config.php';

if(isset($_POST['login']))
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $query = mysqli_query(
        $conn,
        "SELECT * FROM admins
         WHERE username='$username'"
    );

    if(mysqli_num_rows($query) == 1)
    {
        $admin = mysqli_fetch_assoc($query);

        if(password_verify($password, $admin['password']))
        {
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_username'] = $admin['username'];

            header("Location: ../admin/dashboard.php");
            exit();
        }
    }

    header("Location: ../admin/login.php?error=1");
    exit();
}
?>