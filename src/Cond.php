<?php

declare(strict_types=1);

namespace YiiSoft\ActiveRecord2;

use YiiSoft\ActiveRecord2\Conditions\CondAnd;
use YiiSoft\ActiveRecord2\Conditions\CondBetween;
use YiiSoft\ActiveRecord2\Conditions\CondCompare;
use YiiSoft\ActiveRecord2\Conditions\CondCompareColumn;
use YiiSoft\ActiveRecord2\Conditions\CondLike;
use YiiSoft\ActiveRecord2\Conditions\CondNot;
use YiiSoft\ActiveRecord2\Conditions\CondOr;

final class Cond
{
    public static function and(): CondAnd
    {
        return new CondAnd();
    }

    public static function between(): CondBetween
    {
        return new CondBetween();
    }

    public static function column(): CondCompareColumn
    {
        return new CondCompareColumn();
    }

    public static function compare(): CondCompare
    {
        return new CondCompare();
    }

    public static function equals(): CondCompare
    {
        return new CondCompare();
    }

    public static function like(): CondLike
    {
        return new CondLike();
    }

    public static function not(): CondNot
    {
        return new CondNot();
    }

    public static function notEquals(): CondCompare
    {
        return new CondCompare();
    }

    public static function or(): CondOr
    {
        return new CondOr();
    }
}
