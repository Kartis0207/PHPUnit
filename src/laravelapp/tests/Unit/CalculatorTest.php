<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 * コマンド実行する場合はプロジェクトのルートディレクトリ上で実行すること
 * $ ./vendor/bin/phpunit ./tests/Unit/CalculatorTest.php
 */
class CalculatorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
