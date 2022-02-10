<?php

declare(strict_types=1);

namespace Algorithms\Sorting;

/**
 * Сортировка пузырьком.
 *
 * Алгоритм состоит в повторяющихся проходах по сортируемому массиву.
 * На каждой итерации последовательно сравниваются соседние элементы, и, если порядок в паре неверный, то элементы меняют местами.
 *
 * Сложность: O(n^2).
 * Память: O(1).
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
