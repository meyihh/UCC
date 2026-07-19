<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>University Campuses</title>

<!-- CSS LINK -->
<link rel="stylesheet" href="css/campus.css">
<link rel="stylesheet" href="css/navbar.css" />
<link rel="stylesheet" href="css/footer.css" />

<!-- Google Font (optional but nicer look) -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

</head>

<body>
<?php include 'navbar.php'; ?>
<!-- HEADER -->
<div class="header">
  <h1>OUR CAMPUSES</h1>
  <p>Discover the different campuses of our university across Caloocan City</p>
</div>

<!-- CAMPUS CONTAINER -->
<div class="container">

  <!-- MAIN CAMPUS -->
  <div class="card">
    <img src="logo/south.png" alt="Main Campus">
    <div class="card-content">
      <h2>Main Campus</h2>

      <div class="info">
        <span class="label">Address:</span><br>
        Biglang Awa Street, Cor 11th Ave Caloocan City
      </div>

      <div class="contact">
        <span class="label">Contact:</span><br>
         Email: southcampusadmin@ucc-caloocan.edu.ph<br>
        TRUNK LINE: 8528-4654<br>
        Admin: 53106855
      </div>

      <a href="https://www.google.com/maps?cid=16447908303306747999&g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNlEAMYASAF&hl=en-US&source=embed" class="btn">View Location</a>
    </div>
  </div>

  <!-- CONGRESSIONAL -->
  <div class="card">
    <img src="logo/congress.png" alt="Congressional Campus">
    <div class="card-content">
      <h2>Congressional Extension Campus</h2>

      <div class="info">
        <span class="label">Address:</span><br>
        Congressional Rd Ext, Barangay 171, Caloocan
      </div>

      <div class="contact">
        <span class="label">Contact:</span><br>
        85242267
      </div>

      <a href="https://www.google.com/maps?cid=68085589826734189&g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNlEAMYASAF&hl=en-US&source=embed" class="btn">View Location</a>
    </div>
  </div>

  <!-- BAGONG SILANG -->
  <div class="card">
    <img src="logo/bs.png" alt="Bagong Silang Campus">
    <div class="card-content">
      <h2>Bagong Silang Extension Campus</h2>

      <div class="info">
        <span class="label">Address:</span><br>
        Barangay 176, Bagong Silang, Caloocan City
      </div>

      <div class="contact">
        <span class="label">Contact:</span><br>
        88132324

      </div>

      <a href="https://www.google.com/maps?cid=12712188683870877349&g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNlEAMYASAF&hl=en-US&source=embed" class="btn">View Location</a>
    </div>
  </div>

  <!-- CAMARIN -->
  <div class="card">
    <img src="logo/camarin.png" alt="Camarin Campus">
    <div class="card-content">
      <h2>Camarin Extension Campus</h2>

      <div class="info">
        <span class="label">Address:</span><br>
        23 Chrysanthemum St, Barangay 174, Caloocan, Metro Manila
      </div>

      <div class="contact">
        <span class="label">Contact:</span><br>
        (No contact listed)
      </div>

      <a href="https://www.google.com/maps?cid=6189248274068566133&g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNlEAMYASAF&hl=en-US&source=embed" class="btn">View Location</a>
    </div>
  </div>

</div>


<script>
function toggleDropdown(event) {

  event.preventDefault();

  const dropdown = event.currentTarget.parentElement;

  document.querySelectorAll(".nav-dropdown").forEach(item => {

    if (item !== dropdown) {
      item.classList.remove("active");
    }

  });

  dropdown.classList.toggle("active");
}

document.addEventListener("click", function (e) {

  const isDropdown = e.target.closest(".nav-dropdown");

  if (!isDropdown) {

    document.querySelectorAll(".nav-dropdown").forEach(item => {
      item.classList.remove("active");
    });

  }

});
</script>

<?php include 'footer.php'; ?>

</body>
</html>