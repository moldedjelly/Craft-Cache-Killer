<?php
/**
 * Craft Cache Killer plugin for Craft CMS 3.x
 *
 * A simple cache busting plugin which uses the file's modified time as a query string to force latest version to be loaded.
 *
 * @link      http://moldedjelly.com
 * @copyright Copyright (c) 2019 Mat Johnson
 */

namespace moldedjelly\cachekiller\variables;

use moldedjelly\cachekiller\CacheKiller;

use Craft;

/**
 * @author    Mat Johnson
 * @package   CacheKiller
 * @since     1.0.0
 */
class CacheKillerVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
