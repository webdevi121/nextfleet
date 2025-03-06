export function loadTestimonials() {
  const testimonials = [
    {
      initial: 'E',
      name: 'Elizabeth',
      rating: '5 Stars',
      message:
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis in sapiente numquam dolores reiciendis sit repellendus minus blanditiis ducimus provident est laborum earum quibusdam iste fuga, mollitia possimus laudantium eaque?',
    },
    {
      initial: 'M',
      name: 'Maria S',
      rating: '5 Stars',
      message:
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis in sapiente numquam dolores reiciendis sit repellendus minus blanditiis ducimus provident est laborum earum quibusdam iste fuga, mollitia possimus laudantium eaque?',
    },
    {
      initial: 'J',
      name: 'John D',
      rating: '5 Stars',
      message:
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis in sapiente numquam dolores reiciendis sit repellendus minus blanditiis ducimus provident est laborum earum quibusdam iste fuga, mollitia possimus laudantium eaque?',
    },
    {
      initial: 'J',
      name: 'Jane D',
      rating: '5 Stars',
      message:
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis in sapiente numquam dolores reiciendis sit repellendus minus blanditiis ducimus provident est laborum earum quibusdam iste fuga, mollitia possimus laudantium eaque?',
    },
  ];

  document.getElementById('testimonials').innerHTML = `
  <div class="testimonials-section bg-white">
    <div class="container">
      <div class="text-center">
        <h2 class="text-uppercase fw-bold mb-5 fs-1">What Our <span class="text-primary">Customers</span> Say</h2>
      </div>
      <div class="h-100 position-relative">
        <div class="d-flex gap-3 h-100">
          <div class="w-60 position-relative">
            <img src="images/person.png" alt="" class="person-overlay">
          </div>

          <div class="overflow-hidden position-relative">
            <!-- Left Arrow -->
            <div class="swiper-button-prev"></div>
            <!-- Right Arrow -->
            <div class="swiper-button-next"></div>

            <div class="swiper-container">
              <div class="swiper-wrapper">
                ${testimonials
                  .map(
                    (testimonial) => `
                      <div class="swiper-slide">
                        <div class="testimonial-card bg-light">
                          <div class="d-flex align-items-center mb-3">
                            <div class="testimonials-initial">
                              ${testimonial.initial}
                            </div>
                            <div class="ms-3">
                              <div class="fw-bold fs-5">${testimonial.name}</div>
                              <div><img src="images/star-icons.png" alt="Ratings" width="135"></div>
                            </div>
                          </div>
                          <div>${testimonial.message}</div>
                        </div>
                      </div>`
                  )
                  .join('')}
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  `;

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
}
