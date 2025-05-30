<?php
  // Define partner images array
  $images = [
    'ampol.png',
    'nf-img-63.jpg',
    'nf-img-64.jpg',
    'nf-img-65.jpg',
    'nf-img-66.jpg',
    'nf-img-67.jpg',
    'nf-img-68.jpg',
    'nf-img-69.jpg',
    'nf-img-70.jpg',
  ];
?>

<div class="partners-container pt-10 pb-10 bg-white">
  <div class="container text-center">
    <h2 class="text-uppercase fw-bold mb-5">Our Partners</h2>

    <div class="swiper partner-swiper" style="height: 118px;">
      <div class="swiper-wrapper">
        <?php foreach ($images as $image): ?>
          <div class="swiper-slide">
            <img src="images/<?= $image; ?>" alt="<?= pathinfo($image, PATHINFO_FILENAME); ?>" class="partner-logo" />
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Optional Styling -->
<style>
  .partner-logo {
    height: 118px;
    width: 100%;
    object-fit: contain;
    display: block;
    margin: 0 auto;
  }
</style>
