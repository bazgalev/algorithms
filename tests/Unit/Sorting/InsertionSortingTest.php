<?php

declare(strict_types=1);

namespace Tests\Unit\Sorting;

use PHPUnit\Framework\TestCase;
use Algorithms\Sorting\InsertionSorting;

class InsertionSortingTest extends TestCase
{
    use SortingData;

    /**
     * @group insertion
     * @test
     * @covers \Algorithms\Sorting\InsertionSorting::sort
     */
    public function sorted_correctly(): void
    {
        $sorting = new InsertionSorting();

        $this->assertEquals($this->output, $sorting->sort($this->input));
    }
}
