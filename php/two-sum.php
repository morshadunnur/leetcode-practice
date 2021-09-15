<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum(array $nums,int $target) {
        $length = count($nums);
        for($i = 0; $i < $length - 1; $i++){
            for($j = $i+1; $j < $length; $j++){
                if((int)$nums[$i] + (int)$nums[$j] == $target){
                    return [
                        $i, $j
                    ];
                }
            }
        
        }
        return [];
    }

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSumOn(array $nums,int $target) {
        foreach($nums as $key => $value){
            unset($nums[$key]);
            $next_key = array_search(($target - (int)$value), $nums);
            if($next_key){
                return [$key, $next_key];
            }
        }
        return [];
    }
}