<?php

namespace Tests\Unit;

use App\Calculator;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * コマンド実行する場合はプロジェクトのルートディレクトリ上で実行すること
 * $ ./vendor/bin/phpunit ./tests/Unit/CalculatorTest.php
 */
class CalculatorTest extends TestCase
{
    private $target;

    protected function setUp(): void
    {
        // Calculatorクラスのインスタンスを生成
        $this->target = new Calculator();
    }
    
    /**
     * public function Multiply_3と4の乗算結果を取得する
     *
     * @return void
     */
    public function testMultiply_3と4の乗算結果を取得する()
    {
        // 想定する計算結果の用意 → 期待値
        $expected = 12;

        // 3 x 4の結果を multiply()に計算させる → 実測値
        $actual = $this->target->multiply(3, 4);

        // 想定する結果と multiply()の結果が等しいか検証する
        $this->assertSame($expected, $actual);
    }

    public function testMultiply_5と6の乗算結果を取得する()
    {
        $expected = 30;
        $actual = $this->target->multiply(5, 6);

        $this->assertSame($expected, $actual);
    }

    /**
     * @dataProvider multiplyProvider
     */
    public function testMultiply_パラメータ化のテスト($expected, $x, $y)
    {
        $actual = $this->target->multiply($x, $y);
        $this->assertSame($expected, $actual);
    }

    // データプロバイダメソッド
    public function multiplyProvider(): array
    {
        // 'ラベル' => [期待値, 値1, 値2]
        return [
            '  0 = 1 * 0'  => [0, 1, 0],
            '  9 = 3 * 3'  => [9, 3, 3],
            ' 20 = 2 * 10' => [20, 2, 10],
            '100 = 1 * 100' => [100, 1, 100]
        ];
    }

    public function testDivide_3と2の除算結果を取得する()
    {
        $expected = 1.5;
        $actual = $this->target->divide(3, 2);

        $this->assertSame($expected, $actual);
    }

    public function testDivide_整数を0除算する()
    {
        // 発生する例外クラス →　期待結果
        $this->expectException(Exception::class);
        // 例外が発生する処理
        $actual = $this->target->divide(10, 0);
    }

    /**
     * public function Sum_3と2の加算結果を取得する
     *
     * @return void
     */
    public function testSum_3と2の加算結果を取得する()
    {
        // 想定する計算結果の用意 → 期待値
        $expected = 5;

        // 3 + 2の結果を`sum()`に計算させる →　実測値
        $actual = $this->target->sum(3, 2);

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
        // 想定する計算結果の用意　→　期待値
        $expected = 7;

        // 10 - 3の結果を`subtract()`に計算させる →　実測値
        $actual = $this->target->subtract(10, 3);

        // 期待値と実測値を検証する
        $this->assertSame($expected, $actual);
    }

    public function testCalcTriangleArea_底辺が3で高さが5の三角形の面積を取得する()
    {
        $expected = 7.5;
        $actual = $this->target->calcTriangleArea(3, 5);

        $this->assertSame($expected, $actual);
    }
}
