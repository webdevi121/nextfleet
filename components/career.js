export function loadCareer() {
  const jobOpportunities = [
    {
      title: 'Operations Officer – Fleet Administration',
      description:
        'We are looking for individuals who share our vision and are eager to contribute to our mission of expanding our market presence, enhancing brand recognition, and penetrating new markets. Click on the button below to know more:',
      applyLink: '#', // Replace with actual link
    },
  ];

  const jobCardsHTML = jobOpportunities
    .map((job) => {
      return `
      <div class="col-12 col-md-4">
        <div class="bg-white p-4 rounded-3 shadow-lg">
          <h2 class="fs-4">${job.title}</h2>
          <p>${job.description}</p>
          <a href="${job.applyLink}" class="btn btn-primary">Apply Now!</a>
        </div>
      </div>
    `;
    })
    .join(''); // Join the array of HTML strings into one

  document.getElementById('career').innerHTML = `
    <div class="bg-light pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>Career</span>
            </div>
            <h2>Build Your Career at NextFleet</h2>
            <p>
              No two days are the same in fleet management, making it an
              exciting and dynamic industry to be a part of. As part of
              Mitsubishi Corporation’s Automotive & Mobility Group, NextFleet is
              helping redefine transport and mobility for businesses and
              society.
            </p>
            <p>
              Technology is driving a shift towards Connected, Autonomous,
              Shared, and Electric (CASE) solutions, improving efficiency and
              sustainability. At NextFleet, we’re committed to leading this
              transformation, creating better mobility solutions for all.
            </p>
            <p>
              <strong
                >If you'd like to stay updated on opportunities as they arise,
                email
                <a href="mailto:careers@nextfleet.net.au"
                  >careers@nextfleet.net.au</a
                ></strong
              >
            </p>
          </div>
          <div class="col-12 mt-4">
            <div class="d-flex align-items-center">
              <h2 class="mb-3">Career Opportunities</h2>
              <div class="ms-auto">
                <a href="" class="text-decoration-none">view more</a>
              </div>
            </div>
            <div class="row g-4">
              ${jobCardsHTML}
            </div>
          </div>
        </div>
      </div>
    </div>
  `;
}
