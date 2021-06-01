<?php 
/**
 * Main template file.
 * 
 * @package SimpleWise
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php // the_excerpt();?>

<!-- Single Post Section -->
<section class="single-article">
  <article class="article-content container">

    <div class="header">
      <h2 class="title"><?php the_title(); ?></h2>
      <ul class="meta">
        <li class="date"><?php the_date('')?></li>
      </ul>
    </div>

    <div class="main-content">
      <?php 
      the_content();
      if (current_user_can( 'edit_posts' )) {
        edit_post_link(__('<i class="fas fa-edit"></i>'));
      }
      ?>
    </div>
    
    

    <div class="tags">
      <ul class="tags__list">
        <?php 
          $tags = get_the_tags();
          // print_r($tags[0]);
          // $home_URL = get_home_url();
          if ($tags) {
            foreach ($tags as $tag) {
              echo '<li class="tag__item"><a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a></li>';
           }
          }
        ?>
       </li>
      </ul>
    </div>

    <div class="author">
      <div class="author-pic" style="background-image: url('<?php echo get_avatar_url(get_the_author_meta( 'ID' )); ?>">

      </div>
      <div class="author-name">
        <h4 class="name"><a href=""><?php the_author('');?></a></h4>
      </div>
    </div>
  </article>
  <div class="comments">

  </div>
</section>
<!-- End Single Post Section -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php
  $extra_section = locate_template('extra-section.php');
  load_template($extra_section);
?>

<?php
get_footer();