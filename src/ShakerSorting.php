<?php

declare(strict_types=1);

namespace Sorting;

/**
 * Разновидность сортировки пузырьком - шейкерная сортировка.
 * Сложность O(n^2).
 */
class ShakerSorting
{
    use WithSwap;

    /**
     * @param int[] $items
     * @return int[]
     */
    public function sort(array $items): array
    {
        $left = 0;
        $right = count($items) - 1;

        for ($i = $left; $i < $right; $i++) {
            for ($j = $left; $j < $right; $j++) {
                if ($items[$j] > $items[$j + 1]) {
                    $this->swap($items[$j], $items[$j + 1]);
                }
            }
            $right--;
            for ($j = $right; $j > $left; $j--) {
                if ($items[$j] < $items[$j - 1]) {
                    $this->swap($items[$j], $items[$j - 1]);
                }
            }
        }

        return $items;
    }
}
