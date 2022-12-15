<?php

require __DIR__ . "/vendor/autoload.php";

use Source\Challenge;

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

/** Request data Json with the function and create an object Challenge **/
$array_challenge = get_challenge_data($challenge);
$challenge_main = new Challenge($array_challenge);
var_dump($challenge_main->exemple);

/** Main part **/
include_once 'include/header.php';

include_once 'include/'.$page;

include_once 'include/footer.php';
