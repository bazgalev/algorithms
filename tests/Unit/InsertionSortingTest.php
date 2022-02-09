<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Algorithms\InsertionSorting;

class InsertionSortingTest extends TestCase
{
    use SortingData;

    /**
     * @group insertion
     * @test
     * @covers \Algorithms\InsertionSorting::sort
     */
    public function sorted_correctly(): void
    {
        $sorting = new InsertionSorting();

        $this->assertEquals($this->output, $sorting->sort($this->input));
    }
}
