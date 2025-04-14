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


        <div class="row position-relative">
          <div class="col-4">
          <div class="d-none d-sm-block w-60 position-relative">
            <img src="images/person.png" alt="" class="person-overlay">
          </div>
          </div>
          <div class="col-8 ms-auto">
            <div>
              <div class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2">
                <img src="images/iconNf.png" alt="icon" width="14" />
                <span>Testimonials</span>
              </div>
              <h2 class="text-uppercase fw-bold mb-5 fs-1">What Our <span class="text-primary">Customers</span> Say</h2>
            </div>
          </div>
          <div class="col-8 ms-auto">
            <div class="position-relative">
              <div id="testimonials-swiper" class="swiper-container overflow-hidden">
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
                  
                <!-- Left Arrow -->
                <div class="swiper-button-prev testimonials-swiper-button-prev"></div>
                <!-- Right Arrow -->
                <div class="swiper-button-next testimonials-swiper-button-next"></div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
