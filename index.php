<?php 

require __DIR__ . "/vendor/autoload.php";

$data = new stdClass();
$data->method = "post";
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$page = ($page == 'main') ? 'content-main.php' : 'content-index.php';

var_dump( PROJECT );

include_once 'include/header.php';

include_once 'include/'.$page;

include_once 'include/footer.php' 

?>