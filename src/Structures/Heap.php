<?php

declare(strict_types=1);

namespace Sorting\Structures;

use Sorting\WithSwap;

/**
 * Примитивная реализации кучи на базе неотсортированного массива.
 */
class Heap
{
    use WithSwap;

    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function push(int $value): void
    {
        $this->items[] = $value;
    }

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
