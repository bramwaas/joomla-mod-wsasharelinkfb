<?php
/**
 *
 *
 * @package  mod_share_link_fb
 * @copyright Copyright (C) 2015 - 2018 AHC Waasdorp. All rights reserved.
 * @license GPL3
 * 20151110
 */
// no direct access
defined('_JEXEC') or die;
$doc = JFactory::getDocument();
include('params.php');


//add custom tags to head section
if ($slfbtitle > ' ') {$doc->addCustomTag( '<meta property="og:title" content="'.$slfbtitle.'"/>' );};

if ($slfbsitename > ' ') {$doc->addCustomTag( '<meta property="og:site_name" content="'.$slfbsitename.'"/>' );};

if ($slfbdescription > ' ') {$doc->addCustomTag( '<meta property="og:description" content="'.$slfbdescription.'"/>' );};

if ($slfbappid > ' ') {$doc->addCustomTag( '<meta property="fb:app_id" content="'.$slfbappid.'"/>' );};

if ($slfbadmins > ' ') {$doc->addCustomTag( '<meta property="fb:admins" content="'.$slfbadmins.'"/>' );};

if ($slfbtype > ' ') {$doc->addCustomTag( '<meta property="og:type" content="'.$slfbtype.'"/>' );};

if ($slfburl > ' ') {$doc->addCustomTag( '<meta property="og:url" content="'.$slfburl.'"/>' );};


if ($slfbimage > ' ')
{$output = '<meta property="og:image" content="'.$slfbimage.'"/>';

$posdot = strripos(  $slfbimage ,  '.' );

if ($posdot > 0)
{
$suffix = substr (  $slfbimage ,  $posdot);
if ($suffix == '.bmp')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/bmp" />';}
elseif ($suffix == '.gif')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/gif" />';}
elseif ($suffix == '.jpg')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/jpeg" />';}
elseif ($suffix == '.png')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/png" />';}
;
// end posdot > 0
};

if ($slfbwidth > ' ')
{$output = $output."\n\t".'<meta property="og:image:width" content="'.$slfbwidth.'"/>';}	
;
if ($slfbheight > ' ')
{$output = $output."\n\t".'<meta property="og:image:height" content="'.$slfbheight.'"/>';}	
;
$doc->addCustomTag( $output );
// end slfbimage > ' '
}
;
if ($slfbimage1 > ' ')
{$output = '<meta property="og:image" content="'.$slfbimage1.'"/>';

$posdot = strripos(  $slfbimage1 ,  '.' );

if ($posdot > 0)
{
$suffix = substr (  $slfbimage1 ,  $posdot);
if ($suffix == '.bmp')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/bmp" />';}
elseif ($suffix == '.gif')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/gif" />';}
elseif ($suffix == '.jpg')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/jpeg" />';}
elseif ($suffix == '.png')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/png" />';}
;
// end posdot > 0
};

if ($slfbwidth1 > ' ')
{$output = $output."\n\t".'<meta property="og:image:width" content="'.$slfbwidth1.'"/>';}	
;
if ($slfbheight1 > ' ')
{$output = $output."\n\t".'<meta property="og:image:height" content="'.$slfbheight1.'"/>';}	
;
$doc->addCustomTag( $output );
// end slfbimage > ' '
}
;
if ($slfbimage2 > ' ')
{$output = '<meta property="og:image" content="'.$slfbimage2.'"/>';

$posdot = strripos(  $slfbimage2 ,  '.' );

if ($posdot > 0)
{
$suffix = substr (  $slfbimage2 ,  $posdot);
if ($suffix == '.bmp')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/bmp" />';}
elseif ($suffix == '.gif')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/gif" />';}
elseif ($suffix == '.jpg')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/jpeg" />';}
elseif ($suffix == '.png')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/png" />';}
;
// end posdot > 0
};

if ($slfbwidth2 > ' ')
{$output = $output."\n\t".'<meta property="og:image:width" content="'.$slfbwidth2.'"/>';}	
;
if ($slfbheight2 > ' ')
{$output = $output."\n\t".'<meta property="og:image:height" content="'.$slfbheight2.'"/>';}	
;
$doc->addCustomTag( $output );
// end slfbimage > ' '
}
;
if ($slfbimage3 > ' ')
{$output = '<meta property="og:image" content="'.$slfbimage3.'"/>';

$posdot = strripos(  $slfbimage3 ,  '.' );

if ($posdot > 0)
{
$suffix = substr (  $slfbimage3 ,  $posdot);
if ($suffix == '.bmp')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/bmp" />';}
elseif ($suffix == '.gif')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/gif" />';}
elseif ($suffix == '.jpg')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/jpeg" />';}
elseif ($suffix == '.png')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/png" />';}
;
// end posdot > 0
};

if ($slfbwidth3 > ' ')
{$output = $output."\n\t".'<meta property="og:image:width" content="'.$slfbwidth3.'"/>';}	
;
if ($slfbheight3 > ' ')
{$output = $output."\n\t".'<meta property="og:image:height" content="'.$slfbheight3.'"/>';}	
;
$doc->addCustomTag( $output );
// end slfbimage > ' '
}
;
if ($slfbimage4 > ' ')
{$output = '<meta property="og:image" content="'.$slfbimage4.'"/>';

$posdot = strripos(  $slfbimage4 ,  '.' );

if ($posdot > 0)
{
$suffix = substr (  $slfbimage4 ,  $posdot);
if ($suffix == '.bmp')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/bmp" />';}
elseif ($suffix == '.gif')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/gif" />';}
elseif ($suffix == '.jpg')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/jpeg" />';}
elseif ($suffix == '.png')
    {$output = $output."\n\t".'<meta property="og:image:type" content="image/png" />';}
;
// end posdot > 0
};

if ($slfbwidth4 > ' ')
{$output = $output."\n\t".'<meta property="og:image:width" content="'.$slfbwidth4.'"/>';}	
;
if ($slfbheight4 > ' ')
{$output = $output."\n\t".'<meta property="og:image:height" content="'.$slfbheight4.'"/>';}	
;
$doc->addCustomTag( $output );
// end slfbimage > ' '
}
;
if ($scriptuse==1){$doc->addCustomTag( $script );}
;


?>
