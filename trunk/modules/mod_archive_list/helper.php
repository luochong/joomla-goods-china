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



class modArchiveListHelper
{
	function getList(&$params,$id)
	{
		//get database
		$db =& JFactory::getDBO();

		$query = 'SELECT a.id as id ,a.title as title,c.title as category  ' .
			' FROM #__content as a,#__content_frontpage as b,#__categories as c  ' .
			' WHERE ( c.id = a.catid AND b.content_id = a.id AND state = 1 AND sectionid != 0 AND catid = '.$id.'  )' .
			' ORDER BY b.ordering ';
		$db->setQuery($query, 0, intval($params->get('count')));
		$lists = $db->loadObjectList();
		return $lists;
	}
}
