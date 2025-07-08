<?php
$activePage = $activePage ?? '';

$menuItems = [
    ['label' => 'Fleet Management Solutions', 'href' => 'fleet-management-solutions.php#services-container'],
    ['label' => 'Explore Fleet Management', 'href' => ''],
    ['label' => 'Comprehensive Fleet Management Services', 'href' => 'comprehensive-fleet-management-services.php#services-container'],
    ['label' => 'Is an Outsourced Fleet Model Right for You?', 'href' => 'outsourced-fleet-model.php#services-container'],
    ['label' => 'Flexible Financing for Your Fleet', 'href' => 'flexible-financing.php#services-container'],
    ['label' => 'Leasing Solutions', 'href' => 'leasing-solutions.php#services-container'],
    ['label' => 'Driving Towards a Greener Fleet', 'href' => 'driving-greener-fleet.php#services-container'],
    ['label' => 'Zero-Emission Fleet Solutions', 'href' => 'zero-emission-fleet.php#services-container'],
    ['label' => 'Specialised Truck Leasing & Management', 'href' => 'specialised-truck-leasing.php#services-container'],
];

function isActive($href, $activePage) {
    // Compare just the file part (ignore the anchor)
    $hrefFile = basename(parse_url($href, PHP_URL_PATH));
    return $hrefFile === $activePage;
}
?>

<div class="position-sticky top-0 pt-10 pb-10">
    <h2>Our Services</h2>
    <ul class="nav flex-column nav-pills gap-3">
        <?php foreach ($menuItems as $item): ?>
            <?php $activeClass = isActive($item['href'], $activePage) ? 'active' : ''; ?>
            <li class="nav-item" role="presentation">
                <a class="nav-link <?= $activeClass ?>" href="<?= htmlspecialchars($item['href']) ?>">
                    <?= htmlspecialchars($item['label']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
