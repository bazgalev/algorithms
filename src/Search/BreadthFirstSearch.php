<?php

declare(strict_types=1);

namespace Algorithms\Search;

/**
 * Поиск в ширину.
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
                if (!isset($this->visited[$v])) {
                    $queue[] = $this->graph[$v];
                    $this->visit($v, $callback);
                }
            }
        }
    }

    private function visit(int $vertex, callable $callback): void
    {
        $this->visited[$vertex] = true;
        $callback($vertex);
    }
}
