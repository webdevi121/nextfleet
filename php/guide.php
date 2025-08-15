<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php loadComponent("mydrive-header");?>

<?php
$accordionItems = [
    [
        'id' => 'accident',
        'title' => 'Accident Management Services',
        'content' => '
            <p>If you are involved in a vehicle accident, please follow the steps below whenever possible:</p>
            <ul>
                <li>Stay Calm</li>
                <li>Turn off your engine</li>
                <li>Turn on your hazard lights</li>
                <li>Ensure the scene is safe and immediately call <a href="tel:000">000</a> if someone is injured</li>
                <li>Don’t admit liability.</li>
                <li>Call our 24/7 accident management service on <a href="tel:1800297900">1800 297 900</a> option <b>1</b>, and one of our friendly staff will guide you through the process.</li>
            </ul>
            <p>Your safety is paramount. Collect the following info to assist with your claim:</p>
            <ol>
                <li>Driver’s details, date/time</li>
                <li>Vehicle type & registration, incident location, traffic/weather conditions</li>
                <li>Insurance company & attending police details</li>
                <li>Any noticeable damage & photos of the scene</li>
            </ol>
            <p>Once the scene is cleared, towing and replacement vehicle/taxi services will be arranged if necessary.</p>
        ',
    ],
    [
        'id' => 'batteries',
        'title' => 'Batteries',
        'content' => '
            <p>The manufacturer’s warranty covers most batteries for the first 12 months. Should your battery fail, please call our roadside assistance on <a href="tel:1800297900">1800 297 900</a> option <b>2</b> or our maintenance control centre for advice on your options.</p>
        ',
    ],
    [
        'id' => 'etag',
        'title' => 'E-tag & Video Tolling',
        'content' => '
            <p>If NextFleet E-Tag and Video Tolling are included in your contract, you should receive the E-Tag within 7–10 working days.</p>
            <ul>
                <li><b>E-Tag device:</b> Follow instructions to install so vision isn’t obstructed. If no beep at toll, call <a href="tel:1800297900">1800 297 900</a> option <b>4</b>.</li>
                <li><b>Lost/stolen tags:</b> Notify NextFleet via email <a href="mailto:operations@nextfleet.net.au">operations@nextfleet.net.au</a> or call <a href="tel:1800297900">1800 297 900</a> option <b>4</b>.</li>
                <li><b>Video Tolling:</b> Toll road photographs may incur vehicle matching fees.</li>
                <li><b>End of contract:</b> Remove and return tag to avoid additional costs.</li>
            </ul>
        ',
    ],
    [
        'id' => 'fuelcards',
        'title' => 'Fuel Card(s)',
        'content' => '
            <p>NextFleet has an extensive network of fuel card providers throughout Australia.</p>
            <p><b>Your company may have an agreed preset pin, please contact your fleet administrator to confirm this.</b></p>
            <p><b>Using your card for the first time:</b> Set your PIN as instructed. Keep it confidential. For assistance resetting PIN, call <a href="tel:1800297900">1800 297 900</a>.</p>
            <p><b>Purchase limits:</b> Your employer determines fuel card limits including fuel, oil, and car wash. Confirm with Fleet Administrator.</p>
            <p><b>Paying for purchases:</b> Present the card, enter accurate odometer readings to help fleet reporting.</p>
            <p>If your fuel card is lost or stolen, contact your Fleet Administrator or call <a href="tel:1800297900">1800 297 900</a>.</p>
            <p class="small"><i>Keep your odometer reading up to date for timely service reminders.</i></p>
        ',
    ],
    [
        'id' => 'roadside',
        'title' => 'Roadside Assistance',
        'content' => '
            <p>NextFleet’s roadside assistance is available 24/7 via <a href="tel:1800297900">1800 297 900</a> – Option <b>2</b>. A mobile service provider will assist.</p>
            <ul>
                <li>Fuel delivery</li>
                <li>EV charging or tow</li>
                <li>Flat batteries</li>
                <li>Flat tyre</li>
                <li>Lockouts</li>
                <li>Mechanical breakdown</li>
            </ul>
            <p>If the vehicle cannot be mobilised, it will be towed to the nearest authorised repairer.</p>
            <p>Helpful info for operator:</p>
            <ul>
                <li>Vehicle registration</li>
                <li>Your name & contact</li>
                <li>Employer name</li>
                <li>Vehicle location</li>
                <li>Breakdown description</li>
            </ul>
        ',
    ],
    [
        'id' => 'traffic',
        'title' => 'Traffic & Parking Infringement',
        'content' => '
            <p>You are responsible for all traffic fines incurred while driving your vehicle.</p>
            <p><b>Note:</b> Non-payment may lead to penalties, court action, or vehicle de-registration. Record if you lend your vehicle to someone else.</p>
            <p>If we receive infringements on your behalf, they will be forwarded to you or your employer.</p>
        ',
    ],
    [
        'id' => 'tyres',
        'title' => 'Tyres',
        'content' => '
            <p>Use approved tyre suppliers for replacement or repair. Pre-approval from our Repair Authorisation Centre may be required.</p>
            <ul>
                <li>Bridgestone: <a href="tel:1300749378">1300 749 378</a></li>
                <li>Goodyear Auto Care: <a href="tel:132343">132 343</a></li>
                <li>Dunlop Super Dealer: <a href="tel:131631">131 631</a></li>
                <li>myCar Tyres & Auto: <a href="tel:131328">13 13 28</a></li>
                <li>Bob Jane T-Marts: <a href="tel:1800000364">1800 000 364</a></li>
            </ul>
            <p class="small"><i><b>Note:</b> Replacement tyres must match manufacturer specifications.</i></p>
        ',
    ],
    [
        'id' => 'registration',
        'title' => 'Vehicle Registration & CTP',
        'content' => '
            <p>If NextFleet manages your vehicle registration, we handle processing and payment of registration and CTP insurance. Book inspections as necessary with Fleet Administrator guidance.</p>
        ',
    ],
    [
        'id' => 'servicing',
        'title' => 'Vehicle Servicing & Repairs',
        'content' => '
            <p>Ensure service according to manufacturer’s schedule. Advise the service provider that NextFleet manages the vehicle.</p>
            <p><b>Preferred service provider:</b> Inform them NextFleet manages the vehicle. Contact our Service Control Centre for authorisation if needed.</p>
            <p class="small"><i>For first-time providers, call our Service Control Centre for authorisation and account setup.</i></p>
        ',
    ],
    [
        'id' => 'windscreen',
        'title' => 'Windscreen / Glass',
        'content' => '
            <p>Cracked, broken, or chipped windscreens are a hazard. Attend to all glass damage urgently. Confirm insurance coverage with your Fleet Administrator.</p>
            <p>Recommended suppliers:</p>
            <ul>
                <li>Novus Glass: <a href="tel:132234">13 22 34</a></li>
                <li>O\'Brien: <a href="tel:1800841263">1800 841 263</a></li>
            </ul>
        ',
    ],
];
?>




  <div class="body-content">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 text-center pt-5">
                <h1>Driver's Guide</h1>
            </div>
            <div class="col-12">
                <div class="accordion" id="accordionServices">
                <?php foreach ($accordionItems as $item): ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-<?php echo $item['id']; ?>">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $item['id']; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $item['id']; ?>">
                                <?php echo $item['title']; ?>
                            </button>
                        </h2>
                        <div id="collapse-<?php echo $item['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?php echo $item['id']; ?>" data-bs-parent="#accordionServices">
                            <div class="accordion-body">
                                <?php echo $item['content']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
  </div>

<?php
loadComponent("mobile-menu", ["active" => "guide"]);
?>


<!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Optional: Chevron rotation script -->
<script>
document.querySelectorAll('.accordion-button').forEach(button => {
  button.addEventListener('click', () => {
    const icon = button.querySelector('i');
    if(icon) icon.classList.toggle('rotate-90');
  });
});
</script>

<style>
.rotate-90 {
  transform: rotate(90deg);
  transition: transform 0.2s;
}
</style>



</body>
</html>
