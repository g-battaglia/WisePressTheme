<?php

/**
 * Main template file.
 * 
 * @package SimpleWise
 */

get_header();
?>


<!-- Articles List Section -->

<section class="articles-list-section">
  <div class="articles-list__header container">
    <h2>List of all the articles</h2>
    <p>Here the list of all the articles</p>
  </div>
  <div class="articles-list-container container">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
        $archive_year  = get_the_time('Y');
        $archive_month = get_the_time('m');
        $archive_day   = get_the_time('d');
    ?>

        <div class="listed-article " data-aos="fade-up">
          <div class="listed-article__img" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
            <a href="<?php the_permalink(); ?>"><i class="fas fa-ellipsis-h"></i></a>
          </div>
          <div class="listed-article__info">
            <div class="entry__header">
              <a class="entry__date" href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php the_date(); ?></a>
              <h3 class="entry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="entry__text">
              <p class="entry__paragraph">
                <?php the_excerpt(); ?>
              </p>
            </div>
            <div class="entry__category">
              <?php the_category(', '); ?>
            </div>

          </div>
        </div>
      <?php endwhile;
    else : ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

  </div>
</section>
<!-- End Articles List Section -->


<?php
$extra_section = locate_template('extra-section.php');
load_template($extra_section);
?>

<?php
get_footer();
