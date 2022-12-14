<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        
        $stack = [];
        $list = str_split($s,1);
        $item_list = '';
        $parenth_list = ["(","[","{"];
        $parenth_list_close = [")","]","}"];

        //var_dump($list);
        //var_dump($parenth_list);

        foreach($list as $item_list){
            in_array($item_list, $parenth_list) ? array_push($stack, $item_list) : '';

            //var_dump(in_array($item_list, $parenth_list_close));
            if ( in_array($item_list, $parenth_list_close) ) {
                
                //$indice = array_keys($parenth_list_close, $item_list);
                $indice = array_keys($parenth_list_close, $item_list) ? $indice = array_keys($parenth_list_close, $item_list) : null;
                //print_r ($indice);
                /* 
                if ( (end($stack) == $parenth_list[0][$indice[0]]) && (!empty($indice)) ) { 
                    array_pop($stack); 
                }
                elseif ( end($stack) != $parenth_list[0][$indice[0]] ) { 
                    return false;
                }
                */
                if ( $item_list == end($stack) ) { array_push($stack,$item_list); }
                print_r ($stack);
            }
        }
        if ( count($stack) == 0 ) { return true; }
        else return false;
    }

}

// read inputs
$s = readline();

// Solution
$solution = new Solution();
$output = $solution->isValid($s);

// print the output
echo $output ? 'valid' : 'invalid';