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

//Collect Parameters

$root=JURI::root();
$slfbtitle=$params->get('slfbtitle');
$slfbsitename=$params->get('slfbsitename');
$slfbdescription=$params->get('slfbdescription');
$slfbappid=$params->get('slfbappid');
$slfbadmins=$params->get('slfbadmins');
$slfbtype=$params->get('slfbtype');
$slfburl=$params->get('slfburl');
if ($slfburl == ''){$slfburl = JURI::getInstance()->toString();};

$slfbimage=$params->get('slfbimage');
if (substr( $slfbimage, 0, 6 ) === "images" ) {$slfbimage  = $root . $slfbimage; };
$slfbwidth=$params->get('slfbwidth');
$slfbheight=$params->get('slfbheight');
$slfbimage1=$params->get('slfbimage1');
if (substr( $slfbimage1, 0, 6 ) === "images" ) {$slfbimage1 = $root . $slfbimage1;};
$slfbwidth1=$params->get('slfbwidth1');
$slfbheight1=$params->get('slfbheight1');
$slfbimage2=$params->get('slfbimage2');
if (substr( $slfbimage2, 0, 6 ) === "images" ) {$slfbimage2 = $root . $slfbimage2;};
$slfbwidth2=$params->get('slfbwidth2');
$slfbheight2=$params->get('slfbheight2');
$slfbimage3=$params->get('slfbimage3');
if (substr( $slfbimage3, 0, 6 ) === "images" ) {$slfbimage3 = $root . $slfbimage3;};
$slfbwidth3=$params->get('slfbwidth3');
$slfbheight3=$params->get('slfbheight3');
$slfbimage4=$params->get('slfbimage4');
if (substr( $slfbimage4, 0, 6 ) === "images" ) {$slfbimage4 = $root . $slfbimage4;};
$slfbwidth4=$params->get('slfbwidth4');
$slfbheight4=$params->get('slfbheight4');

$script=$params->get('script');
$scriptuse=$params->get('scriptuse');

?>