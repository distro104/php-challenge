<?php
/* ARCHIVE WITH A LIST OF FUNCTIONS THAT ARE USE IN THIS PROJECT */

/**
 * Return an array list with the name folders and title of each exercise.
 * @return array $list_return[folder, title]
 */
 function get_list_challenge()
 {
    $list = scandir(CHALLENGE_FOLDER);
    $list = array_slice($list, 3);
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

 /**
  * Return an array with the data in one archive json inside of the data folder challenge
  * @return array challenge
  */
function get_challenge_data( int $folder_number )
 {
    $archive =  CHALLENGE_FOLDER . "/" . $folder_number . "/challenge.json";
    $data = file_get_contents($archive);
    $obj = json_decode($data,true);
    return $obj;
 }

/**
 * Return the formated content struture html format for exibition in main page
 * @param mixed $challenge_main_exemple
 * @return string $exemple_content
 */
function mount_exemple_content($challenge_main_exemple = null)
{
    $exemple_content = '<div id="exemple">';
    $exemple_number = 0;
    foreach($challenge_main_exemple as $exemple)
    {
        $exemple_number += 1;
        $exemple_content .= "<div id='exemple_{$exemple_number}'>";
        $exemple_content .= "<h3>Exemple: {$exemple_number}</h3>";
        foreach($exemple as $line)
        {
            $exemple_content .= "<p>{$line}</p>";
        } 
    }
    $exemple_content .= '</div>';
    return $exemple_content;
}