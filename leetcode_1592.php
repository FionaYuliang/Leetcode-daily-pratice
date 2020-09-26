<?php

function reorderSpaces($text) {
    $text_length = strlen($text);

    if($text_length ==1){
        return $text;
    }

    $clean_text = str_replace(' ', '', $text);
    $clean_text_length = strlen($clean_text);
    $space_length = $text_length - $clean_text_length;

    $clean_text_space = preg_replace('/\s\s+/', ' ', trim($text));
    $clean_text_arr = explode(" ",$clean_text_space);

    $words_count  = count($clean_text_arr);

    if($words_count == 1){
        $word_length = strlen($clean_text_arr[0]);
        $word_string = implode($clean_text_arr);
        $new_string = str_pad($word_string,$text_length);
        return $new_string;

    }

    $is_full = $space_length % ($words_count-1);
    $new_array =[];
    if($is_full === 0){
        $every_space = $space_length / ($words_count - 1);
        $space_string = "";
        $space_string = str_pad($space_string,$every_space);
        for($i=0;$i<$words_count-1;$i++){
            array_push($new_array,$clean_text_arr[$i]);
            array_push($new_array,$space_string);
        }
        array_push($new_array,$clean_text_arr[$words_count-1]);
        $new_string = implode($new_array);
        
        return $new_array;
   
    }else{
        $every_space = ($space_length - $is_full) / ($words_count - 1);
        $space_string = "";
        $space_string = str_pad($space_string,$every_space);

        $last_string="";
        $last_space = str_pad($last_string,$is_full);
        for($i=0;$i<$words_count-1;$i++){
            array_push($new_array,$clean_text_arr[$i]);
            array_push($new_array,$space_string);
        }
        array_push($new_array,$clean_text_arr[$words_count-1]);
        array_push($new_array,$last_space);

        $new_string = implode($new_array);
        
        return $new_string;
    }
}


reorderSpaces($text);