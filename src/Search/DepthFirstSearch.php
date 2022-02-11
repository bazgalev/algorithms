<?php

declare(strict_types=1);

namespace Algorithms\Search;

/**
 * Поиск в глубину.
 *
 * Чаще всего используется для изучения свойств графа.
 *
 * Сложность: O(V+E).
 */
class DepthFirstSearch
{
    private array $visited = [];
    private array $graph;

    /**
     * @param array $graph в виде списка смежных вершин.
     */
    public function __construct(array $graph)
    {
        $this->graph = $graph;
    }

    public function search(int $root, callable $callback): void
    {
        $this->visit($root);
        $callback($root);

        foreach ($this->graph[$root] as $v) {
            if (!$this->visited($v)) {
                $this->search($v, $callback);
            }
        }
    }

    private function visit(int $vertex): void
    {
        $this->visited[$vertex] = true;
    }

    private function visited(int $vertex): bool
    {
        return isset($this->visited[$vertex]);
    }
}
