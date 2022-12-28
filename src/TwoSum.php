<?php

// Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

// You may assume that each input would have exactly one solution, and you may not use the same element twice.

// You can return the answer in any order.

/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */

 function twoSum($nums,$target) {
  for ($i = 0; $i < count($nums); $i++) {
    for ($j = $i + 1; $j < count($nums); $j++) {
      if ($nums[$j] + $nums[$i] === $target) {
        return [$i, $j];
      }
    }
  }
 }

 print_r(twoSum([3,3], 6)); // [0,1]
 print_r(twoSum([2,3,4,7,5],9)); // [0,3]