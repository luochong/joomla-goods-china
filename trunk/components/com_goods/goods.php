<?php 
defined('_JEXEC') or die('Restricted access'); 

require_once( JPATH_COMPONENT.DS.'controller.php' );
require_once( JPATH_COMPONENT.DS.'views'.DS.'goods'.DS.'view.html.php' );

JTable::addIncludePath(JPATH_ADMINISTRATOR.DS.'components'.DS. 'com_goods'.DS.'tables'); 

$controller = new GoodsController(); 
$controller->execute( JRequest::getVar( 'task' ) ); 
$controller->redirect(); 

?> 
