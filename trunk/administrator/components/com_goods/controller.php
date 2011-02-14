<?php
/**
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_1
 * @license    GNU/GPL
 */
 
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.application.component.controller');
 
/**
 * Hello World Component Controller
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class GoodsController extends JController
{
	
	function __construct($config = array())
	{
		parent::__construct($config);

		// Register Extra tasks
		$this->registerTask( 'add',  'display' );
		$this->registerTask( 'edit', 'display' );
		$this->registerTask( 'apply', 'save' );
	}

	function display( )
	{
		JRequest::setVar( 'hidemainmenu', 1 );
		switch($this->getTask())
		{
			case 'add'     :
			{
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'edit', false );					
			} break;
			case 'edit'    :
			{
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'edit', true );
			} break;
			default : {				
				JRequest::setVar( 'layout'  , 'default');
			}
		}	

		parent::display();
	}
	
	function save()
	{
		
	}
	
	
	function cancel()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		global $option;
		$this->setRedirect( 'index.php?option='.$option );
	}

	
 
}
