<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<fieldset class="adminform">
	<legend><?php echo JText::_( 'Site Settings' ); ?></legend>
	<table class="admintable" cellspacing="1">
	<tbody>
		<tr>
			<td width="185" class="key">

			<span class="editlinktip hasTip" title="<?php echo JText::_( 'Site Offline' ); ?>::<?php echo JText::_( 'TIPSETYOURSITEISOFFLINE' ); ?>">

			<?php echo JText::_( 'Site Offline' ); ?>
			</span>
			</td>
			<td>
			<?php echo $lists['offline']; ?>
			</td>
		</tr>
		<tr>
			<td valign="top" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Offline Message' ); ?>::<?php echo JText::_( 'TIPIFYOURSITEISOFFLINE' ); ?>">
					<?php echo JText::_( 'Offline Message' ); ?>
				</span>
			</td>
			<td>
				<textarea class="text_area" cols="60" rows="2" style="width:400px; height:40px" name="offline_message"><?php echo $row->offline_message; ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Site Name' ); ?>::<?php echo JText::_( 'TIPSITENAME' ); ?>">
				<?php echo JText::_( 'Site Name' ); ?>
				</span>
			</td>
			<td>
				<input class="text_area" type="text" name="sitename" size="50" value="<?php echo $row->sitename; ?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Default WYSIWYG Editor' ); ?>::<?php echo JText::_( 'TIPDEFWYSIWYG' ); ?>">
			<?php echo JText::_( 'Default WYSIWYG Editor' ); ?>
			</span>
			</td>
			<td>
				<?php echo $lists['editor']; ?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<span class="editlinktip hasTip" title="客服热线::在页面显示的联系电话">
			客服热线
			</span>
			</td>
			<td>
				<input class="text_area" type="text" name="kfTel" size="50" value="<?php echo $row->kfTel; ?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<span class="editlinktip hasTip" title="销售热线::在页面显示的联系电话">
			销售热线
			</span>
			</td>
			<td>
				<input class="text_area" type="text" name="xsTel" size="50" value="<?php echo $row->xsTel; ?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<span class="editlinktip hasTip" title="联系QQ::在页面显示的客服QQ号">
			联系QQ
			</span>
			</td>
			<td>
				<input class="text_area" type="text" name="qq" size="50" value="<?php echo $row->qq; ?>" />
			</td>
		</tr>
	</tbody>
	</table>
</fieldset>
