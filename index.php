<?php

require __DIR__ . "/vendor/autoload.php";

use source\Challenge;
use Source\Teste;
$teste = new Teste();

/** Get a list of the challenge for the links in menu */
$list = get_list_challenge();

/**
 * Create the menu list
 * @return $list_menu
 */
$list_menu = "";
foreach ($list as $item)
{
    $list_menu .= "<a href='?page=main&challenge={$item['folder']}'>{$item['title']}</a>";
}

$data = new stdClass();
$data->method = "post";
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
(int) $challenge = filter_input(INPUT_GET, "challenge", FILTER_SANITIZE_NUMBER_INT);

$list_last_item = end($list);

$page = ($page == 'main') ? 'content-main.php' : 'content-index.php';
$challenge = ($challenge > 0) && ($challenge <= ($list_last_item['folder'])) ? $challenge : 0;
var_dump($challenge);

include_once 'include/header.php';

include_once 'include/'.$page;

include_once 'include/footer.php';
