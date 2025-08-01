<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

  <?php

  // Featured Articles Array
  $featuredArticles = [
      [
          'image' => 'images/nf-img-30.jpg',
          'title' => 'Car Fleet Management: Streamline Your Business Operations with NextFleet',
          'description' => 'Managing and handling a fleet of vehicles is a complex task that needs careful attention to numerous details, from vehicle maintenance and fuel costs to driver safety and compliance. At NextFleet Australia, we offer comprehensive Car Fleet Management solutions specifically designed to streamline your operations, reduce costs, and improve efficiency. Let’s understand how our services can benefit your business and help you navigate the challenges of fleet management.',
          'link' => '/insights-article.html'
      ],
      
      // Add more featured articles here if needed
  ];

  // Latest Articles Array
  $latestArticles = [
      [
          'image' => 'images/nf-img-60.jpg',
          'title' => 'Reliable & Efficient Solutions for Your Business',
          'description' => "For businesses across Australia, efficient and reliable transportation plays a crucial role in daily operations. From delivering goods to managing on-the-go services, having a dependable fleet...",
          'link' => '/Reliable-and-Efficient-Solutions-for-Your-Business.html'
      ],
      [
          'image' => 'images/nf-img-31.jpg',
          'title' => 'Top Fleet Vehicle Options for Australian Businesses',
          'description' => "In Australia, effective fleet management is more than just a business necessity; it’s a strategic advantage that can significantly enhance a business's operational efficiency...",
          'link' => '/top-fleet-vehicle-options.html'
      ],
      [
          'image' => 'images/nf-img-32.jpg',
          'title' => 'How NextFleet Is Transforming Fleet Management for Australian Businesses',
          'description' => "In today's fast-paced business environment, effective fleet management is more critical than ever. For Australian businesses, managing a fleet of vehicles can be a tough task...",
          'link' => '/revolutionizing-fleet-management-for-australia.html'
      ],
      [
          'image' => 'images/nf-img-33.jpg',
          'title' => 'Contributing to the Recovery of the Great Barrier Reef',
          'description' => 'The Great Barrier Reef is fundamental to Australia’s economy, and a national icon that needs to be preserved to ensure marine resources’ ongoing sustainability.',
          'link' => '/Recovery-of-Great-Barrier-Reef.html'
      ],
      [
          'image' => 'images/nf-img-34.jpg',
          'title' => 'NextFleet appointed as LGP approved contractor',
          'description' => 'NextFleet has been appointed as an LGP (Local Government Procurement) approved contractor.',
          'link' => '/LGP-approved-contractor.html'
      ],
      [
          'image' => 'images/nf-img-35.jpg',
          'title' => 'NextFleet announces greenDrive Carbon Offset Program',
          'description' => 'NextFleet is pleased to announce that it has established a Carbon Offset Program “greenDrive” in partnership with Australian Integrated Carbon (AIC)',
          'link' => '/greendrive-carbon-offset-program.html'
      ]
      // Add more latest articles here if needed
  ];
?>

<?php loadComponent("header");?>

<section id="overview" class="bg-light pt-5 pb-5">
    <div class="container">
    <div class="row">
        <div class="col-sm-8 m-auto text-center">
        <h1>Industry Trends & Expert Insights</h1>
        <div>
          Stay up to date with the latest in fleet and mobility, and how you can better utilise your assets with NextLevel Insights from our team.
        </div>
        <?php loadComponent("cta-services", [
                      'text' => "Want to stay informed?",
                      'buttonText' => 'Subscribe'
                  ]); ?>
    </div>
    </div>
</section>

<div class="container py-5">
  
  <!-- Featured Articles -->
  <h2 class="mb-4">Featured Articles</h2>
  <div class="row mb-5">
    <?php foreach ($featuredArticles as $article): ?>
      <div class="col-md-12 mb-4">
        <div class="card flex-md-row">
          <a href="<?= $article['link']; ?>" class="card-img-left h-auto w-100">
            <img src="<?= $article['image']; ?>" class="card-img-left img-fluid h-100 w-100" alt="Featured Article" style="object-fit: cover;">
          </a>
          <div class="card-body">
            <h4 class="card-title"><?= $article['title']; ?></h4>
            <p class="card-text"><?= $article['description']; ?></p>
            <a href="<?= $article['link']; ?>" class="btn btn-primary text-white">Read More</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Latest Articles -->
  <h2 class="mb-4">Latest Articles</h2>
  <div class="row g-4">
    <?php foreach ($latestArticles as $article): ?>
      <div class="col-md-4">
        <div class="card h-100">
          <a href="<?= $article['link']; ?>" class="h-auto w-100">
            <img src="<?= $article['image']; ?>" class="card-img-top" alt="Latest Article">
          </a>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= $article['title']; ?></h5>
            <p class="card-text"><?= $article['description']; ?></p>
            <a href="<?= $article['link']; ?>" class="btn btn-outline-primary mt-auto">Read More</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</div>

<?php loadComponent("work-with-us");?>
<?php loadComponent("footer"); ?>
