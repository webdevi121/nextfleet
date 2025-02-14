export function loadServices() {
  const services = [
    {
      title: 'Corporate Fleet Management Solutions',
      description:
        'We provide end-to-end fleet management solutions tailored to your business needs, ensuring efficiency and cost-effectiveness.',
    },
    {
      title: 'Vehicle Fleet Leasing',
      description:
        'Our flexible leasing options help you expand your fleet without heavy upfront costs, keeping your business moving forward.',
    },
    {
      title: 'Fleet Management Consulting Services',
      description:
        'Our expert consultants provide data-driven insights and strategies to optimize your fleet operations and reduce costs.',
    },
    {
      title: 'Fleet Tracking and Telematics',
      description:
        'Utilize cutting-edge GPS tracking and telematics solutions to monitor vehicle usage, improve safety, and enhance productivity.',
    },
    {
      title: 'Maintenance and Repair Management',
      description:
        'We handle scheduled maintenance and repair services to minimize downtime and extend the lifespan of your fleet.',
    },
    {
      title: 'Fuel Management Solutions',
      description:
        'Reduce fuel expenses with our advanced monitoring systems that track fuel usage, prevent fraud, and improve efficiency.',
    },
  ];

  document.getElementById('services').innerHTML = `
        <div class="bg-black text-white py-5">
            <div class="container">
                <div class="text-center">
                    <h2>Our Services</h2>
                </div>
                <div class="row align-items-start row-cols-1 row-cols-md-3">
                    ${services
                      .map(
                        (service) => `
                        <div class="col">
                            <h3>${service.title}</h3>
                            <p class="line-clamp-3">
                                ${service.description}
                            </p>
                        </div>
                    `
                      )
                      .join('')}
                </div>
            </div>
        </div>
    `;
}
