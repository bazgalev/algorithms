<?php

declare(strict_types=1);

namespace Algorithms\Sorting;

use Algorithms\Sorting\SortingInterface;
use Algorithms\Structures\BinaryTreeHeap;
use Algorithms\Utils\WithSwap;

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
