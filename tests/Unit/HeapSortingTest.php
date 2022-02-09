<?php

namespace Tests\Unit;

use Sorting\HeapSorting;
use PHPUnit\Framework\TestCase;

class HeapSortingTest extends TestCase
{
    use SortingData;

    /**
     * @group heap
     * @test
     * @covers \Sorting\HeapSorting::sort
     */
    public function sorted_correctly(): void
    {
        $sorting = new HeapSorting();

        $this->assertEquals($this->output, $sorting->sort($this->input));
    }
}
