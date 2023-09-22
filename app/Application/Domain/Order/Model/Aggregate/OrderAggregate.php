<?php

namespace App\Application\Domain\Order\Model\Aggregate;

class TripAggregate
{
    public function __construct()
    {
    }


    // 生成斐波那契函数
    public function fibonacci($n)
    {
        $arr = [0, 1];
        for ($i = 2; $i <= $n; $i++) {
            $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
        }
        return $arr[$n];
    }

}
