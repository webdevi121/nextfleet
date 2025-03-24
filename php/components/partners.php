<?php
  // Define partner images array
  $images = [
    'ampol.png',
    'bp.png',
    'drivercare.png',
    'euclidic.png',
    'gps-i.png',
    'iss.png',
    'Shell-Logo.png',
  ];
?>

<div class="partners-container pt-10 pb-10 bg-white">
  <div class="container text-center">
    <h2 class="text-uppercase fw-bold mb-5">Our Partners</h2>
    <div class="marquee">
      <div class="marquee-content">
        <?php foreach ($images as $image): ?>
          <img src="images/<?= $image; ?>" alt="<?= str_replace('.png', '', $image); ?>" class="partner-logo">
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
