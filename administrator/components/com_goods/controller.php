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
		//JRequest::setVar( 'hidemainmenu', 1 );
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
	    global $option;
	    // Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );

		$post	= JRequest::get('post');
		$cid	= JRequest::getVar( 'cid', array(0), 'post', 'array' );
		$post['id'] = (int) $cid[0];
		$post['intro'] = JRequest::getString('intro',null,'POST',JREQUEST_ALLOWHTML);
		
		$model = $this->getModel();
		
		if ($model->store($post)) {
			$msg = JText::_( '已经保存' );
		} else {
			$msg = JText::_( '保存出错了' ).': '.$model->getError(true);
		}
		
		$task = JRequest::getCmd('task');
		if ($task == 'save')
			$link = 'index.php?option='.$option;
		$this->setRedirect($link, $msg);
		
	}
	
    function remove()
	{
        $cid = $this->_getCid();
        global $option;
		$model = $this->getModel();
		$msg = '';
		if(!$model->delete($cid)) {
			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";
		}
		else 
		{
		    $msg = JText::_( '删除成功' );
		}

		$this->setRedirect( 'index.php?option='.$option,$msg);
	}

	
	function cancel()
	{
		// Check for request forgeries
		JRequest::checkToken() or jexit( 'Invalid Token' );
		global $option;
		$this->setRedirect( 'index.php?option='.$option );
	}
	
    function publish()
	{
		$cid = $this->_getCid();
	    global $option;
	   
		$model = $this->getModel();
		$msg = '';
		if(!$model->publish($cid, 1)) {
			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";
		}
		else 
		{
		    $msg = JText::_( '发布成功' );
		}
		$this->setRedirect( 'index.php?option='.$option,$msg );
	}
	
	function unpublish()
	{
	    $cid = $this->_getCid();
	    global $option;
	   
		$model = $this->getModel();
		$msg = '';
		if(!$model->publish($cid, 0)) {
			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";
		}
		else 
		{
		    $msg = JText::_( '操作成功' );
		}
		$this->setRedirect( 'index.php?option='.$option,$msg );
	}
	
	function _getCid()
	{
	     // Check for request forgeries
	    JRequest::checkToken() or jexit( 'Invalid Token' );

		$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
		JArrayHelper::toInteger($cid);

		if (count( $cid ) < 1) {
			JError::raiseError(500, JText::_( '请选择一个项目进行操作' ) );
		}
		return $cid;
	}
}
