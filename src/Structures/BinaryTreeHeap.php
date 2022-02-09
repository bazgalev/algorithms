<?php

declare(strict_types=1);

namespace Sorting\Structures;

use Exception;
use Sorting\WithSwap;

/**
 * 1 3 6 4 7 10 9 11 | 2
 */
class BinaryTreeHeap
{
    use WithSwap;

    private array $items = [];

    /**
     * Сложность добавления нового элемента: O(log n).
     */
    public function push(int $value): void
    {
        $current = $this->count();
        $this->items[$current] = $value;

        while (true) {
            // Вычисляем индекс родительского узла
            $parent = (int)(($current - 1) / 2);

            // Если значение родительского узла меньше\равно рассматриваемого дочернего,
            // свойство кучи восстановлено и цикл завершен
            if ($this->items[$parent] <= $this->items[$current]) {
                break;
            }

            // Если рассматриваемого значение достигло корня дерева,
            // свойство кучи восстановлено и цикл завершен
            if ($current === 0) {
                break;
            }

            $this->swap($this->items[$parent], $this->items[$current]);
            $current = $parent;
        }
    }

    /**
     * @throws Exception
     */
    public function pop(): int
    {
        if ($this->isEmpty()) {
            throw new Exception('Heap is empty');
        }

        $last = $this->count() - 1;
        $this->swap($this->items[$last], $this->items[0]);
        $result = array_pop($this->items);

        $i = 0;
        while (true) {
            $j = $i;

            $left = 2 * $i + 1;
            if ($left < $last && $this->items[$left] < $this->items[$j]) {
                $j = $left;
            }

            $right = 2 * $i + 2;
            if ($right < $last && $this->items[$right] < $this->items[$j]) {
                $j = $right;
            }

            if ($j === $i) {
                break;
            }

            $this->swap($this->items[$i], $this->items[$j]);
            $i = $j;
        }

        return $result;
    }

    private function count(): int
    {
        return count($this->items);
    }

    private function isEmpty(): bool
    {
        return empty($this->items);
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
