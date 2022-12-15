<?php

namespace source;

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
                ""
            ],
            "exemple_2": [
                ""
            ]
        }
    }
 */


class Challenge
{
    private string $folder;
    private string $title;
    private $description;
    private $exemple;

    //Get and set Methods
    public function __get($propert)
    {
        if (property_exists($this, $propert)) {
            return $this->$propert;
        }
        return false;
    }

    public function __set($propert, $value)
    {
        if (property_exists($this, $propert)) {
            $this->$propert = $value;
            return true;
        }
        return false;
    }

    function __construct(array $challenge){

        $this->folder = $challenge['folder'];
        $this->title = $challenge['title'];
        $this->description = implode(' ' ,$challenge['description']);
        $this->exemple = $challenge['exemple'];
    }
}
