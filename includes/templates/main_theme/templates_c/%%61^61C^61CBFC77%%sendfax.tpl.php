<?php /* Smarty version 2.6.25, created on 2021-09-22 06:29:04
         compiled from sendfax.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_image', 'sendfax.tpl', 36, false),array('function', 'html_options', 'sendfax.tpl', 54, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "div_top.tpl", 'smarty_include_vars' => array('div_size' => 60)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h1 align="center"><?php echo $this->_tpl_vars['LANG']['MENU_SENDFAX']; ?>
</h1>

<?php if ($this->_tpl_vars['message']): ?>
<p align="center"><?php echo $this->_tpl_vars['message']; ?>
</p>

<?php if (is_array ( $this->_tpl_vars['results'] )): ?>
<p align="center">Job ID:<?php echo $this->_tpl_vars['results']['jobid']; ?>
 Group ID:<?php echo $this->_tpl_vars['results']['groupid']; ?>
</p>

<script type="text/javascript" language="javascript">
// <![CDATA[
	setTimeout ('gotoInbox ()', 5000);
// ]]>
</script>

<?php endif; ?>

<?php else: ?>

<?php if ($this->_tpl_vars['error']): ?><div class="error"><?php echo $this->_tpl_vars['error']; ?>
</div><?php endif; ?>

<form action="<?php echo $this->_supers['server']['SCRIPT_NAME']; ?>
" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['SF_FILESIZE']; ?>
" />

<div class="tableForm">
	<p><label for="dest">
		<?php echo $this->_tpl_vars['LANG']['FAX_DEST']; ?>
: &nbsp;<br />
		<a href="javascript:mkwin('distrocontacts.php')">[<?php echo $this->_tpl_vars['LANG']['TITLE_DISTROLIST']; ?>
]</a>&nbsp;<br />
		<a href="javascript:mkwin('faxcontacts.php')">[<?php echo $this->_tpl_vars['LANG']['MENU_CONTACTS']; ?>
]</a>&nbsp;</label>
		<textarea name="destinations" id="dest" rows="3" cols="40" style="width:35em; height: 3em"><?php echo $this->_tpl_vars['fvalues']['destinations']; ?>
</textarea>
	</p>
	
	<div style="clear: both"></div>
	<p><label><?php echo $this->_tpl_vars['LANG']['FAX_FILES']; ?>
: &nbsp;<br /><?php echo smarty_function_html_image(array('file' => "images/clip.gif"), $this);?>
&nbsp;<br /><?php echo $this->_tpl_vars['LANG']['FAX_MAXSIZE']; ?>
&nbsp;</label>
		<div class="tableFormRight" style="background-color:#fbfbfb">
			<input type="file" id="files" />
			<div id="files_list"></div>
		</div>
	</p>
</div>
	
<br />

<div align="center" style="clear: both"><?php echo $this->_tpl_vars['LANG']['FAX_FILETYPES']; ?>
</div>

<br />
<div onclick="Effect.toggle('schedulingDIV', 'slide')" id="sendfaxOptions"><?php echo $this->_tpl_vars['LANG']['OPTIONS']; ?>
</div>

<div id="schedulingDIV" style="display:none;">
	<div class="tableForm">
		<p><label for="notify_requeue"><?php echo $this->_tpl_vars['LANG']['NOTIFY_REQUEUE']; ?>
:</label> <input type="checkbox" name="notify_requeue" id="notify_requeue" value="1" <?php if ($this->_tpl_vars['SENDFAX_REQUEUE_EMAIL']): ?>checked="checked"<?php endif; ?> /></p>
		<p><label for="sendtime"><?php echo $this->_tpl_vars['LANG']['SCHEDULE_FAX']; ?>
:</label> <div class="tableFormRight"><input type="checkbox" name="sendtime" id="sendtime" value="1" />  <?php echo smarty_function_html_options(array('name' => 'sendtimeHour','id' => 'sendtimeHour','selected' => $this->_tpl_vars['fvalues']['sendtimeHour'],'options' => $this->_tpl_vars['unitHours']), $this);?>
 : <?php echo smarty_function_html_options(array('name' => 'sendtimeMin','id' => 'sendtimeMin','selected' => $this->_tpl_vars['fvalues']['sendtimeMin'],'options' => $this->_tpl_vars['unitMins']), $this);?>
</div>
		</p>
		<p><label for="killtime"><?php echo $this->_tpl_vars['LANG']['FAX_KILLTIME']; ?>
:</label> <div class="tableFormRight"><?php echo $this->_tpl_vars['LANG']['NOW']; ?>
 + <input type="text" name="killtime" id="killtime" value="<?php echo $this->_tpl_vars['fvalues']['killtime']; ?>
" style="width: 2em" /> <?php echo smarty_function_html_options(array('name' => 'killtime_unit','id' => 'killtime_unit','selected' => $this->_tpl_vars['fvalues']['killtime_unit'],'options' => $this->_tpl_vars['units']), $this);?>
</div>
		</p>
		<p><label for="numtries"><?php echo $this->_tpl_vars['LANG']['FAX_NUMTRIES']; ?>
:</label> <input type="text" name="numtries" id="numtries" value="<?php echo $this->_tpl_vars['fvalues']['numtries']; ?>
" style="width:2em" maxlength="3" /></p>
	
	<?php if ($this->_tpl_vars['SUPERUSER']): ?>
		<p><label for="user_tsi"><?php echo $this->_tpl_vars['LANG']['TSI_ID']; ?>
:</label> <input type="text" name="user_tsi" id="user_tsi" value="<?php echo $this->_tpl_vars['fvalues']['user_tsi']; ?>
" style="width:20em" /></p>
		<p><label for="priority"><?php echo $this->_tpl_vars['LANG']['PRIORITY']; ?>
:</label> <div class="tableFormRight"><?php echo smarty_function_html_options(array('name' => 'priority','id' => 'priority','selected' => $this->_tpl_vars['fvalues']['priority'],'options' => $this->_tpl_vars['priority_list']), $this);?>
</div></p>
	<?php endif; ?>
	
	<?php if (( count ( $this->_tpl_vars['modem_list'] ) > 1 )): ?>
		<p><label for="modem"><?php echo $this->_tpl_vars['LANG']['MODEM_DEVICE']; ?>
:</label>
			<div class="tableFormRight" style="float:left; position:relative">
				<?php echo smarty_function_html_options(array('name' => 'modem','id' => 'modem','selected' => $this->_tpl_vars['fvalues']['modem'],'options' => $this->_tpl_vars['modem_list']), $this);?>

			</div>
		</p>
	<?php else: ?>
		<input type="hidden" name="modem" value="<?php echo $this->_tpl_vars['fvalues']['modem']; ?>
" />
	<?php endif; ?>
	</div>
	<br />
</div>

<div class="tableForm">
	<p><label for="cp_switch"><?php echo $this->_tpl_vars['LANG']['FAX_CPAGE']; ?>
:</label> <input type="checkbox" name="coverpage" id="cp_switch" value="1" onchange="chgtx();" /></p>
</div>

<div id="coverpagediv" class="tableForm">
	<p><label for="whichcover"><?php echo $this->_tpl_vars['LANG']['SELECT_COVERPAGE']; ?>
:</label>
		<div class="tableFormRight" style="float:left; position:relative">
			<?php echo smarty_function_html_options(array('name' => 'whichcover','id' => 'whichcover','selected' => $this->_tpl_vars['fvalues']['whichcover'],'options' => $this->_tpl_vars['cover_list']), $this);?>

		</div>
	</p>
	<p><label for="to_person"><?php echo $this->_tpl_vars['LANG']['TO_PERSON']; ?>
:</label> <input type="text" name="to_person" id="to_person" value="<?php echo $this->_tpl_vars['fvalues']['to_person']; ?>
" style="width: 15em" /></p>
	<p><label for="to_company"><?php echo $this->_tpl_vars['LANG']['TO_COMPANY']; ?>
:</label> <input type="text" name="to_company" id="to_company" value="<?php echo $this->_tpl_vars['fvalues']['to_company']; ?>
" style="width: 15em" /></p>
	<p><label for="to_location"><?php echo $this->_tpl_vars['LANG']['TO_LOCATION']; ?>
:</label> <input type="text" name="to_location" id="to_location" value="<?php echo $this->_tpl_vars['fvalues']['to_location']; ?>
" style="width: 15em" /></p>
	<p><label for="to_voicenumber"><?php echo $this->_tpl_vars['LANG']['TO_VOICENUMBER']; ?>
:</label> <input type="text" name="to_voicenumber" id="to_voicenumber" value="<?php echo $this->_tpl_vars['fvalues']['to_voicenumber']; ?>
" style="width: 15em" /></p>
	<p><label for="regarding"><?php echo $this->_tpl_vars['LANG']['FAX_REGARDING']; ?>
:</label> <input type="text" name="regarding" id="regarding" value="<?php echo $this->_tpl_vars['fvalues']['regarding']; ?>
" style="width: 20em" /></p>
	<p>
		<label for="comments"><?php echo $this->_tpl_vars['LANG']['FAX_COMMENTS']; ?>
:</label>
		<div class="tableFormRight">
			<textarea name="comments" id="comments" rows="10" cols="30" style="width: 35em"><?php echo $this->_tpl_vars['fvalues']['comments']; ?>
</textarea>
		</div>
	</p>
</div>

<div style="clear: both"></div>

<div align="center">
	<input type="submit" class="inputsubmit" value="<?php echo $this->_tpl_vars['LANG']['BUTTON_SEND']; ?>
" />&nbsp;
	<input type="button" class="inputsubmit inputcancel" value="<?php echo $this->_tpl_vars['LANG']['CANCEL']; ?>
" onclick="location.href='inbox.php'" />
</div>

<input type="hidden" name="_submit_check" value="1" />
</form>

<script type="text/javascript" language="javascript">
// <![CDATA[
	$('dest').focus();
	init_box (<?php echo $this->_tpl_vars['SENDFAX_USE_COVERPAGE']; ?>
);
	
	var multi_selector = new MultiSelector ($('files_list'), '<?php echo $this->_tpl_vars['LANG']['DELETE']; ?>
');
	multi_selector.addElement ($('files'));
// ]]>
</script>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "div_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>