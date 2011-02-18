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
$id = intval(JRequest::getVar('id'));
$db =& JFactory::getDBO();

$query = 'SELECT * ' .
	' FROM #__goods ' .
	' WHERE is_promotion = 1 AND published = 1 AND id = '.$id.' '.
	' ORDER BY id DESC';
$db->setQuery($query);
$list = $db->loadObject();
?>

<div class="main-article">				

<h2 class="contentheading">
			商品名称: <?php echo $list->name?>	</h2>
<div style="text-align:center">
<img src="<?php echo $list->image?>" align="center" />
</div>
<div class="article-tools">
	<div class="article-meta" style="text-align:right;">
			<s>原价：100元</s> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>

		<div class="buttonheading">
			<font color="Red">现价：200元	</font>				
		</div>
	
</div>


<div class="article-content">
<?php echo $list->intro;?>
</div>

	

<span class="article_separator">&nbsp;</span>
</div>