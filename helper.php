<?php
/**
 *
 *
 * @package   mod_share_link_fb
 * @copyright Copyright (C) 2015 - 2018 AHC Waasdorp. All rights reserved.
 * @license GPL3
 */

// no direct access
defined('_JEXEC') or die;
class modshare_link_fbHelper
{
function phpprocessbm($pcode,$modno,$fname){
		$fcontent="<?php defined('_JEXEC') or die; ".$pcode." ?>";
		if(file_get_contents($fname)!==$fcontent){
		  file_put_contents($fname,$fcontent );
        }
    return $fname;}
}
?>