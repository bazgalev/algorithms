<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Algorithms\QuickSorting;

class QuickSortingTest extends TestCase
{
    use SortingData;

    /**
     * @group quick
     * @test
     * @covers \Algorithms\QuickSorting::sort
     */
    public function sorting_successful(): void
    {
        $sorting = new QuickSorting();

        $this->assertEquals($this->output, $sorting->sort($this->input));
    }
}
