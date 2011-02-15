<?php defined('_JEXEC') or die('Restricted access'); ?>
<script language="javascript" type="text/javascript">
	function changeDisplayImage() {
			if (document.adminForm.image.value !='') {
				document.adminForm.imagelib.src='../' + document.adminForm.image.value;
			} else {
				document.adminForm.imagelib.src='images/blank.png';
			}
	}
	function jInsertEditorText(tag, id){
		tag = tag.replace("<img src=\"","");
		var end = tag.indexOf("\"");
		tag = tag.substring(0,end);
		document.adminForm.image.value = tag;
		changeDisplayImage();
	}
</script>
<form action="index.php" method="post" name="adminForm">
<div class="col width-50">
	<fieldset class="adminform">
		<legend>细节设置</legend>
<table class="admintable">
    <tr>
        <td class="key"><label for="name"><?php echo JText::_( '商品名称' ); ?>:</label></td>
        <td><input id="name" name="name" value="<?php echo $this->item->name;?>" type="text" size="32" maxlength="50" /></td>
    </tr>
    <tr>
        <td class="key"><label for="market_price"><?php echo JText::_( '原价' ); ?>:</label></td>
        <td>￥<input id="market_price" name="market_price" value="<?php echo $this->item->market_price;?>" type="text" size="30" maxlength="50" /></td>
    </tr>
    <tr>
        <td  class="key"><label for="shop_price"><?php echo JText::_( '现价' ); ?>:</label></td>
        <td>￥<input id="shop_price" name="shop_price" value="<?php echo $this->item->shop_price;?>" type="text" size="30" maxlength="50" /></td>
    </tr>
     <tr>
			<td class="key">
				<?php echo JText::_( '分类' ); ?>:
			</td>
			<td>
				<?php echo $this->lists['catid']; ?>
			</td>
     </tr>
    <tr>
			<td class="key">
				<?php echo JText::_( '发布' ); ?>:
			</td>
			<td>
				<?php echo $this->lists['published']; ?>
			</td>
     </tr>
     <tr>
			<td class="key">
				<?php echo JText::_( '促销' ); ?>:
			</td>
			<td>
				<?php echo $this->lists['promote']; ?>
			</td>
     </tr>
   	<tr>
		<td class="key">
			<label for="image">
				<?php echo JText::_( '商品照片' ); ?>:
			</label>
		</td>
		<td>
			<input style="float: left; padding: 3px 2px;" name="image" id="image" type="text" size="50" value="<?php echo $this->item->image; ?>" onchange="changeDisplayImage();" /><?php if ($this->lists['image']) echo $this->lists['image']; ?>
		</td>
	</tr>
	<tr>
		<td>&nbsp;
		</td>
		<td valign="top">
			<?php
			if (preg_match("#gif|jpg|png#i", $this->item->image)) {
				?>
				<img src="../<?php echo $this->item->image; ?>" name="imagelib" />
				<?php
			} else {
				?>
				<img src="images/blank.png" name="imagelib" />
				<?php
			}
			?>
		</td>
	</tr>
</table>
</fieldset>
</div>
<div class="col width-50">
	<fieldset class="adminform">
		<legend><?php echo JText::_( '商品介绍' ); ?>:</legend>

			<?php if ($this->editor) 
			         echo $this->editor->display( 'intro',  $this->item->intro , '100%', '550', '75', '20' ) ;
			         // parameters : areaname, content, width, height, cols, rows
             ?>
	</fieldset>
</div>
<input type="hidden" name="option" value="<?php echo $option ?>" />
<input type="hidden" name="cid[]" value="<?php echo $this->item->id; ?>" />
<input type="hidden" name="task" value="" />
<?php echo JHTML::_( 'form.token' ); ?>
</form>