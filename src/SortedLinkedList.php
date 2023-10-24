<?php

declare(strict_types=1);

namespace Lubos\SortedLinkedList;

use InvalidArgumentException;

/**
 * @template T
 * @extends AbstractLinkedList<T>
 * @implements LinkedList<T>
 */
final class SortedLinkedList extends AbstractLinkedList implements LinkedList
{
    protected ?string $type = null;

    /**
     * @param array<int, T> $nodes
     */
    public function __construct(
        array $nodes = []
    ) {
        parent::__construct($nodes);
        sort($this->nodes);
    }

    /**
     * @param T $node
     */
    public function insert($node): void
    {
        if ($this->type === null) {
            $this->type = gettype($this->head() ?? $node);
        }
        if (gettype($node) !== $this->type) {
            throw new InvalidArgumentException();
        }
        parent::insert($node);
        sort($this->nodes);
        while (current($this->nodes) !== $node) {
            next($this->nodes);
        }
    }

    public function delete(int $index): void
    {
        unset($this->nodes[$index]);
        sort($this->nodes);
    }

    /**
     * @return T|null
     */
    public function get(int $index): mixed
    {
        return $this->nodes[$index] ?? null;
    }

    /**
     * @return array<int, T>
     */
    public function print(): array
    {
        return $this->nodes;
    }
}
