<?php
  function loadComponent($component) {
      include __DIR__ . "/components/$component.php";
  }

  // Start output buffering
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
        'title' => 'E-Tag',
        'image' => 'images/nf-img-38.jpg',
        'body' => '
            <p>When passing through a toll point, you should hear a beep coming from your e-Tag. If this does not happen or you are suspicious the device is not working properly, notify your fleet administrator to organise a new e-tag.</p>
            <div>If your e-Tag is lost or stolen, notify your fleet administrator immediately or contact us on <a href="tel:1800 297 900"><b>1800 297 900</b></a> between 9:00 am and 5:00 pm AEST Monday to Friday.</div>
        '
    ],
    [
        'title' => 'Vehicle Registration and CTP Renewal',
        'image' => 'images/nf-img-39.jpg',
        'body' => '
            <p>The payments required for your vehicle registration and CTP renewal will be processed by us.</p>
            <div>If a vehicle inspection is required, you/your company’s fleet manager will be notified so that this can be arranged.</div>
        '
    ],
    [
        'title' => 'Fuel Cards',
        'image' => 'images/nf-img-40.jpg',
        'body' => '
            <p>If any of your fuel cards are lost or stolen, please notify your fleet administrator or contact us on <a href="tel:1800 297 900"><b>1800 297 900</b></a> between 9:00 am and 5:00 pm AEST Monday to Friday to cancel existing cards and issue new ones.</p>
            <div>To generate accurate reporting and offer you the best possible advice, please provide your current odometer reading every time you use any of your fuel cards.</div>
        '
    ],
];
?>



    <?php loadComponent("header");?>
    <section id="overview" class="bg-light pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 m-auto text-center">
            <h1>Drivers</h1>
            <p>
              Please find below the list of important numbers in case of an emergency:
            </p>
            <table class="table table-bordered mb-4 text-start">
                <tbody>
                    <tr>
                    <th scope="row">Accident Management</th>
                    <td>
                        <a href="tel:1800 297 900">1800 297 900</a> and select 
                        <span style="background-color: #b3d4fc; color: black;">option 1</span>
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">Roadside Assistance</th>
                    <td>
                        <a href="tel:1800 297 900">1800 297 900</a> and select 
                        <span style="background-color: #b3d4fc; color: black;">option 2</span>
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">Other Enquiries</th>
                    <td>
                        <a href="mailto:maintenance@nextfleet.net.au">NextFleet Team</a>
                    </td>
                    </tr>
                </tbody>
            </table>

            <div class="d-flex gap-3 flex-wrap m-auto justify-content-center">
                <a href="https://www.nextfleet.net.au/Resources/Drivers-Resources/driverguide-v1-2024.pdf" target="_blank" value="driver-guide.pdf" class="btn btn-primary text-white">Download Driver Guide here</a>
                <a href="/services-locator.html" value="Service-Locator" class="btn btn-primary text-white">Service Locator</a>
            </div>
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
        </div>
    </section>
    <?php loadComponent("work-with-us");?>
    <?php loadComponent("footer"); ?>

<?php
  // Get the buffered content
  $output = ob_get_contents();
  ob_end_clean();

  // Save the output to the root directory as index.html
  file_put_contents(__DIR__ . '/../resources-drivers.html', $output);

  // Function to copy directories (CSS, fonts, images, etc.)
  function copyFolder($source, $destination) {
      if (!is_dir($source)) return; // Exit if the source folder doesn't exist
      if (!is_dir($destination)) mkdir($destination, 0777, true);

      $files = scandir($source);
      foreach ($files as $file) {
          if ($file === '.' || $file === '..') continue;
          $srcFile = $source . DIRECTORY_SEPARATOR . $file;
          $destFile = $destination . DIRECTORY_SEPARATOR . $file;

          if (is_dir($srcFile)) {
              copyFolder($srcFile, $destFile);
          } else {
              copy($srcFile, $destFile);
          }
      }
  }

  // Copy 'css', 'fonts', and 'images' folders directly into the root directory
  copyFolder(__DIR__ . '/css', __DIR__ . '/../css');
  copyFolder(__DIR__ . '/fonts', __DIR__ . '/../fonts');
  copyFolder(__DIR__ . '/images', __DIR__ . '/../images'); // Copy images folder

  // Output the generated page
  echo "Export completed! Check the root directory.";
  echo $output;
?>