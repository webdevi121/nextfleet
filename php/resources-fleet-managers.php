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
            <div class="pb-5">
                <p>If involved in a vehicle accident:</p>
                <ul>
                    <li>Stay calm</li>
                    <li>Turn off your engine</li>
                    <li>Turn on your hazard lights</li>
                    <li>Do not admit liability</li>
                    <li>Call the below Toll-Free number and choose Option 1</li>
                </ul>
                <div class="custom-position"><a href="tel:1800 297 900"><b>1800 297 900</b></a></div>
            </div>
        '
    ],
    [
        'title' => 'Roadside Assistance',
        'image' => 'images/nf-img-29.jpg',
        'body' => '
            <div class="pb-5">
                <p>If your vehicle breaks down and you require roadside assistance:</p>
                <ul>
                    <li>Park your vehicle in a safe location</li>
                    <li>Switch the vehicle hazard lights on</li>
                    <li>Call the Toll-Free number and choose Option 2</li>
                    <li>Remain in your vehicle and only exit if safe to do so. Remain behind any safety barrier until help arrives.</li>
                </ul>
                <div class="custom-position"><a href="tel:1800 297 900"><b>1800 297 900</b></a></div>
            </div>
        '
    ],
    [
        'title' => 'Maintenance, Tyres, Batteries and Glass',
        'image' => 'images/nf-img-41.jpg',
        'body' => '
            <p>When your vehicle is due for service, you will need to arrange an appointment through an authorised repair service centre. Whilst organising the service, ensure you notify the repairer your vehicle is managed by NextFleet and to call our maintenance team on <a href="tel:1800 297 900"><strong>1800 297 900</strong></a>  to request a work authorisation number.</p>
            <p>Visit our <a href="https://www.nextfleet.net.au/Service-Locator/"><strong>Service Locator</strong></a> for a location close to you</p>
        '
    ],
    [
        'title' => 'Traffic Infringements',
        'image' => 'images/nf-img-37.png',
        'body' => '
            <div class="pb-5">
                <p>All traffic infringements and parking tickets are sent to your employer.</p>
                <ul>
                    <li>Your employer nominates the person driving the vehicle at the time the infringement was committed.</li>
                    <li>You are responsible to notify your fleet administrator if someone else was driving the vehicle at the time the infringement occurred to ensure accuracy of accountability.</li>
                </ul>
                <div class="custom-position"><a href="tel:1800 297 900"><b>1800 297 900</b></a></div>
            </div>
        '
    ],
    [
        'title' => 'Vehicle Registration and CTP Renewal',
        'image' => 'images/nf-img-39.jpg',
        'body' => '
            <p>The payments required for your vehicle registration and CTP renewal will be processed by us.</p>
            <p>If a vehicle inspection is required, you/your company’s fleet manager will be notified so that this can be arranged.</p>
        '
    ],
    [
        'title' => 'Fuel Cards',
        'image' => 'images/nf-img-40.jpg',
        'body' => '
            <p>If any of your fuel cards are lost or stolen, please notify your fleet administrator or contact us on <a href="tel:1800 297 900"><b>1800 297 900</b></a> between 9:00 am and 5:00 pm AEST Monday to Friday to cancel existing cards and issue new ones.</p>
            <p>To generate accurate reporting and offer you the best possible advice, please provide your current odometer reading every time you use any of your fuel cards.</p>
        '
    ],
    [
        'title' => 'E-Tag',
        'image' => 'images/nf-img-38.jpg',
        'body' => '
            <p>When passing through a toll point, you should hear a beep coming from your e-Tag. If this does not happen or you are suspicious the device is not working properly, notify your fleet administrator to organise a new e-tag.</p>
            <p>If your e-Tag is lost or stolen, notify your fleet administrator immediately or contact us on <a href="tel:1800 297 900"><b>1800 297 900</b></a> between 9:00 am and 5:00 pm AEST Monday to Friday.</p>
        '
    ],
];
?>



    <?php loadComponent("header");?>
    <section id="overview" class="bg-light pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 m-auto text-center">
            <h1>Fleet Managers</h1>
            <p>
              <strong>Useful resources for the operation of your vehicles.</strong>
            </p>
            <p>We are here to provide you with the support and resources you need to keep your vehicles moving. For all customer enquires including roadside assistance, accident management, maintenance and servicing, fuel card enquiries, tolls, registration and CTP renewals call <a href="tel:1800 297 900">1800 297 900</a>.</p>

            <p>Our supplier finder will help you find the most convenient location to get your vehicle serviced, top-up on fuel (BP, Caltex/Ampol, Shell) or get your tyres changed. We’ve also included helpful contacts in the case of accidents, breakdowns and emergencies.</p>
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
