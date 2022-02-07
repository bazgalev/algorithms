<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Sorting\SelectionSorting;

class SelectionSortTest extends TestCase
{
    use SortingData;

    /**
     * @group selection
     * @test
     * @covers \Sorting\SelectionSorting::sort
     */
    public function sorted_correctly(): void
    {
        $sorting = new SelectionSorting();

        $this->assertEquals($this->output, $sorting->sort($this->input));
    }
}