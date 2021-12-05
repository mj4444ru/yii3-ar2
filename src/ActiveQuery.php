<?php

declare(strict_types=1);

namespace YiiSoft\ActiveRecord2;

use YiiSoft\ActiveRecord2\Contracts\ActiveRecordInterface;
use YiiSoft\ActiveRecord2\Contracts\ActiveRecordManagerInterface;

/**
 * @template ARClass
 */
class ActiveQuery implements Contracts\ActiveQueryInterface
{
    /**
     * @param class-string<ARClass> $arClass
     */
    public function __construct(
        private readonly ActiveRecordManagerInterface $arManager,
        private readonly string $arClass
    ) {
    }

    /**
     * @return ARClass|null
     * @psalm-return (ARClass&ActiveRecordInterface)|null
     */
    public function getFirst(): ?ActiveRecordInterface
    {
        $arClass = $this->arClass;
        /** @psalm-suppress MixedMethodCall */
        $result = new $arClass($this->arManager);
        /** @var ARClass $result */
        /** @psalm-var ARClass&ActiveRecordInterface $result */
        return $result;
    }

    /**
     * @return ARTest[]
     * @psalm-return array<ARClass&ActiveRecordInterface>
     */
    public function getAllAsArray(): array
    {
        if ($model = $this->getFirst()) {
            return [$model];
        }

        return [];
    }

    /**
     * @return ActiveCollection<ARClass>
     * @psalm-suppress LessSpecificImplementedReturnType
     */
    public function get(): ActiveCollection
    {
        return new ActiveCollection($this);
    }

    public function where(string|array $condition, array $params = []): static
    {
        return $this;
    }

    public function deleteAll(): int
    {
        return 0;
    }

    public function updateAll(array $attributes): int
    {
        return 0;
    }

    public function updateAllCounters(array $counters): int
    {
        return 0;
    }
}
