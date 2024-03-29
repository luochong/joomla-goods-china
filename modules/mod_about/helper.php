<?php
/**
* @version		$Id: helper.php 14401 2010-01-26 14:10:00Z louis $
* @package		Joomla
* @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');



class modAboutHelper
{
	function getData()
	{
		//get database
		$db =& JFactory::getDBO();

		$query = 'SELECT introtext,id,images ' .
			' FROM #__content' .
			' WHERE id = "2"';
		$db->setQuery($query);
		$row = $db->loadObject();
		return $row;
	}
}
