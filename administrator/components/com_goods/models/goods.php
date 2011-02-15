<?php
/**
 * Hello Model for Hello World Component
 * 
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_2
 * @license    GNU/GPL
 */
 
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport( 'joomla.application.component.model' );
 
/**
 * Hello Model
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class GoodsModelGoods extends JModel
{
    
    private $_items = array();
    private $_item  = array();
    private $_id    =  0;

    function __construct()
	{
		parent::__construct();
		$array  = JRequest::getVar('cid', array(0), '', 'array');
		$edit	= JRequest::getVar('edit',true);
		if($edit)
			$this->_id = (int)$array[0];
	}
    
    
    /**
    * Gets the greeting
    * @return string The greeting to be displayed to the user
    */
    function getGreeting()
    {
        return 'Hello, World!';
    }
	
	/**
	 * Retrieves the hello data
	 * @return array Array of objects containing the data from the database
	 */
	function getItems()
	{
	    // Lets load the data if it doesn't already exist
	    if (empty( $this->_items ))
	    {
	         $query = 'SELECT w.*, cc.title AS category,'.
					' cc.published AS cat_pub, cc.access AS cat_access'.
					' FROM #__goods AS w' .
					' LEFT JOIN #__categories AS cc ON cc.id = w.catid';
	        $this->_items = $this->_getList( $query );
	    }
	 
	    return $this->_items;
	}
	
	function getItem()
	{
	    if (empty( $this->_item ))
	    {
            if($this->_id == 0)
            {
                $this->_item = $this->getTable();
            }
	        else 
	        {
        	    $query = 'SELECT w.*, cc.title AS category,'.
					' cc.published AS cat_pub, cc.access AS cat_access'.
					' FROM #__goods AS w' .
					' LEFT JOIN #__categories AS cc ON cc.id = w.catid' .
					' WHERE w.id = '.(int) $this->_id;       
        	           
        	    $this->_db->setQuery($query);
        		$this->_item = $this->_db->loadObject();
	        }
	    }
	    return $this->_item;
	}
	
	function store($data)
	{
	    $row =& $this->getTable();

		// Bind the form fields to the web link table
		if (!$row->bind($data)) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}

//		 if new item, order last in appropriate group
//		if (!$row->id) {
//			$where = 'catid = ' . (int) $row->catid ;
//			$row->ordering = $row->getNextOrder( $where );
//		}

		// Make sure the web link table is valid
		if (!$row->check()) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}

		// Store the web link table to the database
		if (!$row->store()) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}
		$this->_id = $row->id;

		return true;
	}
	
	
	
	/**
	 * Method to remove a item
	 *
	 * @access	public
	 * @return	boolean	True on success
	 */
	function delete($cid = array())
	{
		$result = false;
		if (count( $cid ))
		{
			JArrayHelper::toInteger($cid);
			$cids = implode( ',', $cid );
			$query = 'DELETE FROM #__goods'
				. ' WHERE id IN ( '.$cids.' )';
			$this->_db->setQuery( $query );
			if(!$this->_db->query()) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
		}
		return true;
	}
	
	function publish($cid = array(), $publish = 1)
	{
		if (count( $cid ))
		{
			JArrayHelper::toInteger($cid);
			$cids = implode( ',', $cid );

			$query = 'UPDATE #__goods'
				. ' SET published = '.(int) $publish
				. ' WHERE id IN ( '.$cids.' )'
			;
			$this->_db->setQuery( $query );
			if (!$this->_db->query()) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
		}
		return true;
	}
	
	function promotion($cid = array(), $promotion = 1)
	{
	    if (count( $cid ))
		{
			JArrayHelper::toInteger($cid);
			$cids = implode( ',', $cid );

			$query = 'UPDATE #__goods'
				. ' SET is_promotion = '.(int) $promotion
				. ' WHERE id IN ( '.$cids.' )'
			;
			$this->_db->setQuery( $query );
			if (!$this->_db->query()) {
				$this->setError($this->_db->getErrorMsg());
				return false;
			}
		}
		return true;
	}
	
}
