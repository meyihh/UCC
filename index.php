<?php
include 'backend/config.php';

$carouselQuery = mysqli_query(
    $conn,
    "SELECT *
     FROM carousel_images
     WHERE status='Active'
     ORDER BY id ASC"
);

$portalQuery = mysqli_query(
    $conn,
    "SELECT *
     FROM portals
     WHERE status='Active'
     ORDER BY id ASC"
);

$admissionQuery = mysqli_query(
    $conn,
    "SELECT *
     FROM admissions
     WHERE status='Active'
     ORDER BY id ASC"
);

$facilityQuery = mysqli_query(
    $conn,
    "SELECT *
     FROM facilities
     WHERE status='Active'
     ORDER BY id ASC"
);  

$newsQuery = mysqli_query(
    $conn,
    "SELECT *
    FROM news
    WHERE status='Active'
    ORDER BY id DESC"
);

$calendarQuery = mysqli_query(
    $conn,
    "SELECT *
     FROM calendar_events
     WHERE status='Active'
     ORDER BY event_date ASC"
);

$communityQuery = mysqli_query(
    $conn,
    "SELECT *
     FROM community_services
     WHERE status='Active'
     ORDER BY id DESC"
);
$mainMenus = mysqli_query(
    $conn,
    "SELECT *
     FROM navbar_menu
     WHERE parent_id = 0
     AND status='Active'
     ORDER BY sort_order ASC"
);

$mainMenus = mysqli_query(
    $conn,
    "SELECT *
     FROM navbar_menu
     WHERE parent_id = 0
     AND status='Active'
     ORDER BY sort_order ASC"
);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>University of Caloocan City</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/footer.css" />
</head>

<body>

<?php include 'navbar.php'; ?>

<div class="main-container">

  <section class="hero">
    <div class="hero-content">

      <!-- =========================
           TOP SECTION
      ========================== -->
      <div class="top-section">

        <!-- CAROUSEL -->
        <!-- CAROUSEL -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">

    <?php
    $indicatorIndex = 0;

    mysqli_data_seek($carouselQuery, 0);

    while($indicator = mysqli_fetch_assoc($carouselQuery)):
    ?>

    <button
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide-to="<?php echo $indicatorIndex; ?>"
        class="<?php echo $indicatorIndex == 0 ? 'active' : ''; ?>">
    </button>

    <?php
    $indicatorIndex++;
    endwhile;
    ?>

  </div>

  <div class="carousel-inner">

    <?php
    $slideIndex = 0;

    mysqli_data_seek($carouselQuery, 0);

    while($slide = mysqli_fetch_assoc($carouselQuery)):
    ?>

    <div class="carousel-item <?php echo $slideIndex == 0 ? 'active' : ''; ?>">

      <img
          src="logo/<?php echo $slide['image']; ?>"
          class="d-block w-100"
          alt="Carousel Image">

    </div>

    <?php
    $slideIndex++;
    endwhile;
    ?>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div>

        <!-- PORTAL -->
        <div class="portal-container">

    <h3 class="portal-title">
        Academic Portal
    </h3>

    <?php while($portal = mysqli_fetch_assoc($portalQuery)): ?>

    <a
        href="<?php echo htmlspecialchars($portal['url']); ?>"
        target="_blank"
        class="portal-link">

        <div class="portal-logo">

            <img
                src="logo/<?php echo htmlspecialchars($portal['logo']); ?>"
                alt="<?php echo htmlspecialchars($portal['title']); ?>">

        </div>

        <div class="portal-info">

            <h4>
                <?php echo htmlspecialchars($portal['title']); ?>
            </h4>

            <p>
                <?php echo htmlspecialchars($portal['description']); ?>
            </p>

        </div>

    </a>

    <?php endwhile; ?>

</div>

      </div>

      <!-- =========================
           ADMISSION + FACILITIES TITLES
      ========================== -->
      <div class="section-titles">

        <h3 class="admission-title">
          ADMISSION
        </h3>

        <h3 class="facilities-title">
          FACILITIES
        </h3>

      </div>

      <!-- =========================
           ADMISSION + FACILITIES
      ========================== -->
      <div class="admission-calendar-wrapper">

        <!-- LEFT SIDE -->
            <div class="admission-container">

              <?php while($admission = mysqli_fetch_assoc($admissionQuery)): ?>

                  <div class="admission-card">

                      <div class="img-wrapper">

                          <img
                              src="logo/<?php echo $admission['image']; ?>">

                          <a
                              href="#"
                              class="read-more-btn">

                              Read More

                          </a>

                      </div>

                      <p>

                          <?php echo htmlspecialchars($admission['title']); ?>

                      </p>

                  </div>

              <?php endwhile; ?>

              </div>

        <!-- RIGHT SIDE -->
       <div class="facilities-wrapper">

          <?php while($facility = mysqli_fetch_assoc($facilityQuery)): ?>

              <div class="facility-card">

                  <div class="facility-img">

                      <img
                          src="logo/<?php echo $facility['image']; ?>"
                          alt="">

                  </div>

                  <h4>

                      <?php echo htmlspecialchars($facility['title']); ?>

                  </h4>

                  <a
                      href="#"
                      class="facility-btn">

                      See More

                  </a>

              </div>

          <?php endwhile; ?>

          </div>

      </div>

      <!-- =========================
           UNIVERSITY NEWS TITLE
      ========================== -->
      <div class="news-title-wrapper">

        <h3 class="news-title">
          UNIVERSITY NEWS
        </h3>

      </div>

      <!-- =========================
           NEWS + CALENDAR WRAPPER
      ========================== -->
      <div class="news-calendar-wrapper">

        <!-- NEWS SECTION -->
        <div class="news-container">

    <?php while($news = mysqli_fetch_assoc($newsQuery)): ?>

        <div class="news-card">

            <div class="news-img">

                <img
                    src="logo/<?php echo $news['image']; ?>">

                <a
                    href="#"
                    class="read-more-btn">

                    Read More

                </a>

            </div>

            <p>

                <?php echo htmlspecialchars($news['title']); ?>

            </p>

        </div>

    <?php endwhile; ?>

</div>

        <!-- CALENDAR -->
        <div class="school-calendar">

          <div class="calendar-header">
            <h3>Academic Calendar</h3>
            <span>SY 2026 - 2027</span>
          </div>

          <div class="calendar-events">

            <?php while($event = mysqli_fetch_assoc($calendarQuery)): ?>

                <div class="calendar-event">

                    <div class="event-date">

                        <span class="month">

                            <?php echo strtoupper(date('M', strtotime($event['event_date']))); ?>

                        </span>

                        <span class="day">

                            <?php echo date('d', strtotime($event['event_date'])); ?>

                        </span>

                    </div>

                    <div class="event-info">

                        <h4>

                            <?php echo htmlspecialchars($event['title']); ?>

                        </h4>

                        <p>

                            <?php echo date('F j', strtotime($event['event_date'])); ?>
                            -
                            <?php echo date('F j, Y', strtotime($event['end_date'])); ?>

                        </p>

                    </div>

                </div>

            <?php endwhile; ?>

            </div>
      </div>
 </div>
      

      <!-- =========================
           COMMUNITY AND EXTENSION SERVICES TITLE
      ========================== -->
      <div class="community-title-wrapper">

        <h3 class="community-title">
          COMMUNITY AND EXTENSION SERVICES
        </h3>

      </div>

      <!-- =========================
           COMMUNITY AND EXTENSION SERVICES
      ========================== -->
      <div class="community-wrapper">

<?php while($community = mysqli_fetch_assoc($communityQuery)): ?>

    <div class="community-card">

        <div class="community-img">

            <img
                src="logo/<?php echo $community['image']; ?>"
                alt="">

        </div>

        <div class="community-content">

            <h4>

                <?php echo htmlspecialchars($community['title']); ?>

            </h4>

            <p>

                <?php echo htmlspecialchars($community['description']); ?>

            </p>

            <a
                href="#"
                class="community-btn">

                Read More

            </a>

        </div>

    </div>

<?php endwhile; ?>

</div>
  </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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