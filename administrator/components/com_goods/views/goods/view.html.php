<?php
/**
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_1
 * @license    GNU/GPL
*/
 
// no direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport( 'joomla.application.component.view');
 
/**
 * HTML View class for the HelloWorld Component
 *
 * @package    HelloWorld
 */
 
class GoodsViewGoods extends JView
{
    function display($tpl = null)
    {
        JToolBarHelper::title( JText::_( '商品管理' ), 'generic.png' );
        JToolBarHelper::deleteList();
        JToolBarHelper::editListX();
        JToolBarHelper::addNewX();
        // Get data from the model
        $items =& $this->get('Data');
		$this->assignRef( 'items', $items );
        parent::display($tpl);
    }
}
