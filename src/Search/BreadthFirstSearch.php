<?php

declare(strict_types=1);

namespace Algorithms\Search;

/**
 * Поиск в ширину.
 *
 * Отвечает на два типа вопросов:
 * - есть ли путь от узла A к узлу B;
 * - как выглядит кратчайший путь от узла A к узлу B.
 *
 * Сложность выполнения поиска: O(V + E).
 */
class BreadthFirstSearch
{
    private array $visited = [];
    private array $graph;

    public function __construct(array $graph)
    {
        $this->graph = $graph;
    }

    public function search(int $root, callable $callback): void
    {
        $queue[] = $this->graph[$root];
        $this->visit($root, $callback);

        while (!empty($queue)) {
            $node = array_shift($queue);
            foreach ($node as $v) {
                if (!$this->visited($v)) {
                    $this->visit($v, $callback);
                    $queue[] = $this->graph[$v];
                }
            }
        }
    }

    private function visit(int $vertex, callable $callback): void
    {
        $this->visited[$vertex] = true;
        $callback($vertex);
    }

    public function visited(int $vertex): bool
    {
        return isset($this->visited[$vertex]);
    }
}
