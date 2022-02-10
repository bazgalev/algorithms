<?php

declare(strict_types=1);

namespace Algorithms\Search;

/**
 * Простой линейный поиск.
 *
 * Сложность: O(n).
 * Память: O(1).
 */
class SimpleSearch implements SearchInterface
{
    public function search(int $needle, array $haystack): int
    {
        foreach ($haystack as $key => $value) {
            if ($needle === $value) {
                return $key;
            }
        }
    }
}
