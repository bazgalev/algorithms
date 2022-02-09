<?php

namespace Tests\Unit;

use Algorithms\HeapSorting;
use PHPUnit\Framework\TestCase;

class HeapSortingTest extends TestCase
{
    use SortingData;

    /**
     * @group heap
     * @test
     * @covers \Algorithms\HeapSorting::sort
     */
    public function sorted_correctly(): void
    {
        $sorting = new HeapSorting();

        $this->assertEquals($this->output, $sorting->sort($this->input));
    }
}
