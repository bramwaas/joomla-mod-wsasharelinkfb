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

$slfbimage5=$params->get('slfbimage5');
if (substr( $slfbimage5, 0, 6 ) === "images" ) {$slfbimage5  = $root . $slfbimage5; };
$slfbwidth5=$params->get('slfbwidth5');
$slfbheight5=$params->get('slfbheight5');
$slfbimage6=$params->get('slfbimage6');
if (substr( $slfbimage6, 0, 6 ) === "images" ) {$slfbimage6 = $root . $slfbimage6;};
$slfbwidth6=$params->get('slfbwidth6');
$slfbheight6=$params->get('slfbheight6');
$slfbimage7=$params->get('slfbimage7');
if (substr( $slfbimage7, 0, 6 ) === "images" ) {$slfbimage7 = $root . $slfbimage7;};
$slfbwidth7=$params->get('slfbwidth7');
$slfbheight7=$params->get('slfbheight7');
$slfbimage8=$params->get('slfbimage8');
if (substr( $slfbimage8, 0, 6 ) === "images" ) {$slfbimage8 = $root . $slfbimage8;};
$slfbwidth8=$params->get('slfbwidth8');
$slfbheight8=$params->get('slfbheight8');
$slfbimage9=$params->get('slfbimage9');
if (substr( $slfbimage9, 0, 6 ) === "images" ) {$slfbimage9 = $root . $slfbimage9;};
$slfbwidth9=$params->get('slfbwidth9');
$slfbheight9=$params->get('slfbheight9');

$script=$params->get('script');
$scriptuse=$params->get('scriptuse');

?>
