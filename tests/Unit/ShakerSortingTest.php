<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Sorting\ShakerSorting;

class ShakerSortingTest extends TestCase
{
    use SortingData;

    /**
     * @group shaker
     * @test
     * @covers \Sorting\ShakerSorting::sort
     */
    public function sorted_correctly(): void
    {
        $sorting = new ShakerSorting();

        $this->assertEquals($this->output, $sorting->sort($this->input));
    }
}
