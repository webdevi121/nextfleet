<?php
  function loadComponent($component) {
      include __DIR__ . "/components/$component.php";
  }

  // Start output buffering
  ob_start();
?>

    <?php loadComponent("header");?>
        <div>
            <div class="container py-5">
            <h1 class="mb-4">Form Fields Style Guide</h1>

            <form>
                <!-- Text Inputs -->
                <div class="mb-3">
                <label for="textInput" class="form-label">Text Input</label>
                <input type="text" class="form-control" id="textInput" placeholder="Enter text">
                </div>

                <div class="mb-3">
                <label for="emailInput" class="form-label">Email Input</label>
                <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                </div>

                <div class="mb-3">
                <label for="passwordInput" class="form-label">Password Input</label>
                <input type="password" class="form-control" id="passwordInput">
                </div>

                <!-- Select -->
                <div class="mb-3">
                <label for="selectInput" class="form-label">Select</label>
                <select class="form-select" id="selectInput">
                    <option selected>Select an option</option>
                    <option value="1">Option One</option>
                    <option value="2">Option Two</option>
                    <option value="3">Option Three</option>
                </select>
                </div>

                <!-- Textarea -->
                <div class="mb-3">
                <label for="textareaInput" class="form-label">Textarea</label>
                <textarea class="form-control" id="textareaInput" rows="3"></textarea>
                </div>

                <!-- Checkboxes -->
                <div class="mb-3">
                <label class="form-label d-block">Checkboxes</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check1">
                    <label class="form-check-label" for="check1">Check 1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check2" checked>
                    <label class="form-check-label" for="check2">Check 2 (Checked)</label>
                </div>
                </div>

                <!-- Radios -->
                <div class="mb-3">
                <label class="form-label d-block">Radio Buttons</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioOptions" id="radio1" checked>
                    <label class="form-check-label" for="radio1">Radio 1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioOptions" id="radio2">
                    <label class="form-check-label" for="radio2">Radio 2</label>
                </div>
                </div>

                <!-- Switches -->
                <div class="mb-3">
                <label class="form-label d-block">Switches</label>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch</label>
                </div>
                </div>

                <!-- Range -->
                <div class="mb-3">
                <label for="rangeInput" class="form-label">Range Input</label>
                <input type="range" class="form-range" id="rangeInput">
                </div>

                <!-- File Upload -->
                <div class="mb-3">
                <label for="formFile" class="form-label">File input</label>
                <input class="form-control" type="file" id="formFile">
                </div>

                <!-- Disabled Input -->
                <div class="mb-3">
                <label for="disabledInput" class="form-label">Disabled Input</label>
                <input type="text" class="form-control" id="disabledInput" placeholder="Disabled" disabled>
                </div>

                <!-- Buttons -->
                <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
            </div>

        </div>
    <?php loadComponent("footer"); ?>

<?php
  // Get the buffered content
  $output = ob_get_contents();
  ob_end_clean();

  // Save the output to the root directory as index.html
  file_put_contents(__DIR__ . '/../style-guides.html', $output);

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