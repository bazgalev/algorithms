<?php

declare(strict_types=1);

namespace Tests\Unit\Sorting;

use PHPUnit\Framework\TestCase;
use Algorithms\Sorting\SelectionSorting;

class SelectionSortingTest extends TestCase
{
    use SortingData;

    /**
     * @group selection
     * @test
     * @covers \Algorithms\Sorting\SelectionSorting::sort
     */
    public function sorted_correctly(): void
    {
        $sorting = new SelectionSorting();

        $this->assertEquals($this->output, $sorting->sort($this->input));
    }
}
