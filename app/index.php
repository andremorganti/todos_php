<?php

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // extract the URL request by user

include 'autoload.php';
include 'routes.php';
?>
}
