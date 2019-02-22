<?php

namespace PuppetBridge\Location;

/**
 * Class Jobs
 *
 * @package PuppetBridge\Location
 * @author  M.Tuhin <tuhin@codesolz>
 * @license MIT https://github.com/microweber/screen/blob/master/LICENSE
 */
class Jobs extends Location
{

    /**
     * Jobs constructor.
     */
    public function __construct()
    {
        $defaultLocationPath = implode(DIRECTORY_SEPARATOR, array(dirname(__FILE__), '..', '..', 'jobs'));
        if (!is_dir($defaultLocationPath)) {
            mkdir($defaultLocationPath, 0755);
        }
        $this->setLocation($defaultLocationPath);
    }

    /**
     * Deletes all the job files
     */
    public function clean()
    {
        $jobFiles = glob($this->getLocation() . '*.js');
        foreach ($jobFiles as $file) {
            unlink($file);
        }
    }
}
