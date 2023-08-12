<?php

namespace Tests\Unit;

use App\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * コマンド実行する場合はプロジェクトのルートディレクトリ上で実行すること
 * $ ./vendor/bin/phpunit ./tests/Unit/CalculatorTest.php
 */
class CalculatorTest extends TestCase
{
    /**
     * public function Multiply_3と4の乗算結果を取得する
     *
     * @return void
     */
    public function testMultiply_3と4の乗算結果を取得する()
    {
        // Calculatorクラスのインスタンスを生成
        $target = new Calculator();

        // 想定する計算結果の用意 → 期待値
        $expected = 12;

        // 3 x 4の結果を multiply()に計算させる → 実測値
        $actual = $target->multiply(3, 4);

        // 想定する結果と multiply()の結果が等しいか検証する
        $this->assertSame($expected, $actual);
    }

    /**
     * public function Sum_3と2の加算結果を取得する
     *
     * @return void
     */
    public function testSum_3と2の加算結果を取得する()
    {
        // Calculatorクラスのインスタンスを生成
        $target = new Calculator();

        // 想定する計算結果の用意 → 期待値
        $expected = 5;

        // 3 + 2の結果を`sum()`に計算させる →　実測値
        $actual = $target->sum(3, 2);

        // 期待値と実測値を検証する
        $this->assertSame($expected, $actual);
    }

    /**
     * public function Subtract_10と3の減算結果を取得する
     *
     * @return void
     */
    public function testSubtract_10と3の減算結果を取得する()
    {
        // Calculatorクラスのインスタンスを生成
        $target = new Calculator();

        // 想定する計算結果の用意　→　期待値
        $expected = 7;

        // 10 - 3の結果を`subtract()`に計算させる →　実測値
        $actual = $target->subtract(10, 3);

        // 期待値と実測値を検証する
        $this->assertSame($expected, $actual);
    }
}
