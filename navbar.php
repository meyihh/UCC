<?php

include 'backend/config.php';

/*
=====================================
GET ALL MAIN MENUS
=====================================
*/

$mainMenus = mysqli_query(
    $conn,
    "SELECT *
     FROM navbar_menu
     WHERE parent_id = 0
     AND status='Active'
     ORDER BY sort_order ASC"
);

?>

<!-- HEADER -->
<header class="top-header">

    <!-- LEFT LOGO -->
    <div class="logo-box">

        <img
            src="logo/ucc_logo.png"
            alt="UCC Logo">

    </div>


    <!-- TITLE -->
    <div class="school-title">

        <h1>
            University of Caloocan City
        </h1>


        <!-- DESKTOP NAV -->
        <nav class="navbar">

            <?php while($menu=mysqli_fetch_assoc($mainMenus)): ?>

                <?php

                $children = mysqli_query(
                    $conn,
                    "SELECT *
                     FROM navbar_menu
                     WHERE parent_id=".$menu['id']."
                     AND status='Active'
                     ORDER BY sort_order ASC"
                );

                ?>

                <?php if(mysqli_num_rows($children)>0): ?>

                    <!-- DROPDOWN -->

                    <div class="nav-dropdown">

                        <a
                          href="#"
                          class="dropbtn"
                          onclick="toggleDropdown(event)">

                            <?php echo htmlspecialchars($menu['title']); ?>

                            <span class="arrow">

                                ▾

                            </span>

                        </a>


                        <div class="dropdown-content">

                            <?php while($child=mysqli_fetch_assoc($children)): ?>

                                <a
                                    href="<?php echo $child['url']; ?>">

                                    <?php echo htmlspecialchars($child['title']); ?>

                                </a>

                            <?php endwhile; ?>

                        </div>

                    </div>

                <?php else: ?>

                    <!-- NORMAL MENU -->

                    <a
                        href="<?php echo $menu['url']; ?>">

                        <?php echo htmlspecialchars($menu['title']); ?>

                    </a>

                <?php endif; ?>

            <?php endwhile; ?>

        </nav>

    </div>


    <!-- RIGHT LOGOS -->
    <div class="logo-box multi-logo">

        <img
            src="logo/am_logo.png"
            alt="AM Logo">

        <img
            src="logo/cal_logo.png"
            alt="Caloocan Logo">

        <img
            src="logo/bp_logo.png"
            alt="BP Logo">

    </div>



    <!-- MOBILE BUTTON -->

    <div
        class="mobile-toggle"
        onclick="toggleMobileMenu()">

        ☰ Menu

    </div>



    <!-- MOBILE MENU -->

    <div
        class="mobile-menu"
        id="mobileMenu">

        <?php

        $mobileMenus = mysqli_query(
            $conn,
            "SELECT *
             FROM navbar_menu
             WHERE parent_id=0
             AND status='Active'
             ORDER BY sort_order ASC"
        );

        while($menu=mysqli_fetch_assoc($mobileMenus)):

            $children=mysqli_query(
                $conn,
                "SELECT *
                 FROM navbar_menu
                 WHERE parent_id=".$menu['id']."
                 AND status='Active'
                 ORDER BY sort_order ASC"
            );

        ?>

            <?php if(mysqli_num_rows($children)>0): ?>

                <div class="mobile-title">

                    <?php echo htmlspecialchars($menu['title']); ?>

                </div>

                <?php while($child=mysqli_fetch_assoc($children)): ?>

                    <a
                        href="<?php echo $child['url']; ?>">

                        <?php echo htmlspecialchars($child['title']); ?>

                    </a>

                <?php endwhile; ?>

            <?php else: ?>

                <a
                    href="<?php echo $menu['url']; ?>">

                    <?php echo htmlspecialchars($menu['title']); ?>

                </a>

            <?php endif; ?>

        <?php endwhile; ?>

    </div>

</header>



<script>

function toggleMobileMenu()
{
    document
        .getElementById("mobileMenu")
        .classList
        .toggle("active");
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
