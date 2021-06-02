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

/**
 * HTML View class for the PhotoArchive Component
 *
 * @since  0.0.1
 */
class PhotoArchiveViewPhotoArchive extends JViewLegacy
{
	/**
	 * Display the Photo Archive  view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = 'Photo Archive';

		// Display the view
		parent::display($tpl);
	}
}
