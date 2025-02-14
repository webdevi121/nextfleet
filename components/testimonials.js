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
    <div class="container overflow-hidden">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          ${testimonials
            .map(
              (testimonial) => `
                <div class="swiper-slide">
                  <div class="testimonial-card">
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
