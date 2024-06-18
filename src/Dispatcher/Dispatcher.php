<?php

/**
 * @package     sharelinkfb
 * @subpackage  mod_share_link_fb
 *
 * @copyright   Copyright (C) 2022 -2024 A.H.C. Waasdorp, All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace WaasdorpSoekhan\Module\Sharelinkfb\Site\Dispatcher;

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\CMS\Helper\HelperFactoryAwareInterface;
use Joomla\CMS\Helper\HelperFactoryAwareTrait;
use Joomla\CMS\Language\Text;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Dispatcher class for mod_share_link_fb
 *
 * @since  2.1.0
 */
class Dispatcher extends AbstractModuleDispatcher implements HelperFactoryAwareInterface
{
    use HelperFactoryAwareTrait;

    /**
     * Returns the layout data.
     * elements of $data will be extracted to variables (with key as name) before layout template is included. 
     * So these variables are available for the layout templates
     * (from parent 'module', app', 'input', 'params', 'template')
     *
     * @return  array
     *
     * @since   2.1.0
     */
/*  no extra code to parent   
 * protected function getLayoutData()
    {
        $data = parent::getLayoutData();

        return $data;
    }
*/
}
