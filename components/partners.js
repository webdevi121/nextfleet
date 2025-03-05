export function loadPartners() {
  const images = [
    'ampol.png',
    'bp.png',
    'drivercare.png',
    'euclidic.png',
    'gps-i.png',
    'iss.png',
    'Shell-Logo.png',
  ];

  // Create image elements using a loop
  let imagesHTML = '';
  for (let i = 0; i < images.length; i++) {
    imagesHTML += `<img src="images/${images[i]}" alt="${images[i].replace('.png', '')}" class="partner-logo">`;
  }

  // Insert the images into the container
  const partnersContainer = document.getElementById('partners');
  partnersContainer.innerHTML = `
    <div class="partners-container pt-10 pb-10 bg-white">
      <div class="container text-center">
        <h2 class="text-uppercase fw-bold mb-5">Our Partners</h2>
        <div class="marquee">
          <div class="marquee-content">
            ${imagesHTML}
          </div>
        </div>
      </div>
    </div>
  `;
}
