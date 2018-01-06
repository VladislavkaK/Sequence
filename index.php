<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 03.11.2017
 * Time: 23:17
 */
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'MaxLength.php';

$arr = [0, 5, 0, 1, 5, 4, 2, 7, 9, 3];

for($i = 0; $i < count($arr); $i++){
    //$arr[$i] = rand(1, 100) % 10;
    echo $arr[$i]. ' ';
}
echo PHP_EOL;
echo 'Максимальная длина невозрастающей последовательности = ' .MaxLength($arr);