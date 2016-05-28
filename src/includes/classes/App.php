<?php
declare (strict_types = 1);
namespace WebSharks\WpSharks\Skeleton\Classes;

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
 * App.
 *
 * @since 16xxxx Initial release.
 */
class App extends SCoreClasses\App
{
    /**
     * Version.
     *
     * @since 16xxxx
     *
     * @type string Version.
     */
    const VERSION = '160528.12337'; //v//

    /**
     * Constructor.
     *
     * @since 16xxxx Initial release.
     *
     * @param array $instance Instance args.
     */
    public function __construct(array $instance = [])
    {
        $instance_base = [
            '©di' => [
                '©default_rule' => [
                    'new_instances' => [
                    ],
                ],
            ],

            '©brand' => [
                '©text_domain' => '',
                '©slug'        => '',
                '©var'         => '',
                '©name'        => '',
                '©acronym'     => '',
                '©prefix'      => '',

                '§domain'      => '',
                '§domain_path' => '',
            ],

            '§default_options' => [],
            '§pro_option_keys' => [],

            '§conflicts' => [
                '§plugins' => [
                    /*
                        '[slug]'  => '[name]',
                    */
                ],
                '§themes' => [
                    /*
                        '[slug]'  => '[name]',
                    */
                ],
                '§deactivatable_plugins' => [
                    /*
                        '[slug]'  => '[name]',
                    */
                ],
            ],
            '§dependencies' => [
                '§plugins' => [
                    /*
                        '[slug]' => [
                            'name'        => '',
                            'url'         => '',
                            'archive_url' => '',
                            'in_wp'       => true,
                            'test'        => function(string $slug) {},

                            A test function is optional.
                            A successful test must return nothing.
                            A failed test must return an array with:
                                - `reason`      = One of: `needs-upgrade|needs-downgrade`.
                                - `min_version` = Min version, if `reason=needs-upgrade`.
                                - `max_version` = Max version, if `reason=needs-downgrade`.
                        ],
                    */
                ],
                '§themes' => [
                    /*
                        '[slug]' => [
                            'name'        => '',
                            'url'         => '',
                            'archive_url' => '',
                            'in_wp'       => true,
                            'test'        => function(string $slug) {},

                            A test function is optional.
                            A successful test must return nothing.
                            A failed test must return an array with:
                                - `reason`      = One of: `needs-upgrade|needs-downgrade`.
                                - `min_version` = Min version, if `reason=needs-upgrade`.
                                - `max_version` = Max version, if `reason=needs-downgrade`.
                        ],
                    */
                ],
                '§others' => [
                    /*
                        '[arbitrary key]' => [
                            'name'        => '', // Short plain-text name; i.e., '[name]' Required
                            'description' => '', // Brief rich-text description; i.e., It requires [description].
                            'test'        => function(string $key) {},

                            A test function is required.
                            A successful test must return nothing.
                            A failed test must return an array with:
                                - `how_to_resolve` = Brief rich-text description; i.e., → To resolve, [how_to_resolve].
                                - `cap_to_resolve` = Cap required to satisfy; e.g., `manage_options`.
                        ],
                    */
                ],
            ],

            '§notices' => [
                '§on_install' => function (array $installion_history) {
                    return [
                        'is_transient' => true,
                        'markup'       => sprintf(__('<strong>%1$s</strong> v%2$s installed successfully.', 'wp-sharks-skeleton'), esc_html($this->Config->©brand['©name']), esc_html($this::VERSION)),
                    ];
                },
            ],
        ];
        parent::__construct($instance_base, $instance);
    }

    /**
     * Early hook setup handler.
     *
     * @since 16xxxx Initial release.
     */
    protected function onSetupEarlyHooks()
    {
        parent::onSetupEarlyHooks();
    }

    /**
     * Other hook setup handler.
     *
     * @since 16xxxx Initial release.
     */
    protected function onSetupOtherHooks()
    {
        parent::onSetupOtherHooks();
    }
}
