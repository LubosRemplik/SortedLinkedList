<?php

namespace Lubos\SortedLinkedList;

/**
 * @template T
 */
abstract class AbstractLinkedList
{
    /**
     * @param array<int, T> $nodes
     */
    public function __construct(
        protected readonly string $type,
        protected array $nodes = []
    ) {
        sort($this->nodes);
    }

    public function head(): mixed
    {
        return reset($this->nodes);
    }

    public function current(): mixed
    {
        return current($this->nodes);
    }

    public function next(): mixed
    {
        return next($this->nodes);
    }
}
