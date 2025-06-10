<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>



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
