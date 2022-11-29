<?php 

$data = new stdClass();
$data->method = "post";
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$page = ($page == 'main') ? 'content-main.php' : 'content-index.php';

include_once 'top.php';

include_once $page;

include_once 'bottom.php' 

?>