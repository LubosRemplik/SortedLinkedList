# Sorted Linked List

**Note:** Not really LinkedList data structure

[![Tests](https://github.com/LubosRemplik/SortedLinkedList/actions/workflows/tests.yaml/badge.svg)](https://github.com/LubosRemplik/SortedLinkedList/actions/workflows/tests.yaml)

Library which works with LinkedList data structure and keeps nodes sorted.

## Installation

```bash
composer require lubos/sorted-linked-list
```

## Usage

```php
use Lubos\SortedLinkedList\SortedLinkedList;

$list = new SortedLinkedList(['Ebay', 'Amazon']);
$list->insert('ShipMonk');

print_r($list->print());

// Output:
// Array
// (
//     [0] => Amazon
//     [1] => Ebay
//     [2] => ShipMonk
// )
```

## Code style & QA

- ECS `vendor/bin/ecs check src tests`
- Psalm `vendor/bin/psalm`
- PHPUnit `vendor/bin/phpunit tests`
