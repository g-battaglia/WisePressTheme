<?php

/**
 * Main template file.
 * 
 * @package WisePressTheme
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section">
  <div class="hero-articles container" data-aos="fade-right">
    <?php

    $hero_args = array(
      'posts_per_page' => 3, /* how many post you need to display */
      'offset' => 0,
      'orderby' => 'post_date',
      'order' => 'DESC',
      'post_type' => 'post', /* your post type name */
      'post_status' => 'publish'
    );
    $query = new WP_Query($hero_args);
    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
        $archive_year  = get_the_time('Y');
        $archive_month = get_the_time('m');
        $archive_day   = get_the_time('d');
    ?>

        <div class="article" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
          <div class="backdrop-article">
            <div class="inner-article">
              <span class="article-category">
                <a class="category__link" href="">
                  <?php the_category(); ?>
                </a>
              </span>
              <h2 class="article-title">
                <a class="article__link" href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h2>
              <ul class="article-info">
                <li class="article-author"><a class="article-author__link" href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a></li>
                <li class="article-datetime"><a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php the_date(); ?></a></li>
              </ul>
            </div>
          </div>

        </div>
        <!-- here add code what you need to display like above title, image and more  -->
    <?php
      endwhile;
    endif;

    ?>
    <!-- <div class="article first-article">
      <div class="backdrop-article">
        <div class="inner-article">
          <span class="article-category">
            <a class="category__link" href="">
              Music
            </a>
          </span>
          <h2 class="article-title">
            <a class="article__link" href="">
              Hip hop new albums
            </a>
          </h2>
          <ul class="article-info">
            <li class="article-author"><a class="article-author__link" href="">John Smith</a></li>
            <li class="article-datetime">Jenuary 20, 2021</li>
          </ul>
        </div>
      </div>

    </div>
    <div class="article second-article">
      <div class="backdrop-article">
        <div class="inner-article">
          <span class="article-category">
            <a class="category__link" href="">
              Lifestyle
            </a>
          </span>
          <h2 class="article-title">
            <a class="article__link" href="">
              Live music in LA
            </a>
          </h2>
          <ul class="article-info">
            <li class="article-author"><a class="article-author__link" href="">John Smith</a></li>
            <li class="article-datetime">Jenuary 20, 2021</li>
          </ul>
        </div>
      </div>

    </div>
    <div class="article third-article">
      <div class="backdrop-article">
        <div class="inner-article">
          <span class="article-category">
            <a class="category__link" href="">
              Culture
            </a>
          </span>
          <h2 class="article-title">
            <a class="article__link" href="">
              Best books to read while drinking coffe
            </a>
          </h2>
          <ul class="article-info">
            <li class="article-author"><a class="article-author__link" href="">John Smith</a></li>
            <li class="article-datetime">Jenuary 20, 2021</li>
          </ul>
        </div>
      </div>
    </div> -->

  </div>

</section>

<!-- End Hero Section -->

<?php
$extra_section = locate_template('extra-section.php');
load_template($extra_section);
?>

<?php
get_footer();
