<?php

function sortString($s) {
   $len = strlen($s);
   $arr = str_split($s);
   $new_arr = [];
   $min = min($arr);
   array_push($new_arr,$min);
   $remain_arr = array_diff($arr,$new_arr);

   while($remain_arr != []){
      while($remain_arr != [] && min($remain_arr)>$new_arr[count($new_arr)-1]){  
         $min = min($remain_arr);
         array_push($new_arr,$min);
         $remain_arr = array_diff($remain_arr,$new_arr);
      }

   //   print_r($remain_arr);
      // 经过几轮array_diff,$remain_arr已经是空了

      for($i=0;$i<count($new_arr);$i++){
         $element = $new_arr[$i];
         $first_index = array_search($element,$arr);
         array_splice($arr,$first_index,1);
      }

      $remain_arr = $arr;

      
      if($remain_arr == []){
      break;
      }

      $max = max($remain_arr);
      array_push($new_arr,$max);

      $remain_arr = array_diff($remain_arr,[$max]);

      // print_r($remain_arr);
      
      while($remain_arr != [] && max($remain_arr)<$new_arr[count($new_arr)-1]){  
         $max = max($remain_arr);
         array_push($new_arr,$max);
         $remain_arr = array_diff($remain_arr,[$max]);
      }
     
      for($i=0;$i<count($new_arr);$i++){
         $element = $new_arr[$i];
         $first_index = array_search($element,$arr);
         array_splice($remain_arr,$first_index,1);
      }

      $remain_arr = $arr;

      // print_r($remain_arr);
   }

  
   print_r($new_arr);
}
$s = "leetcode123456";
sortString($s);