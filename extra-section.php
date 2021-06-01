<!-- Extra Section  -->
<section class="extra-section container">

  <div class="extra-popular">
    <h4 class="extra-title">
      Recent post
    </h4>
    <div class="extra-popular__articles">
      <div class="extra-popular__div extra-popular__all">
        <?php

        $extra_all_args = array(
          'posts_per_page' => 3, /* how many post you need to display */
          'offset' => 0,
          'orderby' => 'post_date',
          'order' => 'DESC',
          'post_type' => 'post', /* your post type name */
          'post_status' => 'publish'
        );
        $query = new WP_Query($extra_all_args);
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <article class="extra-popular__article">
              <div class="extra-article__img" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

              </div>
              <h5 class="extra-article-title">
                <a class="extra-article__link" href="<?php the_permalink() ?>">
                <?php the_title(); ?>
                </a>
              </h5>
              <ul class="extra-article-info">
                <li class="extra-article-author"><a class="article-author__link" href=""><?php the_author() ?></a></li>
                <li class="extra-article-datetime"><?php the_date() ?></li>
              </ul>
            </article>
            

        <?php
          endwhile;
        endif;

        ?>


      </div>
      <div class="extra-popular__div extra-popular__xl">
      <?php

$extra_all_args = array(
  'posts_per_page' => 3, /* how many post you need to display */
  'offset' => 3,
  'orderby' => 'post_date',
  'order' => 'DESC',
  'post_type' => 'post', /* your post type name */
  'post_status' => 'publish'
);
$query = new WP_Query($extra_all_args);
if ($query->have_posts()) :
  while ($query->have_posts()) : $query->the_post();
?>
    <article class="extra-popular__article">
      <div class="extra-article__img" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

      </div>
      <h5 class="extra-article-title">
        <a class="extra-article__link" href="<?php the_permalink() ?>">
        <?php the_title(); ?>
        </a>
      </h5>
      <ul class="extra-article-info">
        <li class="extra-article-author"><a class="article-author__link" href=""><?php the_author() ?></a></li>
        <li class="extra-article-datetime"><?php the_date() ?></li>
      </ul>
    </article>
    

<?php
  endwhile;
endif;

?>


      </div>

    </div>

  </div>

  <div class="extra-about">

    <?php
    $about_widget = locate_template('template-parts/about-widget.php');
    load_template($about_widget);
    ?>
    <!-- <h4 class="extra-title">
      About this blog
    </h4>
    <p class="extra-paragraph">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu aliquet tellus. Nulla consequat orci at nisi
      volutpat ornare. Maecenas sed bibendum ante. Orci varius natoque penatibus et magnis dis parturient montes,
      nascetur ridiculus mus. Donec laoreet est quis neque tempus, eget tempor erat ullamcorper. Nullam non dignissim
      eros, ac molestie dui. Integer sagittis, odio eget accumsan consequat, risus metus porttitor augue, vel rhoncus mi
      quam non mi. Nam et accumsan massa. Duis pretium tincidunt lacus sed ultrices. Curabitur est massa, semper
      dignissim nunc sed, feugiat porta ex. Donec volutpat, purus non iaculis porta, quam neque feugiat eros, in aliquet
      nibh turpis non erat. Pellentesque id libero vitae eros viverra pretium. Pellentesque eget euismod lacus, at porta
      tellus.
    </p>
    <ul class="extra-social-links">
      <li><a href=""><i class="fab fa-twitter"></i></a></li>
      <li><a href=""><i class="fab fa-instagram"></i></a></li>
      <li><a href=""><i class="fab fa-pinterest"></i></a></li>
    </ul> -->


  </div>

  <div class="extra-tags">
    <?php
    $tag_cloud_widget = locate_template('template-parts/tag-cloud-widget.php');
    load_template($tag_cloud_widget);
    ?>
  </div>
</section>
<!-- End Extra Section -->