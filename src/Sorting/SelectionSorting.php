<?php

declare(strict_types=1);

namespace Algorithms\Sorting;

/**
 * Сортировка выбором
 * Сложность O(n^2)
 */
class SelectionSorting implements SortingInterface
{
    /**
     * @param array $items
     * @return array
     */
    public function sort(array $items): array
    {
        for ($i = 0; $i < count($items); $i++) {
            $minIndex = $i;
            for ($j = $i; $j < count($items); $j++) {
                if ($items[$j] < $items[$minIndex]) {
                    $minIndex = $j;
                }
            }
            swap($items[$i], $items[$minIndex]);
        }

        return $items;
    }
}
