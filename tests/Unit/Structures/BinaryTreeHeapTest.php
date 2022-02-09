<?php

declare(strict_types=1);

namespace Tests\Unit\Structures;

use PHPUnit\Framework\TestCase;
use Sorting\Structures\BinaryTreeHeap;

class BinaryTreeHeapTest extends TestCase
{
    /**
     * @covers \Sorting\Structures\BinaryTreeHeap::push
     * @test
     */
    public function heap_is_correctly(): void
    {
        $heap = new BinaryTreeHeap();

        $heap->push(1);
        $heap->push(3);
        $heap->push(6);
        $heap->push(4);
        $heap->push(7);
        $heap->push(10);
        $heap->push(9);
        $heap->push(11);
        $heap->push(2);

        $expected = [1, 2, 6, 3, 7, 10, 9, 11, 4];

        $this->assertEquals($expected, $heap->getItems());
    }
}
