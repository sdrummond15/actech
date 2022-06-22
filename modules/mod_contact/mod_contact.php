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
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base(true) . '/modules/mod_contact/assets/css/style.css');
$document->addScript(JURI::base(true) . '/modules/mod_contact/assets/js/script.js');

$phone1 = $params->get('phone1');
$phone2 = $params->get('phone2');
$phone3 = $params->get('phone3');
$email = $params->get('email');

require JModuleHelper::getLayoutPath('mod_contact', $params->get('layout', 'default'));