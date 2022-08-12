<?php namespace Umaha\Scepter;

use Backend;
use System\Classes\PluginBase;

use Event;
use Mail;

/**
 * scepter Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'scepter',
            'description' => 'No description provided yet...',
            'author'      => 'umaha',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

        Event::listen('umaha.fa.registration.successful', function ($registrant) {

            // Send mail
            if ($registrant->email) {
                $vars = ['registrant' => $registrant];

                Mail::queue('umaha.fa.registration.successful', $vars, function($message) use ($registrant) {

                    $message->to($registrant->email);

                });
            }

        });

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Umaha\Scepter\Components\ScepterRegistration' => 'ScepterRegistration',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'umaha.scepter.some_permission' => [
                'tab' => 'scepter',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'scepter' => [
                'label'       => 'The Scepter',
                'url'         => Backend::url('umaha/scepter/scepterregistrations'),
                'icon'        => 'icon-bullseye',
                'permissions' => ['umaha.scepter.*'],
                'order'       => 500,
                'sideMenu'     => [
                    'scepter' => [
                        'label'       => 'Registrants',
                        'url'         => Backend::url('umaha/scepter/scepterregistrations'),
                        'icon'        => 'icon-users',
                        'permissions' => ['umaha.scepter.*'],
                        'order'       => 100,
                    ],
                    'paystack' => [
                        'label'       => 'Payments',
                        'url'         => Backend::url('umaha/scepter/paystacks'),
                        'icon'        => 'icon-money',
                        'permissions' => ['umaha.scepter.*'],
                        'order'       => 200,
                    ],
                    'mails' => [
						'label'       => 'Send Mails',
						'icon'        => 'icon-envelope',
						'url'         => Backend::url('umaha/scepter/mails'),
                        'permissions' => ['rainlab.users.access_groups'],
                        'order'       => 300,
                    ],
                ]
            ],
        ];
    }

    public function registerSettings() {
        return [
            'settings' => [
                'label'       => 'The Scepter',
                'description' => 'The Scepter settings',
                'category'    => 'Payments',
                'icon'        => 'icon-globe',
                'class'       => 'Umaha\Scepter\Models\Settings',
                // 'url'         => Backend::url('ovalsoft/payment/payments/'),
                'order'       => 500,
                'keywords'    => 'payment payment'
            ]
        ];
    }
}
