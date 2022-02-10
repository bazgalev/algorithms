<?php

declare(strict_types=1);

namespace Algorithms\Search;

interface SearchInterface
{
    /**
     * @param int[] $haystack
     */
    public function search(int $needle, array $haystack): int;
}
