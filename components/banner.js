export function loadBanner() {
  document.getElementById('banner').innerHTML = `
    <div class="banner-section">
        <div class="background-overlay">
            <img src="images/building-bg.jpg">
        </div>
        
      <div class="container position-relative z-2 pb-5">
        <div class="banner-item">
            <div class="position-relative h-100">
                <div class="w-50">
                    <h1>FLEET MANAGEMENT SERVICES SIMPLIFIED</h1>
                    <p>At NextFleet we seamlessly manage, support, and optimise your corporate fleet management</p>
                    <div>
                        <form class="d-flex">
                            <input type="email" class="form-control me-2" placeholder="Enter your email" required>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="partner-logos">
                    <ul>
                        <li><img src="images/logos-1.png" alt="Logo"></li>
                        <li><img src="images/logos-2.png" alt="Logo"></li>
                        <li><img src="images/logos-3.png" alt="Logo"></li>
                    </ul>
                </div>
                <div class="chevron">
                    <img src="images/chevron.png" alt="chevron">
                </div>
                <div class="the-car">
                    <img src="images/red-car.png" alt="">
                </div>
            </div>
        </div>
      </div>

    </div>
  `;
}
