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
          <div id="mobile" class="d-block d-md-none">
            <img src="images/nf-img-44-mobile.jpg" alt="" class="w-100"/>
          </div>
          <div id="desktop" class="d-none d-md-block">
            <img src="images/nf-img-45.jpg" alt="" />
          </div>
        </div>
      <div class="container position-relative z-3">
        <div class="row">
          <div class="col-sm-6 d-flex flex-column gap-5">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>Insights</span>
            </div>
            <div>
              <h1 class="text-uppercase">Contributing to the Recovery of the Great Barrier Reef</h1>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="container pt-5 pb-5">
        <div class="row g-5">
            <div class="col-sm-4">
                <img src="images/nf-img-46.jpg" alt="Thumbnail" class="w-100 rounded-img-custom h-100 object-fit-cover">
            </div>
            <div class="col-sm-8">
                <div class="pt-5 pb-5 ps-5 d-flex flex-column gap-3">
                    <h2>The Great Barrier Reef is fundamental to Australia’s economy, and a national icon that needs to be preserved to ensure marine resources’ ongoing sustainability.</h2>
                    <p>As a Mitsubishi Corporation subsidiary, we are guided by our shareholders’ principles of considering the earth to be our most important stakeholder and are continually working towards the realisation of a sustainable society through our business activities. As part of a joint initiative supported by Earthwatch and James Cook University, we were pleased to participate in the Recovery of the Great Barrier Reef program on Magnetic Island, Queensland.</p>
                </div>
            </div>
            <div class="col-lg-12 columnBlockLayout" style="flex-grow: 1; display: flex; flex-direction: column; min-width: 300px;">
                <p>From 18-22 July, NextFleet’s GM – Finance, Accounting & Administration, Stellios Falieros participated as a citizen scientist, assisting researchers in the coral recovery off Florence and Arthur Bays’ waters. The initiative involved 10-15 researchers and citizen scientists scuba diving and snorkelling and sharing living and cooking arrangements. Stellios’ primary responsibilities were supporting reef restoration techniques, specifically removing macroalgae (i.e. sea-weeding), to reduce direct competition and open space for new coral larvae to settle. The project allowed him to learn about research, gain field skills, and help collect data.</p>

                <p class="mb-0">Commenting on the initiative, Stellios said: “I gained an appreciation that Coral reef ecosystems are under pressure from multiple factors that contribute to degrading reef condition and their function. Macroalgae (seaweed) removal is being trialled as a management tool to reduce competition between algae and corals and provide space for coral growth with the hope of restoring the spatial dominance of habitat-forming corals.</p>
            </div>
            <div class="col-lg-12">
                <img src="images/nf-img-47.jpg" alt="image" class="figure-img img-fluid rounded">
            </div>
            <div class="col-lg-12">
                <p>James Cook University’s Hillary Smith and Associate Professor David Bourne led the study. They said declining coral cover on tropical coral reefs often results in an increase in macroalgae (seaweed). “When macroalgae proliferates outside regular seasonal growth, it can shift the ecosystem dominance away from corals. Seaweed can prevent or reduce coral settlement and survival, and so these reefs struggle to recover once seaweed is established”</p>
                <p>My experience was an absolute privilege to be involved in the recovery effort in conjunction with scientists from JCU and the Earthwatch team.</p>
                <p>As a citizen scientist member of the team we assisted with the removal of macroalgae from twelve 25-square-metre plots on a degraded reef off Townsville’s Magnetic Island. Many bags of seaweed was removed, sorted into different types and weighed to assist with analysing growth patterns. In addition to this I was involved in photographing the various plots which are used to upload into special software to analyse the positive impact of this on the growth of the coral reef.</p>
            </div>
            <div class="col-lg-12">
                <figure class="figure">
                    <img src="images/nf-img-48.jpg" class="figure-img img-fluid rounded">
                </figure>
            </div>
            <div class="col-lg-12 columnBlockLayout" style="flex-grow: 1; display: flex; flex-direction: column; min-width: 300px; margin: 20px 0px; padding: 20px;">    
                <p>As we continue to operate our business according to Mitsubishi Corporations guiding principles, we will continue to support initiatives like the Earthwatch Recovery of the Great Barrier Reef, assisting scientists in gathering the research and evidence required to aid the reef’s recovery.</p>
                <hr>
                <h5>About Mitsubishi Corporation</h5>
                <p>Mitsubishi Corporation (MC) is a global integrated business enterprise that develops and operates businesses together with its offices and subsidiaries in approximately 90 countries and regions worldwide, as well as a global network of around 1,700 group companies.&nbsp;</p>
                <div><br></div>
                <div>MC has 10 Business Groups that operate across virtually every industry: Natural Gas, Industrial Materials, Petroleum &amp; Chemicals, Mineral Resources, Industrial Infrastructure, Automotive &amp; Mobility, Food Industry, Consumer Industry, Power Solution and Urban Development. Through these 10 Business Groups, MC’s current activities have expanded far beyond its traditional trading operations to include project development, production and manufacturing operations, working in collaboration with our trusted partners around the globe.&nbsp;</div>
                <div><br></div>
                <div>With an unwavering commitment to conducting business with integrity and fairness, MC remains fully dedicated to growing its businesses while contributing to a prosperous society.&nbsp;</div>
                <div><br></div>
                <div><b>For more: <a href="https://www.mitsubishicorp.com/jp/en/">https://www.mitsubishicorp.com/jp/en/</a></b></div>
                <hr>
                <h5>About Earthwatch</h5>
                <p>Earthwatch connects people with scientists worldwide to conduct environmental research and empowers them with the knowledge they need to conserve the planet. Since its founding in 1971, Earthwatch has been taking action to address global change through a time-tested model of citizen science and community engagement. By pairing citizen science volunteers from all sectors of society with researchers around the world, Earthwatch teams have helped to safeguard critical habitats, conserve biodiversity, and promote the sustainable use of natural resources.&nbsp;</p>
                <div><br></div>
                <div><b>For more: <a href="https://earthwatch.org/">https://earthwatch.org/</a></b></div>
                <hr>
                <h5>About James Cook University</h5>
                <p><b>Leading-edge coral reef research centre&nbsp;</b></p>
                <div><br></div>
                <div>The ARC Centre of Excellence for Coral Reef Studies undertakes world-best integrated research for sustainable use and management of coral reefs. Funded in July 2005 under the Australian Research Council (ARC) Centres of Excellence program, this prestigious research centre is headquartered at James Cook University, in Townsville. The ARC Centre is a partnership of James Cook University (JCU), the Australian Institute of Marine Science (AIMS), The Australian National University (ANU), the Great Barrier Reef Marine Park Authority (GBRMPA), The University of Queensland (UQ) and The University of Western Australia (UWA). The ARC Centre of Excellence cements Australia’s leading contribution to coral reef sciences, and fosters stronger collaborative links between the major partners and 24 other leading institutions in nine countries. According to ISI Essential Science Indicators, four of the ARC Centre’s major research partners rank in the top 20 institutions world-wide for citations for coral reef science with JCU ranking 1st (among 1644 institutions in 103 countries). Collectively, the ARC Centre creates the world’s largest concentration of coral reef scientists. The Centre Director is Professor Graeme Cumming. Professor Ove Hoegh-Guldberg (UQ) and Professor Malcolm McCulloch (UWA) are the Deputy Directors. The ARC Centre of Excellence focuses on 3 research programs, each one under the stewardship of Program Leaders from James Cook University, The University of Western Australia and The University of Queensland.&nbsp;</div>
                <div><br></div>
                <div><b>For more: <a href="https://www.coralcoe.org.au/">https://www.coralcoe.org.au/</a></b></div>
            </div>
        </div>
    </div>


<?php loadComponent("footer"); ?>

<?php
  // Get the buffered content
  $output = ob_get_contents();
  ob_end_clean();

  // Save the output to the root directory as index.html
  file_put_contents(__DIR__ . '/../Recovery-of-Great-Barrier-Reef.html', $output);

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