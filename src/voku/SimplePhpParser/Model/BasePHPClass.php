<?php

declare(strict_types=1);

namespace voku\SimplePhpParser\Model;

abstract class BasePHPClass extends BasePHPElement
{
    use PHPDocElement;

    /**
     * @var PHPMethod[]
     */
    public $methods = [];

    /**
     * @var PHPProperty[]
     */
    public $properties = [];

    /**
     * @var PHPConst[]
     */
    public $constants = [];
}
