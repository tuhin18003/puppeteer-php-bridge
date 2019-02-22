<?php

namespace PuppetBridge\Image;

use PuppetBridge\Image\Types\Jpg;
use PuppetBridge\Image\Types\Png;
use PuppetBridge\Image\Types\Type;

class Types
{
    protected static $typesMap = array(
        Jpg::FORMAT => 'PuppetBridge\Image\Types\Jpg',
        Png::FORMAT => 'PuppetBridge\Image\Types\Png',
    );

    /**
     * Returns all the available image types
     *
     * @return array
     */
    public static function available()
    {
        return array_keys(static::$typesMap);
    }

    /**
     * Check if an image type is available
     *
     * @param $type
     *
     * @return bool
     */
    public static function isAvailable($type)
    {
        return in_array(strtolower($type), static::available());
    }

    /**
     * Returns an instance of the requested image type
     *
     * @param string $type Image type
     *
     * @return Type
     * @throws \Exception
     */
    public static function getClass($type)
    {
        if (!static::isAvailable($type)) {
            throw new \Exception(
                "Invalid image format '{$type}'. " .
                "Allowed formats are: " . implode(', ', static::available())
            );
        }

        $className = static::$typesMap[strtolower($type)];

        return new $className();
    }
}
