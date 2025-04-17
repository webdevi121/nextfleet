<?php
  function loadComponent($component, $props = []) {
      extract($props); // Now you can use $text, $title, etc. inside the component
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
        <div id="mobile" class="d-block d-md-none">
          <img src="images/services-mobile-img.jpg" alt="" class="w-100"/>
        </div>
        <div id="desktop" class="d-none d-md-block">
          <img src="images/services-img.jpg" alt="" />
        </div>
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

    <!-- Tab layout for Desktop view only -->
    <section id="services-container" class="d-none d-md-block">
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
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Tab layout for Desktop view only -->
    <section class="d-md-none" id="mobile-accordion">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 py-5">
                  <h2 class="mb-3">Our Services</h2>
                  <div class="accordion" id="mobileServicesAccordion"></div>
                </div>
            </div>
        </div>
    </section>




  <?php loadComponent("work-with-us");?>
    <?php loadComponent("footer"); ?>


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
                <h2 class="mb-2">Fleet Management Solutions Built for Your Needs</h2>
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
                <img src="images/services-img-placeholder.jpg" alt="" class="w-100 rounded-4 overflow-hidden">
                  <?php loadComponent("cta-services", [
                      'text' => 'Ready to optimise your fleet?',
                      'buttonText' => 'ENQUIRE NOW'
                  ]); ?>
            `
        },
        {
            id: 'tab-2',
            title: 'Explore Fleet Management',
            content: `
                <h2>Fleet Management Solutions Built for Your Needs</h2>
                <p>Managing a fleet is more than just keeping vehicles on the road—it’s about efficiency, cost control, and ensuring the safety of your drivers. At NextFleet, we offer tailored fleet solutions designed to meet the unique needs of businesses of all sizes, from small enterprises to large corporate fleets.</p>
                <p>Our data-driven approach provides real-time insights, helping you optimise fleet performance, enhance productivity, and minimise operational costs. With cutting-edge fleet tracking, compliance support, and proactive maintenance, we ensure your vehicles are always road-ready and aligned with industry best practices.</p>
                <h2>Our Fleet Solutions Include:</h2>
                <ul class="custom-bullets">
                  <li>Fleet Optimisation & Cost Control – Reduce unnecessary expenses with strategic vehicle selection, fuel management, and lifecycle planning.</li>
                  <li>Real-Time Fleet Tracking & Reporting – Gain complete visibility over your fleet with advanced telematics, GPS tracking, and usage analytics.</li>
                  <li>Compliance & Risk Management – Stay ahead of evolving regulations with automated compliance monitoring, safety protocols, and driver risk assessments.</li>
                  <li>Vehicle Acquisition & Disposal – Ensure cost-effective fleet turnover with smart procurement strategies and optimised resale timing.</li>
                  <li>Sustainability & Emission Reduction – Transition to a greener fleet with fuel-efficient solutions, hybrid and EV integration, and carbon reduction strategies.</li>
                  <li>Driver Safety & Training – Minimise risk and enhance driver performance with safety programs, coaching, and telematics-based feedback.</li>
                </ul>
                <p>Whether you operate a compact fleet or a nationwide network of vehicles, our customised solutions ensure your business stays mobile, efficient, and future-ready.</p>
                  <?php loadComponent("cta-services", [
                      'text' => 'Ready to optimise your fleet?',
                      'buttonText' => 'Contact Us'
                  ]); ?>
            `
        },
        {
            id: 'tab-3',
            title: 'Comprehensive Fleet Management Services',
            content: `
                <h2>Comprehensive Fleet Management Services</h2>
                <p>Our full-service fleet management covers everything from vehicle acquisition and maintenance to compliance, reporting, and cost control. We provide:</p>
                <ul class="custom-bullets">
                  <li>Dedicated Account Management – Personalised support tailored to your business needs.</li>
                  <li>Ongoing Reporting & Analytics – Data-driven insights to improve efficiency and reduce costs.</li>
                  <li>Elematics Integration – Real-time tracking and monitoring for enhanced fleet visibility.</li>
                  <li>Proactive Maintenance & Repairs – Ensuring your vehicles remain safe, compliant, and operational.</li>
                </ul>
                  <?php loadComponent("cta-services", [
                      'text' => 'Let us handle your fleet while you focus on business growth',
                      'buttonText' => 'Enquire Now'
                  ]); ?>
            `
        },
        {
            id: 'tab-4',
            title: 'Is an Outsourced Fleet Model Right for You?',
            content: `
                <h2>Is an Outsourced Fleet Model Right for You?</h2>
                <p>Managing a fleet internally can be complex and costly. Our Fleet Management Organisation (FMO) model simplifies fleet operations by providing expert support, reducing administration, and delivering cost efficiencies. We integrate:</p>
                <ul class="custom-bullets">
                  <li>Procurement & Disposal – Sourcing and retiring vehicles cost-effectively.</li>
                  <li>Maintenance & Repairs – Ensuring optimal vehicle performance and safety.</li>
                  <li>Fuel & Toll Management – Streamlining expense tracking and optimisation.</li>
                  <li>Telematics & Compliance – Providing real-time insights and regulatory adherence.</li>
                </ul>
                <p>By outsourcing fleet management to NextFleet, businesses can reduce overheads, improve efficiency, and maintain compliance effortlessly.</p>
                  <?php loadComponent("cta-services", [
                      'text' => "Let's discuss if outsourcing your fleet is the right move.",
                      'buttonText' => 'Contact Us'
                  ]); ?>
            `
        },
        {
            id: 'tab-5',
            title: 'Flexible Financing for Your Fleet',
            content: `
                <h2>Flexible Financing for Your Fleet</h2>
                <p>Our fleet funding solutions help businesses access vehicles without large upfront costs. We offer tailored financing options, including:</p>
                <ul class="custom-bullets">
                  <li>Operating Lease – No ownership responsibilities, predictable costs, and no depreciation risks.</li>
                  <li>Finance Lease – Control over your fleet with an option to purchase vehicles at lease-end.</li>
                  <li>Novated Lease – A tax-effective salary packaging option that allows employees to lease a vehicle using pre-tax income, reducing their taxable salary while providing businesses with a cost-efficient fleet solution.</li>
                </ul>
                <p>With flexible terms and cost-effective structures, our financing solutions enable businesses to maintain a modern and efficient fleet while preserving capital.</p>
                  <?php loadComponent("cta-services", [
                      'text' => "Find the best financing option for your fleet",
                      'buttonText' => 'Get Started'
                  ]); ?>

            `
        },
        {
            id: 'tab-6',
            title: 'Leasing Solutions',
            content: `
                <h2>Tailored Leasing Solutions for Every Business</h2>
                <p>Fleet leasing provides flexibility, cost savings, and risk management benefits. Whether you need a single vehicle or a full fleet, our leasing options help businesses maintain modern, efficient fleets without the burden of ownership. Our lease offerings include:</p>
                <ul class="custom-bullets">
                  <li>Short & Long-Term Leases – Commercial fleet leasing structures based on your business needs.</li>
                  <li>Fully Maintained Leasing – Comprehensive packages covering servicing, repairs, and roadside assistance.</li>
                  <li>Custom Fleet Solutions – Vehicles tailored to specific industry requirements.</li>
                </ul>
                  <?php loadComponent("cta-services", [
                      'text' => "Flexible fleet leasing solutions to suit your needs",
                      'buttonText' => 'Enquire Now'
                  ]); ?>
            `
        },
        {
            id: 'tab-7',
            title: 'Driving Towards a Greener Fleet',
            content: `
                <h2>Driving Towards a Greener Fleet</h2>
                <p>Reducing fleet emissions is key to achieving sustainability goals. We help businesses lower their carbon footprint through:</p>
                <ul class="custom-bullets">
                  <li>Fleet Optimisation – Enhancing efficiency with route planning and fuel management.</li>
                  <li>Transition Planning – Strategic guidance for integrating hybrid and electric vehicles.</li>
                  <li>Emission Reduction Strategies – Data-driven insights to reduce fuel consumption and environmental impact..</li>
                </ul>
                  <?php loadComponent("cta-services", [
                      'text' => "Sustainable fleets are the future—let NextFleet help you lead the way",
                      'buttonText' => 'Speak to an Expert'
                  ]); ?>

            `
        },
        {
            id: 'tab-8',
            title: 'Zero-Emission Fleet Solutions',
            content: `
                <h2>Your Roadmap to a Zero-Emission Fleet</h2>
                <p>The future of fleet management solutions is electric and hydrogen-powered. Our transition-to-zero services guide businesses in adopting sustainable vehicles, optimising charging infrastructure, and managing the shift to a low-emission fleet. Our services include:</p>
                <ul class="custom-bullets">
                  <li>EV & Hydrogen Vehicle Procurement – Helping businesses select the right zero-emission vehicles.</li>
                  <li>Infrastructure Planning – Charging and refueling solutions for seamless adoption.</li>
                  <li>Total Cost of Ownership Analysis – Helping businesses make informed financial decisions.</li>
                </ul>
                  <?php loadComponent("cta-services", [
                      'text' => "Drive sustainability forward with NextFleet’s zero-emission solutions.",
                      'buttonText' => 'Speak to an Expert'
                  ]); ?>
            `
        },
        {
            id: 'tab-9',
            title: 'Specialised Truck Leasing & Management',
            content: `
                <h2>Specialised Truck Leasing & Management</h2>
                <p>Our truck leasing solutions help businesses optimise heavy vehicle operations with flexible lease options, maintenance support, and compliance management. We ensure your fleet stays road-ready while reducing downtime and costs. Our services include:</p>
                <ul class="custom-bullets">
                  <li>Tailored Truck Leasing – Short and long-term lease options for all business sizes.</li>
                  <li>Proactive Maintenance Programs – Keeping your trucks operational with minimal downtime.</li>
                  <li>Regulatory Compliance Support – Ensuring all heavy vehicles meet legal and safety requirements.</li>
                  <li>Keep your operations running smoothly with NextFleet’s expert truck leasing and management solutions.</li>
                </ul>
                  <?php loadComponent("cta-services", [
                      'text' => "Keep your operations running smoothly with NextFleet",
                      'buttonText' => 'Enquire Now'
                  ]); ?>
            `
        }
    ];

    document.addEventListener('DOMContentLoaded', function () {

      // Desktop Tab script
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


        // Mobile Accordion Script
        const mobileAccordion = document.getElementById('mobileServicesAccordion');
        tabData.forEach((tab, index) => {
            const headingId = `${tab.id}-heading`;
            const collapseId = `${tab.id}-collapse`;

            const accordionItem = document.createElement('div');
            accordionItem.className = 'accordion-item';
            accordionItem.innerHTML = `
                <h2 class="accordion-header" id="${headingId}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#${collapseId}" aria-expanded="false" aria-controls="${collapseId}">
                        ${tab.title}
                    </button>
                </h2>
                <div id="${collapseId}" class="accordion-collapse collapse" aria-labelledby="${headingId}" data-bs-parent="#mobileServicesAccordion">
                    <div class="accordion-body">
                        ${tab.content}
                    </div>
                </div>
            `;
            mobileAccordion.appendChild(accordionItem);
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






<?php
  // Get the buffered content
  $output = ob_get_contents();
  ob_end_clean();

  // Save the output to the root directory as index.html
  file_put_contents(__DIR__ . '/../services.html', $output);

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