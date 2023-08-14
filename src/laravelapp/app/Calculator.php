<?php

namespace App;

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
