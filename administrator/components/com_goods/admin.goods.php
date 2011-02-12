<?php 


/**
 * @package    Joomla.Tutorials
 * @subpackage Components
 * components/com_hello/hello.php
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_1
 * @license    GNU/GPL
*/
 
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
// Require the base controller
 
require_once( JPATH_COMPONENT.DS.'controller.php' );
 
// Require specific controller if requested
if($controller = JRequest::getWord('controller')) {
    $path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';
    if (file_exists($path)) {
        require_once $path;
    } else {
        $controller = '';
    }
}
 
// Create the controller
$classname    = 'GoodsController'.$controller;
$controller   = new $classname( );
 
// Perform the Request task
$controller->execute( JRequest::getWord( 'task' ) );
 
// Redirect if set by the controller
$controller->redirect();

/*
defined( '_JEXEC' ) or die( 'Restricted access' ); 
JTable::addIncludePath(JPATH_COMPONENT.DS.'tables'); 

require_once( JApplicationHelper::getPath( 'admin_html' ) ); 

require_once( JPATH_COMPONENT.DS.'controller.php' ); 

JTable::addIncludePath(JPATH_COMPONENT.DS.'tables'); 

$controller = new ReviewController( array('default_task' => 'showReviews') ); 
$controller->execute( JRequest::getVar( 'task' ) ); 
$controller->redirect(); 

$row =& JTable::getInstance('goods', 'Table');
$row->goods_sn = 'key-0012'.uniqid();
$row->goods_name = '湖南信息港';
$row->market_price = '20';
$row->shop_price   = '10';


if (!$row->store()) { 
	echo "<script> alert(\"".$row->getError()."\"); window.history.go(-1); </script>\n"; 
	exit(); 
}
*/


?>