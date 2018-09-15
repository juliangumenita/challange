<?php

  /*
  * Challange #3 — 15.09.2018
  * by @Stripe.
  * Given an array of integers, find the first missing positive integer in
  * linear time and constant space. In other words, find the lowest positive
  * integer that does not exist in the array. The array can contain duplicates
  * and negative numbers as well.
  *
  * For example, the input [3, 4, -1, 1] should give 2. The input [1, 2, 0]
  * should give 3.
  * You can modify the input array in-place.
  */

  function solution($ARRAY){
    $INT = 1;
    sort($ARRAY);
    foreach ($ARRAY as $A) {
      if($A > 0){
        if($A == $INT){
          $INT++;
        }
        else{
          break;
        }
      }
    }
    return $INT;
  }

  $EXAMPLE_ARRAY = array(3,4,-1,1);

  echo "Solution: " . solution($EXAMPLE_ARRAY);
  /* Output: 2 */

?>
