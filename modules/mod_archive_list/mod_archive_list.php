<?php
/**
* @version		$Id: mod_archive.php 14401 2010-01-26 14:10:00Z louis $
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

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

$params->def('count', 5);
$lists_1 = modArchiveListHelper::getList($params,7); //企业动态
$lists_2 = modArchiveListHelper::getList($params,8); //行业资讯
$lists_3 = modArchiveListHelper::getList($params,9); //商家招聘

require(JModuleHelper::getLayoutPath('mod_archive_list'));