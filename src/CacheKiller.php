<?php
/**
 * Craft Cache Killer plugin for Craft CMS 3.x
 *
 * A simple cache busting plugin which uses the file's modified time as a query string to force latest version to be loaded.
 *
 * @link      http://moldedjelly.com
 * @copyright Copyright (c) 2019 Mat Johnson
 */

namespace moldedjelly\cachekiller;

use moldedjelly\cachekiller\services\CacheKillerService;
use moldedjelly\cachekiller\variables\CacheKillerVariable;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;

/**
 * Class CacheKiller
 *
 * @author    Mat Johnson
 * @package   CacheKiller
 * @since     1.0.0
 *
 * @property  CacheKillerService $cacheKillerService
 */
class CacheKiller extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var CacheKiller
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('cacheKiller', CacheKillerVariable::class);
            }
        );

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'cache-killer',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
