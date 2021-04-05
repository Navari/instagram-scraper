<?php

namespace Navari\InstagramScrapper\Models;

use Navari\InstagramScrapper\Traits\ArrayLikeTrait;
use Navari\InstagramScrapper\Traits\InitializerTrait;

/**
 * Class AbstractModel
 * @package Navari\InstagramScrapper\Models
 */
abstract class AbstractModel implements \ArrayAccess
{
    use InitializerTrait, ArrayLikeTrait;

    /**
     * @var array
     */
    protected static $initPropertiesMap = [];

    /**
     * @return array
     */
    public static function getColumns(): array
    {
        return \array_keys(static::$initPropertiesMap);
    }
}