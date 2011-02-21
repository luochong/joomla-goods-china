<?php
/**
* @version		$Id: mod_title.php 14401 2010-01-26 14:10:00Z louis $
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
defined( '_JEXEC' ) or die( 'Restricted access' );

//get database
$db =& JFactory::getDBO();

$query = 'SELECT  id ,title , introtext ' .
	' FROM #__content as a,#__content_frontpage as b  '.
	' WHERE ( b.content_id = a.id AND state = 1 AND sectionid != 0 AND catid = 6  )' .
	' ORDER BY b.ordering ';
$db->setQuery($query, 0, 3);
$lists = $db->loadObjectList();
?>

<div class="main-con">
    <div class="radius-t"><h1>设计风格</h1></div>
	<div class="mainpart">
	   <?php foreach($lists as $i => $list):
	   ?>
		<div class="designstyle <?php echo $i == (count($lists)-1) ? 'margin-b':''?>">
			<?php $a = array();
			if(!preg_match('#<img (.*?) />#',$list->introtext,$a))
			{
			    $a[0] = '<img src="/images/stories/nopic.jpg" />';
			}
			
			preg_match('#src=[\'|"](.*?)[\'|"]#',$a[0],$a);
			?>
			<img <?php echo $a[0]?> width="138" height="108" alt="<?php echo $list->title?>" />
			<ul>
				<li class="bold"><a href="index.php/design/<?php echo $list->id?>"><?php  echo $list->title?></a></li>
				<li><?php echo mb_substr(strip_tags( $list->introtext ), 0, 100, 'UTF-8'); ?>......</li>
				<li class="more"><a href="index.php/design/<?php echo $list->id?>">了解更多<<</a></li>
			</ul>
		</div>
		<?php endforeach;?>
		<div class="clear"></div>
    </div>
    <div class="radius-b"></div>						
</div>