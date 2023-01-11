<?php

use function PHPSTORM_META\map;

/**
 * Your goal in this kata is to implement a difference function,
 *  which subtracts one list from another and returns the result.
 * It should remove all values from list a,
 * which are present in list b keeping their order.
 * arrayDiff([1,2],[1]) == [2]
 */

 function arrayDiff($a, $b) {
  $arr = [];
   for ($i = 0; $i < count($a); $i++) {
    if (!in_array($a[$i], $b)) {
      array_push($arr, $a[$i]);
    }
   }
   return $arr;
 }

 print_r(arrayDiff([1,2],[1])); // [2]
 print_r(arrayDiff([],[5])); // []
 print_r(arrayDiff([1, 2, 2, 2, 3], [2])); // [1,3]


