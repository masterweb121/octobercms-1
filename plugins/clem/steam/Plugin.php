<?php namespace Clem\Steam;

/**
 * Uses the Steam API to build components.
 */
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Clem\'s Steam Api Components',
            'description' => 'Creates components that uses Steam\'s API.',
            'author'      => 'Clem Davies',
            'icon'        => 'icon-gamepad'
        ];
    }
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Steam Api Settings',
                'description' => 'Manage Steam Api settings.',
                'category'    => 'Plugins',
                'icon'        => 'icon-gamepad',
                'class'       => 'Clem\Steam\Models\Settings',
                'order'       => 100
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            '\Clem\Steam\Components\RecentlyPlayed' => 'steamrecentlyplayed'
        ];
    }

}