export function loadBanner() {
  document.getElementById('banner').innerHTML = `
    <div class="banner-section position-relative w-100">
        <div class="position-absolute top-0 left-0 w-100 h-100 z-1">
            <img src="images/building-bg.jpg" alt="" class="w-100 auto">
        </div>
        
      <div class="container position-relative z-2">
        <div class="banner-item border border-2 border-danger text-white p-5">
            <h1>FLEET MANAGEMENT SERVICES SIMPLIFIED</h1>
            <p>At NextFleet we seamlessly manage, support, and optimise your corporate fleet management</p>
        </div>
      </div>

    </div>
  `;
}
