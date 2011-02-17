<?php
    function escape($var)
    {

        return call_user_func('htmlspecialchars', $var);
    }
$db =& JFactory::getDBO();
$query = 'SELECT *' .
	' FROM #__weblinks' .
	' WHERE catid = 16 '.
	' AND published = 1' .
	' AND archived = 0'.
	' ORDER BY  ordering';
$db->setQuery($query);
$items = $db->loadObjectList();
$count = count($items);

//http://www.joomla.com/index.php/component/weblinks/16-2011-02-17-16-35-57/1-2011-02-17-16-36-31
for($i = 0; $i < $count; $i++)
{
	$item =& $items[$i];
    $item->slug = $item->id.'-'.$item->alias;
	$link = '/index.php/component/weblinks/16-link/'. $item->slug;

	

	$itemParams = new JParameter($item->params);
	switch ($itemParams->get('target', $params->get('target')))
	{
		// cases are slightly different
		case 1:
			// open in a new window
			$item->link = '<a href="'. $link .'" target="_blank" ><img src="'.$item->image .'" alt="'. escape($item->title) .'"/></a>';
			break;

		case 2:
			// open in a popup window
			$item->link = "<a href=\"#\" onclick=\"javascript: window.open('". $link ."', '', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=780,height=550'); return false\" ><img src=\"".$item->image ."\" alt=\"". escape($item->title) ."\"/></a>";
			break;

		default:
			// formerly case 2
			// open in parent window
			$item->link = '<a href="'. $link .'" ><img src="'.$item->image .'" alt="'. escape($item->title) .'"/></a>';
			break;
	}
	
}

?>


<ul>
    <?php foreach($items as $i => $item):?>
    <li <?php echo $i == count($items) - 1 ? 'class="margin-r"':''?>>
       <?php echo $item->link?>
    </li>
    <?php endforeach;?>
  
</ul>