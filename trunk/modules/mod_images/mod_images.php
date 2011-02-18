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

?>
<div class="banner">
    <div class="radius-t"><h1>企业品牌</h1></div>
	<div class="show-area">
	    <div class="picture screen">
		    <div class="info" id="info">
		        <div><a href="#nogo"><img src="/images/stories/<?php echo $params->get('image_name_1');?>" alt=""/></a></div>
		        <div><a href="#nogo"><img src="/images/stories/<?php echo $params->get('image_name_2');?>" alt=""/></a></div>
		        <div><a href="#nogo"><img src="/images/stories/<?php echo $params->get('image_name_3');?>" alt=""/></a></div>
			</div>
		</div>
		<div class="list">
			<ul class="pic-list" id="list">
				<li class="cur"><a href="#nogo"><img src="/images/stories/<?php echo $params->get('image_name_1');?>" alt=""/></a></li>
				<li><a href="#nogo"><img src="/images/stories/<?php echo $params->get('image_name_2');?>" alt=""/></a></li>
				<li><a href="#nogo"><img src="/images/stories/<?php echo $params->get('image_name_3');?>" alt=""/></a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
    <div class="radius-b"></div>				
</div>