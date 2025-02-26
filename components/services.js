export function loadServices() {
  const services = [
    {
      img: 'images/placeholder-1.png',
      title: 'Corporate Fleet Management Solutions',
      description:
        'We provide end-to-end fleet management solutions tailored to your business needs, ensuring efficiency and cost-effectiveness.',
      accentColor: `accent-color-1`,
    },
    {
      img: 'images/placeholder-2.png',
      title: 'Vehicle Fleet Leasing',
      description:
        'Our flexible leasing options help you expand your fleet without heavy upfront costs, keeping your business moving forward.',
      accentColor: `accent-color-2`,
    },
    {
      img: 'images/placeholder-3.png',
      title: 'Fleet Management Consulting Services',
      description:
        'Our expert consultants provide data-driven insights and strategies to optimize your fleet operations and reduce costs.',
      accentColor: `accent-color-3`,
    },
    {
      img: 'images/placeholder-4.png',
      title: 'Fleet Tracking and Telematics',
      description:
        'Utilize cutting-edge GPS tracking and telematics solutions to monitor vehicle usage, improve safety, and enhance productivity.',
      accentColor: `accent-color-4`,
    },
    {
      img: 'images/placeholder-5.png',
      title: 'Maintenance and Repair Management',
      description:
        'We handle scheduled maintenance and repair services to minimize downtime and extend the lifespan of your fleet.',
      accentColor: `accent-color-5`,
    },
    {
      img: 'images/placeholder-5.png',
      title: 'Fuel Management Solutions',
      description:
        'Reduce fuel expenses with our advanced monitoring systems that track fuel usage, prevent fraud, and improve efficiency.',
      accentColor: `accent-color-6`,
    },
  ];

  document.getElementById('services').innerHTML = `
      <div class="services bg-black">
        <div class="services-container text-white position-relative z-2">
            <div class="container">
                <div class="text-center mb-4">
                    <h2 class="text-uppercase">Our Services</h2>
                </div>
                <div class="row align-items-start row-cols-1 row-cols-md-3 g-4">
                    ${services
                      .map(
                        (service) => `
                        <div>
                        <div class="cards">
                          <div class="services-accent-color" style="background-color: var(--${service.accentColor});"></div>
                          <img src="${service.img}" alt="placeholder" class="img-placeholder">
                            <div class="pt-0 p-4">
                              <h3>${service.title}</h3>
                              <p class="line-clamp-3 subtext">
                                  ${service.description}
                              </p>
                              <a href="" class="text-uppercase secondary-btn" style="color: var(--${service.accentColor})">Explore Solutions</a>
                            </div>
                        </div>
                        </div>
                    `
                      )
                      .join('')}
                </div>
            </div>
        </div>
        </div>
    `;
}
