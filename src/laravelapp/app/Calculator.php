<?php

namespace App;

use Exception;

class Calculator
{
    // 乗算結果を返します
    function multiply($x, $y)
    {
        return $x * $y;
    }

    // 除算結果を返します
    function divide($x, $y)
    {
        // 0 で割る前に例外を発生させる
        if ($y == 0) {
            throw new Exception('0除算です');
        }
        return $x / $y;
    }

    // 加算結果を返します
    function sum(
        $x,
        $y
    )
    {
        return $x + $y;
    }

    // 減算結果を返します
    function subtract($x, $y)
    {
        return $x - $y;
    }

    function calcTriangleArea($bottom, $height)
    {
        $area = ($bottom * $height) / 2;
        return $area;
    }
}
