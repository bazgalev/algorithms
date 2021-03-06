<?php

declare(strict_types=1);

namespace Algorithms\Sorting;

interface SortingInterface
{
    /**
     * @param int[] $items
     * @return int[]
     */
    public function sort(array $items): array;
}
