<?php

declare(strict_types=1);

namespace Sorting\Structures;

use Sorting\WithSwap;

/**
 * 1 3 6 4 7 10 9 11 | 2
 */
class BinaryTreeHeap
{
    use WithSwap;

    private array $items = [];

    public function push(int $value): void
    {
        $current = $this->count();
        $this->items[$current] = $value;

        while (true) {
            // Вычисляем индекс родительского узла
            $parent = (int)(($current - 1) / 2);

            // Если значение родительского узла меньше рассматриваемого дочернего,
            // свойство кучи восстановлено и цикл завершен
            if ($this->items[$parent] < $this->items[$current]) {
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

    public function pop(): int
    {
    }

    private function count(): int
    {
        return count($this->items);
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
