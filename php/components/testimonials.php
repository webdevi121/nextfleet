<?php
  // Define testimonials array
  $testimonials = [
    [
      'initial' => 'E',
      'name' => 'Elizabeth',
      'rating' => '5 Stars',
      'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis in sapiente numquam dolores reiciendis sit repellendus minus blanditiis ducimus provident est laborum earum quibusdam iste fuga, mollitia possimus laudantium eaque?',
    ],
    [
      'initial' => 'M',
      'name' => 'Maria S',
      'rating' => '5 Stars',
      'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis in sapiente numquam dolores reiciendis sit repellendus minus blanditiis ducimus provident est laborum earum quibusdam iste fuga, mollitia possimus laudantium eaque?',
    ],
    [
      'initial' => 'J',
      'name' => 'John D',
      'rating' => '5 Stars',
      'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis in sapiente numquam dolores reiciendis sit repellendus minus blanditiis ducimus provident est laborum earum quibusdam iste fuga, mollitia possimus laudantium eaque?',
    ],
    [
      'initial' => 'J',
      'name' => 'Jane D',
      'rating' => '5 Stars',
      'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis in sapiente numquam dolores reiciendis sit repellendus minus blanditiis ducimus provident est laborum earum quibusdam iste fuga, mollitia possimus laudantium eaque?',
    ],
  ];
?>

<div class="testimonials-section bg-white">
  <div class="container">
    <div class="h-100 position-relative">
      <div class="d-flex gap-3 h-100">
        <div class="d-none d-sm-block w-60 position-relative">
          <img src="images/person.png" alt="" class="person-overlay">
        </div>

        <div class="overflow-hidden position-relative">
          <div>
            <div class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2">
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>Testimonials</span>
            </div>
            <h2 class="text-uppercase fw-bold mb-5 fs-1">What Our <span class="text-primary">Customers</span> Say</h2>
          </div>
          
          <div>
            <!-- Left Arrow -->
            <div class="swiper-button-prev"></div>
            <!-- Right Arrow -->
            <div class="swiper-button-next"></div>

            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php foreach ($testimonials as $testimonial): ?>
                  <div class="swiper-slide">
                    <div class="testimonial-card bg-light">
                      <div class="d-flex align-items-center mb-3">
                        <div class="testimonials-initial">
                          <?= $testimonial['initial']; ?>
                        </div>
                        <div class="ms-3">
                          <div class="fw-bold fs-5"><?= $testimonial['name']; ?></div>
                          <div><img src="images/star-icons.png" alt="Ratings" width="135"></div>
                        </div>
                      </div>
                      <div><?= $testimonial['message']; ?></div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Initialize Swiper with navigation
  const swiper = new Swiper('.swiper-container', {
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
