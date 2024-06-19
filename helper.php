<?php
/**
 *
 *
 * @package   mod_share_link_fb
 * @copyright Copyright (C) 2015 - 2024 AHC Waasdorp. All rights reserved.
 * @license GPL3

 *
 * 2.1.0 added helper.php for mod_simple_ical_block to accomodate simple Ajax/Rest in module or Joomla 3
*/  
// no direct access
defined('_JEXEC') or die ('Restricted access');
use WaasdorpSoekhan\Module\Simpleicalblock\Site\Helper\SimpleicalblockHelper; // as ModSimpleicalblockHelper;

/**
 * extension of SharelinkfbHelper to conform to com_ajax naming conventions
 *
 * @since  2.1.0
 */
// no direct access
defined('_JEXEC') or die;
use WaasdorpSoekhan\Module\Sharelinkfb\Site\Helper\SharelinkfbHelper;
class ModSharelinkfbHelper extends SharelinkfbHelper
{
    
}
