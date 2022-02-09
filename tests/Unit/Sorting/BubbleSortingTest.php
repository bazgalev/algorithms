<?php

declare(strict_types=1);

namespace Tests\Unit\Sorting;

use PHPUnit\Framework\TestCase;
use Algorithms\Sorting\BubbleSorting;

class BubbleSortingTest extends TestCase
{
    use SortingData;

    /**
     * @group bubble
     * @test
     * @covers \Algorithms\Sorting\BubbleSorting::sort
     */
    public function sorted_correctly(): void
    {
        $sorting = new BubbleSorting();

        $this->assertEquals($this->output, $sorting->sort($this->input));
    }
}
