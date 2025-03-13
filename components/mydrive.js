export function loadMyDrive() {
  document.getElementById('mydrive').innerHTML = `
    <div class="mydrive-container bg-black pt-5 position-relative">
        <div class="overflow-hidden h-100 position-absolute start-0 end-0 m-auto top-0">
            <img src="images/building-bg.jpg" class="m-auto d-flex">
        </div>
        <div class="container h-100 relative">
            <div class="d-flex flex-column flex-md-row gap-3 justify-content-center align-items-center h-100 ms-auto">
                <div class="w-30 position-relative h-100">
                    <div class="car-overlay position-absolute z-2"><img src="images/hilux.png" alt="Illustration" class="w-100"></div>
                </div>
                <div class="cards text-white text-center p-5 rounded-3 d-flex flex-column gap-4">
                    <div>
                        <img src="images/mobile-icon.png" alt="" width="80">
                    </div>
                    <h2 class="fs-1 fw-bold mb-0">MY DRIVE <span class="text-primary">APP</span></h2>
                    <div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</div>
                    <div>
                        <a href="" class="custom-btn">
                            <div class="d-flex align-items-center gap-2">
                                <div>Got To App</div>
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
                <div class="cards text-white text-center p-5 rounded-3 d-flex flex-column gap-4">
                    <div>
                        <img src="images/ipad-icon.png" alt="" width="173">
                    </div>
                    <h2 class="fs-1 fw-bold mb-0">MY DRIVE <span class="text-primary">PORTAL</span></h2>
                    <div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</div>
                    <div>
                        <a href="" class="custom-btn">
                            <div class="d-flex align-items-center gap-2">
                                <div>Login</div>
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
        </div>
    </div>
  `;
}
