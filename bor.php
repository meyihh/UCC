<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Board of Regents | University of Caloocan City</title>

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

  <!-- CSS -->
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/bor.css">

</head>

<body>

  <!-- NAVBAR -->
  <?php include 'navbar.php'; ?>

  <!-- HERO -->
  <section class="hero-section">

    <div class="hero-floating hero-floating-1"></div>
    <div class="hero-floating hero-floating-2"></div>
    <div class="hero-floating hero-floating-3"></div>

    <h1>BOARD OF REGENTS</h1>

    <p>
      Meet the distinguished officials and respected leaders
      who guide and strengthen the University of Caloocan City
      through leadership, governance, and academic excellence.
    </p>

  </section>

  <!-- MAIN -->
  <section class="board-container">

    <!-- CHAIRMAN -->
    <div class="section-title">
      <i class="fa-solid fa-crown"></i>
      <h2>Chairman of the Board of Regents</h2>
    </div>

    <!-- CLICKABLE CARD -->
    <div class="chairman-card" onclick="openMayorModal()">

      <!-- SHINE -->
      <div class="card-shine"></div>

      <div class="chairman-image">
        <img src="logo/malapitan.png" alt="Mayor Malapitan">
      </div>

      <div class="chairman-info">

        <span class="chairman-mini-badge">
          UCC Board Chairman
        </span>

        <h3>
          Hon. Dale Gonzalo "ALONG" R. Malapitan
        </h3>

        <div class="chairman-position">
          City Mayor • Chairman, Board of Regents
        </div>

        <p>
          Mayor Dale Gonzalo “Along” Malapitan is the 25th local
          chief executive of the historic City of Caloocan and
          the Chairman of the Board of Regents of the University
          of Caloocan City (UCC).
        </p>

        <div class="tap-hint">
          <i class="fa-solid fa-hand-pointer"></i>
          Tap to view full profile
        </div>

      </div>

    </div>

    <!-- MEMBERS -->
    <div class="section-title">
      <i class="fa-solid fa-users"></i>
      <h2>Members of the Board of Regents</h2>
    </div>

    <div class="members-grid">

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/nas.jpg" alt="">
        </div>

        <div class="member-content">
          <h3>Atty. Jessamine Jared S. Nas</h3>
          <div class="member-role">Vice Chairman</div>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/ciego.png" alt="">
        </div>

        <div class="member-content">
          <h3>EnP. Aurora C. Ciego, DPA</h3>
          <div class="member-role">
            City Administrator • Member
          </div>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/na.png" alt="">
        </div>

        <div class="member-content">
          <h3>Atty. Michael Arthur Camina</h3>
          <div class="member-role">Member</div>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/na.png" alt="">
        </div>

        <div class="member-content">
          <h3>Hon. Carolyn C. Cunanan</h3>
          <div class="member-role">Member</div>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/prado.png" alt="">
        </div>

        <div class="member-content">
          <h3>Hon. Atty. Patrick L. Prado</h3>

          <div class="member-role">
            Majority Floor Leader • Member
          </div>

          <p>Caloocan City Council</p>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/lopez.png" alt="">
        </div>

        <div class="member-content">
          <h3>Engr. Wenald H. Lopez, PhD</h3>
          <div class="member-role">Member</div>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/junio.png" alt="">
        </div>

        <div class="member-content">
          <h3>Mr. John Nicklaus S. Junio</h3>
          <div class="member-role">Member</div>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/dantay.jpg" alt="">
        </div>

        <div class="member-content">
          <h3>Rodrigo M. Dantay Jr., DPA, EdD</h3>
          <div class="member-role">Member</div>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/na.png" alt="">
        </div>

        <div class="member-content">
          <h3>Cecille G. Carandang, CESO VI</h3>
          <div class="member-role">Member</div>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/dionisio.png" alt="">
        </div>

        <div class="member-content">
          <h3>Dionisio S. Reyes, DPA, LPT</h3>
          <div class="member-role">Member</div>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/rabanal.jpg" alt="">
        </div>

        <div class="member-content">
          <h3>Mr. Paul Daniel C. Rabanal</h3>
          <div class="member-role">Member</div>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/na.png" alt="">
        </div>

        <div class="member-content">
          <h3>Ms. Princess Garcia</h3>
          <div class="member-role">Member</div>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/na.png" alt="">
        </div>

        <div class="member-content">
          <h3>Ms. Leslie Anne C. Yakit</h3>
          <div class="member-role">Member</div>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/gonzales.png" alt="">
        </div>

        <div class="member-content">
          <h3>Ms. Violeta Y. Gonzales</h3>
          <div class="member-role">Ex-Officio Member</div>
        </div>
      </div>

      <!-- MEMBER -->
      <div class="member-card">
        <div class="member-top">
          <img src="logo/yee.png" alt="">
        </div>

        <div class="member-content">
          <h3>Catlleya C. Yee, PhD-ELL, LPT</h3>
          <div class="member-role">Board Secretary</div>
        </div>
      </div>

    </div>

  </section>

  <!-- =========================
       MAYOR MODAL
  ========================= -->
  <div class="mayor-modal" id="mayorModal">

    <div class="modal-overlay" onclick="closeMayorModal()"></div>

    <div class="modal-content">

      <!-- CLOSE -->
      <button class="modal-close"
      onclick="closeMayorModal()">

        <i class="fa-solid fa-xmark"></i>

      </button>

      <!-- LEFT -->
      <div class="modal-image">
        <img src="logo/malapitan.png" alt="">
      </div>

      <!-- RIGHT -->
      <div class="modal-info">

        <span class="modal-badge">
          Chairman, Board of Regents
        </span>

        <h2>
          Hon. Dale Gonzalo “Along” R. Malapitan
        </h2>

        <p>
          Mayor Dale Gonzalo “Along” Malapitan is the 25th local chief executive of the historic City of Caloocan and the Chairman of the Board of Regents of the University of Caloocan City (UCC).
        </p>

        <p>
          With over 15 years of public service, he began his career as Barangay Chairman of Barangay 137. He later served as a council of the 1st District and as President of Caloocan City’s Liga ng mga Barangay.
        </p>

        <p>
          During this time, he led the Sangguniang Panlungsod in passing landmark ordinances that prioritized improving the city’s education system.
        </p>

        <p>
          These included providing free tuition for students at all UCC campuses and establishing the first law school in CAMANAVA, the University of Caloocan College of Law.
        </p>

        <p>
          As a two-term Representative of the 1st District, he authored several notable laws, including one that increased the bed capacity of Dr. Jose Rodriguez Memorial Hospital to 800.
        </p>

        <p>
          He continues to live by his longtime motto,
          <strong>Aksyon at Malasakit</strong>,
          striving to make the entire city thrive under a progressive governance.
        </p>

      </div>

    </div>

  </div>

  <!-- SCRIPT -->
  <script>

  function openMayorModal(){

    document.getElementById("mayorModal")
    .classList.add("show-modal");

    document.body.style.overflow = "hidden";
  }

  function closeMayorModal(){

    document.getElementById("mayorModal")
    .classList.remove("show-modal");

    document.body.style.overflow = "auto";
  }

  function toggleDropdown(event) {

    event.preventDefault();

    const dropdown =
    event.currentTarget.parentElement;

    document
    .querySelectorAll(".nav-dropdown")
    .forEach(item => {

      if (item !== dropdown) {
        item.classList.remove("active");
      }

    });

    dropdown.classList.toggle("active");
  }

  document.addEventListener("click",
  function (e) {

    const isDropdown =
    e.target.closest(".nav-dropdown");

    if (!isDropdown) {

      document
      .querySelectorAll(".nav-dropdown")
      .forEach(item => {

        item.classList.remove("active");

      });

    }

  });

  </script>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>

</body>
</html>