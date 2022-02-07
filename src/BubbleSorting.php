<?php

declare(strict_types=1);

namespace Sorting;

/**
 * Сортировка пузырьком
 * Сложность O(n^2)
 */
class BubbleSorting
{
    use WithSwap;

    /**
     * @param int[] $items
     * @return int[]
     */
    public function sort(array $items): array
    {
        for ($i = 0; $i < count($items); $i++) {
            for ($j = $i + 1; $j < count($items); $j++) {
                if ($items[$i] > $items[$j]) {
                    $this->swap($items[$i], $items[$j]);
                }
            }
        }

        return $items;
    }
}
