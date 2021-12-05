<?php

declare(strict_types=1);

namespace YiiSoft\ActiveRecord2;

use IteratorAggregate;
use RuntimeException;
use Traversable;
use YiiSoft\ActiveRecord2\Contracts\ActiveQueryInterface;
use YiiSoft\ActiveRecord2\Contracts\ActiveRecordBehaviorInterface;
use YiiSoft\ActiveRecord2\Contracts\ActiveRecordInterface;
use YiiSoft\ActiveRecord2\Contracts\ActiveRecordManagerInterface;
use Yiisoft\Validator\ResultSet;

class ActiveRecord implements ActiveRecordInterface, IteratorAggregate
{
    protected string $tableName = 'model';
    /**
     * @var list<string>
     */
    protected array $keys = ['id'];
    protected bool $keyIsAutoIncrementing = true;
    /**
     * @var array<string, mixed>
     */
    protected array $defaultValues = [];
    /**
     * @var array<string, mixed>|null
     */
    protected ?array $attributes = null;
    /**
     * @var array<string, list<string>>
     */
    protected array $safeAttributes = [];
    /**
     * @var array<string, list<string>>
     */
    protected array $guardedAttributes = [];

    /**
     * @var array<string, mixed>|null
     */
    private ?array $oldAttrValues = null;
    /**
     * @var array<string, mixed>|null
     */
    private ?array $attrValues = null;

    public function __construct(
        private readonly ActiveRecordManagerInterface $arManager
    ) {
    }

    public function getARManager(): ActiveRecordManagerInterface
    {
        return $this->arManager;
    }

    public function cloneRecord(): static
    {
        // TODO: Implement cloneRecord() method.
        return clone $this;
    }

    /**
     * @param ActiveRecordManagerInterface $arManager
     * @return ActiveQuery<static>
     */
    public static function find(ActiveRecordManagerInterface $arManager): ActiveQuery
    {
        return new ActiveQuery($arManager, static::class);
    }

    public static function getAttributes(): array
    {
        // TODO: Implement getAttributes() method.
    }

    public function getValues(array $attributes = null): array
    {
        // TODO: Implement getAttributesValues() method.
    }

    public function getValue(string $attribute): mixed
    {
        // TODO: Implement getAttributeValue() method.
    }

    public static function getSafeAttributes(): array
    {
        // TODO: Implement getSafeAttributes() method.
    }

    public function getScenario(): string
    {
        // TODO: Implement getScenario() method.
    }

    public function getScenarios(): array
    {
        // TODO: Implement getScenarios() method.
    }

    public function hasAttribute(string $attribute): bool
    {
        // TODO: Implement hasAttribute() method.
    }

    public function loadSafeValues(array $values): static
    {
        // TODO: Implement loadSafeAttributesValues() method.
        return $this;
    }

    public function setValues(array $values): static
    {
        // TODO: Implement setAttributesValues() method.
        return $this;
    }

    public function setValue(string $name, mixed $value): void
    {
        // TODO: Implement setAttributeValue() method.
    }

    public function setScenario(string $name): static
    {
        // TODO: Implement setScenario() method.
        return $this;
    }

    public function getValidateErrors(): ResultSet
    {
        // TODO: Implement getValidateErrors() method.
    }

    public function getBehaviors(): array
    {
        // TODO: Implement getBehaviors() method.
    }

    public function setBehavior(string $name, ActiveRecordBehaviorInterface $behavior): void
    {
        // TODO: Implement setBehavior() method.
    }

    public function removeBehavior(string $name): void
    {
        // TODO: Implement removeBehavior() method.
    }

    public function delete(): void
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param array<string, mixed> $params
     */
    public static function deleteAll(
        ActiveRecordManagerInterface $arManager,
        array|string $condition = '',
        array $params = []
    ): int {
        return static::find($arManager)->where($condition, $params)->deleteAll();
    }

    /**
     * @param array<string, mixed> $attributes
     * @param array<string, mixed> $params
     */
    public static function updateAll(
        ActiveRecordManagerInterface $arManager,
        array $attributes,
        array|string $condition = '',
        array $params = []
    ): int {
        return static::find($arManager)->where($condition, $params)->updateAll($attributes);
    }

    public static function updateAllCounters(
        ActiveRecordManagerInterface $arManager,
        array $counters,
        array|string $condition = '',
        array $params = []
    ): int {
        return static::find($arManager)->where($condition, $params)->updateAllCounters($counters);
    }

    public function isEquals(ActiveRecordInterface $record): bool
    {
        // TODO: Implement isEquals() method.
    }

    public static function findBySql(ActiveRecordManagerInterface $arManager, string $sql): ActiveQueryInterface
    {
        // TODO: Implement findBySql() method.
    }

    public function insert(bool $runValidation = true, array $attributes = null): bool
    {
        // TODO: Implement insert() method.
    }

    public function update(bool $runValidation = true, array $attributes = null): bool
    {
        // TODO: Implement update() method.
    }

    public function replace(bool $runValidation = true, array $attributes = null): bool
    {
        // TODO: Implement replace() method.
    }

    public function loadDefaultValues(bool $skipIfSet = true, array $attributes = null): static
    {
        // TODO: Implement loadDefaultValues() method.
        return $this;
    }

    public function getPrimaryKeys(): array
    {
        // TODO: Implement getPrimaryKeys() method.
    }

    public function refresh(): bool
    {
        // TODO: Implement refresh() method.
    }

    public function getTableName(): string
    {
        // TODO: Implement getTableName() method.
    }

    public static function create(
        ActiveRecordManagerInterface $arManager,
        array $attributes = [],
        bool $runValidation = true
    ): static {
        $obj = static::make($arManager, $attributes, $runValidation);
        if (!$obj->insert()) {
            throw new RuntimeException('Failed to create a record.');
        }
        return $obj;
    }

    public static function make(
        ActiveRecordManagerInterface $arManager,
        array $attributes = [],
        bool $runValidation = true
    ): static {
        return (new static($arManager))->loadDefaultValues()->setValues($attributes);
    }

    public function getRules(): iterable
    {
        // TODO: Implement getRules() method.
    }

    public function save(bool $runValidation = true, array $attributes = null): bool
    {
        // TODO: Implement save() method.
    }

    public function offsetExists(mixed $offset): bool
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet(mixed $offset): mixed
    {
        // TODO: Implement offsetGet() method.
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset(mixed $offset): void
    {
        // TODO: Implement offsetUnset() method.
    }

    public function getIterator(): Traversable
    {
        // TODO: Implement getIterator() method.
    }

    public function getFresh(): static
    {
        // TODO: Implement getFresh() method.
    }
}
