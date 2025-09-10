<?php
// Define footer data as arrays
$contact_info = [
    ['icon' => 'images/icon-location.png', 'text' => 'Level 1, Building 5/747 Lytton Rd, Murarrie QLD 4172'],
    ['icon' => 'images/icon-phone.png', 'text' => '<a href="tel:1800 297 900" class="text-gray hover-text-primary">1800 297 900</a>'],
    ['icon' => 'images/icon-mail.png', 'text' => '<a href="mailto:info@nextfleet.net.au" class="text-gray hover-text-primary">info@nextfleet.net.au</a>']
];

$social_links = [
    ['url' => 'https://www.facebook.com/NextFleetAus/', 'icon' => 'images/icon-facebook.png'],
    ['url' => 'https://www.instagram.com/nextfleet/', 'icon' => 'images/icon-instagram.png'],
    ['url' => 'https://www.youtube.com/channel/UCPUJAOkdSmRQQ-QhKU91vWw', 'icon' => 'images/icon-youtube.png'],
    ['url' => 'https://www.linkedin.com/company/nextfleetaustralia/', 'icon' => 'images/icon-linkedin.png']
];

$about_links = [
    ['text' => 'Who We Are', 'url' => 'about-us.html#overview'],
    ['text' => 'Our Expertise', 'url' => '/services.html'],
    ['text' => 'Why Choose Us', 'url' => 'about-us.html#why-choose-us'],
    ['text' => 'Career Opportunities', 'url' => 'about-us.html#career-section'],
];

$lease_links = [
    ['text' => 'Lease Deals', 'url' => '/lease-deals.html'],
];

$services_links = [
    ['text' => 'Fleet Management Solutions', 'url' => '/fleet-management-solutions.html'],
    ['text' => 'Vehicle Fleet Leasing', 'url' => '/leasing-solutions.html'],
    ['text' => 'Fleet Management Consulting Services', 'url' => '/consulting-services.html'],
    ['text' => 'Transition To Zero-Emission Fleets', 'url' => '/sustainable-fleets.html'],
    ['text' => 'Truck Leasing & Fleet Expertise', 'url' => '/truck-leasing.html'],
    ['text' => 'Not-For-Profit Fleets', 'url' => '/not-for-profit-fleets.html'],
    ['text' => 'Sales & Leaseback', 'url' => '/sales-leaseback.html']
];

$tools_links = [
    ['text' => 'Resources for Drivers', 'url' => '/resources-drivers.html'],
    ['text' => 'Resources for Fleet Managers', 'url' => '/resources-fleet-managers.html'],
    ['text' => 'NextLevel Insights', 'url' => '/nextlevel-insights.html'],
    ['text' => 'Services Locator', 'url' => '/services-locator.html']
];

$drive_links = [
    ['text' => 'Login', 'url' => 'https://portalnextfleet.b2clogin.com/61a71dbc-f1d9-4418-b8a3-4ad9708a0066/b2c_1_portalsignup/oauth2/v2.0/authorize?client_id=178ef4a0-d066-4b31-b640-0576c9d57f11&redirect_uri=https%3A%2F%2Fwww.nextfleet.net.au%2Fsignin-aad-b2c_1&response_type=code%20id_token&scope=openid&state=OpenIdConnect.AuthenticationProperties%3DJRD1UXX2uyGhkD6S7w417ry1F7o3exgPgnsAWSSiywFCTamewIV-MtIcsMslr6be4Kla_ZqAA-RvrfSrpd1mZ7HAIfqmWLwNhRghmwQkoBDTbXC08TyZQbaj2Mjqzg-BjJ1UMVNbt9ue7JFF_zAag_T6ccxTsODDIubCDiNTJuUnzpOg58c2Mr0xDgtUBWv73G5NHLXooOhx94Z46vk96Az8t0UDThSFGrbBwPEZK1ZzxAagAR5HIR7IO-e6H_easRnlyhPnOepeyGJ-4OA3IoG8aP2db2Lp2naoxF15t_-mMjd4jmcEekZG-8NT8hVYIL57NnbSbD_u1vblaCFkKecP4UAmRhW6WK2mZyVpTZqDfsvUI9s7fiv5d-sjnzPb9HzpqQ7Cgv7oXJ0lVdcNf6YQpYUDYoapVr7l2dg-egyy-rtRuv3BWBkYuLMqfp6bRavZp4HEDHnXawGt-RPeWqojVEobWv2sxXjbW_RpUvsWZ8Z_lnT67JaP7DX1hx4EsWAPRVSkb65mw8Zu4PdZfa6HLmt7_l0LobtTfzVK-GcT63ni-Tl7ajGsUljLZNyZyouecJw77pPqmgWsTV1oNrF1_ujbG-sds57aWyYfax-OyiD-hs0PAhYE-AArUmOjHly_BFxHJ0vOJhIkrG4sCaenEV3TKmri6Jk0BLSEoZvVPABo0Wna9jRbCpmltCw2&response_mode=form_post&nonce=638817580462759025.YTc0Yzk1MDQtNGQyNS00MGNlLTlkM2YtNzZmOTUwYTg2NmZhYzNjZjk5OGEtMmVkOS00ZGY1LThmOTctZWM5N2YzMDE2YWRk&ui_locales=en-US&x-client-SKU=ID_NET472&x-client-ver=6.35.0.0'],
    ['text' => 'My Drive App', 'url' => '/app.html']
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
      <div class="col-md-2 text-start text-uppercase pe-0">
        <h5 class="fw-normal">About</h5>
        <ul class="list-unstyled text-gray">
          <?php foreach ($about_links as $about): ?>
            <li class="mb-2"><a href="<?= $about['url']; ?>" class="text-decoration-none text-gray hover-text-primary"><?= $about['text']; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-md-2 text-start text-uppercase pe-0">
        <ul class="list-unstyled text-gray">
          <?php foreach ($lease_links as $lease): ?>
            <li class="mb-2"><a href="<?= $lease['url']; ?>" class="fw-normal h5 text-decoration-none text-white"><?= $lease['text']; ?></a></li>
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
        <h5 class="fw-normal">Resources</h5>
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
    <div class="row mt-5">
      <div class="col-sm-6 text-start d-sm-flex align-items-center">
            <span>© NextFleet Australia Pty Ltd. All rights reserved</span> <span class="ps-2 pe-2">|</span> <a href="privacy.html" class="text-gray text-decoration-none">Privacy Policy</a>
      </div>
      <div class="col-sm-6 mt-3 mt-sm-0">
        <div class="d-sm-flex justify-content-end">
          <a href="https://infusion121.com.au" target="_blank" class="d-block">
            <img src="images/i121-logo.png" alt="Digital Agency" width="237" class="d-block">
          </a>
        </div>
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
    // autoplay: {
    //   delay: 3000, // time in milliseconds between slides (3 seconds)
    //   disableOnInteraction: false, // keeps autoplay active after user interaction
    // },
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

<script>
  let swiper3;

  function initMobileSwiper() {
    if (window.innerWidth < 768 && !swiper3) { // Only initialize if screen < 768px
      swiper3 = new Swiper("#promotionSwiperMobileOnly", {
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
      });
    } else if (window.innerWidth >= 768 && swiper3) {
      swiper3.destroy(true, true); // Destroy Swiper on larger screens
      swiper3 = undefined;
    }
  }

  // Initialize on page load
  window.addEventListener('load', initMobileSwiper);

  // Re-check on window resize
  window.addEventListener('resize', initMobileSwiper);
</script>


<!-- Swiper Init -->
<script>
  const parnerSwiper = new Swiper('.partner-swiper', {
    loop: true,
    slidesPerView: 5,
    spaceBetween: 30,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    breakpoints: {
      320: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 6,
        spaceBetween: 30,
      },
    },
  });
</script>
