<?php
/**
 * This file is part of the Smarty package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please views the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Load and register Smarty Autoloader
 */
if (!class_exists('Smarty_Autoloader')) {
    include dirname(__FILE__) . '/Autoloader.php';
}
Smarty_Autoloader::register(true);
