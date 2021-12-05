<?php

declare(strict_types=1);

namespace YiiSoft\ActiveRecord2\Contracts;

interface SqlStringInterface
{
    public function getParams(): array;

    public function getSql(): string;
}
