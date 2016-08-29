<?php
/**
 * Template.
 *
 * @author @wpsharks
 * @copyright WP Sharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\Skeleton;

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

$Form = $this->s::menuPageForm('§save-options');
?>
<?= $Form->openTag(); ?>

    <?= $Form->openTable(
        __('General Options', 'wp-sharks-skeleton'),
        sprintf(__('You can browse our <a href="%1$s" target="_blank">knowledge base</a> to learn more about these options.', 'wp-sharks-skeleton'), esc_url(s::brandUrl('/kb')))
    ); ?>

        <?= $Form->inputRow([
            'type'  => 'text',
            'label' => __('Option label.', 'wp-sharks-skeleton'),
            'tip'   => __('Here is a tip.', 'wp-sharks-skeleton'),
            'note'  => sprintf(__('To learn more, see: <a href="%1$s" target="_blank">example KB article</a>.', 'wp-sharks-skeleton'), esc_url(s::brandUrl('/kb-article/example'))),

            'name'  => 'option_name',
            'value' => s::getOption('option_name'),
        ]); ?>

    <?= $Form->closeTable(); ?>

    <?= $Form->submitButton(); ?>
<?= $Form->closeTag(); ?>
