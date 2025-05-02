<?php
// Define footer data as arrays
$contact_info = [
    ['icon' => 'images/icon-location.png', 'text' => 'Level 1, Building 5/747 Lytton Rd, Murarrie QLD 4172'],
    ['icon' => 'images/icon-phone.png', 'text' => '<a href="tel:03 9361 6333" class="text-gray hover-text-primary">03 9361 6333</a>'],
    ['icon' => 'images/icon-mail.png', 'text' => '<a href="mailto:info@nextfleet.com.au" class="text-gray hover-text-primary">info@nextfleet.com.au</a>']
];

$social_links = [
    ['url' => 'https://www.facebook.com/NextFleetAus/', 'icon' => 'images/icon-facebook.png'],
    ['url' => 'https://www.instagram.com/nextfleet/', 'icon' => 'images/icon-instagram.png'],
    ['url' => 'https://www.youtube.com/channel/UCPUJAOkdSmRQQ-QhKU91vWw', 'icon' => 'images/icon-youtube.png'],
    ['url' => 'https://www.linkedin.com/company/nextfleetaustralia/', 'icon' => 'images/icon-linkedin.png']
];

$about_links = [
    ['text' => 'Who We Are', 'url' => 'about-us.html#overview'],
    ['text' => 'Our Expertise', 'url' => 'about-us.html#content'],
    ['text' => 'Why Choose Us', 'url' => 'about-us.html#why-choose-us'],
    ['text' => 'Career Opportunities', 'url' => 'about-us.html#career-section'],
];

$services_links = [
    ['text' => 'Fleet Management Solutions', 'url' => '/services.html#tab-1'],
    ['text' => 'Vehicle Fleet Leasing', 'url' => '/services.html#tab-6'],
    ['text' => 'Fleet Management Consulting Services', 'url' => 'contact.html'],
    ['text' => 'Transition To Zero-Emission Fleets', 'url' => '/services.html#tab-8'],
    ['text' => 'Truck Leasing & Fleet Expertise', 'url' => '/services.html#tab-9'],
    ['text' => 'Sales & Leaseback', 'url' => '/services.html#tab-4']
];

$tools_links = [
    ['text' => 'Resources for Drivers', 'url' => '#'],
    ['text' => 'Resources for Fleet Managers', 'url' => '#'],
    ['text' => 'NextLevel Insights', 'url' => '#'],
    ['text' => 'Services Locator', 'url' => '#']
];

$drive_links = [
    ['text' => 'Login', 'url' => '#'],
    ['text' => 'My Drive App', 'url' => '#']
];
?>

<footer class="bg-black text-white pt-10 pb-10">
  <div class="container">
    <div class="row g-5">
      <div class="col-md-2">
        <a href="/"><img src="images/nextfleet-logo-footer.jpg" alt="" width="200"></a>
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
            <li class="mb-2"><a href="<?= $about['url']; ?>" class="text-decoration-none text-gray hover-text-primary"><?= $about['text']; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-md-2 text-start text-uppercase">
        <h5 class="fw-normal">OUR SERVICES</h5>
        <ul class="list-unstyled text-gray">
          <?php foreach ($services_links as $service): ?>
            <li class="mb-2"><a href="<?= $service['url']; ?>" class="text-decoration-none text-gray hover-text-primary"><?= $service['text']; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-md-2 text-start text-uppercase">
        <h5 class="fw-normal">Tools</h5>
        <ul class="list-unstyled text-gray">
          <?php foreach ($tools_links as $tool): ?>
            <li class="mb-2"><a href="<?= $tool['url']; ?>" class="text-decoration-none text-gray hover-text-primary"><?= $tool['text']; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-md-2 text-start text-uppercase">
        <h5 class="fw-normal">My Drive</h5>
        <ul class="list-unstyled text-gray">
          <?php foreach ($drive_links as $drive): ?>
            <li class="mb-2"><a href="<?= $drive['url']; ?>" class="text-decoration-none text-gray hover-text-primary"><?= $drive['text']; ?></a></li>
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
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      prevEl: '.testimonials-swiper-button-prev', // Right arrow
      nextEl: '.testimonials-swiper-button-next', // Left arrow
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
    },
  });
</script>


<!-- Swiper Config -->
<script>
  const swiper2 = new Swiper("#promotionSwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".promotion-swiper-button-next",
      prevEl: ".promotion-swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      }
    }
  });
</script>