<?php

declare(strict_types=1);

namespace Tests\Unit\Sorting;

use PHPUnit\Framework\TestCase;
use Algorithms\Sorting\ShakerSorting;

class ShakerSortingTest extends TestCase
{
    use SortingData;

    /**
     * @group shaker
     * @test
     * @covers \Algorithms\Sorting\ShakerSorting::sort
     */
    public function sorted_correctly(): void
    {
        $sorting = new ShakerSorting();

        $this->assertEquals($this->output, $sorting->sort($this->input));
    }
}
