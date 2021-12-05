<?php

declare(strict_types=1);

namespace Test;

use YiiSoft\ActiveRecord2\ActiveCollection;
use YiiSoft\ActiveRecord2\ActiveQuery;
use YiiSoft\ActiveRecord2\Cond;
use YiiSoft\ActiveRecord2\Contracts\ActiveRecordManagerInterface;

/**
 * @method ARTest|null getFirst()
 * @method ARTest[] getAllAsArray()
 * @method ARTest getFirstOrCreate(array $attributes = [], callable $handler = null)
 * @method ARTest getFirstOrFail()
 * @method ARTest getFirstOrMake(array $attributes = [], callable $handler = null)
 */
class AQTest extends ActiveQuery
{
    public function __construct(ActiveRecordManagerInterface $arManager)
    {
        parent::__construct($arManager, ARTest::class);
    }

    /**
     * @return ActiveCollection<ARTest>
     * @psalm-suppress LessSpecificImplementedReturnType
     * @psalm-suppress MixedReturnTypeCoercion
     */
    public function get(): ActiveCollection
    {
        return parent::get();
    }

    public function active(): static
    {
        return $this->andWhere(Cond::equals('status', 'active'));
    }
}
