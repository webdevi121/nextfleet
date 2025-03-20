export function loadHeader() {
  const navItems = [
    { name: 'About Us', href: '/about-us' },
    { name: 'Services', href: '#' },
    { name: 'Resources', href: '#' },
    { name: 'Tools', href: '#' },
    { name: 'App', href: '#' },
    { name: 'Contact Us', href: '#' },
    { name: 'Mydrive', href: '#' },
    { name: 'Login', href: '#' },
  ];

  const navLinks = navItems
    .map((item) => {
      return `<li class="nav-item">
              <a class="nav-link text-uppercase text-white" href="${item.href}">${item.name}</a>
            </li>`;
    })
    .join(''); // Join the array of strings into a single string

  document.getElementById('header').innerHTML = `
    <div class="bg-black pt-5">
      <div class="container">
        <div class="row">
          <div class="col-10 col-sm-12 text-white d-flex justify-content-center mb-5">
            <a href="/"><img src="images/nextfleet-logo.png" width="253"></a>
          </div>
          <div class="col-2 d-sm-none">
              <button class="w-100 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" class="w-100 h-100">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12">
            <nav class="navbar navbar-expand-lg">
              <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                  ${navLinks}
                </ul>
                <a href="tel:1800 297 900" class="ms-auto custom-btn"><img src="images/icon-phone.png" alt="icons" width="20"> 1800 297 900</a>
              </div>
            </nav>
        </div>
      </div>
    </div>
  `;
}
