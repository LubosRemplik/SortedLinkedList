# Sorted Linked List

Library which works with LinkedList structure and keeps items sorted.

## Installation

```bash
composer require lubos/sorted-linked-list
```

## Usage

```php
use Lubos\SortedList\SortedList;

$list = new SortedList('string', ['Ebay', 'Amazon']);
$list->add('ShipMonk');

print_r($list->getItems());

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