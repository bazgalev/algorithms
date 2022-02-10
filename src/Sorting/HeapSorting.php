<?php

declare(strict_types=1);

namespace Algorithms\Sorting;

use Algorithms\Structures\BinaryTreeHeap;

/**
 * Сортировка кучей (пирамидальная сортировка).
 *
 * Строим из массива кучу, по очереди извлекаем минимум кучи.
 *
 * Сложность: O(n*log*n).
 * Память: O(1).
 */
class HeapSorting implements SortingInterface
{
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
