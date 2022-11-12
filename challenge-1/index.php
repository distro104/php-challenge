<?php
class Solution {
    /**
     * @param String[] $ops
     * @return Integer
     */
    private $ops;

    function calPoints($ops) {
        $array_list = [];
        $this->ops = $ops;

        foreach ($ops as $item_ops)
        {
            if(is_numeric($item_ops))
            {
                array_push($array_list,$item_ops);
            }
            elseif($item_ops == 'D')
            {
                $array_list[count($array_list)-1] = end($array_list)*2;
            }
            elseif($item_ops == '+')
            {
                array_push($array_list, prev($array_list)+end($array_list));
            }
            
            return array_sum($array_list);
        }
    }
}

// read inputs
$ops = explode(' ', readline());

// Solution
$solution = new Solution();
$output = $solution->calPoints($ops);

// print the output
echo $output;
