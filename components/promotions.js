export function loadPromotions() {
  document.getElementById('promotions').innerHTML = `
    <div class="bg-primary pt-5">
        <div class="container">
            <div class="text-center text-white">
                <h2>Deal Promotions For The Fleet</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatiis.</p>
            </div>
            <div class="cards text-white p-4 border-top border-white border-2">
                <div>
                    <img src="images/placeholder-1.png" alt="" class="d-block m-auto">
                </div>
                <h2 class="fw-bold text-primary">OFFER 1</h2>
                <div class="fs-4 fw-bold text-uppercase">Novated Leasing <span class="block">Solutions</span></div>
                <div class="small">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau</div>
            </div>
        </div>
    </div>
  `;
}
