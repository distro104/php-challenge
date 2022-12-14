<?php 

require __DIR__ . "/vendor/autoload.php";

use Source\Teste;
$teste = new Teste();
$caminho = __DIR__. 'challenge.json';
$archive_json = json_decode("challenge.json");
echo(json_last_error_msg());

//die('teste');
//use Source\Json;


$data = new stdClass();
$data->method = "post";
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$page = ($page == 'main') ? 'content-main.php' : 'content-index.php';

include_once 'include/header.php';

include_once 'include/'.$page;

include_once 'include/footer.php';


?>