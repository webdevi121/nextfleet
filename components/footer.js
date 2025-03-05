export function loadFooter() {
  document.getElementById('footer').innerHTML = `
    <footer class="bg-black text-white pt-10 pb-10">
      <div class="container">
        <div class="row g-5">
          <div class="col-md-2">
            <a href="/"><img src="images/nextfleet-logo-footer.png" alt="" width="200 d-block"></a>
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
            <h5>About</h5>
              <ul class="list-unstyled text-gray">
                <li>Who We Are</li>
                <li>Our Team</li>
                <li>Our Partners</li>
              </ul>
          </div>
          <div class="col-md-2 text-start text-uppercase">
            <h5>OUR SERVICES</h5>
            <ul class="list-unstyled text-gray">
              <li>Sales</li>
              <li>Leasing</li>
              <li>Management</li>
              <li>Project Marketing</li>
              <li>Advisory</li>
            </ul>
          </div>
          <div class="col-md-2 text-start text-uppercase">
            <h5>Tools</h5>
            <ul class="list-unstyled text-gray">
              <li>For Sale</li>
              <li>For Lease</li>
              <li>Recent Results</li>
            </ul>
          </div>
          <div class="col-md-2 text-start text-uppercase">
            <h5>My Drive</h5>
            <ul class="list-unstyled text-gray">
              <li>Sales</li>
              <li>Leasing</li>
              <li>Management</li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  `;
}
