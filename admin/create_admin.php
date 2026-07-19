<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Admin Account</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body{
        background: #f5f7fa;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .admin-card{
        width: 100%;
        max-width: 450px;
        border: none;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0,0,0,.1);
    }

    .card-header{
        background: #198754;
        color: white;
        text-align: center;
        padding: 20px;
        border-radius: 15px 15px 0 0 !important;
    }

    .card-header h2{
        margin: 0;
        font-size: 24px;
        font-weight: 600;
    }

    .card-body{
        padding: 30px;
    }

    .btn-create{
        width: 100%;
    }
</style>


</head>
<body>

<div class="card admin-card">


<div class="card-header">
    <h2>Create Admin Account</h2>
</div>

<div class="card-body">

    <?php if(isset($_GET['success'])): ?>
        <div class="alert alert-success">
            Admin account created successfully.
        </div>
    <?php endif; ?>

    <?php if(isset($_GET['error'])): ?>
        <div class="alert alert-danger">
            Username already exists.
        </div>
    <?php endif; ?>

    <form
        action="../backend/create_admin_process.php"
        method="POST">

        <div class="mb-3">
            <label class="form-label">
                Username
            </label>

            <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Enter username"
                required>
        </div>

        <div class="mb-4">
            <label class="form-label">
                Password
            </label>

            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Enter password"
                required>
        </div>

        <button
            type="submit"
            name="create_admin"
            class="btn btn-success btn-create">
            Create Admin
        </button>

    </form>

</div>

</div>

</body>
</html>
