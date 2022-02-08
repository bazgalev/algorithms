<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Sorting\MergeSorting;

class MergeSortingTest extends TestCase
{
    use SortingData;

    /**
     * @group merge
     * @test
     * @covers \Sorting\MergeSorting::sort
     */
    public function sorted_correctly(): void
    {
        $sorting = new MergeSorting();

        $this->assertEquals($this->output, $sorting->sort($this->input));
    }
}