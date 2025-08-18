<script>
/* ---------------------------
  1. Service Worker registration
---------------------------- */
if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/sw.js')
      .then(reg => console.log('Service Worker registered', reg))
      .catch(err => console.log('Service Worker registration failed', err));
  });
}

/* ---------------------------
  2. Chrome/Android "Add to Home Screen"
---------------------------- */
let deferredPrompt;

window.addEventListener('beforeinstallprompt', (e) => {
  e.preventDefault();
  deferredPrompt = e;
  showA2HS();
});

function showA2HS() {
  const banner = document.createElement('div');
  banner.style.position = 'fixed';
  banner.style.bottom = '20px';
  banner.style.left = '50%';
  banner.style.transform = 'translateX(-50%)';
  banner.style.background = '#000';
  banner.style.color = '#fff';
  banner.style.padding = '15px 20px';
  banner.style.borderRadius = '8px';
  banner.style.boxShadow = '0 4px 10px rgba(0,0,0,0.3)';
  banner.style.zIndex = '10000';
  banner.style.fontFamily = 'sans-serif';
  banner.style.textAlign = 'center';
  banner.innerHTML = `
    <div>Install NextFleet on your home screen!</div>
    <div style="display: flex; margin-top:10px;"> 
      <button id="a2hsBtn" style="margin-left:10px;padding:5px 10px;border:none;border-radius:4px;background:#fff;color:#000;cursor:pointer;">Add</button>
      <button id="a2hsDismiss" style="margin-left:5px;padding:5px 10px;border:none;border-radius:4px;background:#555;color:#fff;cursor:pointer;">Dismiss</button>
    </div>
  `;
  document.body.appendChild(banner);

  document.getElementById('a2hsBtn').addEventListener('click', async () => {
    banner.remove();
    if (deferredPrompt) {
      deferredPrompt.prompt();
      const { outcome } = await deferredPrompt.userChoice;
      console.log('User response to the install prompt:', outcome);
      deferredPrompt = null;
    }
  });

  document.getElementById('a2hsDismiss').addEventListener('click', () => {
    banner.remove();
  });
}

/* ---------------------------
  3. iOS Safari manual instructions
---------------------------- */
function isIos() {
  const ua = window.navigator.userAgent.toLowerCase();
  return /iphone|ipad|ipod/.test(ua);
}

function isInStandaloneMode() {
  return ('standalone' in window.navigator) && window.navigator.standalone;
}

if (isIos() && !isInStandaloneMode()) {
  const iosBanner = document.createElement('div');
  iosBanner.style.position = 'fixed';
  iosBanner.style.bottom = '20px';
  iosBanner.style.left = '0';
  iosBanner.style.right = '0';
  iosBanner.style.width = '260px';
  iosBanner.style.margin = 'auto';
  iosBanner.style.background = '#000';
  iosBanner.style.color = '#fff';
  iosBanner.style.padding = '15px 20px';
  iosBanner.style.borderRadius = '8px';
  iosBanner.style.boxShadow = '0 4px 10px rgba(0,0,0,0.3)';
  iosBanner.style.zIndex = '10000';
  iosBanner.style.fontFamily = 'sans-serif';
  iosBanner.style.textAlign = 'center';
  iosBanner.innerHTML = `
    To install NextFleet on your home screen: tap 
    <img src="images/ios-share-icon.png" style="width:16px;height:16px;vertical-align:middle;margin:0 3px;">
    and then "Add to Home Screen".
    <button id="iosDismiss" style="display:block; margin: 10px auto; padding:5px 10px;border:none;border-radius:4px;background:#555;color:#fff;cursor:pointer;">Dismiss</button>
  `;
  document.body.appendChild(iosBanner);

  document.getElementById('iosDismiss').addEventListener('click', () => {
    iosBanner.remove();
  });
}
</script>



</body>
</html>
