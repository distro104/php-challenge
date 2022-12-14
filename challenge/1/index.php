<?php
class Solution {
    /**
     * @param String[] $ops
     * @return Integer
     */
    private $ops;

    function array_clean($array_list)
    {
        $new_list = [];
        foreach($array_list as $item)
        {
            if(!empty($item))
            {
                array_push($new_list,$item);
            }
        }
        return $new_list;
    }

    function calPoints($ops) {
        $array_list = [];
        $this->ops = $ops;

        foreach ($this->ops as $item_ops)
        {
            if(is_numeric($item_ops))
            {
                array_push($array_list,$item_ops);
            }
            elseif(($item_ops == 'D') && (count($array_list)>0))
            {
                array_push($array_list,end($array_list)*2);
            }
            elseif(($item_ops == 'C') && (count($array_list)>0))
            {
                $array_list = array_slice($array_list,0,-1);
            }
            elseif(($item_ops == '+') && (count($array_list)>=2))
            {
                array_push($array_list, array_sum(array_slice($array_list,-2)) );
            }
            $array_list = $this->array_clean($array_list);
        }
        print_r($array_list);
        return array_sum($array_list);
    }
}

// read inputs
$ops = explode(' ', readline());

// Solution
$solution = new Solution();
$output = $solution->calPoints($ops);

// print the output
echo $output;
