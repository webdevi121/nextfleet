<?php
// Define job opportunities
$jobOpportunities = [
    [
        'title' => 'Operations Officer – Fleet Administration',
        'description' => 'We are looking for individuals who share our vision and are eager to contribute to our mission of expanding our market presence, enhancing brand recognition, and penetrating new markets. Click on the button below to know more:',
        'applyLink' => 'contact.html', // Replace with actual link
    ],
    // Add more job opportunities as needed
];

?>

<section id="career-section" class="bg-light pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column gap-3">
                <div class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2">
                    <img src="images/iconNf.png" alt="icon" width="14" />
                    <span>Career</span>
                </div>
                <h2>Build Your Career at NextFleet</h2>
                <p>
                    No two days are the same in fleet management, making it an exciting and dynamic industry to be a part of. As part of Mitsubishi Corporation’s Automotive & Mobility Group, NextFleet is helping redefine transport and mobility for businesses and society.
                </p>
                <p>
                    Technology is driving a shift towards Connected, Autonomous, Shared, and Electric (CASE) solutions, improving efficiency and sustainability. At NextFleet, we’re committed to leading this transformation, creating better mobility solutions for all.
                </p>
                <p>
                    <strong>If you'd like to stay updated on opportunities as they arise, email <a href="mailto:careers@nextfleet.net.au">careers@nextfleet.net.au</a></strong>
                </p>
            </div>
            <div class="col-12 mt-4">
                <div class="d-flex align-items-center">
                    <h2 class="mb-3">Career Opportunities</h2>
                </div>
                <div class="row g-4">
                    <?php foreach ($jobOpportunities as $job): ?>
                    <div class="col-12 col-md-4">
                        <div class="bg-white p-4 rounded-3 shadow-lg">
                            <h2 class="fs-4"><?php echo $job['title']; ?></h2>
                            <p><?php echo $job['description']; ?></p>
                            <a href="<?php echo $job['applyLink']; ?>" class="btn btn-primary text-white fw-bold">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="text-uppercase">Apply Now</div>
                                    <div class="flex-grow-1">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="currentColor">
                                            <path d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z" />
                                            <path d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>