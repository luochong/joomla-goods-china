<?php defined('_JEXEC') or die('Restricted access'); ?>
<form action="index.php" method="post" name="adminForm">
<div id="editcell">
    <table class="adminlist">
    <thead>
        <tr>
            <th width="30">
                <?php echo JText::_( '编号' ); ?>
            </th>
            <th width="20">
              <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
            </th>
            <th>
                <?php echo JText::_( '商品名称' ); ?>
            </th>
            <th>
                <?php echo JText::_( '原价' ); ?>
            </th>
            <th>
                <?php echo JText::_( '现价' ); ?>
            </th>
            <th>
                <?php echo JText::_( '发布' ); ?>
            </th>
            <th>
                <?php echo JText::_( '发布' ); ?>
            </th>            
        </tr>            
    </thead>
    <?php
    $k = 0;
    for ($i=0, $n=count( $this->items ); $i < $n; $i++)
    {
        $row =& $this->items[$i];
        $checked    = JHTML::_( 'grid.id', $i, $row->id );
        $link = JRoute::_( 'index.php?option=com_goods&controller=goods&task=edit&cid[]='. $row->id );
        ?>
        <tr class="<?php echo "row$k"; ?>">
            <td>
                <?php echo $row->id; ?>
            </td>
            <td>
              <?php echo $checked; ?>
            </td>
            <td>
                <a href="<?php echo $link; ?>"><?php echo $row->name; ?></a>
            </td>
            <td>
                <a href="<?php echo $link; ?>"><?php echo $row->market_price; ?></a>
            </td>
            <td>
                <a href="<?php echo $link; ?>"><?php echo $row->shop_price; ?></a>
            </td>
            <td>
            	<span class="editlinktip hasTip" title="<?php echo JText::_( 'Publish Information' );?>"><a href="javascript:void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $row->published ? 'unpublish' : 'publish' ?>')">
								<img src="images/<?php echo $row->published ? 'publish_g.png' : 'publish_x.png';?>" width="16" height="16" border="0" /></a></span>
            </td>
        </tr>
        <?php
        $k = 1 - $k;
    }
    ?>
    </table>
</div>
 
<input type="hidden" name="option" value="<?php echo $option?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="goods" />
<?php echo JHTML::_( 'form.token' ); ?>
 
</form>
