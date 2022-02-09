<?php

declare(strict_types=1);

namespace Algorithms\Structures;

use Exception;
use Algorithms\Utils\WithSwap;

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
     * Сложность изъятия элемента O(log n).
     *
     * @throws Exception
     */
    public function pop(): int
    {
        if ($this->isEmpty()) {
            throw new Exception('Heap is empty');
        }

        $i = 0;
        $this->swap($this->items[$this->count() - 1], $this->items[$i]);
        $result = array_pop($this->items);

        while (true) {
            // Текущий минимум
            $j = $i;

            // Рассматриваем левого ребенка
            $left = 2 * $i + 1;

            // Если он существует
            // и меньше текущего минимума
            if ($left < $this->count() && $this->items[$left] < $this->items[$j]) {
                // Обновляем минимум
                $j = $left;
            }

            // Рассматриваем правого ребенка
            $right = 2 * $i + 2;

            // Если он существует
            // и меньше текущего минимума
            if ($right < $this->count() && $this->items[$right] < $this->items[$j]) {
                // Обновляем минимум
                $j = $right;
            }

            // Если после проверок минимум не обновился,
            // свойство кучи восстановлено,
            // выходим из цикла
            if ($j === $i) {
                break;
            }

            // Меняем местами рассматриваемый узел и текущий минимум
            $this->swap($this->items[$i], $this->items[$j]);
            // Устанавливаем новый рассматриываемый узел
            $i = $j;
        }

        return $result;
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function isEmpty(): bool
    {
        return empty($this->items);
    }
}
