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
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-sm-5 pt-sm-5">
                    <div class="pb-4">
                        <h2 class="text-primary">Looking to lease this vehicle?</h2>
                        <div class="py-3">
                            <h3>Toyota Hybrid</h3>
                            <div>RAV4 GX Wagon 5dr CVT 6sp 2WD 2.5i/88kW Hybrid</div>
                        </div>
                        <div class="fw-bold text-warning-2 fs-4">From $180/ wk* </br>Incl. budgeted running costs</div>
                    </div>
                    <div><img src="images/nf-img-43.png" alt="Car Image" class="w-100"></div>
                </div>
                <div class="col-sm-7">
                    <div class="bg-gray p-5 rounded-3">
                        <h2 class="mb-4">What’s Included</h2>
                        <p>NextFleet’s Fully Maintained Operating Lease includes your vehicle finance and estimated running costs in one fixed repayment.</p>
                        <div class="fw-bold mb-5">NextFleet Experience the Difference</div>
                        <div class="row row-cols-2 row-cols-md-3 g-3 text-center">
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
        <div>
            <?php loadComponent("promotions"); ?>
        </div>
        <div>
            <?php loadComponent("testimonials"); ?>
        </div>
    <?php loadComponent("footer"); ?>
