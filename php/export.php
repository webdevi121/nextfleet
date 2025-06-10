<?php
function loadPage($filename) {
    ob_start();
    include $filename;
    $output = ob_get_clean();

    // Convert `page.php` → `page.html`
    $outputFilename = basename($filename, '.php') . '.html';
    file_put_contents(__DIR__ . '/../' . $outputFilename, $output);
    echo "Exported $outputFilename\n";
}

// Auto-discover all root-level PHP pages, excluding export.php and functions.php
$pages = array_filter(glob("*.php"), function ($file) {
    return !in_array($file, ['export.php', 'functions.php']);
});


foreach ($pages as $page) {
    loadPage($page);
}

// Copy folders like CSS, fonts, images
function copyFolder($source, $destination) {
    if (!is_dir($source)) return;
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

copyFolder(__DIR__ . '/css', __DIR__ . '/../css');
copyFolder(__DIR__ . '/fonts', __DIR__ . '/../fonts');
copyFolder(__DIR__ . '/images', __DIR__ . '/../images');

echo "✅ Export complete!\n";
