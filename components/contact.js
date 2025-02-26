export function loadContact() {
  document.getElementById('contact').innerHTML = `
        <div class="contact-us">
            <div class="text-center img-placeholder">
                <img src="images/cars-list.png" alt="">
            </div>
            <div class="text-center py-5 d-flex flex-column gap-5 contact-content">
                <h2 class="text-uppercase p-0 m-0">Take your fleet to the next level with <span class="primary-color">nextfleet australia</span></h2>
                <div>Unlock smarter fleet management services, boost efficiency, reduce costs, and optimise performance with our tailored solutions.</div>
                <div>
                    <a class="primary-btn">Contact Us</a>
                </div>
            </div>
        </div>
    `;
}
