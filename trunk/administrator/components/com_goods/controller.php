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
	
	function __construct()
	{
	    parent::__construct();
	 
	    // Register Extra tasks
	    $this->registerTask( 'add', 'edit' );
	}

	
	/**
     * Method to display the view
     *
     * @access    public
     */
    function display()
    {
        parent::display();
    }
    
    function add()
    {
    	
    }
    
    /**
	 * display the edit form
	 * @return void
	 */
	function edit()
	{
	    JRequest::setVar( 'view', 'hello' );
	    JRequest::setVar( 'layout', 'form' );
	    JRequest::setVar( 'hidemainmenu', 1 );
	 
	    parent::display();
	}

 
}
