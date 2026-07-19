<?php

session_start();

if(!isset($_SESSION['admin_id']))
{
    header("Location: ../login.php");
    exit();
}

include '../../backend/config.php';

$query = mysqli_query(
    $conn,
    "SELECT *
     FROM portals
     ORDER BY id DESC"
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portal Management</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/portal-index.css">

</head>
<body>

<div class="sidebar">

    <div class="sidebar-header">
        <h3>UCC</h3>
    </div>

    <ul class="sidebar-menu">

        <li>
            <a href="../dashboard.php">
                Dashboard
            </a>
        </li>

        <li>
            <a href="../carousel/index.php" >
                Carousel Management
            </a>
        </li>

        <li>
            <a href="index.php" class="active">
                Portal Management
            </a>
        </li>

        <li>
            <a href="../admissions/index.php">
                Admissions Management
            </a>
        </li>

        <li>
            <a href="../facilities/index.php">
                Facilities Management
            </a>
        </li>

        <li>
            <a href="../news/index.php">
                News Management
            </a>
        </li>

        <li>
            <a href="../calendar/index.php" >
                Calendar Management
            </a>
        </li>

        <li>
            <a href="../CommunityExtensionServices/index.php" >
                Community and Extension Services
            </a>
        </li>

        <li>
            <a href="../logout.php">
                Logout
            </a>
        </li>

    </ul>

</div>

<!-- MAIN CONTENT -->

<div class="main-content">

    <div class="top-bar">

        <h2>Portal Management</h2>

        <div class="admin-info">

            Welcome,
            <strong>
                <?php echo $_SESSION['admin_username']; ?>
            </strong>

        </div>

    </div>

    <div class="dashboard-card">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h4 class="mb-0">
            
            </h4>

            <button
                class="btn btn-success add-btn"
                data-bs-toggle="modal"
                data-bs-target="#addPortalModal">

                Add New Portal

            </button>

        </div>

    <table class="table table-bordered table-hover">

<thead class="table-success">

<tr>

    <th>ID</th>
    <th>Logo</th>
    <th>Title</th>
    <th>Description</th>
    <th>URL</th>
    <th>Status</th>
    <th>Actions</th>

</tr>

</thead>

<tbody>

<?php while($row = mysqli_fetch_assoc($query)): ?>

<tr>

    <td><?php echo $row['id']; ?></td>

    <td>

        <img
            src="../../logo/<?php echo $row['logo']; ?>"
            width="80">

    </td>

    <td>
        <?php echo htmlspecialchars($row['title']); ?>
    </td>

    <td>
        <?php echo htmlspecialchars($row['description']); ?>
    </td>

    <td>
        <?php echo htmlspecialchars($row['url']); ?>
    </td>

    <td>

        <?php if($row['status']=='Active'): ?>

            <span class="badge bg-success">
                Active
            </span>

        <?php else: ?>

            <span class="badge bg-secondary">
                Inactive
            </span>

        <?php endif; ?>

    </td>

    <td>

        <button
            class="btn btn-primary btn-sm editBtn"

            data-id="<?php echo $row['id']; ?>"
            data-title="<?php echo htmlspecialchars($row['title']); ?>"
            data-description="<?php echo htmlspecialchars($row['description']); ?>"
            data-url="<?php echo htmlspecialchars($row['url']); ?>"
            data-logo="<?php echo $row['logo']; ?>"
            data-status="<?php echo $row['status']; ?>"

            data-bs-toggle="modal"
            data-bs-target="#editPortalModal">

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

<!-- ADD PORTAL MODAL -->

<div class="modal fade" id="addPortalModal" tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <form
                action="../../backend/portal_add_process.php"
                method="POST"
                enctype="multipart/form-data">

                <div class="modal-header">

                    <h5 class="modal-title">
                        Add New Portal
                    </h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Title</label>

                        <input
                            type="text"
                            name="title"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>

                        <input
                            type="text"
                            name="description"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Portal URL</label>

                        <input
                            type="url"
                            name="url"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Logo</label>

                        <input
                            type="file"
                            name="logo"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>

                        <select
                            name="status"
                            class="form-select">

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
                        Close
                    </button>

                    <button
                        type="submit"
                        name="add_portal"
                        class="btn btn-success">
                        Save Portal
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- EDIT PORTAL MODAL -->

<div class="modal fade" id="editPortalModal" tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <form
                action="../../backend/portal_edit_process.php"
                method="POST"
                enctype="multipart/form-data">

                <input
                    type="hidden"
                    name="id"
                    id="edit_id">

                <div class="modal-header">

                    <h5 class="modal-title">
                        Edit Portal
                    </h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="mb-3">

                        <label class="form-label">
                            Title
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
                            Description
                        </label>

                        <input
                            type="text"
                            name="description"
                            id="edit_description"
                            class="form-control"
                            required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            URL
                        </label>

                        <input
                            type="url"
                            name="url"
                            id="edit_url"
                            class="form-control"
                            required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Current Logo
                        </label>

                        <br>

                        <img
                            id="edit_preview"
                            src=""
                            width="120"
                            class="img-thumbnail">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Replace Logo
                        </label>

                        <input
                            type="file"
                            name="logo"
                            class="form-control">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Status
                        </label>

                        <select
                            name="status"
                            id="edit_status"
                            class="form-select">

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
                        Close
                    </button>

                    <button
                        type="submit"
                        name="update_portal"
                        class="btn btn-primary">
                        Update Portal
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

document.querySelectorAll('.editBtn')
.forEach(button => {

    button.addEventListener('click', function(){

        document.getElementById('edit_id').value =
            this.dataset.id;

        document.getElementById('edit_title').value =
            this.dataset.title;

        document.getElementById('edit_description').value =
            this.dataset.description;

        document.getElementById('edit_url').value =
            this.dataset.url;

        document.getElementById('edit_status').value =
            this.dataset.status;

        document.getElementById('edit_preview').src =
            '../../logo/' + this.dataset.logo;

    });

});

document.querySelectorAll('.deleteBtn')
.forEach(button => {

    button.addEventListener('click', function(){

        let portalId = this.dataset.id;

        Swal.fire({
            title: 'Delete Portal?',
            text: 'This portal will be permanently removed.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, Delete It'
        }).then((result) => {

            if(result.isConfirmed)
            {
                window.location.href =
                    'delete.php?id=' + portalId;
            }

        });

    });

});

</script>

</body>
</html>