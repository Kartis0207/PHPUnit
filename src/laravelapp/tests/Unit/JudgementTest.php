<?php

namespace Tests\Unit;

use App\Judgement;
use PHPUnit\Framework\TestCase;

class JudgementTest extends TestCase
{

    // プロパティを定義
    private $target;

    protected function setUp(): void
    {
        // テスト対象のクラスのインスタンスを生成
        $this->target = new Judgement();
    }

    public function testJudge_得点が80の場合の結果を取得する()
    {
        $score = 80;
        $expected = '合格';
        $actual = $this->target->judge($score);

        $this->assertSame($expected, $actual);
    }

    public function testJudge_得点が30の場合の結果を取得する()
    {
        $score = 30;
        $expected = '不合格';
        $actual = $this->target->judge($score);

        $this->assertSame($expected, $actual);
    }
}
