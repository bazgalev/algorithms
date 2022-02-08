<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Sorting\BubbleSorting;

class BubbleSortingTest extends TestCase
{
    use SortingData;

    /**
     * @group bubble
     * @test
     * @covers \Sorting\BubbleSorting::sort
     */
    public function sorted_correctly(): void
    {
        $sorting = new BubbleSorting();

        $this->assertEquals($this->output, $sorting->sort($this->input));
    }
}
