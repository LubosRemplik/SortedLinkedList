<?php

use Lubos\SortedLinkedList\SortedLinkedList;
use PHPUnit\Framework\TestCase;

class SortedLinkedListTest extends TestCase
{
    /**
     * @psalm-suppress InvalidArgument
     */
    public function testInvalidArgumentException(): void
    {
        /** @var SortedLinkedList<string> $list */
        $list = new SortedLinkedList('string');
        $this->expectException(InvalidArgumentException::class);
        $list->insert(1);
    }

    public function testSortedStringList(): void
    {
        /** @var SortedLinkedList<string> $list */
        $list = new SortedLinkedList('string', ['ShipMonk', 'Amazon', 'Ebay']);
        $list->insert('Mall');
        $list->insert('Allegro');
        self::assertEquals([
            'Allegro',
            'Amazon',
            'Ebay',
            'Mall',
            'ShipMonk',
        ], $list->print());
    }

    public function testSortedIntegerList(): void
    {
        /** @var SortedLinkedList<integer> $list */
        $list = new SortedLinkedList('integer', [4, 5, 1, 3]);
        $list->insert(2);
        self::assertEquals([1, 2, 3, 4, 5], $list->print());
    }

    public function testSortedNodesViaConstructor(): void
    {
        /** @var SortedLinkedList<integer> $list */
        $list = new SortedLinkedList('integer', [4, 5, 1, 3]);
        self::assertEquals([1, 3, 4, 5], $list->print());
    }

    public function testListCanHaveDuplicatedValues(): void
    {
        /** @var SortedLinkedList<integer> $list */
        $list = new SortedLinkedList('integer', [1, 2, 3]);
        $list->insert(2);
        $list->insert(3);
        $list->insert(4);
        self::assertCount(6, $list->print());

        /** @var SortedLinkedList<string> $list */
        $list = new SortedLinkedList('string', ['ShipMonk', 'Amazon', 'Ebay']);
        $list->insert('ShipMonk');
        self::assertCount(4, $list->print());
    }

    public function testDeleteItem(): void
    {
        /** @var SortedLinkedList<integer> $list */
        $list = new SortedLinkedList('integer', [1, 2, 3]);
        $list->delete(1);
        self::assertEquals([1, 3], $list->print());
    }

    public function testPointer(): void
    {
        /** @var SortedLinkedList<integer> $list */
        $list = new SortedLinkedList('integer', [5, 4, 2, 1]);
        $list->insert(3);
        self::assertEquals(3, $list->current());
        self::assertEquals(4, $list->next());
        self::assertEquals(5, $list->next());
        self::assertEquals(1, $list->head());
    }
}
