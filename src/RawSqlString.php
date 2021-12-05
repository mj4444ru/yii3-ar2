<?php

declare(strict_types=1);

namespace YiiSoft\ActiveRecord2;

use YiiSoft\ActiveRecord2\Contracts\SqlStringInterface;

final class RawQueryFragment implements SqlStringInterface
{
    public function __construct(public readonly string $queryString, public readonly array $params = [])
    {
    }

    public function __toString(): string
    {
        return $this->queryString;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function getSql(): string
    {
        return $this->queryString;
    }
}
