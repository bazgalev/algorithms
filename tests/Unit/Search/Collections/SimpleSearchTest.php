<?php

declare(strict_types=1);

namespace Tests\Unit\Search\Collections;

use Algorithms\Search\Collections\SimpleSearch;
use PHPUnit\Framework\TestCase;

class SimpleSearchTest extends TestCase
{
    /**
     * @covers \Algorithms\Search\Collections\SimpleSearch::search
     * @test
     */
    public function search_is_correctly(): void
    {
        $haystack = [54, 23, 65, 23, 56, 99, 100, 123, 432, 123, 77, 33, 12];

        $needle = 99;
        $expected = 5;

        $search = new SimpleSearch();

        $this->assertEquals($expected, $search->search($needle, $haystack));
    }
}
