<?php
  function loadComponent($component) {
      include __DIR__ . "/components/$component.php";
  }

  // Start output buffering
  ob_start();
?>

<?php loadComponent("header");?>
    <section
      id="banner"
      class="static-banner d-flex align-items-center position-relative bg-black text-white overflow-hidden"
    >
      <div class="overlay-gradient"></div>
      <div class="hero-img">
        <img src="images/services-img.jpg" alt="" />
      </div>
      <div class="container position-relative z-3">
        <div class="row">
          <div class="col-sm-6 d-flex flex-column gap-5">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>Services</span>
            </div>
            <h1 class="text-uppercase">Fleet Management Solutions Tailored for Your Business</h1>
            <div>
              <a href="/" class="btn btn-primary text-white fw-bold">
                <div class="d-flex align-items-center gap-2">
                  <div class="text-uppercase">Enquire Now</div>
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
    </section>
    <section id="breadcrumb" class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Services</li>
          </ol>
        </nav>
      </div>
    </section>
    <section id="overview" class="bg-light pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 m-auto text-center">
            <p>
              At <strong class="text-primary">NextFleet</strong>, we provide comprehensive fleet management solutions and vehcile leasing solutions designed to optimise operations, reduce costs, and support a sustainable future. As a wholly-owned subsidiary of Mitsubishi Corporation, we combine global strength with local expertise to deliver cutting-edge solutions for businesses of all sizes. 
            </p>
            <p>Whether you're looking for tailored fleet management services, emission reduction strategies, or expert guidance on transitioning to zero-emission vehicles, we have the expertise to support your business at every stage.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="services-container">
        <div class="container">
            <div class="row g-5">
                <!-- Navigation -->
                <div class="col-sm-4">
                    <div class="position-sticky top-0 pt-10 pb-10">
                        <h2>Our Services</h2>
                        <ul class="nav flex-column nav-pills gap-3" id="service-tabs" role="tablist">
                            <!-- Tabs will be injected here -->
                        </ul>
                    </div>
                </div>

                <!-- Tab Content -->
                <div class="col-sm-8 pt-10 pb-10">
                    <div class="tab-content" id="service-tabContent">
                        <!-- Tab panes will be injected here -->
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="work-with-us" class="bg-black">
      <div class="container">
        <div class="row">
          <div class="col-6 position-relative">
            <div class="dark-img-thumbnail">
              <img
                src="images/woman-driving-img.jpg"
                alt="thumbnail"
                class="h-100"
              />
            </div>
          </div>
          <div class="col-6 ms-auto pt-6 pb-6 text-white">
            <h2>Why Work With Us?</h2>
            <p>
              At NextFleet, we believe in building strong partnerships,
              delivering exceptional service, and fostering a dynamic,
              future-focused workplace.
            </p>
            <p>
              For our clients, we provide seamless, end-to-end fleet management
              solutions, combining expertise, technology, and innovation to
              drive efficiency and performance.
            </p>
            <p>
              For our partners, we cultivate meaningful, mutually beneficial
              collaborations to enhance industry standards and deliver
              best-in-class solutions.
            </p>
            <p>
              And for our employees, we offer an exciting opportunity to shape
              the future of mobility, working within a diverse, forward-thinking
              team backed by the global strength of Mitsubishi Corporation.
            </p>
            <p>Together, we’re redefining fleet and mobility.</p>
          </div>
        </div>
      </div>
    </section>
    <?php loadComponent("footer"); ?>



<?php
  // Get the buffered content
  $output = ob_get_contents();
  ob_end_clean();

  // Save the output to the root directory as index.html
  file_put_contents(__DIR__ . '/../about-us.html', $output);

  // Function to copy directories (CSS, fonts, images, etc.)
  function copyFolder($source, $destination) {
      if (!is_dir($source)) return; // Exit if the source folder doesn't exist
      if (!is_dir($destination)) mkdir($destination, 0777, true);

      $files = scandir($source);
      foreach ($files as $file) {
          if ($file === '.' || $file === '..') continue;
          $srcFile = $source . DIRECTORY_SEPARATOR . $file;
          $destFile = $destination . DIRECTORY_SEPARATOR . $file;

          if (is_dir($srcFile)) {
              copyFolder($srcFile, $destFile);
          } else {
              copy($srcFile, $destFile);
          }
      }
  }

  // Copy 'css', 'fonts', and 'images' folders directly into the root directory
  copyFolder(__DIR__ . '/css', __DIR__ . '/../css');
  copyFolder(__DIR__ . '/fonts', __DIR__ . '/../fonts');
  copyFolder(__DIR__ . '/images', __DIR__ . '/../images'); // Copy images folder

  // Output the generated page
  echo "Export completed! Check the root directory.";
  echo $output;
?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabLinks = document.querySelectorAll('#service-tabs .nav-link');

        tabLinks.forEach(link => {
            link.addEventListener('shown.bs.tab', function () {
                const container = document.getElementById('services-container');
                if (container) {
                    container.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
</script>

<script>
    const tabData = [
        {
            id: 'tab-1',
            title: 'Fleet Management Solutions',
            content: `
                <h2>Fleet Management Solutions Built for Your Needs</h2>
                <p>Managing a fleet is more than just keeping vehicles on the road—it’s about efficiency, cost control, and ensuring the safety of your drivers. At NextFleet, we offer tailored fleet solutions designed to meet the unique needs of businesses of all sizes.</p>
                <ul class="custom-bullets">
                    <li>Fleet Optimisation & Cost Control – Reduce unnecessary expenses with strategic vehicle selection, fuel management, and lifecycle planning.</li>
                    <li>Real-Time Fleet Tracking & Reporting – Gain complete visibility over your fleet with advanced telematics, GPS tracking, and usage analytics.</li>
                    <li>Compliance & Risk Management – Stay ahead of evolving regulations with automated compliance monitoring, safety protocols, and driver risk assessments.</li>
                    <li>Vehicle Acquisition & Disposal – Ensure cost-effective fleet turnover with smart procurement strategies and optimised resale timing.</li>
                    <li>Sustainability & Emission Reduction – Transition to a greener fleet with fuel-efficient solutions, hybrid and EV integration, and carbon reduction strategies.</li>
                    <li>Driver Safety & Training – Minimise risk and enhance driver performance with safety programs, coaching, and telematics-based feedback.</li>
                </ul>
                <p>Whether you operate a compact fleet or a nationwide network of vehicles, our customised solutions ensure your business stays mobile, efficient, and future-ready.</p>
                <img src="images/services-img-placeholder.jpg" alt="">
            `
        },
        {
            id: 'tab-2',
            title: 'Explore Fleet Management',
            content: `
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic incidunt non ducimus ipsum voluptates repellendus aperiam necessitatibus sunt quisquam, et veniam neque dicta commodi, magnam, totam quod eaque sint quos?</p>
            `
        },
        {
            id: 'tab-3',
            title: 'Comprehensive Fleet Management Services',
            content: `
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic incidunt non ducimus ipsum voluptates repellendus aperiam necessitatibus sunt quisquam, et veniam neque dicta commodi, magnam, totam quod eaque sint quos?</p>
            `
        },
        {
            id: 'tab-4',
            title: 'Is an Outsourced Fleet Model Right for You?',
            content: `
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic incidunt non ducimus ipsum voluptates repellendus aperiam necessitatibus sunt quisquam, et veniam neque dicta commodi, magnam, totam quod eaque sint quos?</p>
            `
        },
        {
            id: 'tab-5',
            title: 'Flexible Financing for Your Fleet',
            content: `
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic incidunt non ducimus ipsum voluptates repellendus aperiam necessitatibus sunt quisquam, et veniam neque dicta commodi, magnam, totam quod eaque sint quos?</p>
            `
        },
        {
            id: 'tab-6',
            title: 'Leasing Solutions',
            content: `
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic incidunt non ducimus ipsum voluptates repellendus aperiam necessitatibus sunt quisquam, et veniam neque dicta commodi, magnam, totam quod eaque sint quos?</p>
            `
        },
        {
            id: 'tab-7',
            title: 'Driving Towards a Greener Fleet',
            content: `
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic incidunt non ducimus ipsum voluptates repellendus aperiam necessitatibus sunt quisquam, et veniam neque dicta commodi, magnam, totam quod eaque sint quos?</p>
            `
        },
        {
            id: 'tab-8',
            title: 'Zero-Emission Fleet Solutions',
            content: `
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic incidunt non ducimus ipsum voluptates repellendus aperiam necessitatibus sunt quisquam, et veniam neque dicta commodi, magnam, totam quod eaque sint quos?</p>
            `
        },
        {
            id: 'tab-9',
            title: 'Specialised Truck Leasing & Management',
            content: `
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic incidunt non ducimus ipsum voluptates repellendus aperiam necessitatibus sunt quisquam, et veniam neque dicta commodi, magnam, totam quod eaque sint quos?</p>
            `
        }
    ];

    document.addEventListener('DOMContentLoaded', function () {
        const tabList = document.getElementById('service-tabs');
        const tabContent = document.getElementById('service-tabContent');

        tabData.forEach((tab, index) => {
            const isActive = index === 0 ? 'active' : '';
            const isShow = index === 0 ? 'show active' : '';

            // Create tab nav
            const li = document.createElement('li');
            li.className = 'nav-item';
            li.role = 'presentation';
            li.innerHTML = `
                <a class="nav-link ${isActive}" id="${tab.id}-tab" data-bs-toggle="tab" href="#${tab.id}" role="tab" aria-controls="${tab.id}" aria-selected="${index === 0}">
                    ${tab.title}
                </a>
            `;
            tabList.appendChild(li);

            // Create tab pane
            const div = document.createElement('div');
            div.className = `tab-pane fade ${isShow}`;
            div.id = tab.id;
            div.role = 'tabpanel';
            div.setAttribute('aria-labelledby', `${tab.id}-tab`);
            div.innerHTML = tab.content;
            tabContent.appendChild(div);
        });

        // Smooth scroll to #services-container when tab is shown
        const tabLinks = document.querySelectorAll('#service-tabs .nav-link');
        tabLinks.forEach(link => {
            link.addEventListener('shown.bs.tab', function () {
                const container = document.getElementById('services-container');
                if (container) {
                    container.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
</script>
