<?php

declare(strict_types=1);

namespace Algorithms\Utils;

trait WithSwap
{
    protected function swap(int &$a, int &$b): void
    {
        $temp = $a;

        $a = $b;
        $b = $temp;
    }
}