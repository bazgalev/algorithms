<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Sorting\BubbleSorting;

class BubbleSortTest extends TestCase
{
    /**
     * @test
     * @covers \Sorting\BubbleSorting::sort
     */
    public function sorted_correctly(): void
    {
        $input = [
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

        $sorted = (new BubbleSorting())->sort($input);

        $output = [
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

        $this->assertEquals($output, $sorted);
    }
}
