<?php

/**
 * Summary of Json
 * 
    {
        "folder":"challenge-00",
        "title":"Title",
        "description": [
            "",
            "",
            "",
            ""
        ],
        "exemple": {
            "exemple_1": [
                "",
                "",
                "",
                "",
                ""
            ],
            "exemple_2": [
                "",
                "",
                "",
                "",
                ""
            ]
        }
    }
 */

namespace source;

class Json
{
    private string $folder;
    private string $title;
    private $description;
    private $exemple;

    function __construct( array $json_array ){
        var_dump($json_array);
    }
}
