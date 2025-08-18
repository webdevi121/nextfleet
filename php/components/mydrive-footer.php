<script>
  // Register service worker
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/sw.js')
        .then(reg => console.log('Service Worker registered', reg))
        .catch(err => console.log('Service Worker registration failed', err));
    });
  }

  // Add to Home Screen popup
  let deferredPrompt;

  window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;
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


</body>
</html>
