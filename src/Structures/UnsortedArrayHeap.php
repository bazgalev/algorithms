<?php

declare(strict_types=1);

namespace Algorithms\Structures;

use Algorithms\Utils\WithSwap;

/**
 * Примитивная реализации кучи на базе неотсортированного массива.
 * Быстрое добавление, медленное извлечение.
 */
class UnsortedArrayHeap
{
    use WithSwap;

    /**
     * @var int[]
     */
    private array $items;

    /**
     * O(1)
     */
    public function push(int $value): void
    {
        $this->items[] = $value;
    }

    /**
     * O(n)
     */
    public function pop(): int
    {
        $min = 0;

        for ($i = 1; $i < count($this->items); $i++) {
            if ($this->items[$i] < $this->items[$min]) {
                $min = $i;
            }
        }

        $this->swap($this->items[count($this->items) - 1], $this->items[$min]);

        return array_pop($this->items);
    }
}
