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
    public function push_is_correctly(): void
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

    /**
     * @covers \Sorting\Structures\BinaryTreeHeap::pop
     * @test
     */
    public function pop_is_correctly(): void
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

        $this->assertEquals(1, $heap->pop());
        $this->assertEquals(2, $heap->pop());
        $this->assertEquals(3, $heap->pop());
        $this->assertEquals(4, $heap->pop());
        $this->assertEquals(6, $heap->pop());
        $this->assertEquals(7, $heap->pop());
        $this->assertEquals(9, $heap->pop());
        $this->assertEquals(10, $heap->pop());
        $this->assertEquals(11, $heap->pop());
    }
}
