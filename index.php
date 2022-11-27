<?php 

$page = $_GET['page'];
$page = ($page == 'main') ? 'content-main.php' : 'content-index.php';

include_once 'top.php';

include_once $page ;

include_once 'bottom.php' 

?>