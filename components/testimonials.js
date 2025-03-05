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
    <div class="container overflow-hidden">
      <div class="text-center">
        <h2 class="text-uppercase fw-bold mb-5">What Our <span class="text-primary">Customers</span> Say</h2>
      </div>
      <div class="container h-100 relative">
      <div class="d-flex gap-3 justify-content-center align-items-center h-100">
        <div class="w-30 position-relative h-100">
          <div class="person-overlay position-absolute z-2"><img src="images/person.png" alt="" width="600"></div>
        </div>
        <div class="overflow-hidden">
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
                          <div>${testimonial.name}</div>
                          <div>${testimonial.rating}</div>
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

  // Initialize Swiper with two items per slide
  const swiper = new Swiper('.swiper-container', {
    slidesPerView: 2, // Show 2 items per slide
    spaceBetween: 30, // Space between slides
    loop: true, // Enable looping
    breakpoints: {
      768: {
        slidesPerView: 2, // Show 1 item per slide on mobile
      },
    },
  });
}
