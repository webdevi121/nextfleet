<?php
if (!function_exists('loadComponent')) {
    function loadComponent($component) {
        include __DIR__ . "/components/$component.php";
    }
}
