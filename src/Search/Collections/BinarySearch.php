<?php

declare(strict_types=1);

namespace Algorithms\Search\Collections;

/**
 * Бинарный поиск.
 *
 * Поиск проводится в уже отсортированном массиве.
 * При каждой итерации границы поиска сужаются вдвое.
 *
 * Сложность поиска: O(log*n).
 * Память: O(1).
 */
class BinarySearch implements SearchInterface
{
    /**
     * @param int[] $haystack Массив отсортированных значений по возрастанию.
     */
    public function search(int $needle, array $haystack): ?int
    {
        $left = 0;
        $right = count($haystack) - 1;

        while ($left <= $right) {
            $median = (int)(($left + $right) / 2);

            if ($needle < $haystack[$median]) {
                $right = --$median;

                continue;
            }

            if ($needle > $haystack[$median]) {
                $left = ++$median;

                continue;
            }

            return $median;
        }

        return null;
    }
}
