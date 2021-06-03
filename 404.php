<?php

/**
 * Main template file.
 * 
 * @package SimpleWise
 */

get_header();
?>

<section class="single-article">
  <article class="article-content container">

    <div class="header">
      <h2 class="title">Error 404!</h2>
      <p>Page not found :(</p>
    </div>

    <div class="error_404">
      <h6><i class="fas fa-exclamation-triangle"></i></h6>
    </div>


    <?php
    $extra_section = locate_template('extra-section.php');
    load_template($extra_section);
    ?>

    <?php
    get_footer();
