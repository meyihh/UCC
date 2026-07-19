<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About UCC</title>


  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/footer.css" />
</head>

<body>

<?php include 'navbar.php'; ?>

<!-- ABOUT PAGE -->
<div class="about-page">

  <div class="about-wrapper">

    <!-- HERO -->
    <div class="about-hero">
      <h1>University of Caloocan City</h1>
      <p>A Legacy of Public Education • Growth • Service • Excellence (1971–Present)</p>
    </div>

    <!-- OVERVIEW -->
    <div class="about-section">
      <h2>Overview</h2>
      <p>
        The University of Caloocan City (UCC) is a public-type local university established in 1971,
        originally known as Caloocan City Community College and later Caloocan City Polytechnic College.
        It stands today as one of Metro Manila’s key local universities, serving thousands of students
        across multiple campuses in Caloocan City.
      </p>
    </div>

    <!-- HISTORY -->
    <div class="about-section">
      <h2>Historical Development</h2>
      <p>
        Founded on July 1, 1971 through government authorization, the institution began as a modest
        community college designed to expand access to higher education for Caloocan residents.
        Early funding initiatives supported limited programs in general education and vocational training.
      </p>

      <p>
        By 1975, it evolved into Caloocan City Polytechnic College, reflecting expanding academic offerings
        and increasing student demand. The rapid growth of enrollment and academic programs led to further
        institutional development in the late 1990s.
      </p>

      <p>
        In 2004, through municipal ordinance and continued educational reform, the institution was officially
        elevated to university status and became the University of Caloocan City (UCC), marking a major milestone
        in its academic transformation.
      </p>
    </div>

    <!-- EXPANSION -->
    <div class="about-section">
      <h2>Expansion & Institutional Growth</h2>
      <p>
        UCC expanded through the establishment of multiple campuses, including the Main Campus, Camarin Campus,
        Congressional Extension, and Engineering Campus. These developments were designed to address the growing
        educational needs of North and South Caloocan.
      </p>

      <ul>
        <li>Development of modern academic buildings and laboratories</li>
        <li>Strengthening of science, engineering, and professional programs</li>
        <li>Expansion of student population from 42 (1971) to 13,000+ (2022)</li>
        <li>Continuous improvement of learning facilities and digital resources</li>
      </ul>
    </div>

    <!-- ACHIEVEMENTS -->
    <div class="about-section">
      <h2>Academic Excellence & Achievements</h2>
      <p>
        UCC consistently demonstrates strong performance in national licensure examinations, including LET,
        CPALE, Criminology, and Psychometrician board exams. The university has produced multiple topnotchers
        and continues to exceed national passing averages across disciplines.
      </p>

      <p>
        Its College of Law has also recorded competitive bar examination results, reflecting the institution’s
        commitment to producing highly competent professionals in the legal field.
      </p>
    </div>

    <!-- VISION MISSION -->
    <div class="about-section grid-2">

      <div class="card-box">
        <h2>Vision</h2>
        <p>
          A competitive and upright university committed to building a WISE (World-class, Innovative,
          Sustainable, Empowered) community.
        </p>
      </div>

      <div class="card-box">
        <h2>Mission</h2>
        <p>
          To provide quality instruction, impactful co-curricular activities, sustainable community engagement,
          and research & development initiatives through a dynamic quality management system and learner empowerment.
        </p>
      </div>

    </div>

    <!-- GOALS -->
    <div class="about-section">
      <h2>Institutional Goals</h2>
      <ol>
        <li>Enhance faculty competence through innovative teaching strategies.</li>
        <li>Develop strong community and environmental programs.</li>
        <li>Strengthen industry and institutional linkages.</li>
        <li>Promote cultural diversity, inclusivity, and gender equality.</li>
        <li>Increase student immersion and experiential learning programs.</li>
        <li>Advance research productivity and global competitiveness.</li>
        <li>Promote academic excellence and Filipino values.</li>
        <li>Continuously improve facilities and learning environments.</li>
      </ol>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>
<script>
function toggleDropdown(event) {
  event.preventDefault();

  const dropdown = event.currentTarget.parentElement;

  // close other dropdowns first (so only one opens at a time)
  document.querySelectorAll(".nav-dropdown").forEach(item => {
    if (item !== dropdown) {
      item.classList.remove("active");
    }
  });

  // toggle current dropdown
  dropdown.classList.toggle("active");
}

// close dropdown when clicking outside
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