<?php

/**
 * Footer template.
 * 
 * @package WisePressTheme
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" rel="stylesheet" />
  <link href="<?php echo get_template_directory_uri(); ?>/wise.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!-- AOS Library -->

  <script defer src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
  <title><?php echo get_bloginfo($show = 'name'); ?></title>

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar" id="navbar">
    <div class="container">
      <div class="main-navbar">
        <div class="upper-nav">
          <div class="navbar-toggler"><i class="fas fa-bars"></i></div>
          <div class="navbar-social" href="#">
            <?php
            $nav_social_widget_template = locate_template('template-parts/nav-social-widget.php');
            load_template($nav_social_widget_template);
            ?>
            <!-- 
          Insert those links in the widget:
          <a href=""><i class="fab fa-tumblr"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a> 
          -->
          </div>
          <h1 class="navbar-brand"><a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo($show = 'name'); ?></a></h1>
          <div class="navbar-utilities">
            <div class="navbar-search">
              <a href="#">
                <!-- <span>Search</span> -->
                <i class="fas fa-search"></i>
              </a>
            </div>
            <div class="navbar-user">
              <a class="navbar-user__icon" href="#">
                <i class="far fa-user"></i>
              </a>
              <ul class="navbar-user__list">

                <?php
                if (!is_user_logged_in()) {
                  echo '<li class="user-link log-out"><a href="' . wp_login_url(home_url()) . '">Log in</a></li>';
                } else {
                  echo '<li class="user-link"><a href="' . admin_url() . '">Account</a></li>';
                  echo '<li class="user-link log-out"><a href="' . wp_logout_url(home_url()) . '">Log out</a></li>';
                }
                ?>

              </ul>
            </div>

          </div>
        </div>
        <div class="under-nav hide-overlay-nav">
          <div class="under-nav__top">
            <i class="fas fa-times close-nav-overlay"></i>
            <h6 class="nav-collapsed__heading">Site Navigation</h6>
          </div>
          <ul class="navbar-links">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'navbar_menu',
              'container'      => '',
              //'items_wrap'     => '<ul class="navbar-links">%3$s</ul>'
              'items_wrap'    => '%3$s',
            ));
            if (!is_user_logged_in()) {
              echo '<li class="menu-item account-item"><a href="' . wp_login_url(home_url()) . '"><i class="fas fa-sign-in-alt"></i>Log in</a></li>';
            } else {
              echo '<li class="menu-item account-item"><a href="' . admin_url() . '"><i class="far fa-user"></i>Account</a></li>';
              echo '<li class="menu-item account-item"><a href="' . wp_logout_url(home_url()) . '"><i class="fas fa-sign-in-alt"></i>Log out</a></li>';
            }
            ?>
          </ul>
          <!-- <ul class="navbar-links">

          <li class="menu-item"><a href="index.html">Home</a></li>

          <li class="menu-item menu-item-has-children">
            <a aria-expanded="false"
               href="#navbarDropdown" id="navbarDropdown" role="button">
              Categories <i class="fas fa-chevron-down"></i>
            </a>
            <ul aria-labelledby="navbarDropdown" class="sub-menu">
              <li class="dropdown-item"><a href="#">Music</a></li>
              <li class="dropdown-item"><a href="#">Lifestyle</a></li>
              <li class="dropdown-item"><a href="#">Culture</a></li>
            </ul>
          </li>

          <li class="menu-item"><a href="articles_list.html">Articles</a></li>
          <li class="menu-item"><a href="#">Contact</a></li>
          <li class="menu-item menu-item-has-children account-collapsed">
            <a aria-expanded="false"
               href="#navbarDropdown" id="navbarDropdown" role="button">
              Categories <i class="fas fa-chevron-down"></i>
            </a>
            <ul aria-labelledby="navbarDropdown" class="sub-menu">
              <li class="dropdown-item"><a href="#">Music</a></li>
              <li class="dropdown-item"><a href="#">Lifestyle</a></li>
              <li class="dropdown-item"><a href="#">Culture</a></li>
            </ul>
          </li>

        </ul> -->
        </div>

      </div>
    </div>

    <div class="search-overlay hide-overlay">
      <i class="fas fa-times close-overlay"></i>
      <div class="inner-search">
        <?php get_search_form(); ?>
        <!-- <form action="" class="search__form">
          <span class="search-title">Search for:</span>
          <input autocomplete="off" class="search-field" name="s" placeholder="Type Keywords" title="Search for:" type="search" value="">
        </form> -->
        <small class="search-hint">Please Enter to begin your search.</small>
      </div>

    </div>

  </nav>
  <!-- End Navbar -->