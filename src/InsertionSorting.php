<?php

declare(strict_types=1);

namespace Sorting;

class InsertionSorting
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
