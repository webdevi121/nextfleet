<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php
$helpCards = [
    [
        'title' => 'Business Case Builder',
        'image' => 'images/nf-img-35.png',
        'body' => '
            <div >
                <p>Build a compelling case for outsourcing your fleet management. Our guided tool helps you identify key benefits, risks, and cost-saving opportunities , and creates a tailored download for stakeholder buy-in.</p>
                <a href="/business-case-builder.html" value="Service-Locator" class="btn btn-primary text-white">Business Case Builder</a>
            </div>
        '
    ],
    [
        'title' => 'FMO Capability Assessment',
        'image' => 'images/nf-img-29.jpg',
        'body' => '
            <div >
                <p>Is your current provider delivering? Use this structured guide to evaluate performance, value, and service delivery, and decide if it’s time for a change.</p>
                <a href="/assessing-your-fmos-capability.html" value="Service-Locator" class="btn btn-primary text-white">Take Assessment</a>
            </div>
        '
    ],
    [
        'title' => 'FMO Transition Checklist',
        'image' => 'images/nf-img-41.jpg',
        'body' => '
            <p>Switching providers doesn’t need to be hard. Our checklist outlines every step in a smooth transition, from third-party payments to fleet handover planning.</p>
            <a href="/changing-fmo-checklist.html" value="Service-Locator" class="btn btn-primary text-white">Access Checklist</a>
        '
    ],
    [
        'title' => 'Service Locator',
        'image' => 'images/nf-img-37.png',
        'body' => '
            <div >
                <p>Find authorised service providers near you. Covers maintenance, tyres, windscreen repair, fuel, and more – across Australia.</p>
                <a href="/assessing-your-fmos-capability.html" value="Service-Locator" class="btn btn-primary text-white">Find a Service</a>
            </div>
        '
    ],
    [
        'title' => 'Client Portal & Telematics',
        'image' => 'images/nf-img-39.jpg',
        'body' => '
            <p>Real-time tracking and advanced reporting to help you make data-driven fleet decisions. Improve utilisation, reduce downtime, and boost ROI.</p>
            <a href="/login.html" value="Service-Locator" class="btn btn-primary text-white">Login</a>
        '
    ],
    [
        'title' => 'myDrive App',
        'image' => 'images/nf-img-40.jpg',
        'body' => '
            <p>Access your fleet anywhere, anytime. The myDrive app puts live vehicle data, compliance alerts, maintenance logs, and odometer updates in the palm of your hand</p>
            <a href="https://www.nextfleet.net.au/myDriverapp/myDrive-App/" value="Service-Locator" class="btn btn-primary text-white">Login</a>
        '
    ],
];
?>



    <?php loadComponent("header");?>
    <section id="overview" class="bg-light pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 m-auto text-center">
            <h1>Tools & Insights to Optimise Your Fleet</h1>
            <p>Managing a fleet requires strategic decision-making, cost control, and operational efficiency. Our Fleet Manager resource hub provides valuable insights, tools, and calculators to help you streamline operations and maximise savings.</p>
            <a href="/services-locator.html" value="Service-Locator" class="btn btn-primary text-white">Contact Us</a>
          </div>
        </div>
      </div>
    </section>
    <section class="container pt-5 pb-5">
        <div class="row g-5">
        <?php foreach ($helpCards as $card): ?>
            <div class="col-sm-4 d-flex">
            <div class="card h-100 w-100">
            <!-- <img class="card-img-top" src="<//?= $card['image']; ?>" alt="Card image"> -->
                <div class="card-body">
                    <h5 class="card-title mb-3"><?= $card['title']; ?></h5>
                    <?= $card['body']; ?>
                </div>
            </div>
            </div>
        <?php endforeach; ?>
        </div>
    </section>
    <?php loadComponent("work-with-us");?>
    <?php loadComponent("footer"); ?>
