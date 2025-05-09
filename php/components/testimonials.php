<?php
  // Define testimonials array
  $testimonials = [
    [
      'initial' => 'N',
      'name' => 'Norman Rhodes - General Manager, TRHC PTY LTD',
      'rating' => '5 Stars',
      'message' => "<p><strong>We can also continue using the existing referral on our web.</strong></p>NextFleet came to us and showed us the benefits of leveraging an outsourced function for fleet management. We run forklifts, trailers and light commercial vehicles, and they’re a critical part of what we do. We’d never leased or outsourced the management of our vehicles before; we didn’t know that was an option. So when NextFleet demonstrated that it was more cost-effective and resource-efficient to lease our vehicles rather than buy them, we were pleasantly surprised. NextFleet is a great partner, and they really understand our business.",
    ],
    [
      'initial' => 'E',
      'name' => 'Existing Client',
      'rating' => '5 Stars',
      'message' => "Thank you both so much for your quick response and for always making it so effortless to work with the NextFleet team. Your attention to detail and commitment to looking after our best interests do not go unnoticed – it's truly appreciated!",
    ],
    [
      'initial' => 'R',
      'name' => 'Referral from existing Client',
      'rating' => '5 Stars',
      'message' => 'I am introducing you to NextFleet. The team brings a style that engages the operational teams, develops, presents the financial picture and delivers a strong fleet solution methodology for MDs, Boards and supporting CFOs in making informed decisions.',
    ]
  ];
?>

<div class="testimonials-section bg-white">
  <div class="container position-relative">
        <div class="d-none d-sm-block w-60 position-absolute person-overlay">
          <img src="images/person.png" alt="" class="w-100">
        </div>
        <div class="row">
          <div class="col-sm-8 ms-auto">
            <div>
              <div class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2">
                <img src="images/iconNf.png" alt="icon" width="14" />
                <span>Testimonials</span>
              </div>
              <h2 class="text-uppercase fw-bold mb-5 fs-1">What Our <span class="text-primary">Customers</span> Say</h2>
            </div>
          </div>
          <div class="col-sm-8 ms-auto">
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
                  
                <div class="swiper-pagination mt-4 d-sm-none"></div>
                <div class="d-none d-sm-block">
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
</div>
