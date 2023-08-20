<?php

namespace App;

use Exception;

class Judgement
{
    public function judge($score)
    {
        if ($score < 0 || $score > 100) {
            throw new Exception('正常な得点ではありません。');
        }

        if ($score < 80) {
            return '不合格';
        }
        return '合格';
    }
}
