<?php

declare(strict_types=1);

namespace Algorithms;

use Algorithms\Structures\BinaryTreeHeap;

class HeapSorting implements SortingInterface
{
    use WithSwap;

    public function sort(array $items): array
    {
        $heap = new BinaryTreeHeap();

        foreach ($items as $item) {
            $heap->push($item);
        }

        $result = [];
        while (!$heap->isEmpty()) {
            $result[] = $heap->pop();
        }

        return $result;
    }
}
