<?php
    function findMedianSortedArrays($nums1, $nums2) {
      // caltuleta length 
      $nums1_length =count($nums1);
      $nums2_length =count($nums2);
      $length = $nums1_length + $nums2_length;
      // create emthy array thats will be merged array
      $result = array();
      // check if one of them is emthy 
      if($nums1_length ==0 || $nums2_length ==0 ){
          $result =array_merge($nums1,$nums2);
          if($length == 1){
              return ($result[0]);
          }else if($length % 2 == 0)
          {
       
              $length /= 2;
              return($result[$length-1] + $result[$length])/2;
          }else 
          {
              
              $length = ($length-1)/2;
              return($result[$length]);
          }
      }else{ // if one of them is not emthy merghe two array and sort 
          $k =0;
          $j =0;
      
          $full1 = TRUE;
          $full2 = TRUE;
          for($i =0 ; $i < $length; $i++)
          {
              if($nums1[$k] <= $nums2[$j] && $full1)
              {
                  
                  array_push($result,$nums1[$k]);
                  if(isset($nums1[$k+1])){
                      $k++;
                  }else {
                      $full1 =FALSE;
                  }
              }
              if($nums2[$j] <= $nums1[$k] && $full2)
              {
                  array_push($result,$nums2[$j]);
                  if(isset($nums2[$j+1])){
                      $j++;
                  }else{
                      $full2 =FALSE;
                  }
              }
              if(!$full1 && $full2)
              {
                  array_push($result,$nums2[$j]);
                  if(isset($nums2[$j+1])){
                      $j++;
                  }else{
                      $full2 =FALSE;
                  }
              }
              if(!$full2 && $full1)
              {
                  array_push($result, $nums1[$k]);
                  if(isset($nums1[$k+1])){
                      $k++;
                  }else{
                      $full1 =FALSE;
                  }
              }
              
          }
          if($length % 2 == 0)
          {
       
              $length /= 2;
              return($result[$length-1] + $result[$length])/2;
          }else 
          {
              
              $length = ($length-1)/2;
              return($result[$length]);
          }
      }
  } 
  
      // $num1 = [0,0,0,0,0];
      // $num2 =[-1,0,0,0,0,0,1];
      $num2 =[];
      $num1 = [1];
      print_r(findMedianSortedArrays($num1,$num2));
    
?>

