<?php 
/**
 * Main template file.
 * 
 * @package SimpleWise
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section">
  <div class="hero-articles container" data-aos="fade-right">
    <div class="article first-article">
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
    </div>

  </div>
  <?php echo do_shortcode('[lastest-post]'); ?>
</section>

<!-- End Hero Section -->

<?php
  $extra_section = locate_template('extra-section.php');
  load_template($extra_section);
?>

<?php
get_footer();