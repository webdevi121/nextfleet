export function loadHeader() {
  const navItems = [
    { name: 'About Us', href: '#' },
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
        <div class="text-white d-flex justify-content-center mb-5"><img src="images/nextfleet-logo.png" width="253"></div>
        <nav class="navbar navbar-expand-lg">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              ${navLinks}
            </ul>
            <a href="" class="ms-5 text-primary secondary-btn">1800 297 900</a>
          </div>
        </nav>
      </div>
    </div>
  `;
}
