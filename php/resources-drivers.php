<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php
$helpCards = [
    [
        'title' => 'Accident Management',
        'image' => 'images/nf-img-35.png',
        'label' => 'Contact Us',
        'link' => '/contact.html',
        'body' => '
            <div>
                <div>Report incidents quickly and easily. We guide you through every step of the repair, insurance, and claims process, so you’re not left guessing.</div>
            </div>
        '
    ],
    [
        'title' => 'Roadside Assistance',
        'image' => 'images/nf-img-29.jpg',
        'label' => 'Contact Us',
        'link' => '/contact.html',
        'body' => '
            <div>24/7 support for breakdowns, flat batteries, and more. Our emergency network will get you back on the road, fast.</div>
        '
    ],
    [
        'title' => 'Maintenance & Repairs',
        'image' => 'images/nf-img-41.jpg',
        'label' => 'Find a Service',
        'link' => '/services-locator.html',
        'body' => '
            <div>Use our Service Locator to find approved providers for scheduled maintenance, urgent repairs, tyres, windscreen replacements and more.</div>
        '
    ],
    [
        'title' => 'Traffic Infringements & Registration',
        'image' => 'images/nf-img-37.png',
        'label' => 'Contact Us',
        'link' => '/contact.html',
        'body' => '
                <div>Stay on top of fines, rego renewals and compliance with ease. We help you manage it all without the paperwork headaches.</div>
        '
    ],
    [
        'title' => 'Fuel Cards & E-Tags',
        'image' => 'images/nf-img-40.jpg',
        'label' => 'Contact Us',
        'link' => '/contact.html',
        'body' => '
            <div class="position-relative">
                <div>Seamless fuel and toll payments across BP, Shell, and Caltex/Ampol networks. Track expenses and stay compliant.</div>
            </div>
        '
    ],
    [
        'title' => 'Client Portal Access',
        'image' => 'images/nf-img-81.jpg',
        'label' => 'Login',
        'link' => '/login.html',
        'body' => '
                <div>Log in to view vehicle details, maintenance schedules, odometer readings, and cost summaries in one central place.</div>
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
                    <div class="card-body position-relative" style="padding-bottom: 65px; margin-bottom: 15px;">
                        <h5 class="card-title mb-3"><?= $card['title']; ?></h5>
                        <?= $card['body']; ?>
                        <a href="<?= $card['link']; ?>" value="Service-Locator" class="btn btn-primary text-white position-absolute s-0 bottom-0"><?= $card['label']; ?></a>
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
