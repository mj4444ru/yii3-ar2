<?php

namespace YiiSoft\ActiveRecord2;

use Iterator;
use YiiSoft\ActiveRecord2\Contracts\ActiveQueryInterface;
use YiiSoft\ActiveRecord2\Contracts\ActiveRecordInterface;

/**
 * @template ARClass
 */
class ActiveCollection implements Contracts\ActiveCollectionInterface, Iterator
{
    public function __construct(public readonly ActiveQueryInterface $query)
    {
    }

    /**
     * @return array<ARClass>
     */
    public function getAll(): array
    {
        // TODO: Temporary implementation for tests
        return $this->query->getAllAsArray();
    }

    /**
     * @return ARClass|null
     */
    public function getFirst(): ?ActiveRecordInterface
    {
        // TODO: Temporary implementation for tests
        return $this->query->getFirst();
    }

    public function countTotal(): int
    {
        // TODO: Temporary implementation for tests
        return count($this->query->getAllAsArray());
    }

    public function count(): int
    {
        // TODO: Temporary implementation for tests
        return count($this->query->getAllAsArray());
    }

    public function current(): mixed
    {
        // TODO: Implement current() method.
    }

    public function next(): void
    {
        // TODO: Implement next() method.
    }

    public function key(): mixed
    {
        // TODO: Implement key() method.
    }

    public function valid(): bool
    {
        // TODO: Implement valid() method.
    }

    public function rewind(): void
    {
        // TODO: Implement rewind() method.
    }
}