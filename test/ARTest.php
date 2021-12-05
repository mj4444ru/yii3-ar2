<?php

declare(strict_types=1);

namespace Test;

use YiiSoft\ActiveRecord2\ActiveRecord;
use YiiSoft\ActiveRecord2\Contracts\ActiveRecordManagerInterface;

class ARTest extends ActiveRecord
{
    public static function find(ActiveRecordManagerInterface $arManager): AQTest
    {
        return new AQTest($arManager);
    }

    public function test(): int
    {
        return 0;
    }
}
