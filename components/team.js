export function loadTeam() {
  const teamData = [
    {
      name: 'Xiaohang Dong',
      title: 'Managing Director and Board Member',
      imgSrc: 'images/team/dong-1.jpg',
    },
    {
      name: 'Giulio Persichilli',
      title: 'General Manager - Sales & Client Relationships',
      imgSrc: 'images/team/giulio-1.jpg',
    },
    {
      name: 'Yuji Kaneko',
      title: 'Strategic Planning & Sales Manager',
      imgSrc: 'images/team/Yuji.jpg',
    },
    {
      name: 'Stellios Falieros',
      title: 'General Manager - Finance/Company Secretary',
      imgSrc: 'images/team/Stel.jpg',
    },
    {
      name: 'Alan Webster',
      title: 'General Manager - Digital & I.T.',
      imgSrc: 'images/team/alan-1.jpg',
    },
    {
      name: 'Louise Coles',
      title: 'People and Culture Manager',
      imgSrc: 'images/team/Louise.jpg',
    },
  ];
  const salesData = [
    {
      name: 'Sevil Perry',
      title: 'Sales & Client Relationships Manager',
      imgSrc: 'images/team/sevil-perry.jpg',
    },
    {
      name: 'Neil Moodley',
      title: 'Client Relationship Manager',
      imgSrc: 'images/team/Neilin.jpg',
    },
    {
      name: 'Chris Sandison',
      title: 'Regional Sales & Client Relationship Manager',
      imgSrc: 'images/team/Chris.jpg',
    },
    {
      name: 'Warren Brinley',
      title: 'Sales & Client Relationship Manager',
      imgSrc: 'images/team/Warren.jpg',
    },
    {
      name: 'Danny Phung',
      title: 'Commercial Vehicles Operations Manager',
      imgSrc: 'images/team/Danny-Phung.jpg',
    },
    {
      name: 'Con Veneziano',
      title: 'Commercial Vehicles Operations Manager',
      imgSrc: 'images/team/Con-V.jpg',
    },
  ];
  document.getElementById('team').innerHTML = `
    <div class="container d-flex flex-column pt-5 pb-5">
        <div class="row mb-7 align-items-center">
            <div class="col-8">
                <div class="pt-5 pb-5 pe-7">
                <div
                    class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
                >
                    <img src="images/iconNf.png" alt="icon" width="14" />
                    <span>Our Experties</span>
                </div>
                <h2>Committed to continuous learning </h2>
                <p>
                    At NextFleet, our expert fleet management team drives success through collaboration, innovation, and a deep understanding of fleet management. We optimise costs, streamline operations, and manage diverse assets, from passenger vehicles to heavy commercial fleet leasing..
                </p>
                <p>Committed to continuous learning, we excel in risk management, ethical negotiation, and workplace safety. Leveraging industry-leading technology, we deliver tailored solutions that enhance efficiency, safety, and sustainability for our clients.</p>
                </div>
            </div>
            <div class="col-4">
                <img
                src="images/team-img-2.jpg"
                alt="Thumbnail"
                class="w-100 rounded-img-custom h-100 object-fit-cover"
                />
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h2>Our Leaders</h2>
            </div>
        </div>
        <div class="row align-items-start row-cols-1 row-cols-md-4 g-4 justify-content-center mb-7">
                ${
                  teamData
                    .map(
                      (data) => `
                        <div>
                            <div class="overflow-hidden rounded-4 shadow-lg">
                                <div class="bg-white">
                                    <img src="${data.imgSrc}" alt="Team Image" class="w-100">
                                </div>
                                <div class="bg-dark text-white p-4">
                                    <h2 class="fs-4">${data.name}</h2>
                                    <div>${data.title}</div>
                                </div>
                            </div>
                        </div>
                    `
                    )
                    .join('') // Join the array of cards into a single string
                }
        </div>
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h2>Sales Team</h2>
            </div>
        </div>
        <div class="row align-items-start row-cols-1 row-cols-md-4 g-4 justify-content-center">
                ${
                  salesData
                    .map(
                      (data) => `
                        <div>
                            <div class="overflow-hidden rounded-4 shadow-lg">
                                <div class="bg-white">
                                    <img src="${data.imgSrc}" alt="Team Image" class="w-100">
                                </div>
                                <div class="bg-dark text-white p-4">
                                    <h2 class="fs-4">${data.name}</h2>
                                    <div>${data.title}</div>
                                </div>
                            </div>
                        </div>
                    `
                    )
                    .join('') // Join the array of cards into a single string
                }
        </div>
    </div>
    `;
}
