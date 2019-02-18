<?php
/**
 * Craft Cache Killer plugin for Craft CMS 3.x
 *
 * A simple cache busting plugin which uses the file's modified time as a query string to force latest version to be loaded.
 *
 * @link      http://moldedjelly.com
 * @copyright Copyright (c) 2019 Mat Johnson
 */

namespace moldedjelly\cachekiller\services;

use moldedjelly\cachekiller\CacheKiller;

use Craft;
use craft\base\Component;

/**
 * @author    Mat Johnson
 * @package   CacheKiller
 * @since     1.0.0
 */
class CacheKillerService extends Component
{
    // Public Methods
    // =========================================================================

    /*
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
