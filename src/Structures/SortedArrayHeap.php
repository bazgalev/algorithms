<?php

declare(strict_types=1);

namespace Sorting\Structures;

use Exception;
use Sorting\WithSwap;

/**
 * Реализация кучи на основе отсортированного массива.
 * Быстрое извлечение, медленное добавление.
 */
class SortedArrayHeap
{
    use WithSwap;

    /**
     * @var int[]
     */
    private array $items;

    /**
     * O(1)
     */
    public function pop(): int
    {
        if ($this->isEmpty()) {
            throw new Exception('Heap is empty');
        }

        return array_pop($this->items);
    }

    public function isEmpty(): bool
    {
        return empty($this->items);
    }

    /**
     * O(n)
     */
    public function push(int $value): void
    {
        $this->items[] = $value;

        $count = count($this->items);

        if ($count < 2) {
            return;
        }

        $i = $count - 1;
        while ($this->items[$i - 1] > $this->items[$i] && $i >= 0) {
            $this->swap($this->items[$i - 1], $this->items[$i]);
            $i--;
        }
    }
}
