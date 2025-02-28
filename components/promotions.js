export function loadPromotions() {
  const cardData = [
    {
      dealTitle: 'Deal One!',
      offerNumber: 1,
      imgSrc: 'images/placeholder-1.png',
      subText:
        'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau',
    },
    {
      dealTitle: 'Deal Two!',
      offerNumber: 2,
      imgSrc: 'images/placeholder-2.png',
      subText:
        'Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.',
    },
    {
      dealTitle: 'Deal Three!',
      offerNumber: 3,
      imgSrc: 'images/placeholder-4.png',
      subText:
        'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
    },
  ];

  document.getElementById('promotions').innerHTML = `
    <div class="pt-10 pb-10 bg-primary">
        <div class="container">
            <div class="text-center text-white mx-auto row g-3 mb-5" style="width: 60%">
                <h2 class="text-uppercase fw-bold fs-1">Deal Promotions For The Fleet</h2>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatiis.</p>
            </div>
            <div class="row align-items-start row-cols-1 row-cols-md-3 g-4">
                ${
                  cardData
                    .map(
                      (data) => `
                      <div>
                        <div class="cards text-white p-4 border-top border-white border-2 position-relative">
                            <div class="text-uppercase fw-bold fs-4 bg-primary px-3 py-2 rounded-5 text-center shadow-lg position-absolute top-3 ms-n3" style="left: -2rem">${data.dealTitle}</div>
                            <div>
                                <img src="${data.imgSrc}" alt="" class="d-block m-auto">
                            </div>
                            <div class="row gap-2">
                                <h2 class="fw-bold text-primary mb-0 fs-4">OFFER ${data.offerNumber}</h2>
                                <div class="fs-4 fw-bold text-uppercase">Novated Leasing <span class="block">Solutions</span></div>
                                <div class="small">${data.subText}</div>
                            </div>
                        </div>
                      </div>
                    `
                    )
                    .join('') // Join the array of cards into a single string
                }
            </div>
        </div>
    </div>
`;
}
