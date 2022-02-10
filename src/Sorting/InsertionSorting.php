<?php

declare(strict_types=1);

namespace Algorithms\Sorting;

/**
 * Сортировка вставками.
 *
 * На каждом шаге алгоритма мы выбираем один из элементов входных данных и вставляем его на нужную позицию в уже отсортированной
 * части массива до тех пор, пока весь набор входных данных не будет отсортирован.
 *
 * Сложность: O(n^2).
 * Память: O(1).
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
