<?php 
/**
 * Main template file.
 * 
 * @package SimpleWise
 */

get_header();
?>


<!-- Single Post Section -->
<section class="single-article">
  <article class="article-content container">

    <div class="header">
      <h2 class="title">Exemple of an Article</h2>
      <ul class="meta">
        <li class="date">Jenuary 20, 2021</li>
        <li class="category"><a href="">Lifestyle</a></li>
      </ul>
    </div>

    <div class="media" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/pine.jpeg');">
    </div>

    <div class="main-content">
      <h3>Second Title</h3>
      <p>
        Lorem ipsum dolor sit amet, <a href="">consectetur</a> adipiscing elit.
        Aliquam odio magna, vulputate
        sed orci
        in, pulvinar congue ex. Maecenas commodo odio vel pharetra dictum. Donec
        ac lorem mauris. Proin rhoncus
        velit
        sit amet fermentum imperdiet. Ut mi neque, varius sed leo eu, egestas
        pellentesque velit. Integer a
        neque ac
        diam facilisis aliquam ut vel ipsum. Aliquam a nisl ullamcorper,
        ultrices quam efficitur, feugiat
        sapien. Etiam
        venenatis ante purus, vitae ornare dui convallis consequat. Sed euismod
        ac magna eget porta. Quisque ut
        quam
        ultricies, ullamcorper dolor at, condimentum velit. In pellentesque mi
        vel neque facilisis, eu convallis
        diam
        tincidunt. Suspendisse potenti.
        Phasellus commodo felis eros, ac pharetra purus finibus hendrerit.
        Suspendisse gravida sem viverra ante
        mattis,
        eu cursus metus convallis. Etiam in vulputate enim. Duis libero odio,
        pulvinar quis augue vitae,
        faucibus
        sagittis nisi. Duis sed ligula lorem. Morbi ac nisl blandit dolor
        euismod molestie. Quisque aliquet
        aliquet ex,
        ut fringilla nisi. Aenean non nisl at velit lacinia ullamcorper. In hac
        habitasse platea dictumst. In
        hac
        habitasse platea dictumst. Aliquam ex mi, molestie in iaculis
        ullamcorper, volutpat eu dolor.
      </p>
      <ol>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      </ol>
      <h3>Another title</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere ipsum natus nemo officiis perferendis
        praesentium quae repellendus saepe! Blanditiis facilis fugit ipsam laudantium nobis qui ratione, temporibus.
        Blanditiis culpa, cupiditate eligendi enim illum iste iure laboriosam laborum libero minima nam natus, optio
        perferendis perspiciatis quibusdam sapiente similique? Aliquid asperiores, consequuntur delectus doloremque
        eaque est eum fuga fugiat fugit labore laboriosam libero minima nesciunt nostrum odit quisquam, quos sapiente
        temporibus voluptate voluptatibus. Accusamus beatae commodi cupiditate, dicta distinctio doloremque ducimus
        eligendi error est exercitationem hic illo incidunt laboriosam laudantium maiores nemo nobis nostrum
        perspiciatis quisquam quo reprehenderit, sed sequi vel voluptatum!</p>


      <ul>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      </ul>
    </div>

    <div class="tags">
      <ul class="tags__list">
        <li class="tag__item"><a href="">Nature</a></li>
        <li class="tag__item"><a href="">Lifestyke</a></li>
        <li class="tag__item"><a href="">Freedom</a></li>
      </ul>
    </div>

    <div class="author">
      <div class="author-pic" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/dog.jpeg');">

      </div>
      <div class="author-name">
        <h4 class="name"><a href="">Luis Johnson</a></h4>
      </div>
    </div>
  </article>
  <div class="comments">

  </div>
</section>
<!-- End Single Post Section -->

<?php
  $extra_section = locate_template('extra-section.php');
  load_template($extra_section);
?>

<?php
get_footer();