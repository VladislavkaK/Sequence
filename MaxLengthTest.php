<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 03.11.2017
 * Time: 23:28
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'MaxLength.php';

use PHPUnit\Framework\TestCase;

class MaxLengthTest extends TestCase
{
    public function testMaxLength()
    {
        $arr = [0, 5, 0, 1, 5, 4, 2, 7, 9, 3 ];
        $result = MaxLength($arr);
        $this->assertEquals(3, $result);
    }
}

