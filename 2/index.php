<?php

  /*
  * Challange #1 — 14.09.2018
  * by @Uber.
  * Given an array of integers, return a new array such that each element at
  * index i of the new array is the product of all the numbers in the original
  * array except the one at i.
  *
  * For example, if our input was [1, 2, 3, 4, 5], the expected output would be
  * [120, 60, 40, 30, 24]. If our input was [3, 2, 1], the expected output would
  * be [2, 3, 6].
  *
  * Follow-up: what if you can't use division?
  */

  /* First solution using division. */
  function solutionWithDivision($ARRAY){
    $HOLDER = [];
    foreach ($ARRAY as $KEY => $A) {
      $CACHE = 1;
      foreach ($ARRAY as $B) {
        $CACHE *= $B;
      }
      array_push($HOLDER, ($CACHE / $ARRAY[$KEY]));
    }
    return $HOLDER;
  }

  /* Bonus solution without using division; */
  function solutionWithoutDivision($ARRAY){
    $HOLDER = [];
    foreach ($ARRAY as $KEY_A => $A) {
      $CACHE = 1;
      foreach ($ARRAY as $KEY_B => $B) {
        if($KEY_A != $KEY_B){
          $CACHE *= $B;
        }
      }
      array_push($HOLDER, $CACHE);
    }
    return $HOLDER;
  }

  $EXAMPLE_ARRAY_1 = array(1,2,3,4,5);
  $EXAMPLE_ARRAY_2 = array(3,2,1);

  print_r(solutionWithDivision($EXAMPLE_ARRAY_1));
  /* Output [120, 60, 40, 30, 24] */

  print_r(solutionWithoutDivision($EXAMPLE_ARRAY_2));
  /* Output [2, 3, 6] */

?>
