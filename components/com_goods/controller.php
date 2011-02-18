<?php 
defined( '_JEXEC' ) or die( 'Restricted access' ); 

jimport( 'joomla.application.component.controller' ); 

class GoodsController extends JController 
{
	function display() 
	{ 
//		$document =& JFactory::getDocument(); 
//		$viewName = JRequest::getVar('view', 'all'); 
//		$viewType = $document->getType(); 
//		$view = &$this->getView($viewName, $viewType, 'View'); 
//		$model =& $this->getModel( $viewName, 'ModelReviews' ); 
//
//		if (!JError::isError( $model )) { 
//			$view->setModel( $model, true ); 
//		}
        $view = &$this->getView();
		$view->setLayout(JRequest::getVar('layout', 'default') ); 
		$view->display(); 
	}

	

} 
?>