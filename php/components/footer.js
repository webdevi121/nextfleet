export function loadFooter() {
  document.getElementById('footer').innerHTML = `
    <footer class="bg-black text-white pt-10 pb-10">
      <div class="container">
        <div class="row g-2 g-sm-5">
          <div class="col-md-2">
            <a href="/"><img src="images/nextfleet-logo-footer.png" alt="" width="200"></a>
          </div>
          <div class="col-md-2 text-gray">
            <ul class="list-unstyled text-start">
              <li class="mb-2 d-flex gap-3"><span><img src="images/icon-location.png" alt="" width="15"></span><span>Address Goes Here 123 Smith Street</span></li>
              <li class="mb-2 d-flex gap-3"><span><img src="images/icon-phone.png" alt="" width="20"></span>03 9361 6333</li>
              <li class="mb-2 d-flex gap-3"><span><img src="images/icon-mail.png" alt="" width="22"></span>info@nextfleet.com.au</li>
            </ul>
            <div class="col d-flex gap-3">
              <a href="https://facebook.com" target="_blank"><img src="images/icon-facebook.png" alt="" width="34"></a>
              <a href="https://instagram.com" target="_blank"><img src="images/icon-instagram.png" alt="" width="34"></a>
              <a href="https://youtube.com" target="_blank"><img src="images/icon-youtube.png" alt="" width="34"></a>
              <a href="https://linkedin.com" target="_blank"><img src="images/icon-linkedin.png" alt="" width="34"></a>
            </div>
          </div>
          <div class="col-md-2 text-start text-uppercase">
            <h5 class="fw-normal">About</h5>
              <ul class="list-unstyled text-gray">
                <li>Who We Are</li>
                <li>Our Team</li>
                <li>Our Partners</li>
              </ul>
          </div>
          <div class="col-md-2 text-start text-uppercase">
            <h5 class="fw-normal">OUR SERVICES</h5>
            <ul class="list-unstyled text-gray">
              <li>Sales</li>
              <li>Leasing</li>
              <li>Management</li>
              <li>Project Marketing</li>
              <li>Advisory</li>
            </ul>
          </div>
          <div class="col-md-2 text-start text-uppercase">
            <h5 class="fw-normal">Tools</h5>
            <ul class="list-unstyled text-gray">
              <li>For Sale</li>
              <li>For Lease</li>
              <li>Recent Results</li>
            </ul>
          </div>
          <div class="col-md-2 text-start text-uppercase">
            <h5 class="fw-normal">My Drive</h5>
            <ul class="list-unstyled text-gray">
              <li>Sales</li>
              <li>Leasing</li>
              <li>Management</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="d-flex justify-content-end mt-5">
            <a href="https://infusion121.com.au" target="_blank" class="d-block">
              <img src="images/i121-logo.png" alt="Digital Agency" width="237" class="d-block">
            </a>
          </div>
        </div>
      </div>
    </footer>
  `;
}
