<?php

declare(strict_types=1);

namespace Tests\Unit;

trait SortingData
{
    protected array $input = [
        54,
        32,
        75,
        1,
        0,
        45,
        -1,
        0,
        87,
        66,
    ];

    protected array $output = [
        -1,
        0,
        0,
        1,
        32,
        45,
        54,
        66,
        75,
        87,
    ];
}
