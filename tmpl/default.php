<?php
/**
 * @package  mod_share_link_fb
 * @copyright Copyright (C) 2015 - 2018 AHC Waasdorp. All rights reserved.
 * @license GPL3
 * 20151110
 * 2018-01-27 2.0.0 j3.8 Namespace en code optimalisaties
 * 	Starting from Joomla 3.6 you can add 'property' attribute using setMetaData
 * 	$doc = JFactory::getDocument();
 * 	$doc->setMetaData('og:image', 'https://cdn.joomla.org/images/Joomla_logo.png', 'property');
 * 	Reference : https://github.com/joomla/joomla-cms/pull/10682
 */
// no direct access
defined ( '_JEXEC' ) or die ();
use Joomla\CMS\Factory;
require ('params.php');

$doc = Factory::getDocument ();

// add meta properties and custom tags to head section
if ($slfbtitle > ' ') {
	$doc->setMetaData ( 'og:title', $slfbtitle, 'property' );
}
;
if ($slfbsitename > ' ') {
	$doc->setMetaData ( 'og:site_name', $slfbsitename, 'property' );
}
;
if ($slfbdescription > ' ') {
	$doc->setMetaData ( 'og:description', $slfbdescription, 'property' );
}
;
if ($slfbappid > ' ') {
	$doc->setMetaData ( 'fb:app_id', $slfbappid, 'property' );
}
;
if ($slfbadmins > ' ') {
	$doc->setMetaData ( 'fb:admins', $slfbadmins, 'property' );
}
;
if ($slfbtype > ' ') {
	$doc->setMetaData ( 'og:type', $slfbtype, 'property' );
}
;
if ($slfburl > ' ') {
	$doc->setMetaData ( 'og:url', $slfburl, 'property' );
}
;

// image (0) and attributes
if ($slfbimage > ' ') {
	$doc->setMetaData ( 'og:image', $slfbimage, 'property' );
	$posdot = strripos ( $slfbimage, '.' );
	
	if ($posdot > 0) {
		$suffix = strtolower ( substr ( $slfbimage, $posdot + 1 ) );
		if ($suffix == 'jpg')
			$doc->setMetaData ( 'og:image:type', 'image/jpeg', 'property' );
		elseif ($suffix > ' ')
			$doc->setMetaData ( 'og:image:type', 'image/' . $suffix, 'property' );
		// end posdot > 0
	}
	if ($slfbwidth > ' ')
		$doc->setMetaData ( 'og:image:width', $slfbwidth, 'property' );
	if ($slfbheight > ' ')
		$doc->setMetaData ( 'og:image:height', $slfbheight, 'property' );
	// end slfbimage > ' '
}
// volgende kunnen niet met setMetadata, omdat Joomla de properties ontdubbelt
if ($slfbwidth2 > ' ') {
	$output = '<meta property="og:image" content="' . $slfbimage1 . '"/>';
	$posdot = strripos ( $slfbimage1, '.' );
	if ($posdot > 0) {
		$suffix = strtolower ( substr ( $slfbimage1, $posdot + 1 ) );
		if ($suffix == 'jpg')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/jpeg" />';
		elseif ($suffix > ' ')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/' . $suffix . '" />';
		// end posdot > 0
	}
	if ($slfbwidth1 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:width" content="' . $slfbwidth1 . '"/>';
	if ($slfbheight1 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:height" content="' . $slfbheight1 . '"/>';
	$doc->addCustomTag ( $output );
	// end slfbimage > ' '
}

if ($slfbimage2 > ' ') {
	$output = '<meta property="og:image" content="' . $slfbimage2 . '"/>';
	$posdot = strripos ( $slfbimage2, '.' );
	if ($posdot > 0) {
		$suffix = strtolower ( substr ( $slfbimage2, $posdot + 1 ) );
		if ($suffix == 'jpg')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/jpeg" />';
		elseif ($suffix > ' ')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/' . $suffix . '" />';
		// end posdot > 0
	}
	if ($slfbwidth1 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:width" content="' . $slfbwidth2 . '"/>';
	if ($slfbheight2 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:height" content="' . $slfbheight2 . '"/>';
	$doc->addCustomTag ( $output );
	// end slfbimage > ' '
}

if ($slfbimage3 > ' ') {
	$output = '<meta property="og:image" content="' . $slfbimage3 . '"/>';
	$posdot = strripos ( $slfbimage3, '.' );
	if ($posdot > 0) {
		$suffix = strtolower ( substr ( $slfbimage3, $posdot + 1 ) );
		if ($suffix == 'jpg')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/jpeg" />';
		elseif ($suffix > ' ')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/' . $suffix . '" />';
		// end posdot > 0
	}
	if ($slfbwidth3 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:width" content="' . $slfbwidth3 . '"/>';
	if ($slfbheight3 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:height" content="' . $slfbheight3 . '"/>';
	$doc->addCustomTag ( $output );
	// end slfbimage > ' '
}

if ($slfbimage4 > ' ') {
	$output = '<meta property="og:image" content="' . $slfbimage4 . '"/>';
	$posdot = strripos ( $slfbimage4, '.' );
	if ($posdot > 0) {
		$suffix = strtolower ( substr ( $slfbimage4, $posdot + 1 ) );
		if ($suffix == 'jpg')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/jpeg" />';
		elseif ($suffix > ' ')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/' . $suffix . '" />';
		// end posdot > 0
	}
	if ($slfbwidth4 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:width" content="' . $slfbwidth4 . '"/>';
	if ($slfbheight4 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:height" content="' . $slfbheight4 . '"/>';
	$doc->addCustomTag ( $output );
	// end slfbimage > ' '
}

if ($slfbimage5 > ' ') {
	$output = '<meta property="og:image" content="' . $slfbimage5 . '"/>';
	$posdot = strripos ( $slfbimage5, '.' );
	if ($posdot > 0) {
		$suffix = strtolower ( substr ( $slfbimage5, $posdot + 1 ) );
		if ($suffix == 'jpg')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/jpeg" />';
		elseif ($suffix > ' ')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/' . $suffix . '" />';
		// end posdot > 0
	}
	if ($slfbwidth5 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:width" content="' . $slfbwidth5 . '"/>';
	if ($slfbheight5 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:height" content="' . $slfbheight5 . '"/>';
	$doc->addCustomTag ( $output );
	// end slfbimage > ' '
}

if ($slfbimage6 > ' ') {
	$output = '<meta property="og:image" content="' . $slfbimage6 . '"/>';
	$posdot = strripos ( $slfbimage6, '.' );
	if ($posdot > 0) {
		$suffix = strtolower ( substr ( $slfbimage6, $posdot + 1 ) );
		if ($suffix == 'jpg')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/jpeg" />';
		elseif ($suffix > ' ')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/' . $suffix . '" />';
		// end posdot > 0
	}
	if ($slfbwidth6 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:width" content="' . $slfbwidth6 . '"/>';
	if ($slfbheight6 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:height" content="' . $slfbheight6 . '"/>';
	$doc->addCustomTag ( $output );
	// end slfbimage > ' '
}

if ($slfbimage7 > ' ') {
	$output = '<meta property="og:image" content="' . $slfbimage7 . '"/>';
	$posdot = strripos ( $slfbimage7, '.' );
	if ($posdot > 0) {
		$suffix = strtolower ( substr ( $slfbimage7, $posdot + 1 ) );
		if ($suffix == 'jpg')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/jpeg" />';
		elseif ($suffix > ' ')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/' . $suffix . '" />';
		// end posdot > 0
	}
	if ($slfbwidth7 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:width" content="' . $slfbwidth7 . '"/>';
	if ($slfbheight7 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:height" content="' . $slfbheight7 . '"/>';
	$doc->addCustomTag ( $output );
	// end slfbimage > ' '
}

if ($slfbimage8 > ' ') {
	$output = '<meta property="og:image" content="' . $slfbimage8 . '"/>';
	$posdot = strripos ( $slfbimage8, '.' );
	if ($posdot > 0) {
		$suffix = strtolower ( substr ( $slfbimage8, $posdot + 1 ) );
		if ($suffix == 'jpg')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/jpeg" />';
		elseif ($suffix > ' ')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/' . $suffix . '" />';
		// end posdot > 0
	}
	if ($slfbwidth8 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:width" content="' . $slfbwidth8 . '"/>';
	if ($slfbheight8 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:height" content="' . $slfbheight8 . '"/>';
	$doc->addCustomTag ( $output );
	// end slfbimage > ' '
}

if ($slfbimage9 > ' ') {
	$output = '<meta property="og:image" content="' . $slfbimage9 . '"/>';
	$posdot = strripos ( $slfbimage9, '.' );
	if ($posdot > 0) {
		$suffix = strtolower ( substr ( $slfbimage9, $posdot + 1 ) );
		if ($suffix == 'jpg')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/jpeg" />';
		elseif ($suffix > ' ')
			$output = $output . "\n\t" . '<meta property="og:image:type" content="image/' . $suffix . '" />';
		// end posdot > 0
	}
	if ($slfbwidth9 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:width" content="' . $slfbwidth9 . '"/>';
	if ($slfbheight9 > ' ')
		$output = $output . "\n\t" . '<meta property="og:image:height" content="' . $slfbheight9 . '"/>';
	$doc->addCustomTag ( $output );
	// end slfbimage > ' '
}

if ($scriptuse == 1) {
	$doc->addCustomTag ( $script );
}
;

?>

