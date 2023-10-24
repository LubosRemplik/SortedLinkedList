<?php

namespace Lubos\SortedLinkedList;

/**
 * @template T
 */
abstract class AbstractLinkedList
{
    /**
     * @var array<int, T>
     */
    protected array $nodes = [];

    /**
     * @param array<int, T> $nodes
     */
    public function __construct(
        array $nodes = []
    ) {
        foreach ($nodes as $node) {
            $this->insert($node);
        }
    }

    /**
     * @param T $node
     */
    public function insert(mixed $node): void
    {
        $this->nodes[] = $node;
    }

    /**
     * @return T|null
     */
    public function head(): mixed
    {
        $node = reset($this->nodes);
        return $node === false ? null : $node;
    }

    /**
     * @return T|null
     */
    public function current(): mixed
    {
        return current($this->nodes);
    }

    /**
     * @return T|null
     */
    public function next(): mixed
    {
        $node = next($this->nodes);
        return $node === false ? null : $node;
    }
}
