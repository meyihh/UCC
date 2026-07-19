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
     FROM calendar_events
     ORDER BY id DESC"
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calendar Management</title>
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
            <a href="../admissionsindex.php">
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
            <a href="index.php" class="active">
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

        <h2>Calendar Management</h2>

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

            Add New Event

        </button>

    </div>

<table class="table table-bordered table-hover">

    <thead class="table-success">

        <tr>

            <th>ID</th>

            <th>Event Title</th>

            <th>Start Date</th>

            <th>End Date</th>

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

                <?php echo htmlspecialchars($row['title']); ?>

            </td>

            <td>

                <?php echo date('F d, Y', strtotime($row['event_date'])); ?>

            </td>

            <td>

                <?php echo date('F d, Y', strtotime($row['end_date'])); ?>

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
                    data-event_date="<?php echo $row['event_date']; ?>"
                    data-end_date="<?php echo $row['end_date']; ?>"
                    data-status="<?php echo $row['status']; ?>"

                    data-bs-toggle="modal"
                    data-bs-target="#editEventModal">

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
    <!-- ADD EVENT MODAL -->

<div class="modal fade" id="addAdmissionModal" tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <form
                action="../../backend/calendar_add_process.php"
                method="POST">

                <div class="modal-header">

                    <h5 class="modal-title">
                        Add New Event
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
                            Event Title
                        </label>

                        <input
                            type="text"
                            name="title"
                            class="form-control"
                            required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Start Date
                        </label>

                        <input
                            type="date"
                            name="event_date"
                            class="form-control"
                            required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            End Date
                        </label>

                        <input
                            type="date"
                            name="end_date"
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
                        name="add_event"
                        class="btn btn-success">

                        Save Event

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- EDIT EVENT MODAL -->

<div class="modal fade" id="editEventModal" tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <form
                action="../../backend/calendar_edit_process.php"
                method="POST">

                <input
                    type="hidden"
                    name="id"
                    id="edit_id">

                <div class="modal-header">

                    <h5 class="modal-title">
                        Edit Event
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
                            Event Title
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
                            Start Date
                        </label>

                        <input
                            type="date"
                            name="event_date"
                            id="edit_event_date"
                            class="form-control"
                            required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            End Date
                        </label>

                        <input
                            type="date"
                            name="end_date"
                            id="edit_end_date"
                            class="form-control"
                            required>

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
                        name="update_event"
                        class="btn btn-primary">

                        Update Event

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

        document.getElementById('edit_event_date').value =
            this.dataset.event_date;

        document.getElementById('edit_end_date').value =
            this.dataset.end_date;

        document.getElementById('edit_status').value =
            this.dataset.status;

    });

});

</script>

<script>

document.querySelectorAll('.deleteBtn')
.forEach(button => {

    button.addEventListener('click', function(){

        let eventId = this.dataset.id;

        Swal.fire({
            title:'Delete Event?',
            text:'This event will be permanently removed.',
            icon:'warning',
            showCancelButton:true,
            confirmButtonColor:'#dc3545',
            cancelButtonColor:'#6c757d',
            confirmButtonText:'Yes, Delete It'
        })
        .then((result)=>{

            if(result.isConfirmed)
            {
                window.location.href =
                    'delete.php?id=' + eventId;
            }

        });

    });

});

</script>

</body>
</html>