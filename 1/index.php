<?php

  /*
  * Challange #1 — 13.09.2018
  * by @Google.
  * Given a list of numbers and a number k, return whether any two numbers
  * from the list add up to k.
  * For example, given [10, 15, 3, 7] and k of 17, return true since 10 + 7 is 17.
  *
  * Bonus: Can you do this in one pass?
  */

  function solution($ARRAY, $NUMBER){
    $HOLDER = [];
    foreach ($ARRAY as $A) {
      foreach ($ARRAY as $B) {
        array_push($HOLDER, ($A + $B));
      }
    }
    return in_array($NUMBER, $HOLDER);
  }

  $EXAMPLE_ARRAY = array(10,15,3,7);
  if(solution($EXAMPLE_ARRAY, 17)){
    echo "Number exists in array!";
  }

?>
