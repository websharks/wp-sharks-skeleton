<?php
/**
 * Menu page utils.
 *
 * @author @wpsharks
 * @copyright WP Sharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\Skeleton\Classes\Utils;

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
 * Menu page utils.
 *
 * @since $%v Initial release.
 */
class MenuPage extends SCoreClasses\SCore\Base\Core
{
    /**
     * On `admin_menu` hook.
     *
     * @since $%v Initial release.
     */
    public function onAdminMenu()
    {
        s::addMenuPageItem([
            'parent_page'   => 'options-general.php',
            'menu_title'    => $this->App->Config->©brand['©name'],
            'template_file' => 'admin/menu-pages/options/default.php',

            'tabs' => [
                'default' => sprintf(__('%1$s', 'wp-sharks-skeleton'), esc_html($this->App->Config->©brand['©name'])),
                'restore' => [
                    'label' => __('Restore Default Options', 'wp-sharks-skeleton'),
                    'url'   => s::restoreDefaultOptionsUrl(), 'onclick' => 'confirm',
                ],
            ],
        ]);
    }
}
