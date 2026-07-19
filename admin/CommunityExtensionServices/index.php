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
     FROM community_services
     ORDER BY id DESC"
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Community Extension Services Management</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/admission-index.css">

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
            <a href="../portal/index.php">
                Portal Management
            </a>
        </li>

        <li>
            <a href="../admissions/index.php" >
                Admissions Management
            </a>
        </li>

        <li>
            <a href="../facilities/index.php">
                Facilities Management
            </a>
        </li>

        <li>
            <a href="../news/index.php" >
                News Management
            </a>
        </li>

        <li>
            <a href="../calendar/index.php" >
                Calendar Management
            </a>
        </li>

        <li>
            <a href="index.php" class="active">
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

        <h2>Community Extension Services Management</h2>

        <div class="admin-info">

            Welcome,
            <strong>
                <?php echo $_SESSION['admin_username']; ?>
            </strong>

        </div>

    </div>

    <div class="dashboard-card">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h4 class="mb-0"></h4>

        <button
            class="btn btn-success add-btn"
            data-bs-toggle="modal"
            data-bs-target="#addAdmissionModal">

            Add New Post

        </button>

    </div>

    <table class="table table-bordered table-hover">

        <thead class="table-success">

<tr>
    <th>ID</th>
    <th>Image</th>
    <th>Title</th>
    <th>Description</th>
    <th>Status</th>
    <th>Actions</th>
</tr>

</thead>

<tbody>

<?php while($row = mysqli_fetch_assoc($query)): ?>

<tr>

    <td>
        <?php echo $row['id']; ?>
    </td>

    <td>

        <img
            src="../../logo/<?php echo $row['image']; ?>"
            width="100">

    </td>

    <td>

        <?php echo htmlspecialchars($row['title']); ?>

    </td>

    <td>

        <?php echo htmlspecialchars($row['description']); ?>

    </td>

    <td>

        <?php if($row['status']=="Active"): ?>

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
            data-image="<?php echo $row['image']; ?>"
            data-status="<?php echo $row['status']; ?>"

            data-bs-toggle="modal"
            data-bs-target="#editCommunityModal">

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

</div>

                <!-- ADD MODAL -->
<div class="modal fade" id="addAdmissionModal" tabindex="-1">

<div class="modal-dialog">

<div class="modal-content">

<form
action="../../backend/community_add_process.php"
method="POST"
enctype="multipart/form-data">

<div class="modal-header">

<h5 class="modal-title">
Add Community Post
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
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">
Description
</label>

<textarea
name="description"
class="form-control"
rows="4"
required></textarea>

</div>

<div class="mb-3">

<label class="form-label">
Image
</label>

<input
type="file"
name="image"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">
Status
</label>

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
name="add_community"
class="btn btn-success">

Save

</button>

</div>

</form>

</div>

</div>

</div>          


 <!-- EDIT MODAL -->
<div class="modal fade" id="editCommunityModal" tabindex="-1">

<div class="modal-dialog">

<div class="modal-content">

<form
action="../../backend/community_edit_process.php"
method="POST"
enctype="multipart/form-data">

<input
type="hidden"
name="id"
id="edit_id">

<div class="modal-header">

<h5 class="modal-title">
Edit Community Post
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

<textarea
name="description"
id="edit_description"
class="form-control"
rows="4"
required></textarea>

</div>

<div class="mb-3">

<label class="form-label">
Current Image
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
Replace Image
</label>

<input
type="file"
name="image"
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
name="update_community"
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

document.querySelectorAll('.editBtn')
.forEach(button=>{

    button.addEventListener('click',function(){

        document.getElementById('edit_id').value =
            this.dataset.id;

        document.getElementById('edit_title').value =
            this.dataset.title;

        document.getElementById('edit_description').value =
            this.dataset.description;

        document.getElementById('edit_status').value =
            this.dataset.status;

        document.getElementById('edit_preview').src =
            "../../logo/" + this.dataset.image;

    });

});

document.querySelectorAll('.deleteBtn')
.forEach(button=>{

    button.addEventListener('click',function(){

        let id = this.dataset.id;

        Swal.fire({

            title:'Delete Post?',
            text:'This post will be permanently removed.',
            icon:'warning',

            showCancelButton:true,

            confirmButtonColor:'#dc3545',
            cancelButtonColor:'#6c757d',

            confirmButtonText:'Yes, Delete It'

        }).then((result)=>{

            if(result.isConfirmed)
            {
                window.location.href =
                    "delete.php?id=" + id;
            }

        });

    });

});

</script>

</body>
</html>