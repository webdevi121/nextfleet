<?php
  // Define promotion card data array
  $cardData = [
    [
      'dealTitle' => 'Deal One!',
      'offerNumber' => 1,
      'imgSrc' => 'images/placeholder-1.png',
      'subText' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau',
    ],
    [
      'dealTitle' => 'Deal Two!',
      'offerNumber' => 2,
      'imgSrc' => 'images/placeholder-2.png',
      'subText' => 'Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.',
    ],
    [
      'dealTitle' => 'Deal Three!',
      'offerNumber' => 3,
      'imgSrc' => 'images/placeholder-4.png',
      'subText' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
    ],
  ];
?>

<div class="bg-primary position-relative overflow-hidden">
  <div class="position-absolute left-0 top-0 w-full w-100 z-1" style="transform: scale(1.3); left: -170px;">
    <svg viewBox="0 0 20 20" fill="#DC0000" xmlns="http://www.w3.org/2000/svg" class="w-100">
      <path d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z"/>
      <path d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z" />
    </svg>
  </div>
  <div class="pt-10 pb-10 container z-2 position-relative">
    <div class="text-center text-white mx-auto row g-3 mb-5">
      <div class="col-12 col-sm-6 mx-auto"> <!-- Responsive width -->
        <h2 class="text-uppercase fw-bold fs-1">Deal Promotions For The Fleet</h2>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatiis.</p>
      </div>
    </div>
    <div class="row align-items-start row-cols-1 row-cols-md-3 g-4">
      <?php foreach ($cardData as $data): ?>
        <div>
          <div class="cards text-white p-4 pb-5 border-top border-white border-2 position-relative">
            <div class="text-uppercase fw-bold fs-4 bg-primary px-3 py-2 rounded-5 text-center shadow-lg position-absolute top-3 ms-n3" style="left: -1rem"><?= $data['dealTitle']; ?></div>
            <div>
              <img src="<?= $data['imgSrc']; ?>" alt="" class="d-block m-auto">
            </div>
            <div class="row gap-2">
              <h2 class="fw-bold text-primary mb-0 fs-4">
                OFFER <?= $data['offerNumber']; ?>
              </h2>
              <div class="fs-4 fw-bold text-uppercase">Novated Leasing
                <span class="d-flex gap-2">
                  <span>Solutions </span>
                  <div class="flex-grow-1">
                    <svg width="20" height="20" viewBox="0 0 15 15" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z"/>
                      <path d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z" />
                    </svg>
                  </div>
                </span>
              </div>
              <div class="small"><?= $data['subText']; ?></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

