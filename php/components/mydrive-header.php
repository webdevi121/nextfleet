
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fleet Management Services Simplified</title>
    <meta name="description" content="At NextFleet we seamlessly manage, support, and optimise your corporate fleet management">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/fontawesome.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Standard favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <!-- SVG favicon -->
    <link rel="icon" type="image/svg+xml" href="images/favicon.svg">

    <!-- Android / PWA icons -->
    <link rel="icon" type="image/png" sizes="192x192" href="images/web-app-manifest-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="images/web-app-manifest-512x512.png">

    <!-- Apple touch icon -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Manifest -->
    <link rel="manifest" href="site.webmanifest">

    <!-- Theme color for browser toolbar -->
    <meta name="theme-color" content="#000000">
    
<style>
/* Default menu item styling */
.menu-link {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: white;
  text-decoration: none;
  padding-top: 8px;
  padding-bottom: 8px;
}

/* Active item styling */
.menu-link.active {
  background-color: white;
  color: black;
  border-radius: 8px;
}
.body-content{
  padding-bottom: 100px;
}

/* Ensure icon inherits text color */
.menu-link i {
  margin-bottom: 2px;
}
#map {
  width: 100%;
  height: 400px; /* fallback for mobile */
  min-height: 400px; /* ensures mobile has height */
}

@media(min-width: 768px){
  #map {
    height: 600px; /* larger map on desktop */
  }
}
</style>
    
  </head>



<!-- Add to Home Screen popup -->
<script>
let deferredPrompt;

window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent the mini-infobar from appearing on mobile
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;

  // Show your custom "Add to Home Screen" UI
  showAddToHomeScreenPrompt();
});

function showAddToHomeScreenPrompt() {
  const a2hsBanner = document.createElement('div');
  a2hsBanner.style.position = 'fixed';
  a2hsBanner.style.bottom = '20px';
  a2hsBanner.style.left = '50%';
  a2hsBanner.style.transform = 'translateX(-50%)';
  a2hsBanner.style.background = '#000';
  a2hsBanner.style.color = '#fff';
  a2hsBanner.style.padding = '15px 20px';
  a2hsBanner.style.borderRadius = '8px';
  a2hsBanner.style.boxShadow = '0 4px 10px rgba(0,0,0,0.3)';
  a2hsBanner.style.zIndex = '10000';
  a2hsBanner.style.fontFamily = 'sans-serif';
  a2hsBanner.style.textAlign = 'center';
  a2hsBanner.innerHTML = `
    Install NextFleet on your home screen for quick access! 
    <button id="a2hsBtn" style="margin-left:10px;padding:5px 10px;border:none;border-radius:4px;background:#fff;color:#000;cursor:pointer;">Add</button>
    <button id="a2hsDismiss" style="margin-left:5px;padding:5px 10px;border:none;border-radius:4px;background:#555;color:#fff;cursor:pointer;">Dismiss</button>
  `;

  document.body.appendChild(a2hsBanner);

  document.getElementById('a2hsBtn').addEventListener('click', async () => {
    a2hsBanner.remove();
    if (deferredPrompt) {
      deferredPrompt.prompt();
      const { outcome } = await deferredPrompt.userChoice;
      console.log('User response to the install prompt:', outcome);
      deferredPrompt = null;
    }
  });

  document.getElementById('a2hsDismiss').addEventListener('click', () => {
    a2hsBanner.remove();
  });
}
</script>


  <body>

    <div class="bg-black">
      <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <a href="/" class="py-2"><img src="images/nextfleet-logo.png" width="180"></a>
                </div>
            </div>
        </div>
      </div>
    </div>