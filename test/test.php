<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

# Тест автодополнения PHPStorm

###########################################################

$arm = new YiiSoft\ActiveRecord2\ActiveRecordManager();

###########################################################

$x = new Test\ARTest($arm);
var_dump($x->test());

###########################################################

$q = Test\ARTest::find($arm)->active();

###########################################################

$x1 = $q->getFirst();
$x1->test();

###########################################################

$x2 = $q->getAllAsArray();
$x2[0]->test();

###########################################################

$x3 = $q->get();
$x3->count();
$x3->getFirst()->test();
$x3->getAll()[0]->test();
