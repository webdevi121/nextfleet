<?php
  // Define promotion card data array
  $cardData = [
    [
      'dealTitle' => 'Deal One!',
      'offerNumber' => 1,
      'imgSrc' => 'images/placeholder-1.png',
      'vehicleName' => 'Toyota Hybrid',
      'vehicleDescription'=>'RAV4 GX Wagon 5dr CVT 6sp 2WD 2.5i/88kW Hybrid',
      'pricing' => 'From $180/wk* <br/>Incl. budgeted running costs',
    ],
    [
      'dealTitle' => 'Deal Two!',
      'offerNumber' => 2,
      'imgSrc' => 'images/placeholder-2.png',
       'vehicleName' => 'Kia Hybrid',
      'vehicleDescription'=>'Sportage HEV  Wagon 5dr Spts Auto 6sp FWD 1.6T/44kW Hybrid',
      'pricing' => 'From $195/wk* <br/>Incl. budgeted running costs',
    ],
    [
      'dealTitle' => 'Deal Three!',
      'offerNumber' => 3,
      'imgSrc' => 'images/placeholder-4.png',
       'vehicleName' => 'Isuzu Diesel',
      'vehicleDescription'=>'ISUZU RG D-MAX SX UTILITY Crew Cab 4dr Spts Auto 6sp 4x4 1065kg 3.0DT',
      'pricing' => 'From $183/wk* <br/> Incl. budgeted running costs',
    ],
    [
      'dealTitle' => 'Deal Four!',
      'offerNumber' => 4,
      'imgSrc' => 'images/placeholder-4.png',
       'vehicleName' => 'Toyota',
      'vehicleDescription'=>'Corolla Ascent Sport Hatchback Hybrid 5dr E-CVT 1sp 1.8i/70kW Hybrid',
      'pricing' => 'From $155/ wk* Incl. budgeted running costs',
    ],
    [
      'dealTitle' => 'Deal Five!',
      'offerNumber' => 5,
      'imgSrc' => 'images/placeholder-4.png',
       'vehicleName' => 'Hyundai',
      'vehicleDescription'=>'Kona SX2.V2 Electric Wagon 5dr Reduction Gear 1sp 2WD DC99kW',
      'pricing' => 'From $189/ wk* Incl. budgeted running costs',
    ],
    [
      'dealTitle' => 'Deal Six!',
      'offerNumber' => 6,
      'imgSrc' => 'images/placeholder-4.png',
       'vehicleName' => 'Haval',
      'vehicleDescription'=>'Jolion Premium Hybrid Wagon 5dr DHT 2sp 1.5i/115kW',
      'pricing' => 'From $158/ wk* Incl. budgeted running costs',
    ],
    [
      'dealTitle' => 'Deal Seven!',
      'offerNumber' => 7,
      'imgSrc' => 'images/placeholder-4.png',
       'vehicleName' => 'Ford',
      'vehicleDescription'=>'Ranger XL Utility Hi-Rider Pick-up Double Cab Auto 6sp 4x2 1135kg 2.0DT',
      'pricing' => 'From $186/ wk* Incl. budgeted running costs',
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
        <h2 class="text-uppercase fw-bold fs-1">Discover Exceptional Vehicle Lease Deals Today!</h2>
        <p>Empower your business fleet with our competitive leasing options. Affordable, flexible, and built for your needs.</p>
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
                 <?= $data['vehicleName']; ?>
              </h2>
              <div class="fs-6"> <?= $data['vehicleDescription']; ?>
                <!-- <span class="d-flex gap-2">
                  <div class="flex-grow-1">
                    <svg width="20" height="20" viewBox="0 0 15 15" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z"/>
                      <path d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z" />
                    </svg>
                  </div>
                </span> -->
              </div>
              <div class="fs-5 fw-bold"><?= $data['pricing']; ?></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

