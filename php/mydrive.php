<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php loadComponent("mydrive-header");?>


  <div class="body-content">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 text-center pt-5">
                <h1 class="mb-0">Welcome to myDrive </h1>
                <div>Need urgent assistane? Call below</div>
            </div>
            <div class="col-12">
                <div class="rounded-3 bg-light p-4 d-grid gap-3">
                    <a href="te:1800297900" class="text-uppercase fw-bold fs-3 text-white btn btn-primary w-100 d-flex justify-content-center">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <div>1800 297 900</div>
                        </div>
                    </a>
                    <div>
                        For 24/7 Accident Management:<br><span class="text-danger fw-bold">Select Option 1</span>
                    </div>
                    <div>
                        For 24/7 Roadside Assistance:<br><span class="text-danger fw-bold">Select Option 2</span>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="rounded-3 bg-light p-4 d-grid gap-3">
                    <a href="tel:1800297900" class="text-uppercase fw-bold fs-3 text-white btn btn-primary w-100 d-flex justify-content-center">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <div>000</div>
                        </div>
                    </a>
                    <div>
                        For Serious Accidents
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <img src="images/safetravel-Green.png" alt="">
            </div>
        </div>
    </div>
  </div>

<?php
loadComponent("mobile-menu", ["active" => "home"]);
?>




</body>
</html>
