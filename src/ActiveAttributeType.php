<?php

declare(strict_types=1);

namespace YiiSoft\ActiveRecord2;

final class ActiveAttributeType
{
    public function __construct(
        public readonly string $name,
        public readonly string $column,
        public readonly int $type,
        public readonly bool $hasGetter,
        public readonly bool $hasSetter
    ) {
    }
}
