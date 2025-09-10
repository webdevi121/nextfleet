<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php
$leaseInclusions = [
    ['icon' => 'images/nf-icon-1.png', 'label' => 'Fuel'],
    ['icon' => 'images/nf-icon-2.png', 'label' => 'Finance'],
    ['icon' => 'images/nf-icon-4.png', 'label' => 'Registration'],
    ['icon' => 'images/nf-icon-71.png', 'label' => '4 replacement <br>tyres'],
    ['icon' => 'images/nf-icon-73.png', 'label' => '24/7 Accident <br>Management Service'],
    ['icon' => 'images/nf-icon-75.png', 'label' => '75,000-kilometre limit <br>over the term of the lease'],
    ['icon' => 'images/nf-icon-74.png', 'label' => '24-Hour Roadside <br> Assistance'],
    ['icon' => 'images/nf-icon-76.png', 'label' => 'Online <br>Dashboard'],
    ['icon' => 'images/nf-icon-6.png', 'label' => 'Maintenance <br>& Servicing'],
];
?>


    <?php loadComponent("header");?>

        <div>
            

            <?php
            // Define promotion card data array
            $cardData = [
                [
                'dealTitle' => 'Deal One!',
                'offerNumber' => 1,
                'imgSrc' => 'images/nf-img-19.png',
                'vehicleName' => 'Toyota Hybrid',
                'vehicleDescription'=>'RAV4 GX Wagon 5dr CVT 6sp 2WD 2.5i/88kW Hybrid',
                'pricing' => 'From $180/wk* <br/>Incl. budgeted running costs',
                ],
                [
                'dealTitle' => 'Deal Two!',
                'offerNumber' => 2,
                'imgSrc' => 'images/nf-img-20.png',
                'vehicleName' => 'Kia Hybrid',
                'vehicleDescription'=>'Sportage HEV  Wagon 5dr Spts Auto 6sp FWD 1.6T/44kW Hybrid',
                'pricing' => 'From $195/wk* <br/>Incl. budgeted running costs',
                ],
                [
                'dealTitle' => 'Deal Three!',
                'offerNumber' => 3,
                'imgSrc' => 'images/nf-img-21.png',
                'vehicleName' => 'Isuzu Diesel',
                'vehicleDescription'=>'ISUZU RG D-MAX SX UTILITY Crew Cab 4dr Spts Auto 6sp 4x4 1065kg 3.0DT',
                'pricing' => 'From $183/wk* <br/> Incl. budgeted running costs',
                ],
                [
                'dealTitle' => 'Deal Four!',
                'offerNumber' => 4,
                'imgSrc' => 'images/nf-img-22.png',
                'vehicleName' => 'Toyota',
                'vehicleDescription'=>'Corolla Ascent Sport Hatchback Hybrid 5dr E-CVT 1sp 1.8i/70kW Hybrid',
                'pricing' => 'From $155/ wk* Incl. budgeted running costs',
                ],
                [
                'dealTitle' => 'Deal Five!',
                'offerNumber' => 5,
                'imgSrc' => 'images/nf-img-23.png',
                'vehicleName' => 'Hyundai',
                'vehicleDescription'=>'Kona SX2.V2 Electric Wagon 5dr Reduction Gear 1sp 2WD DC99kW',
                'pricing' => 'From $189/ wk* Incl. budgeted running costs',
                ],
                [
                'dealTitle' => 'Deal Six!',
                'offerNumber' => 6,
                'imgSrc' => 'images/nf-img-24.png',
                'vehicleName' => 'Haval',
                'vehicleDescription'=>'Jolion Premium Hybrid Wagon 5dr DHT 2sp 1.5i/115kW',
                'pricing' => 'From $158/ wk* Incl. budgeted running costs',
                ],
                [
                'dealTitle' => 'Deal Seven!',
                'offerNumber' => 7,
                'imgSrc' => 'images/nf-img-25.png',
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

                <div class="pt-10 pb-5 container z-2 position-relative">
                    <div class="row">
                        <div class="col-12">
                        <div class="text-center text-white mx-auto row g-3 mb-5">
                            <div class="col-12 col-sm-6 mx-auto">
                            <h2 class="text-uppercase fw-bold fs-1">Discover Exceptional Vehicle Lease Deals Today!</h2>
                            <p>Empower your business fleet with our competitive leasing options. Affordable, flexible, and built for your needs.</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-12">
                        <div class="position-relative">
                            <!-- Swiper Container -->
                            <div id="promotionSwiperMobileOnly" class="overflow-hidden">
                            <div class="swiper-wrapper mobile-swiper-only">
                                <?php foreach ($cardData as $data): ?>
                                <div class="swiper-slide">
                                    <div class="cards text-white ps-4 pe-4 pt-4 pb-8-custom border-top border-white border-2 position-relative h-100">
                                    <div class="text-uppercase fw-bold fs-4 bg-primary px-3 py-2 rounded-5 text-center shadow-lg position-absolute top-3 ms-n3" style="left: -1rem"><?= $data['dealTitle']; ?></div>
                                    <div><img src="<?= $data['imgSrc']; ?>" alt="" class="d-block m-auto w-100"></div>
                                    <div class="row gap-2">
                                        <h2 class="fw-bold text-primary mb-0 fs-4"><?= $data['vehicleName']; ?></h2>
                                        <div class="fs-6"><?= $data['vehicleDescription']; ?></div>
                                        <div class="fs-5 fw-bold"><?= $data['pricing']; ?></div>
                                    </div>
                                    <div class="custom-position">
                                        <a href="/toyota-hybrid.html" class="btn btn-primary text-white fw-bold">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="text-uppercase">Enquire Now</div>
                                            <div class="flex-grow-1">
                                            <svg
                                                width="15"
                                                height="15"
                                                viewBox="0 0 15 15"
                                                fill="currentColor"
                                            >
                                                <path
                                                d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z"
                                                />
                                                <path
                                                d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z"
                                                />
                                            </svg>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Swiper Pagination + Navigation -->
                            <div class="swiper-pagination mt-4 swiper-pagination-white d-md-none"></div>
                            <div class="swiper-button-prev promotion-swiper-button-prev d-md-none"></div>
                            <div class="swiper-button-next promotion-swiper-button-next d-md-none"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-sm-12">
                    <div class="bg-gray p-5 rounded-3 text-center">
                        <h2 class="mb-4">What’s Included</h2>
                        <p>NextFleet’s Fully Maintained Operating Lease includes your vehicle finance and estimated running costs in one fixed repayment.</p>
                        <div class="fw-bold mb-5">NextFleet Experience the Difference:</div>
                        <div class="row row-cols-2 row-cols-md-5 g-3 text-center">
                            <?php foreach ($leaseInclusions as $item): ?>
                                <div class="col">
                                    <img src="<?= htmlspecialchars($item['icon']) ?>" alt="" height="40">
                                    <div class="mt-2"><?= $item['label'] ?></div> <!-- no htmlspecialchars here -->
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="mt-5">
                            <a href="/contact.html" class="btn btn-primary text-white fw-bold">
                                <div class="d-flex align-items-center gap-2">
                                <div class="text-uppercase">Enquire Now</div>
                                <div class="flex-grow-1">
                                    <svg
                                    width="15"
                                    height="15"
                                    viewBox="0 0 15 15"
                                    fill="currentColor"><path d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z"/>
                                    <path
                                        d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z"
                                    />
                                    </svg>
                                </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top">
            <?php loadComponent("testimonials"); ?>
        </div>


        <div class="bg-gray pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <p>*Terms, conditions and eligibility criteria apply. Available on select vehicles only, for a limited time unless extended. Figures are based on the following criteria: </p>
                    <ol>
                        <li>NextFleet Fully Maintained Operating Lease;</li>
                        <li>VIC on-road costs;</li>
                        <li>60-month lease term;</li>
                        <li>75,000-kilometre limit over the term of the lease;</li>
                        <li>Vehicle delivered to a metropolitan area in your capital city;</li>
                        <li>Lease costs excluding GST.</li>
                    </ol>
                    <p>NextFleet’s Fully Maintained Operating Lease includes vehicle finance, stamp duty, on-road costs, scheduled servicing and maintenance required to operate the vehicle for the term of the lease, fuel card management, 4 replacement tyres, re-registration and CTP renewal for the term of the lease, infringement management, 24/7 accident management service, 24-hour roadside assistance, toll management, and online reporting. </p>
                    <p>Monthly costs may be subject to change without notice. The fully maintained operating lease offers are only an indicative approximation of the availability of the selected new vehicles and models shown may change when the lease quotation is completed and finalised. Options, accessories, and changes to the lease term or kilometres may change the quoted lease payment. You must return the vehicle at the end of the lease term. Fair wear and tear and excess kilometre charges may apply. </p>
                    <p>Vehicle images are for illustration purposes only.</p>
                    <p>Applicants must have a valid ABN, be GST registered, have been in operation for at least 2 years, and have a business fleet. All applications are subject to credit approval criteria. Terms and conditions, fees and charges apply.</p>
                    </div>
                    <div>
                        <a href="/privacy.html">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>

    <?php loadComponent("footer"); ?>
