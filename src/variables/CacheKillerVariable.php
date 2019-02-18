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
     public function cacheKill($publicFilePath)
     {
         $debugTrace = debug_backtrace();
         $initialCalledFile = count($debugTrace) ? $debugTrace[count($debugTrace) - 1]['file'] : __FILE__;
         $publicFolderPath = dirname($initialCalledFile);

         return $publicFilePath."?v=".filemtime($publicFolderPath.$publicFilePath);
     }
}
