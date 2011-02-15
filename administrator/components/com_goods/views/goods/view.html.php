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
        global $option;
        if($this->getLayout() == 'form')
    	{
            $this->_getFormToolBar();
            $item = $this->get('item');
            $directory = JPATH_SITE.DS.'images'.DS.'stories';
            $lists = array();

    		JHTML::_('behavior.modal');
    		$lists['image'] = '<div class="button2-left"><div class="image">';
    		$lists['image'] .= "<a rel=\"{handler: 'iframe', size: {x: 570, y: 400}}\" href=\"".JURI::base()."index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;e_name=image&folder=".$directory."\" title=\"".JText::_('Image')."\" class=\"modal\">".JText::_('Image')."</a>";
    		$lists['image'] .= '</div></div>';
    		$lists['published'] = JHTML::_('select.booleanlist',  'published', 'class="inputbox"', $item->published );
    		$lists['promote'] = JHTML::_('select.booleanlist',  'is_promotion', 'class="inputbox"', $item->is_promotion );
    		$lists['catid']   = JHTML::_('list.category',  'catid', $option, intval( $item->catid ) );
    		
    		$editor = &JFactory::getEditor();
    		
            $this->assignRef( 'lists', $lists );
            $this->assignRef( 'editor', $editor );
            $this->assignRef( 'item', $item );
    	}
    	else 
    	{
            $this->_getListToolBar();
            // Get data from the model
            $items =& $this->get('items');
		    $this->assignRef( 'items', $items );
    	}

        parent::display($tpl);
    }
    
    function _getFormToolBar()
    {
            JToolBarHelper::title( JText::_( '商品管理' ), 'generic.png' );
    		JToolBarHelper::save();
    		JToolBarHelper::cancel();
    }
    
    function _getListToolBar()
    {
        	JToolBarHelper::title( JText::_( '商品管理' ), 'generic.png' );
		    JToolBarHelper::addNewX();
	        JToolBarHelper::editListX();
	        JToolBarHelper::publishList();
	        JToolBarHelper::unpublishList();
	        JToolBarHelper::deleteList('你确定要删除吗？');
    }
}