export function loadContact() {
  document.getElementById('contact').innerHTML = `
        <div class="contact-us">
            <div class="text-center img-placeholder overflow-hidden">
                <img src="images/cars-list.png" alt="">
            </div>
            <div class="text-center py-5 d-flex flex-column gap-4 contact-content">
                <h2 class="text-uppercase p-0 m-0 fs-1">Take your fleet to the next level with <span class="primary-color">nextfleet australia</span></h2>
                <div>Unlock smarter fleet management services, boost efficiency, reduce costs, and optimise performance with our tailored solutions.</div>
                <div>
                <a href="" class="text-uppercase fw-bold text-white btn btn-primary">
                    <div class="d-flex align-items-center gap-2">
                    <div>Contact Us</div>
                    <div class="flex-grow-1">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z"/>
                        <path d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z" />
                        </svg>
                    </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    `;
}
