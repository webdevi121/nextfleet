<?php
// Define the team data
$teamData = [
    [
        'name' => 'Ryohta Imai (Rio)',
        'title' => 'Managing Director and <span class="d-block">Board Member</span>',
        'imgSrc' => 'images/nf-img-83.jpg',
    ],
    [
        'name' => 'Giulio Persichilli',
        'title' => 'General Manager - Sales & Client Relationships',
        'imgSrc' => 'images/team/giulio-1.jpg',
    ],
    [
        'name' => 'Yuji Kaneko',
        'title' => 'Strategic Planning & <span class="d-block">Sales Manager</span>',
        'imgSrc' => 'images/team/Yuji.jpg',
    ],
    [
        'name' => 'Stellios Falieros',
        'title' => 'General Manager - Finance/Company Secretary',
        'imgSrc' => 'images/team/Stel.jpg',
    ],
    [
        'name' => 'Louise Coles',
        'title' => 'People and <span class="d-block">Culture Manager</span>',
        'imgSrc' => 'images/team/Louise.jpg',
    ],
];

$salesData = [
    [
        'name' => 'Sevil Perry',
        'title' => 'Sales & Client <span class="d-block">Relationships Manager</span>',
        'imgSrc' => 'images/team/sevil-perry.jpg',
    ],
    [
        'name' => 'Neil Moodley',
        'title' => 'Client Relationship <span class="d-block">Manager</span>',
        'imgSrc' => 'images/team/Neilin.jpg',
    ],
    [
        'name' => 'Chris Sandison',
        'title' => 'Regional Sales & Client <span class="d-block">Relationship Manager</span>',
        'imgSrc' => 'images/team/Chris.jpg',
    ],
    [
        'name' => 'Warren Brinley',
        'title' => 'Sales & Client <span class="d-block">Relationship Manager</span>',
        'imgSrc' => 'images/team/Warren.jpg',
    ],
    [
        'name' => 'Adam Winterhalter',
        'title' => 'Sales & Client <span class="d-block">Relationship Manager</span>',
        'imgSrc' => 'images/nf-img-61.jpg',
    ],
    [
        'name' => 'Danny Phung',
        'title' => 'Client Account </br>Manager',
        'imgSrc' => 'images/team/Danny-Phung.jpg',
    ],
    [
        'name' => 'Con Veneziano',
        'title' => 'Commercial Vehicles Operations Manager',
        'imgSrc' => 'images/team/Con-V.jpg',
    ],
];

?>

<div id="team" class="container d-flex flex-column pt-5 pb-5">
    <div class="row mb-7 align-items-center">
        <div class="col-sm-12">
            <div class="pt-5 pb-5 pe-7 d-flex flex-column gap-3">
                <div class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2">
                    <img src="images/iconNf.png" alt="icon" width="14" />
                    <span>Our Expertise</span>
                </div>
                <h2>Committed to Continuous Learning </h2>
                <p>
                    At NextFleet, our expert fleet management team drives success through collaboration, innovation, and a deep understanding of fleet management. We optimise costs, streamline operations, and manage diverse assets, from passenger vehicles to heavy commercial vehicles.
                </p>
                <p>Committed to continuous learning, we excel in risk management, ethical negotiation, and workplace safety. Leveraging industry-leading technology, we deliver tailored solutions that enhance efficiency, safety, and sustainability for our clients.</p>
                <img src="images/nextfleet-team.jpg" alt="Thumbnail" class="w-100 rounded-4 h-100 object-fit-cover" />
            </div>
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-12 text-center">
            <h2>Our Leaders</h2>
        </div>
    </div>

    <div class="row align-items-start row-cols-2 row-cols-md-4 g-4 justify-content-center mb-7">
        <?php foreach ($teamData as $data): ?>
            <div>
                <div class="overflow-hidden rounded-4 shadow-lg team-items">
                    <div class="bg-white">
                        <img src="<?php echo $data['imgSrc']; ?>" alt="Team Image" class="w-100">
                    </div>
                    <div class="bg-dark text-white p-4 team-hover">
                        <h2 class="fs-4"><?php echo $data['name']; ?></h2>
                        <div class="fs-6"><?php echo $data['title']; ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="row mb-3">
        <div class="col-12 text-center">
            <h2>Sales Team</h2>
        </div>
    </div>

    <div class="row align-items-start row-cols-2 row-cols-md-4 g-4 justify-content-center">
        <?php foreach ($salesData as $data): ?>
            <div>
                <div class="overflow-hidden rounded-4 shadow-lg team-items">
                    <div class="bg-white">
                        <img src="<?php echo $data['imgSrc']; ?>" alt="Team Image" class="w-100">
                    </div>
                    <div class="bg-dark text-white p-4 team-hover">
                        <h2 class="fs-4"><?php echo $data['name']; ?></h2>
                        <div class="fs-6"><?php echo $data['title']; ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row pt-5 pb-5">
          <div class="col-12">
            <div class="text-center">
              <a href="contact.html" class="btn btn-primary text-white fw-bold">
                <div class="d-flex align-items-center gap-2">
                  <div class="text-uppercase">Speak to an Expert</div>
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

