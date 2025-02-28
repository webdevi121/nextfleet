export function loadMyDrive() {
  document.getElementById('mydrive').innerHTML = `
    <div class="mydrive-container bg-black pt-5 position-relative overflow-hidden">
        <img src="images/building-bg.jpg" class="position-absolute start-0 end-0 m-auto">
        <div class="container">
            <div class="d-flex gap-3 justify-content-center items-center">
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
