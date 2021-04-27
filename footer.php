<!-- Footer -->
<footer class="footer" id="footer">
  <div class="inner-footer container">
    <div class="footer-top">
      <div class="footer-links">
      
          <?php
          $footer_widget_template = locate_template('template-parts/footer-widget.php');
          load_template($footer_widget_template);
          ?>

      </div>
    </div>
    <div class="footer-foot">
      <div class="footer-policy">
        <p><a class="color-light" href="">Service policy</a></p>
      </div>
      <div class="footer-copy">
        <p>&copy; Giacomo Battaglia 2021</p>
      </div>
    </div>
    <a class="footer-arrow" href="#">
      <i class="fas fa-arrow-up"></i>
    </a>
  </div>

</footer>
<!-- End Footer -->

<!-- AOS Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
<!-- End AOS Library -->
</body>
</html>