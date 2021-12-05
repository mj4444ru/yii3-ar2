<?php

declare(strict_types=1);

namespace YiiSoft\ActiveRecord2\Contracts;

use Countable;
use Traversable;

/**
 * @template ARClass
 */
interface ActiveCollectionInterface extends Countable, Traversable
{
    public function chunk(int $count, callable $func, array $params = []): static;

    public function chunkById(int $count, string $column, callable $func, array $params = []): static;

    public function countTotal(): int;

    public function filter(callable $func, array $params = []): static;

    /**
     * @return array<ARClass>
     */
    public function getAll(): array;

    /**
     * @return ARClass|null
     */
    public function getFirst(): ?ActiveRecordInterface;
}
