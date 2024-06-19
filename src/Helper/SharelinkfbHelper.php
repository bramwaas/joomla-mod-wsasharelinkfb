<?php
/**
 * @version $Id: SharelinkfbHelper.php 
 * @package Sharelinkfb
 * @subpackage Sharelinkfb Module
 * @copyright Copyright (C) 2015 -2024 A.H.C. Waasdorp, All rights reserved.
 * @license GNU General Public License version 3 or later
 * @author url: https://www.waasdorpsoekhan.nl
 * @author email contact@waasdorpsoekhan.nl
 * @developer A.H.C. Waasdorp
 *
 *
 * Sharelinkfb is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Sharelinkfb is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * 2.1.0 use serviceprovider model for module 
 */
namespace WaasdorpSoekhan\Module\Sharelinkfb\Site\Helper;

// no direct access
defined('_JEXEC') or die('Restricted access');


/**
 * Helper for mod_sharelinkfb
 *
 * @since 2.1.0
 */
class SharelinkfbHelper
{

    function phpprocessbm($pcode, $modno, $fname)
    {
        $fcontent = "<?php defined('_JEXEC') or die; " . $pcode . " ?>";
        if (file_get_contents($fname) !== $fcontent) {
            file_put_contents($fname, $fcontent);
        }
        return $fname;
    }
}
