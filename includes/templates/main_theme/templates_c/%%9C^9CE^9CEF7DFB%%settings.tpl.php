<?php /* Smarty version 2.6.25, created on 2021-09-22 06:28:44
         compiled from settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'required', 'settings.tpl', 10, false),array('function', 'html_options', 'settings.tpl', 30, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "div_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<h1 align="center"><?php echo $this->_tpl_vars['LANG']['BUTTON_SETTINGS']; ?>
</h1>
	
	<?php if ($this->_tpl_vars['error']): ?>
		<div align="center" colspan="2" class="error"><?php echo $this->_tpl_vars['error']; ?>
</div>
	<?php endif; ?>
	<form action="<?php echo $this->_supers['server']['SCRIPT_NAME']; ?>
" method="post">
	<div class="tableForm">
		<p><label for="name"><?php echo $this->_tpl_vars['LANG']['YOUR_NAME']; ?>
<?php echo smarty_function_required(array(), $this);?>
:</label> <input type="text" name="name" id="name" value="<?php echo $this->_tpl_vars['fvalues']['name']; ?>
" maxlength="40" style="width: 20em" /></p>
		<p><label for="from_company"><?php echo $this->_tpl_vars['LANG']['MY_COMPANY']; ?>
:</label> <input type="text" name="from_company" id="from_company" value="<?php echo $this->_tpl_vars['fvalues']['from_company']; ?>
" style="width: 25em" /></p>
		<p><label for="from_location"><?php echo $this->_tpl_vars['LANG']['MY_LOCATION']; ?>
:</label> <input type="text" name="from_location" id="from_location" value="<?php echo $this->_tpl_vars['fvalues']['from_location']; ?>
" style="width: 15em" /></p>
		<p><label for="from_voicenumber"><?php echo $this->_tpl_vars['LANG']['MY_VOICENUMBER']; ?>
:</label> <input type="text" name="from_voicenumber" id="from_voicenumber" value="<?php echo $this->_tpl_vars['fvalues']['from_voicenumber']; ?>
" style="width: 15em" /></p>
		<p><label for="from_faxnumber"><?php echo $this->_tpl_vars['LANG']['MY_FAXNUMBER']; ?>
:</label> <input type="text" name="from_faxnumber" id="from_faxnumber" value="<?php echo $this->_tpl_vars['fvalues']['from_faxnumber']; ?>
" style="width: 15em" /></p>
		<?php if ($this->_tpl_vars['SUPERUSER']): ?><p><label for="user_tsi"><?php echo $this->_tpl_vars['LANG']['TSI_ID']; ?>
:</label> <input type="text" name="user_tsi" id="user_tsi" value="<?php echo $this->_tpl_vars['fvalues']['user_tsi']; ?>
" style="width: 15em" /></p><?php endif; ?>
		<br />
		<p><label for="opass"><?php echo $this->_tpl_vars['LANG']['OPASS']; ?>
:</label> <input type="password" name="opass" id="opass" size="<?php echo $this->_tpl_vars['MAX_PASSWD_SIZE']; ?>
" maxlength="<?php echo $this->_tpl_vars['MAX_PASSWD_SIZE']; ?>
" /></p>
		<p><label for="npass"><?php echo $this->_tpl_vars['LANG']['NPASS']; ?>
:</label> <input type="password" name="npass" id="npass" size="<?php echo $this->_tpl_vars['MAX_PASSWD_SIZE']; ?>
" maxlength="<?php echo $this->_tpl_vars['MAX_PASSWD_SIZE']; ?>
" /> <span class="small"><?php echo $this->_tpl_vars['LANG']['PWD_REQUIREMENTS']; ?>
</span></p>
		<p><label for="vpass"><?php echo $this->_tpl_vars['LANG']['VPASS']; ?>
:</label> <input type="password" name="vpass" id="vpass" size="<?php echo $this->_tpl_vars['MAX_PASSWD_SIZE']; ?>
" maxlength="<?php echo $this->_tpl_vars['MAX_PASSWD_SIZE']; ?>
" /></p>
		<br />
		<p><label for="email"><?php echo $this->_tpl_vars['LANG']['EMAIL']; ?>
<?php echo smarty_function_required(array(), $this);?>
:</label> <input type="text" name="email" id="email" value="<?php echo $this->_tpl_vars['fvalues']['email']; ?>
" maxlength="<?php echo $this->_tpl_vars['MAX_EMAIL_SIZE']; ?>
" style="width: 20em" /></p>
		<p>
			<label for="email_sig"><?php echo $this->_tpl_vars['LANG']['EMAIL_SIG']; ?>
:</label>
			<div class="tableFormRight">
				<textarea name="email_sig" id="email_sig" rows="10" cols="40" style="width:35em;"><?php echo $this->_tpl_vars['fvalues']['email_sig']; ?>
</textarea>
			</div>
		</p>
		<p><label for="language"><?php echo $this->_tpl_vars['LANG']['LANGUAGE']; ?>
:</label>
			<div class="tableFormRight">
				<?php echo smarty_function_html_options(array('name' => 'language','options' => $this->_tpl_vars['languages'],'selected' => $this->_tpl_vars['fvalues']['language']), $this);?>

			</div>
		</p>
		<p><label for="coverpage_id"><?php echo $this->_tpl_vars['LANG']['SELECT_COVERPAGE']; ?>
:</label>
			<div class="tableFormRight" style="float:left; position:relative">
				<?php echo smarty_function_html_options(array('name' => 'coverpage_id','id' => 'coverpage_id','selected' => $this->_tpl_vars['fvalues']['coverpage_id'],'options' => $this->_tpl_vars['cover_list']), $this);?>

			</div>
		</p>

		<p><label for="faxperpageinbox" style="padding-top:5px"><?php echo $this->_tpl_vars['LANG']['INBOX_SHOW']; ?>
</label>
			<div class="tableFormRight" style="float:left; position:relative">
				<?php echo smarty_function_html_options(array('name' => 'faxperpageinbox','id' => 'faxperpageinbox','selected' => $this->_tpl_vars['fvalues']['faxperpageinbox'],'options' => $this->_tpl_vars['faxesperpagelist']), $this);?>
 <?php echo $this->_tpl_vars['LANG']['FAXES_PER_PAGE']; ?>

			</div>
		</p>
		<p><label for="faxperpagearchive" style="padding-top:5px"><?php echo $this->_tpl_vars['LANG']['ARCHIVE_SHOW']; ?>
</label>
			<div class="tableFormRight" style="float:left; position:relative;">
				<?php echo smarty_function_html_options(array('name' => 'faxperpagearchive','id' => 'faxperpagearchive','selected' => $this->_tpl_vars['fvalues']['faxperpagearchive'],'options' => $this->_tpl_vars['faxesperpagelist']), $this);?>
 <?php echo $this->_tpl_vars['LANG']['FAXES_PER_PAGE']; ?>

			</div>
		</p>
		
	</div>
	<br /><br />
<div align="center" style="clear:both">
	<input type="submit" name="update" class="inputsubmit" value="<?php echo $this->_tpl_vars['LANG']['UPDATE']; ?>
" />
	<input type="submit" name="cancel" class="inputsubmit inputcancel" value="<?php echo $this->_tpl_vars['LANG']['CANCEL']; ?>
" />
</div>
<input type="hidden" name="url" value="<?php echo $this->_tpl_vars['fvalues']['url']; ?>
" />
<input type="hidden" name="_submit_check" value="1" />
</form>
<script type="text/javascript" language="javascript">
// <![CDATA[
	$('name').focus();
// ]]>
</script>

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