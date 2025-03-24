<?php
// Define footer data as arrays
$contact_info = [
    ['icon' => 'images/icon-location.png', 'text' => 'Address Goes Here 123 Smith Street'],
    ['icon' => 'images/icon-phone.png', 'text' => '03 9361 6333'],
    ['icon' => 'images/icon-mail.png', 'text' => 'info@nextfleet.com.au']
];

$social_links = [
    ['url' => 'https://facebook.com', 'icon' => 'images/icon-facebook.png'],
    ['url' => 'https://instagram.com', 'icon' => 'images/icon-instagram.png'],
    ['url' => 'https://youtube.com', 'icon' => 'images/icon-youtube.png'],
    ['url' => 'https://linkedin.com', 'icon' => 'images/icon-linkedin.png']
];

$about_links = [
    ['text' => 'Who We Are', 'url' => 'about-us.html#team'],
    ['text' => 'Our Team', 'url' => 'about-us.html#team'],
    ['text' => 'Our Partners', 'url' => 'about-us.html#partners']
];

$services_links = [
    ['text' => 'Sales', 'url' => '#'],
    ['text' => 'Leasing', 'url' => '#'],
    ['text' => 'Management', 'url' => '#'],
    ['text' => 'Project Marketing', 'url' => '#'],
    ['text' => 'Advisory', 'url' => '#']
];

$tools_links = [
    ['text' => 'For Sale', 'url' => '#'],
    ['text' => 'For Lease', 'url' => '#'],
    ['text' => 'Recent Results', 'url' => '#']
];

$drive_links = [
    ['text' => 'Sales', 'url' => '#'],
    ['text' => 'Leasing', 'url' => '#'],
    ['text' => 'Management', 'url' => '#']
];
?>

<footer class="bg-black text-white pt-10 pb-10">
  <div class="container">
    <div class="row g-2 g-sm-5">
      <div class="col-md-2">
        <a href="/"><img src="images/nextfleet-logo-footer.png" alt="" width="200"></a>
      </div>
      <div class="col-md-2 text-gray">
        <ul class="list-unstyled text-start">
          <?php foreach ($contact_info as $item): ?>
            <li class="mb-2 d-flex gap-3">
              <span><img src="<?= $item['icon']; ?>" alt="" width="15"></span>
              <span><?= $item['text']; ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class="col d-flex gap-3">
          <?php foreach ($social_links as $social): ?>
            <a href="<?= $social['url']; ?>" target="_blank">
              <img src="<?= $social['icon']; ?>" alt="" width="34">
            </a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-md-2 text-start text-uppercase">
        <h5 class="fw-normal">About</h5>
        <ul class="list-unstyled text-gray">
          <?php foreach ($about_links as $about): ?>
            <li><a href="<?= $about['url']; ?>" class="text-decoration-none text-gray"><?= $about['text']; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-md-2 text-start text-uppercase">
        <h5 class="fw-normal">OUR SERVICES</h5>
        <ul class="list-unstyled text-gray">
          <?php foreach ($services_links as $service): ?>
            <li><a href="<?= $service['url']; ?>" class="text-decoration-none text-gray"><?= $service['text']; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-md-2 text-start text-uppercase">
        <h5 class="fw-normal">Tools</h5>
        <ul class="list-unstyled text-gray">
          <?php foreach ($tools_links as $tool): ?>
            <li><a href="<?= $tool['url']; ?>" class="text-decoration-none text-gray"><?= $tool['text']; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-md-2 text-start text-uppercase">
        <h5 class="fw-normal">My Drive</h5>
        <ul class="list-unstyled text-gray">
          <?php foreach ($drive_links as $drive): ?>
            <li><a href="<?= $drive['url']; ?>" class="text-decoration-none text-gray"><?= $drive['text']; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="d-flex justify-content-end mt-5">
        <a href="https://infusion121.com.au" target="_blank" class="d-block">
          <img src="images/i121-logo.png" alt="Digital Agency" width="237" class="d-block">
        </a>
      </div>
    </div>
  </div>
</footer>

</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Initialize Swiper with navigation
  const swiper = new Swiper('#testimonials-swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next', // Right arrow
      prevEl: '.swiper-button-prev', // Left arrow
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
    },
  });
</script>
