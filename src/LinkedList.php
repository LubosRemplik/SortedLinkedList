<?php

namespace Lubos\SortedLinkedList;

/**
 * @template T
 */
interface LinkedList
{
    /**
     * @param T $node
     */
    public function insert($node): void;

    /**
     * @return T|null
     */
    public function head(): mixed;

    /**
     * @return T|null
     */
    public function current(): mixed;

    /**
     * @return T|null
     */
    public function next(): mixed;
}
