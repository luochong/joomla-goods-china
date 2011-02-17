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

$db =& JFactory::getDBO();

$query = 'SELECT name,market_price,shop_price,id,image ' .
	' FROM #__goods ' .
	' WHERE is_promotion = 1 AND published = 1 ' .
	' ORDER BY id DESC';
$db->setQuery($query, 0, 4);
$lists = $db->loadObjectList();

$className = array( 'r-margin b-margin', 'b-margin' , 'r-margin' , '');
?>

<div class="main-con">
    <div class="radius-t"><h1>最新活动</h1></div>
	<div class="mainpart">
	   <?php foreach($lists as $i => $list):?> 
	   <div class="category <?php echo $className[$i]?>">
		    <img src="<?php echo JURI::base() ?>/<?php echo $list->image ?>" alt=""/>
			<ul>
			    <li class="bold"><?php echo $list->name ?></li>
				<li class="prime-cost">原价:<?php echo $list->market_price ?>元;</li>
				<li class="now-cost">现价:<?php echo $list->shop_price ?>元;</li>
				<li>活动时间:01月20日-01月25日</li>
			</ul>
		</div>
		<?php endforeach;?>
        <div class="clear"></div>		
	</div>
	<div class="radius-b"></div>
</div>