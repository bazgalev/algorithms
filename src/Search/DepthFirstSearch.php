<?php

declare(strict_types=1);

namespace Algorithms\Search;

/**
 * Поиск в глубину
 */
class DepthFirstSearch
{
    private array $marked = [];
    private array $graph;

    public function __construct(array $graph)
    {
        $this->graph = $graph;
    }

    public function search(int $root, callable $callback): void
    {
        $this->marked[$root] = true;
        $callback($root);

        foreach ($this->graph[$root] as $v) {
            if (!isset($this->marked[$v])) {
                $this->search($v, $callback);
            }
        }
    }
}
