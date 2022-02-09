<?php

declare(strict_types=1);

namespace Algorithms\Sorting;

use Algorithms\Sorting\SortingInterface;

/**
 * Простая реализация алгоритма быстрой сортировки.
 * Сложность: O(n log n).
 */
class QuickSorting implements SortingInterface
{
    public function sort(array $items): array
    {
        if (count($items) < 2) {
            return $items;
        }

        $pivot = array_shift($items);

        [$right, $left] = $this->partition($items, $pivot);

        return array_merge(
            $this->sort($left),
            [$pivot],
            $this->sort($right)
        );
    }

    /**
     * Простейшая реализации разделения
     *
     * @param int[] $items
     * @param int $pivot
     * @return int[]
     */
    private function partition(array $items, int $pivot): array
    {
        $right = [];
        $left = [];

        foreach ($items as $item) {
            $item > $pivot ?
                $right[] = $item :
                $left[] = $item;
        }

        return [$right, $left];
    }
}
