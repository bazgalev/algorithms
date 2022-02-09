<?php

declare(strict_types=1);

namespace Sorting;

class HeapSorting implements SortingInterface
{
    use WithSwap;

    /// function siftDown(i : int):
    //    while 2 * i + 1 < a.heapSize     // heapSize — количество элементов в куче
    //        left = 2 * i + 1             // left — левый сын
    //        right = 2 * i + 2            // right — правый сын
    //        j = left
    //        if right < a.heapSize and a[right] < a[left]
    //            j = right
    //        if a[i] <= a[j]
    //            break
    //        swap(a[i], a[j])
    //        i = j


    public function sort(array $items): array
    {
        $heap = $this->buildHeap($items);

        /// nd ← count - 1
        //    while end > 0 do
        //        (a[0] is the root and largest value. The swap moves it in front of the sorted elements.)
        //        swap(a[end], a[0])
        //        (the heap size is reduced by one)
        //        end ← end - 1
        //        (the swap ruined the heap property, so restore it)
        //        siftDown(a, 0, end)

        $end = count($items) - 1;

        while ($end > 0) {
            $this->swap($items[$end], $items[0]);
            $end--;
            $this->siftDown();
        }
        print_r($heap);
        die;
        return $items;
    }

    private function siftDown(int $i, array &$items): void
    {
        while (2 * $i + 1 < count($items)) {
            $left = 2 * $i + 1;
            $right = 2 * $i + 2;

            $j = $left;

            if ($right < count($items) && $items[$right] < $items[$left]) {
                $j = $right;
            }

            if ($items[$i] <= $items[$j]) {
                break;
            }

            $this->swap($items[$i], $items[$j]);
            $i = $j;
        }
    }

    private function buildHeap(array $items): array
    {
        $mid = (int)round((count($items) - 1) / 2);

        for ($i = $mid; $i > 0; $i--) {
            $this->siftDown($i, $items);
        }

        return $items;
    }
}
