<?php

declare(strict_types=1);

namespace Algorithms\Sorting;

use Algorithms\Sorting\SortingInterface;

/**
 * Сортировка вставками
 * Сложность O(n^2)
 */
class InsertionSorting implements SortingInterface
{
    /**
     * @param int[] $items
     * @return int[]
     */
    public function sort(array $items): array
    {
        for ($i = 1; $i < count($items); $i++) {
            $temp = $items[$i];
            for ($j = $i - 1; $j >= 0 && $items[$j] > $temp; $j--) {
                $items[$j + 1] = $items[$j];
            }
            $items[$j + 1] = $temp;
        }

        return $items;
    }
}