<?php

declare(strict_types=1);

namespace Algorithms;

/**
 * Сортировка пузырьком.
 * Сложность O(n^2).
 */
class BubbleSorting implements SortingInterface
{
    use WithSwap;

    /**
     * @param int[] $items
     * @return int[]
     */
    public function sort(array $items): array
    {
        for ($i = 0; $i < count($items); $i++) {
            for ($j = 1; $j < count($items) - $i; $j++) {
                if ($items[$j] < $items[$j - 1]) {
                    $this->swap($items[$j], $items[$j - 1]);
                }
            }
        }

        return $items;
    }
}
