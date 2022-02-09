<?php

namespace Tests\Unit\Sorting;

use Algorithms\Sorting\HeapSorting;
use PHPUnit\Framework\TestCase;
use Tests\Unit\Sorting\SortingData;

class HeapSortingTest extends TestCase
{
    use SortingData;

    /**
     * @group heap
     * @test
     * @covers \Algorithms\Sorting\HeapSorting::sort
     */
    public function sorted_correctly(): void
    {
        $sorting = new HeapSorting();

        $this->assertEquals($this->output, $sorting->sort($this->input));
    }
}
