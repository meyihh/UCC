<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>College of Criminal Justice Education</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/ccje.css">
<link rel="stylesheet" href="css/navbar.css" />
<link rel="stylesheet" href="css/footer.css" />
</head>

<body>

<?php include 'navbar.php'; ?>

<div class="ccje-page">

  <!-- HERO -->
  <div class="ccje-hero">
    <div class="hero-content">
      <h1>College of Criminal Justice Education</h1>
      <p>
        Producing knowledgeable, skilled, and ethical professionals dedicated to justice, safety,
        and community service
      </p>
    </div>
  </div>

  <div class="ccje-content">

    <!-- LEADERSHIP -->
    <div class="ccje-section">
      <h2 class="section-title">Leadership & Identity</h2>

      <div class="leadership-grid">

        <!-- DEAN -->
        <div class="dean-section">

          <div class="dean-image-wrapper">
            <img class="dean-img" src="logo/dizon.png" alt="Dean">
          </div>

          <div class="dean-info">
            <h3>Nelson C. Dizon, PhD Crim, RCrim</h3>
            <p>Dean, College of Criminal Justice Education</p>
          </div>

        </div>

        <!-- VISION MISSION -->
        <div class="vm-stack">

          <div class="vm-card">
            <div class="vm-icon">V</div>
            <div>
              <h3>Vision</h3>
              <p>
                To be a leading institution that produces knowledgeable, skilled, and ethical professionals
                dedicated to advancing the criminal justice system and promoting a safer, more just society
                through innovation, research, and community engagement.
              </p>
            </div>
          </div>

          <div class="vm-card">
            <div class="vm-icon">M</div>
            <div>
              <h3>Mission</h3>
              <p>
                To provide quality education and training utilizing innovation and research, equipping students
                with knowledge, skills, and ethical foundation necessary to become leading criminal justice professionals.
              </p>
            </div>
          </div>

        </div>

      </div>
    </div>

    <!-- ABOUT -->
    <div class="ccje-section">
      <h2 class="section-title">About</h2>

      <div class="about-wrapper">

        <div class="about-card">

          <div class="about-badge">
            College of Criminal Justice Education
          </div>

          <h3>Building Ethical Justice Professionals</h3>

          <p>
            The College of Criminal Justice Education prepares students for careers in law enforcement,
            corrections, criminology, and public safety through strong academic foundations, ethical training,
            and practical field exposure.
          </p>

        </div>

        <div class="about-image-card">
          <img src="logo/.png" alt="CCJE Logo">
        </div>

      </div>
    </div>

    <!-- ✅ GOALS & OBJECTIVES (NEW SECTION) -->
    <div class="ccje-section">
      <h2 class="section-title">Goals & Objectives</h2>

      <div class="goals-container">

        <div class="goals-card">

          <h3>Goals</h3>
          <p>
            To excel in the criminal justice education field by providing a rigorous academic foundation,
            practical skills, and ethical principles necessary for effective and responsible practice of law
            enforcement, corrections, and related areas.
          </p>

        </div>

        <div class="objectives-card">

          <h3>Objectives</h3>

          <ul>
            <li>Provide students with comprehensive knowledge of criminal justice theories, principles, and practices to prepare them for professional competence.</li>
            <li>Develop skilled and ethical practitioners capable of addressing crime and justice-related issues with integrity and accountability.</li>
            <li>Promote critical thinking, research, and innovative approaches that advance the criminal justice system.</li>
            <li>Develop leadership, communication, and cultural competence while fostering collaboration with communities and stakeholders.</li>
          </ul>

        </div>

      </div>
    </div>

    <!-- PROGRAMS -->
    <div class="ccje-section">
      <h2 class="section-title">Programs</h2>

      <p class="program-note">Tap any program to view complete information</p>

      <div class="programs-grid">

        <div class="program-card"
        onclick="openModal(
        'Bachelor of Science in Criminology',
        'The BS Criminology program is designed to produce knowledgeable, skilled, and ethical professionals in the criminal justice system.',
        'It emphasizes critical thinking, research, ethical practice, and field immersion.'
        )">

          <div class="program-top">
            <div class="program-icon">👮</div>
          </div>

          <h3>BS Criminology</h3>
          <p>Law enforcement, forensic science, criminal law, and justice system operations.</p>
          <div class="tap-read">Tap to Read</div>

        </div>

        <div class="program-card"
        onclick="openModal(
        'Bachelor of Science in Industrial Security Management',
        'Trains students in security principles, risk management, and protective services.',
        'Prepares graduates for corporate security, risk management, and protection services.'
        )">

          <div class="program-top">
            <div class="program-icon">🛡️</div>
          </div>

          <h3>BS Industrial Security Management</h3>
          <p>Security operations, risk management, investigations, and protection services.</p>
          <div class="tap-read">Tap to Read</div>

        </div>

      </div>
    </div>

  </div>
</div>

<!-- MODAL -->
<div id="programModal" class="modal">
  <div class="modal-content">

    <span class="close-modal" onclick="closeModal()">&times;</span>

    <div class="modal-header">
      <h2 id="modalTitle"></h2>
    </div>

    <div class="modal-body">

      <div class="modal-section">
        <h3>Overview</h3>
        <p id="modalVision"></p>
      </div>

      <div class="modal-section">
        <h3>Details</h3>
        <p id="modalMission"></p>
      </div>

    </div>

  </div>
</div>

<?php include 'footer.php'; ?>

<script>
function openModal(title, vision, mission){
  document.getElementById("programModal").style.display = "flex";
  document.getElementById("modalTitle").innerText = title;
  document.getElementById("modalVision").innerText = vision;
  document.getElementById("modalMission").innerText = mission;
}

function closeModal(){
  document.getElementById("programModal").style.display = "none";
}
</script>


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
</body>
</html>