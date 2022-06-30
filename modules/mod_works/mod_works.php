<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_representadas
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';
$app = JFactory::getApplication();

$button = $params->get('button');
$icon = $params->get('icon');
$menu = $params->get('menu');

require JModuleHelper::getLayoutPath('mod_works', $params->get('layout', 'default'));

$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base(true) . '/modules/mod_works/assets/css/style_works.css');
