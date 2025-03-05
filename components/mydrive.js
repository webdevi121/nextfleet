export function loadMyDrive() {
  document.getElementById('mydrive').innerHTML = `
    <div class="mydrive-container bg-black pt-5 position-relative">
        <div class="overflow-hidden h-100 position-absolute start-0 end-0 m-auto top-0">
            <img src="images/building-bg.jpg" class="m-auto d-flex">
        </div>
        <div class="container h-100 relative">
            <div class="d-flex gap-3 justify-content-center align-items-center h-100 ms-auto">
                <div class="w-30 position-relative h-100">
                    <div class="car-overlay position-absolute z-2"><img src="images/hilux.png" alt="Illustration" class="w-100"></div>
                </div>
                <div class="cards text-white text-center p-5 rounded-3 d-flex flex-column gap-4">
                    <div>
                        <img src="images/mobile-icon.png" alt="" width="80">
                    </div>
                    <h2 class="fs-1 fw-bold mb-0">MY DRIVE <span class="text-primary">APP</span></h2>
                    <div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</div>
                    <a href="" class="btn-secondary">Got To App</a>
                </div>
                <div class="cards text-white text-center p-5 rounded-3 d-flex flex-column gap-4">
                    <div>
                        <img src="images/mobile-icon.png" alt="" width="80">
                    </div>
                    <h2 class="fs-1 fw-bold mb-0">MY DRIVE <span class="text-primary">APP</span></h2>
                    <div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</div>
                    <a href="" class="btn-secondary">Got To App</a>
                </div>
            </div>
        </div>
    </div>
  `;
}
