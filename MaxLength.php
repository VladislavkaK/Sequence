<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 03.11.2017
 * Time: 23:17
 */
function MaxLength($arr)
{
    $max_length = 1;
    for($i = 1; $i < count($arr)-1; $i++){
        $length = 1;
        while($arr[$i] < $arr[$i-1]){
            $i++;
            $length++;
        }
        if($length > $max_length){
            $max_length = $length;
        }
    }
    return  $max_length;
}