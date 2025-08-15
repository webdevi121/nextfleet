<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php loadComponent("mydrive-header");?>



    <div class="body-content">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 text-center pt-5">
                    <h1 class="mb-3">Key Contacts</h1>

                    <div class="d-grid gap-4">

                        <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0 small">
                                <tbody>
                                <tr>
                                    <td class="text-start">
                                    <h4 class="mb-0">NextFleet</h4>
                                    </td>
                                    <td class="text-end">
                                    <a href="tel:1800297900" class="text-decoration-none">
                                        <i class="fa fa-phone" aria-hidden="true"></i> 1800 297 900
                                    </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">24/7 Accident Management</td>
                                    <td class="text-end"><strong>Option 1</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-start">24/7 Roadside Assistance</td>
                                    <td class="text-end"><strong>Option 2</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Maintenance Authorisation</td>
                                    <td class="text-end"><strong>Option 3</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-start">General Enquiries</td>
                                    <td class="text-end"><strong>Option 4</strong></td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>

                        <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0 small">
                                <tbody>
                                <tr>
                                    <td class="text-start">
                                    <h4 class="mb-0">Windscreens/Glass</h4>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Instant Windscreens</td>
                                    <td class="text-end">
                                    <a href="tel:132444" class="text-decoration-none">
                                        <i class="fa fa-phone" aria-hidden="true"></i> 13 24 44
                                    </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">Novus Glass</td>
                                    <td class="text-end">
                                    <a href="tel:132234" class="text-decoration-none">
                                        <i class="fa fa-phone" aria-hidden="true"></i> 13 22 34
                                    </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">O'Brien Glass</td>
                                    <td class="text-end">
                                    <a href="tel:1800053598" class="text-decoration-none">
                                        <i class="fa fa-phone" aria-hidden="true"></i> 1800 053 598
                                    </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>

                        <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0 small">
                                <tbody>
                                <tr>
                                    <td class="text-start">
                                    <h4 class="mb-0">Tyre Outlets</h4>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Beaurepaires</td>
                                    <td class="text-end">
                                    <a href="tel:132381" class="text-decoration-none">
                                        <i class="fa fa-phone" aria-hidden="true"></i> 13 23 81
                                    </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">Bob Jane T-Marts</td>
                                    <td class="text-end">
                                    <a href="tel:1800000364" class="text-decoration-none">
                                        <i class="fa fa-phone" aria-hidden="true"></i> 1800 000 364
                                    </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">Bridgestone</td>
                                    <td class="text-end">
                                    <a href="tel:1300749378" class="text-decoration-none">
                                        <i class="fa fa-phone" aria-hidden="true"></i> 1300 749 378
                                    </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">Dunlop Super Dealer</td>
                                    <td class="text-end">
                                    <a href="tel:131631" class="text-decoration-none">
                                        <i class="fa fa-phone" aria-hidden="true"></i> 13 16 31
                                    </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">Good Year</td>
                                    <td class="text-end">
                                    <a href="tel:132343" class="text-decoration-none">
                                        <i class="fa fa-phone" aria-hidden="true"></i> 13 23 43
                                    </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">myCar</td>
                                    <td class="text-end">
                                    <a href="tel:131328" class="text-decoration-none">
                                        <i class="fa fa-phone" aria-hidden="true"></i> 13 13 28
                                    </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
loadComponent("mobile-menu", ["active" => "key-contacts"]);
?>

</body>
</html>
