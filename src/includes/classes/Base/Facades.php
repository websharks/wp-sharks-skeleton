<?php
/**
 * Facades.
 *
 * @author @wpsharks
 * @copyright WP Sharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\Skeleton\Classes\Base;

use WebSharks\WpSharks\Skeleton\Classes;
use WebSharks\WpSharks\Skeleton\Interfaces;
use WebSharks\WpSharks\Skeleton\Traits;
#
use WebSharks\WpSharks\Skeleton\Classes\AppFacades as a;
use WebSharks\WpSharks\Skeleton\Classes\SCoreFacades as s;
use WebSharks\WpSharks\Skeleton\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use function assert as debug;
use function get_defined_vars as vars;

/**
 * Facades.
 *
 * @since $%v
 */
abstract class Facades
{
    use Traits\Facades\Foo;
}
