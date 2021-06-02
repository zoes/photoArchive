<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_photoarchive
 *
 * @copyright   Copyright (C) 2021 Zoe Slattery
 * @license     GNU General Public License version 3
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller prefixed by PhotoArchive
$controller = JControllerLegacy::getInstance('PhotoArchive');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
