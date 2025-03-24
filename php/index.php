<?php
  function loadComponent($component) {
      include __DIR__ . "/components/$component.php";
  }

  // Start output buffering
  ob_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Static Site</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.rawgit.com/aamirafridi/jquery.marquee/master/jquery.marquee.min.js"></script>
    <link rel="icon" type="image/png" href="images/favico.ico" />
  </head>
  <body>
    <?php
      loadComponent("header");
      loadComponent("banner");
      loadComponent("services");
      loadComponent("contact");
      loadComponent("testimonials");
      loadComponent("promotions");
      loadComponent("mydrive");
      loadComponent("partners");
      loadComponent("getintouch");
      loadComponent("footer");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<?php
  // Get the buffered content and output it directly
  $output = ob_get_contents();
  ob_end_clean();

  // Output the HTML content to the browser
  echo $output;
?>
