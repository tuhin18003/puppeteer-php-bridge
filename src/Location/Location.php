<?php

namespace PuppetBridge\Location;

/**
 * Class Location
 *
 * @package PuppetBridge\Location
 * @author  M.Tuhin <tuhin@codesolz>
 * @license MIT https://github.com/microweber/screen/blob/master/LICENSE
 */
abstract class Location
{
    /**
     * Directory Path
     *
     * @var string
     */
    protected $location = '';


    /**
     * Sets the files location
     *
     * @param string $path Path to store the files
     *
     * @throws \Exception If the location does not exist
     *
     * @return void
     */
    public function setLocation($locationPath)
    {
        $locationPath = realpath($locationPath);
        if (!$locationPath || !is_dir($locationPath)) {
            throw new \Exception("The directory '$locationPath' does not exist.");
        }

        $this->location = $locationPath . DIRECTORY_SEPARATOR;
    }

    /**
     * Returns the location path
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
}
