<?php

declare(strict_types=1);

namespace Tests\Unit\Search;

use Algorithms\Search\BinarySearch;
use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    private array $haystack = [12, 23, 23, 33, 54, 56, 65, 77, 99, 100, 123, 432];

    /**
     * @covers \Algorithms\Search\BinarySearch::search
     * @test
     */
    public function search_is_correctly(): void
    {
        $needle = 99;
        $expected = 8;

        $search = new BinarySearch();

        $this->assertEquals($expected, $search->search($needle, $this->haystack));
    }

    /**
     * @covers \Algorithms\Search\BinarySearch::search
     * @test
     */
    public function negative_search_is_correctly(): void
    {
        $needle = 9999;
        $expected = null;

        $search = new BinarySearch();

        $this->assertEquals($expected, $search->search($needle, $this->haystack));
    }
}
