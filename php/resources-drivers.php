<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php
$helpCards = [
    [
        'title' => 'Accident Management',
        'image' => 'images/nf-img-35.png',
        'body' => '
            <div class="pb-2">
                <p>Report incidents quickly and easily. We guide you through every step of the repair, insurance, and claims process, so you’re not left guessing.</p>
            </div>
        '
    ],
    [
        'title' => 'Roadside Assistance',
        'image' => 'images/nf-img-29.jpg',
        'body' => '
            <div class="pb-2">
                <p>24/7 support for breakdowns, flat batteries, and more. Our emergency network will get you back on the road, fast.</p>
            </div>
        '
    ],
    [
        'title' => 'Maintenance & Repairs',
        'image' => 'images/nf-img-41.jpg',
        'body' => '
            <div class="pb-2">
                <p>Use our Service Locator to find approved providers for scheduled maintenance, urgent repairs, tyres, windscreen replacements and more.</p>
                <a href="/services-locator.html" value="Service-Locator" class="btn btn-primary text-white">Find a Service</a>
            </div>
        '
    ],
    [
        'title' => 'Traffic Infringements & Registration',
        'image' => 'images/nf-img-37.png',
        'body' => '
            <p>Stay on top of fines, rego renewals and compliance with ease. We help you manage it all without the paperwork headaches.</p>
        '
    ],
    [
        'title' => 'Fuel Cards & E-Tags',
        'image' => 'images/nf-img-40.jpg',
        'body' => '
            <p>Seamless fuel and toll payments across BP, Shell, and Caltex/Ampol networks. Track expenses and stay compliant.</p>
        '
    ],
    [
        'title' => 'Client Portal Access',
        'image' => 'images/nf-img-81.jpg',
        'body' => '
            <p>Log in to view vehicle details, maintenance schedules, odometer readings, and cost summaries in one central place.</p>
            <a href="/login.html" class="btn btn-primary text-white">Log In</a>
        '
    ],
];
?>



    <?php loadComponent("header");?>
    <section id="overview" class="bg-light pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 m-auto text-center">
            <h1>Everything You Need to Stay on the Road</h1>
            <p>
            Welcome to our dedicated portal for drivers, providing essential tools and support to keep you on the road safely and efficiently. Managing a vehicle involves more than just driving. It includes maintenance, compliance, fuel management, and roadside emergencies, and here you can do it all in one place.
            </p>
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
                    <img class="card-img-top" src="<?= $card['image']; ?>" alt="Card image">
                    <div class="card-body position-relative">
                        <h5 class="card-title mb-3"><?= $card['title']; ?></h5>
                        <?= $card['body']; ?>
                    </div>
                </div>
                </div>
            <?php endforeach; ?>
            <div class="col-12">
            <?php loadComponent("cta-services", [
                      'text' => "Need help managing your vehicle?",
                      'buttonText' => 'Contact Us'
                  ]); ?>
            </div>
        </div>
    </section>
    <?php loadComponent("work-with-us");?>
    <?php loadComponent("footer"); ?>
