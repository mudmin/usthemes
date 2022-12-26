<?php
require_once $abs_us_root . $us_url_root . 'usersc/templates/' . $settings->template . '/container_close.php';
require_once $abs_us_root . $us_url_root . 'users/includes/page_footer.php';
?>

<footer id="footer" class="footer mt-auto border-top text-white pt-3" style="background-color: #212529">
  <div class="container">
    <p class="text-center">&copy; <?php echo date("Y"); ?> <?= $settings->copyright; ?></p>
  </div>
</footer>

</body>

<?php require_once($abs_us_root . $us_url_root . 'users/includes/html_footer.php'); ?>