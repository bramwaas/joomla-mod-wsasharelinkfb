<?php
/**
 *
 * version $Id: mod_share_link_fb.php 2015-10-07 Ed $
 * @package   mod_share_link_fb
 * @copyright Copyright  (C) 2015 - 2018 Bram Waasdorp
 * @license GPL3
 * 2018-01-27 2.0.0 j3.8 Namespace en code optimalisaties
 */

// no direct access
defined('_JEXEC') or die;
use Joomla\CMS\HTML\ModuleHelper;
require_once dirname(__FILE__).'/helper.php';
require ModuleHelper::getLayoutPath('mod_share_link_fb', $params->get('layout', 'default'));
?>