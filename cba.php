<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>College of Business and Accountancy</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/cba.css">
<link rel="stylesheet" href="css/navbar.css" />
<link rel="stylesheet" href="css/footer.css" />
</head>

<body>

<?php include 'navbar.php'; ?>

<div class="cba-page">

  <!-- HERO -->
  <div class="cba-hero">
    <div class="hero-overlay"></div>

    <div class="hero-content">
      <h1>College of Business and Accountancy</h1>
      <p>
        Shaping future leaders in business, finance, entrepreneurship,
        tourism, and hospitality management
      </p>
    </div>
  </div>

  <div class="cba-content">

    <!-- LEADERSHIP -->
    <div class="cba-section">
      <h2 class="section-title">Leadership & Identity</h2>

      <div class="leadership-grid">

        <!-- DEAN -->
        <div class="dean-section">

          <div class="dean-image-wrapper">
            <img class="dean-img" src="logo/mackay.png" alt="Dean">
          </div>

          <div class="dean-info">
            <h3>Dr. Eloisa P. Mackay</h3>
            <p>Dean, College of Business and Accountancy</p>
          </div>

        </div>

        <!-- VISION MISSION -->
        <div class="vm-stack">

          <div class="vm-card">
            <div class="vm-icon">V</div>

            <div>
              <h3>Vision</h3>

              <p>
                A strong and well-rounded College offering innovative globally
                competitive and cross-functional graduates for the organizational
                and entrepreneurial pursuits of tomorrow.
              </p>
            </div>
          </div>

          <div class="vm-card">
            <div class="vm-icon">M</div>

            <div>
              <h3>Mission</h3>

              <p>
                The department aims to develop proactive and globally-competitive
                graduates through an evidence-based education aligned with
                Outcome-Based Education principles.
              </p>
            </div>
          </div>

        </div>

      </div>
    </div>

    <!-- ABOUT -->
<div class="cba-section">
  <h2 class="section-title">About</h2>

  <div class="about-wrapper">

    <!-- LEFT SIDE -->
    <div class="about-card">

      <div class="about-badge">
        College of Business and Accountancy
      </div>

      <h3>
        Empowering Future Business Leaders
      </h3>

      <p>
        The College of Business and Accountancy is dedicated to developing
        competent, ethical, and globally competitive graduates equipped for
        business, finance, entrepreneurship, tourism, and hospitality success
        in a rapidly changing world.
      </p>

      
    </div>

    <!-- RIGHT SIDE -->
    <div class="about-image-card">

      <div class="about-image-overlay"></div>

      <img src="logo/cba.png" alt="CBA Logo">

    </div>

  </div>
</div>

    <!-- PROGRAMS -->
    <div class="cba-section">
      <h2 class="section-title">Programs</h2>

      <p class="program-note">
        Tap any program to view complete information
      </p>

      <div class="programs-grid">

        <!-- ACCOUNTANCY -->
        <div class="program-card"
        onclick="openModal(
        'Bachelor of Science in Accountancy',

        'Our vision is to emerge as a leading national and international educational hub for accountancy, renowned for our unwavering dedication to cultivating exceptionally skilled and ethical professionals. We aspire to pioneer innovative advancements in curriculum and teaching methodologies, ensuring our graduates excel as financial stewards, driving economic prosperity, and demonstrating exemplary leadership with integrity in the ever-evolving global arena.',

        'Our mission is to cultivate and equip aspiring accountants with robust ethical foundations, advanced technical proficiency, and critical analytical capabilities crucial for achieving excellence and leadership in today’s dynamic global business landscape. We are dedicated to nurturing a culture of lifelong learning, integrity, and innovative thinking while championing social responsibility and actively contributing to the sustainable growth of our local and global communities.'
        )">

          <div class="program-top">
            <div class="program-icon">📘</div>
          </div>

          <h3>BS Accountancy</h3>

          <p>
            Financial stewardship, auditing, taxation, and ethical accounting practice.
          </p>

          <div class="tap-read">
            Tap to Read
          </div>

        </div>

        <!-- AIS -->
        <div class="program-card"
        onclick="openModal(
        'Bachelor of Science in Accounting Information System',

       'Our vision is to emerge as a leading national and international educational hub for accountancy, renowned for our unwavering dedication to cultivating exceptionally skilled and ethical professionals. We aspire to pioneer innovative advancements in curriculum and teaching methodologies, ensuring our graduates excel as financial stewards, driving economic prosperity, and demonstrating exemplary leadership with integrity in the ever-evolving global arena.',

        'Our mission is to cultivate and equip aspiring accountants with robust ethical foundations, advanced technical proficiency, and critical analytical capabilities crucial for achieving excellence and leadership in today’s dynamic global business landscape. We are dedicated to nurturing a culture of lifelong learning, integrity, and innovative thinking while championing social responsibility and actively contributing to the sustainable growth of our local and global communities.'
        )">

          <div class="program-top">
            <div class="program-icon">💻</div>
          </div>

          <h3>BS Accounting Information System</h3>

          <p>
            Combines accounting, analytics, and information technology systems.
          </p>

          <div class="tap-read">
            Tap to Read
          </div>

        </div>

        <!-- FM -->
        <div class="program-card"
        onclick="openModal(
        'BSBA - Financial Management',

        'To develop globally competitive financial professionals capable of strategic decision-making and sustainable financial leadership.',

        'To prepare students for careers in banking, investments, and financial services through innovative instruction and practical learning experiences.'
        )">

          <div class="program-top">
            <div class="program-icon">💰</div>
          </div>

          <h3>BSBA Financial Management</h3>

          <p>
            Banking, investments, finance operations, and financial planning.
          </p>

          <div class="tap-read">
            Tap to Read
          </div>

        </div>

        <!-- HR -->
        <div class="program-card"
        onclick="openModal(
        'BSBA - Human Resource Management',

        'To produce competent human resource professionals committed to organizational excellence and people-centered leadership.',

        'To provide quality HR education focused on recruitment, training, labor relations, leadership, and organizational development.'
        )">

          <div class="program-top">
            <div class="program-icon">👥</div>
          </div>

          <h3>BSBA HR Management</h3>

          <p>
            Recruitment, employee development, staffing, and workplace leadership.
          </p>

          <div class="tap-read">
            Tap to Read
          </div>

        </div>

        <!-- MARKETING -->
        <div class="program-card"
        onclick="openModal(
        'BSBA - Marketing Management',

        'To be recognized for producing innovative marketing professionals capable of adapting to the global digital marketplace.',

        'To equip students with strong competencies in branding, advertising, consumer behavior, and digital marketing strategies.'
        )">

          <div class="program-top">
            <div class="program-icon">📈</div>
          </div>

          <h3>BSBA Marketing Management</h3>

          <p>
            Branding, advertising, digital marketing, and market strategy.
          </p>

          <div class="tap-read">
            Tap to Read
          </div>

        </div>

        <!-- ENTREP -->
        <div class="program-card"
        onclick="openModal(
        'Bachelor of Science in Entrepreneurship',

        'To nurture innovative entrepreneurs and business leaders capable of creating sustainable enterprises and economic growth.',

        'To develop entrepreneurial competencies through practical business experiences, innovation, creativity, and strategic management.'
        )">

          <div class="program-top">
            <div class="program-icon">🚀</div>
          </div>

          <h3>BS Entrepreneurship</h3>

          <p>
            Startup development, innovation, business planning, and leadership.
          </p>

          <div class="tap-read">
            Tap to Read
          </div>

        </div>

        <!-- HOSPITALITY -->
        <div class="program-card"
        onclick="openModal(
        'Bachelor of Science in Hospitality Management',

        'To become a premier hospitality management program producing globally competitive hospitality professionals.',

        'To provide quality hospitality education focused on hotel operations, food service management, tourism, and customer excellence.'
        )">

          <div class="program-top">
            <div class="program-icon">🏨</div>
          </div>

          <h3>BS Hospitality Management</h3>

          <p>
            Hotel operations, tourism, food services, and hospitality leadership.
          </p>

          <div class="tap-read">
            Tap to Read
          </div>

        </div>

        <!-- OFFICE ADMIN -->
        <div class="program-card"
        onclick="openModal(
        'Bachelor of Science in Office Administration',

        'To produce highly competent administrative professionals with advanced office management and communication skills.',

        'To develop students with expertise in office systems, business communication, administrative support, and workplace professionalism.'
        )">

          <div class="program-top">
            <div class="program-icon">📂</div>
          </div>

          <h3>BS Office Administration</h3>

          <p>
            Office systems, administration, communication, and organization.
          </p>

          <div class="tap-read">
            Tap to Read
          </div>

        </div>

        <!-- TOURISM -->
        <div class="program-card"
        onclick="openModal(
        'Bachelor of Science in Tourism Management',

        'To be a leading tourism management program producing globally competitive tourism and travel professionals.',

        'To prepare students for successful careers in tourism operations, travel services, destination management, and sustainable tourism.'
        )">

          <div class="program-top">
            <div class="program-icon">✈️</div>
          </div>

          <h3>BS Tourism Management</h3>

          <p>
            Travel operations, tourism management, and destination services.
          </p>

          <div class="tap-read">
            Tap to Read
          </div>

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
        <h3>Vision</h3>

        <p id="modalVision"></p>
      </div>

      <div class="modal-section">
        <h3>Mission</h3>

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

window.onclick = function(event){

  const modal = document.getElementById("programModal");

  if(event.target == modal){
    closeModal();
  }
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