<?php

session_start();

include '../backend/config.php';

if(!isset($_SESSION['admin_id']))
{
    header("Location: login.php");
    exit();
}

$navbarQuery = mysqli_query(
    $conn,
    "SELECT *
     FROM navbar_menu
     ORDER BY parent_id ASC, sort_order ASC"
);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UCC Admin Dashboard</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="css/dashboard.css">

</head>
<body>

<div class="sidebar">

    <div class="sidebar-header">
        <h3>UCC</h3>
    </div>

    <ul class="sidebar-menu">

        <li>
            <a href="dashboard.php" class="active">
                Dashboard
            </a>
        </li>

        <li>
            <a href="carousel/index.php">
                Carousel Management
            </a>
        </li>

        <li>
            <a href="portal/index.php">
                Portal Management
            </a>
        </li>

        <li>
            <a href="admissions/index.php">
                Admissions Management
            </a>
        </li>

        <li>
            <a href="facilities/index.php">
                Facilities Management
            </a>
        </li>

        <li>
            <a href="news/index.php" >
                News Management
            </a>
        </li>

        <li>
            <a href="calendar/index.php" >
                Calendar Management
            </a>
        </li>

        <li>
            <a href="CommunityExtensionServices/index.php" >
                Community and Extension Services
            </a>
        </li>

        <li>
            <a href="logout.php">
                Logout
            </a>
        </li>

    </ul>

</div>

<div class="main-content">

    <div class="top-bar">

        <h2>Dashboard</h2>

        <div class="admin-info">

            Welcome,
            <strong>
                <?php echo $_SESSION['admin_username']; ?>
            </strong>

        </div>

    </div>

<div class="cards">

    <div class="dashboard-card">

        <h4>Carousel</h4>

        <p>
            Manage homepage carousel slides.
        </p>

        <a
            href="carousel/index.php"
            class="btn btn-success">

            Manage Carousel

        </a>

    </div>

    <div class="dashboard-card">

        <h4>Portal Management</h4>

        <p>
            Manage Academic Portal links.
        </p>

        <a
            href="portal/index.php"
            class="btn btn-success">

            Manage Portals

        </a>

    </div>

</div>


<!-- WEBSITE NAVIGATION MANAGEMENT -->

<div class="dashboard-card mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="mb-1">
                Website Navigation
            </h3>

            <small class="text-muted">
                Manage navbar menus and dropdown items
            </small>

        </div>

        <button
            class="btn btn-success"
            data-bs-toggle="modal"
            data-bs-target="#addNavbarModal">

            Add Menu

        </button>

    </div>


    <table class="table table-bordered table-hover">

        <thead class="table-success">

            <tr>

                <th>ID</th>
                <th>Menu Name</th>
                <th>URL</th>
                <th>Parent</th>
                <th>Order</th>
                <th>Actions</th>

            </tr>

        </thead>

        <tbody>

        <?php while($row = mysqli_fetch_assoc($navbarQuery)): ?>

            <tr>

                <td>
                    <?php echo $row['id']; ?>
                </td>

                <td>
                    <?php echo htmlspecialchars($row['title']); ?>
                </td>

                <td>
                    <?php echo htmlspecialchars($row['url']); ?>
                </td>

                <td>

                    <?php

                    if($row['parent_id']==0)
                    {
                        echo '<span class="badge bg-primary">Main Menu</span>';
                    }
                    else
                    {
                        echo '<span class="badge bg-secondary">Dropdown Item</span>';
                    }

                    ?>

                </td>

                <td>
                    <?php echo $row['sort_order']; ?>
                </td>

                <td>

                    <button
                        class="btn btn-primary btn-sm editBtn"

                        data-id="<?php echo $row['id']; ?>"
                        data-title="<?php echo htmlspecialchars($row['title']); ?>"
                        data-url="<?php echo htmlspecialchars($row['url']); ?>"
                        data-parent="<?php echo $row['parent_id']; ?>"
                        data-order="<?php echo $row['sort_order']; ?>"
                        data-status="<?php echo $row['status']; ?>"

                        data-bs-toggle="modal"
                        data-bs-target="#editNavbarModal">

                        Edit

                    </button>


                    <button
                        class="btn btn-danger btn-sm deleteBtn"
                        data-id="<?php echo $row['id']; ?>">

                        Delete

                    </button>

                </td>

            </tr>

        <?php endwhile; ?>

        </tbody>

    </table>

    <!-- ADD NAVBAR MODAL -->
<div class="modal fade" id="addNavbarModal" tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="../backend/navbar_add_process.php" method="POST">

                <div class="modal-header">

                    <h5 class="modal-title">Add Menu</h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                    </button>

                </div>


                <div class="modal-body">

                    <div class="mb-3">

                        <label class="form-label">
                            Menu Title
                        </label>

                        <input
                            type="text"
                            name="title"
                            class="form-control"
                            required>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            URL
                        </label>

                        <input
                            type="text"
                            name="url"
                            class="form-control"
                            required>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Parent Menu
                        </label>

                        <select
                            name="parent_id"
                            class="form-control">

                            <option value="0">
                                Main Menu
                            </option>

                            <?php
                            $parents = mysqli_query(
                                $conn,
                                "SELECT *
                                FROM navbar_menu
                                WHERE parent_id=0
                                ORDER BY sort_order ASC"
                            );

                            while($p=mysqli_fetch_assoc($parents)):
                            ?>

                            <option value="<?php echo $p['id']; ?>">

                                <?php echo htmlspecialchars($p['title']); ?>

                            </option>

                            <?php endwhile; ?>

                        </select>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Sort Order
                        </label>

                        <input
                            type="number"
                            name="sort_order"
                            class="form-control"
                            value="0">

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Status
                        </label>

                        <select
                            name="status"
                            class="form-control">

                            <option value="Active">
                                Active
                            </option>

                            <option value="Inactive">
                                Inactive
                            </option>

                        </select>

                    </div>

                </div>


                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">

                        Cancel

                    </button>

                    <button
                        type="submit"
                        name="add_menu"
                        class="btn btn-success">

                        Save

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- EDIT NAVBAR MODAL -->
<div class="modal fade" id="editNavbarModal" tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="../backend/navbar_edit_process.php" method="POST">

                <div class="modal-header">

                    <h5 class="modal-title">
                        Edit Menu
                    </h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                    </button>

                </div>


                <div class="modal-body">

                    <input
                        type="hidden"
                        name="id"
                        id="edit_id">


                    <div class="mb-3">

                        <label class="form-label">
                            Menu Title
                        </label>

                        <input
                            type="text"
                            name="title"
                            id="edit_title"
                            class="form-control"
                            required>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            URL
                        </label>

                        <input
                            type="text"
                            name="url"
                            id="edit_url"
                            class="form-control"
                            required>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Parent Menu
                        </label>

                        <input
                            type="number"
                            name="parent_id"
                            id="edit_parent"
                            class="form-control">

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Sort Order
                        </label>

                        <input
                            type="number"
                            name="sort_order"
                            id="edit_order"
                            class="form-control">

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Status
                        </label>

                        <select
                            name="status"
                            id="edit_status"
                            class="form-control">

                            <option value="Active">
                                Active
                            </option>

                            <option value="Inactive">
                                Inactive
                            </option>

                        </select>

                    </div>

                </div>


                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">

                        Cancel

                    </button>

                    <button
                        type="submit"
                        name="update_menu"
                        class="btn btn-primary">

                        Update

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(isset($_GET['success'])): ?>

<script>

Swal.fire({
    icon: "success",
    title: "Success",
    text: "Operation completed successfully."
});

// Remove ?success from URL so refresh won't show it again
window.history.replaceState(
    {},
    document.title,
    window.location.pathname
);

</script>

<?php endif; ?>

<script>

document.querySelectorAll(".editBtn").forEach(button => {

    button.addEventListener("click", function() {

        document.getElementById("edit_id").value =
        this.dataset.id;

        document.getElementById("edit_title").value =
        this.dataset.title;

        document.getElementById("edit_url").value =
        this.dataset.url;

        document.getElementById("edit_parent").value =
        this.dataset.parent;

        document.getElementById("edit_order").value =
        this.dataset.order;

        document.getElementById("edit_status").value =
        this.dataset.status;

    });

});

</script>

<script>

document.querySelectorAll(".deleteBtn").forEach(button=>{

    button.addEventListener("click", function(){

        let id=this.dataset.id;

        Swal.fire({

            title:"Delete this menu?",
            text:"This action cannot be undone.",
            icon:"warning",

            showCancelButton:true,

            confirmButtonColor:"#d33",
            cancelButtonColor:"#3085d6",

            confirmButtonText:"Delete"

        }).then((result)=>{

            if(result.isConfirmed)
            {
                window.location=
                "../backend/navbar_delete_process.php?id="+id;
            }

        });

    });

});

</script>

</body>
</html>