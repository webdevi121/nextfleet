<?php
function loadComponent($name, $vars = []) {
    extract($vars);
    include __DIR__ . "/components/{$name}.php";
}

