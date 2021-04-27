<!-- Extra Section  -->
<section class="extra-section container">
  <div class="extra-popular">
    <h4 class="extra-title">
      Popular post
    </h4>
    <div class="extra-popular__articles">
      <div class="extra-popular__div extra-popular__all">
        <article class="extra-popular__article">
          <div class="extra-article__img">

          </div>
          <h5 class="extra-article-title">
            <a class="extra-article__link" href="">
              Hip hop new albums
            </a>
          </h5>
          <ul class="extra-article-info">
            <li class="extra-article-author"><a class="article-author__link" href="">John Smith</a></li>
            <li class="extra-article-datetime">Jenuary 20, 2021</li>
          </ul>
        </article>

        <article class="extra-popular__article">
          <div class="extra-article__img">

          </div>
          <h5 class="extra-article-title">
            <a class="article__link" href="">
              Hip hop new albums
            </a>
          </h5>
          <ul class="extra-article-info">
            <li class="extra-article-author"><a class="article-author__link" href="">John Smith</a></li>
            <li class="extra-article-datetime">Jenuary 20, 2021</li>
          </ul>
        </article>

        <article class="extra-popular__article">
          <div class="extra-article__img">

          </div>
          <h5 class="extra-article-title">
            <a class="article__link" href="">
              Hip hop new albums
            </a>
          </h5>
          <ul class="extra-article-info">
            <li class="extra-article-author"><a class="article-author__link" href="">John Smith</a></li>
            <li class="extra-article-datetime">Jenuary 20, 2021</li>
          </ul>
        </article>

      </div>
      <div class="extra-popular__div extra-popular__xl">
        <article class="extra-popular__article">
          <div class="extra-article__img">

          </div>
          <h5 class="extra-article-title">
            <a class="extra-article__link" href="">
              Hip hop new albums
            </a>
          </h5>
          <ul class="extra-article-info">
            <li class="extra-article-author"><a class="article-author__link" href="">John Smith</a></li>
            <li class="extra-article-datetime">Jenuary 20, 2021</li>
          </ul>
        </article>

        <article class="extra-popular__article">
          <div class="extra-article__img">

          </div>
          <h5 class="extra-article-title">
            <a class="article__link" href="">
              Hip hop new albums
            </a>
          </h5>
          <ul class="extra-article-info">
            <li class="extra-article-author"><a class="article-author__link" href="">John Smith</a></li>
            <li class="extra-article-datetime">Jenuary 20, 2021</li>
          </ul>
        </article>

        <article class="extra-popular__article">
          <div class="extra-article__img">

          </div>
          <h5 class="extra-article-title">
            <a class="article__link" href="">
              Hip hop new albums
            </a>
          </h5>
          <ul class="extra-article-info">
            <li class="extra-article-author"><a class="article-author__link" href="">John Smith</a></li>
            <li class="extra-article-datetime">Jenuary 20, 2021</li>
          </ul>
        </article>


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