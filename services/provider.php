<?php

/**
 * @package     sharelinkfb
 * @subpackage  mod_share_link_fb
 *
 * @copyright   Copyright (C) 2024 -2024 A.H.C. Waasdorp, All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Extension\Service\Provider\HelperFactory;
use Joomla\CMS\Extension\Service\Provider\Module;
use Joomla\CMS\Extension\Service\Provider\ModuleDispatcherFactory;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;

/**
 * The Share link facebook module service provider.
 *
 * @since  2.1.0
 */
return new class () implements ServiceProviderInterface {
    /**
     * Registers the service provider with a DI container.
     *
     * @param   Container  $container  The DI container.
     *
     * @return  void
     *
     * @since   2.1.0
     */
    public function register(Container $container)
    {
        $container->registerServiceProvider(new ModuleDispatcherFactory('\\WaasdorpSoekhan\\Module\\Sharelinkfb'));
        $container->registerServiceProvider(new HelperFactory('\\WaasdorpSoekhan\\Module\\Sharelinkfb\\Site\\Helper'));

        $container->registerServiceProvider(new Module());
    }
};
