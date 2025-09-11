<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php loadComponent("header");?>
    <section
      id="banner"
      class="static-banner d-flex align-items-center position-relative bg-black text-white overflow-hidden"
    >
      <div class="overlay-gradient"></div>
      <div class="hero-img">
        <div id="mobile" class="d-block d-md-none">
          <img src="images/nf-img-12.jpg" alt="" class="w-100"/>
        </div>
        <div id="desktop" class="d-none d-md-block">
          <img src="images/nf-img-11.jpg" alt="" />
        </div>
      </div>
      <div class="container position-relative z-3">
        <div class="row">
          <div class="col-sm-6 d-flex flex-column gap-5">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>App</span>
            </div>
            <div>
              <h1>myDrive App</h1>
              <p>Easily download the myDrive App to get the fleet tools you need right from your phone. Stay connected and in control wherever the road takes you.</p>
            </div>
            <div>
              <a href="mydrive.html" class="btn btn-primary text-white fw-bold">
                <div class="d-flex align-items-center gap-2">
                  <div>myDrive App</div>
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
      </div>
    </section>
    <section id="breadcrumb" class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">App</li>
          </ol>
        </nav>
      </div>
    </section>
    <section
      id="content"
      class="container d-flex flex-column gap-7 pt-sm-5 content"
    >
      <div class="row">
        <div class="col-sm-7">
          <div class="pt-5 pb-5 pe-7 d-flex flex-column">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2 mb-3"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>App</span>
            </div>
            <h2>myDrive App – Your Fleet at Your Fingertips</h2>
            <p>
                The <a href="/mydrive.html">myDrive App</a> is designed to give your drivers easy access to essential fleet management tools on their mobile devices.
            </p>
            
            <p><strong>Key Features:</strong></p>
            <ul class="custom-bullets">
              <li>Quick Access – Manage your fleet anytime, anywhere.</li>
              <li>
              Vehicle Insights – Stay informed about your vehicle’s status.
              </li>
              <li>
              Notifications – Receive important alerts and updates.
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-5">
          <img
            src="images/iphone-hand.png"
            alt="Thumbnail"
            class="w-100 h-100 object-fit-cover"
          />
        </div>
      </div>
    </section>

    <section
      id="content"
      class="bg-gray pt-6 pb-6"
    >
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5 text-primary">
            <h2>Install myDrive App on Android</h2>
          </div>
        </div>
        <div class="my-app-container">
          <div class="row g-8 custom-width-my-app">
            <div class="col-4">
              <div>
                <img src="images/android-1.png" alt="" class="w-100">
              </div>
              <div class="mt-4 text-center">
                <div class="fs-2 fw-bold pe-2" style="line-height:32px;">1</div>
                <div class="fs-5">Click the "Add" </br>button</div>
              </div>
            </div>
            <div class="col-4">
              <div>
                <img src="images/android-2.png" alt="" class="w-100">
              </div>
              <div class="mt-4 text-center">
                <div class="fs-2 fw-bold pe-2" style="line-height:32px;">2</div>
                <div class="fs-5">You'll see a notification </br> "App Installed."</div>
              </div>
            </div>
            <div class="col-4">
              <div>
                <img src="images/android-3.png" alt="" class="w-100">
              </div>
              <div class="mt-4 text-center">
                <div class="fs-2 fw-bold pe-2" style="line-height:32px;">3</div>
                <div class="fs-5">App installed </br>on the home screen</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      id="content"
      class="bg-white pt-6 pb-6"
    >
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5 text-primary">
            <h2>Install myDrive App on iOS</h2>
          </div>
        </div>
        <div class="my-app-container">
          <div class="row g-3 custom-width-my-app">
            <div class="col-4">
              <div>
                <img src="images/ios-step-1-1.png" alt="" class="w-100">
              </div>
              <div class="mt-4 text-center">
                <div class="fs-2 fw-bold pe-2" style="line-height:32px;">1</div>
                <div class="fs-5">Select the Share button </br> in the bottom menu.</div>
              </div>
            </div>
            <div class="col-4">
              <div>
                <img src="images/ios-step-2-1.png" alt="" class="w-100">
              </div>
              <div class="mt-4 text-center">
                <div class="fs-2 fw-bold pe-2" style="line-height:32px;">2</div>
                <div class="fs-5">Select “Add to Home Screen” </br> from the menu.</div>
              </div>
            </div>
            <div class="col-4">
              <div>
                <img src="images/ios-step-3-1.png" alt="" class="w-100">
              </div>
              <div class="mt-4 text-center">
                <div class="fs-2 fw-bold pe-2" style="line-height:32px;">3</div>
                <div class="fs-5">Select “Add” </br> to confirm.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php loadComponent("footer"); ?>
