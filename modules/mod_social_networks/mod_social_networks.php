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
$document->addStyleSheet(JURI::base(true) . '/modules/mod_social_networks/assets/css/style.css');
$document->addScript(JURI::base(true) . '/modules/mod_social_networks/assets/js/script.js');

$facebook = $params->get('facebook');
$youtube = $params->get('youtube');
$instagram = $params->get('instagram');
$linkedin = $params->get('linkedin');
$twitter = $params->get('twitter');
$whatsapp = $params->get('whatsapp');
$whatsappNumber = modSocial_NetworksHelper::removeCharacters($whatsapp);
$whatsapp_msg = $params->get('whatsapp_msg');

require JModuleHelper::getLayoutPath('mod_social_networks', $params->get('layout', 'default'));