<?php
use function UI\Draw\Text\Font\fontFamilies;

/**
 *  ARCHIVE WITH A LIST OF FUNCTIONS THAT ARE USE IN THIS PROJECT
 */


 /**
  * Return an array list with the name folders and title of each exercise.
  * @return array $list_return
  */
 function get_list_challenge()
 {
    $list = scandir(CHALLENGE_FOLDER);
    $list = array_slice($list, 2);
    $list_return = [];

    foreach ($list as $item)
    {
        $archive =  CHALLENGE_FOLDER . "/" . $item . "/challenge.json";
        $data = file_get_contents($archive);
        $obj = json_decode($data,true);
        $obj = array_slice($obj,0,2);
        array_push($list_return, $obj);
    }

    return $list_return;
 }

 