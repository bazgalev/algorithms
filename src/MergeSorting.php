<?php

declare(strict_types=1);

namespace Algorithms;

/**
 * Сортировка слиянием.
 * Сложность O(n log n).
 */
class MergeSorting implements SortingInterface
{
    /**
     * @param int[] $items
     * @return int[]
     */
    public function sort(array $items): array
    {
        if (count($items) < 2) {
            return $items;
        }

        $mid = (int)round((count($items) - 1) / 2);

        $left = array_slice($items, 0, $mid);
        $right = array_slice($items, $mid);

        return $this->merge($this->sort($left), $this->sort($right));
    }

    /**
     * @param int[] $left
     * @param int[] $right
     * @return int[]
     */
    private function merge(array $left, array $right): array
    {
        $result = [];

        while (!empty($left) && !empty($right)) {
            $left[0] < $right[0] ?
                $result[] = array_shift($left) :
                $result[] = array_shift($right);
        }

        while (!empty($left)) {
            $result[] = array_shift($left);
        }

        while (!empty($right)) {
            $result[] = array_shift($right);
        }

        return $result;
    }
}
