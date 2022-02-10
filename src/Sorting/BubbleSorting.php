<?php

declare(strict_types=1);

namespace Algorithms\Sorting;

/**
 * Сортировка пузырьком.
 * Сложность O(n^2).
 */
class BubbleSorting implements SortingInterface
{
    /**
     * @param int[] $items
     * @return int[]
     */
    public function sort(array $items): array
    {
        for ($i = 0; $i < count($items); $i++) {
            for ($j = 1; $j < count($items) - $i; $j++) {
                if ($items[$j] < $items[$j - 1]) {
                    swap($items[$j], $items[$j - 1]);
                }
            }
        }

        return $items;
    }
}
