<?php /* Smarty version 2.6.25, created on 2021-09-22 06:29:11
         compiled from addressbook_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'addressbook_edit.tpl', 19, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "minheader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['message']): ?>
<div class="success">
	<p align="center"><?php echo $this->_tpl_vars['message']; ?>
</p>
	<br />
	<div align="center">
		<input type="button" value="<?php echo $this->_tpl_vars['LANG']['BACK']; ?>
" class="inputsubmit" onclick="parent.location.href='addressbook.php<?php if ($this->_tpl_vars['fvalues']['abook_id']): ?>?abook_id=<?php echo $this->_tpl_vars['fvalues']['abook_id']; ?>
<?php endif; ?>'" />
	</div>
</div>	
<?php else: ?>

<?php if ($this->_tpl_vars['create']): ?>
<form action="upload_faxcontacts.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['SF_FILESIZE']; ?>
" />
<div class="miniTableForm" align="center">
	<p><?php echo $this->_tpl_vars['LANG']['UPLOAD_CONTACTS']; ?>
</p><br />
	<input type="file" name="vcf" />
	<br />
	<p><label for="catid"><?php echo $this->_tpl_vars['LANG']['CATEGORY']; ?>
:</label> <?php echo smarty_function_html_options(array('name' => 'catid','id' => 'catid','options' => $this->_tpl_vars['faxcategories']), $this);?>
</p>
	<input type="submit" name="upload" class="inputsubmit" value="<?php echo $this->_tpl_vars['LANG']['UPLOAD_BUTTON']; ?>
" />
	<input type="hidden" name="_submit_check" value="1" />
</div>
</form>
<br /><hr style="width: 80%; margin-left:auto; margin-right:auto" /><br />
<?php endif; ?>

<form action="<?php echo $this->_supers['server']['SCRIPT_NAME']; ?>
" method="post">

<?php if ($this->_tpl_vars['create']): ?><div align="center"><?php echo $this->_tpl_vars['LANG']['NEW_ENTRY']; ?>
</div><?php endif; ?>

<?php if ($this->_tpl_vars['error']): ?><div class="error"><?php echo $this->_tpl_vars['error']; ?>
</div><?php endif; ?>

<div class="miniTableForm">

<p><label for="company"><?php echo $this->_tpl_vars['LANG']['CONTACT_HEADER_COMPANY']; ?>
:</label> <input type="text" name="company" id="company" value="<?php echo $this->_tpl_vars['fvalues']['company']; ?>
" size="30" maxlength="100" /></p>

<div style="overflow: auto; overflow-x: none; width: 39em; height: <?php if ($this->_tpl_vars['create']): ?>16<?php else: ?>32<?php endif; ?>em">
<?php unset($this->_sections['r']);
$this->_sections['r']['name'] = 'r';
$this->_sections['r']['loop'] = is_array($_loop=$this->_tpl_vars['faxnumbers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['r']['show'] = true;
$this->_sections['r']['max'] = $this->_sections['r']['loop'];
$this->_sections['r']['step'] = 1;
$this->_sections['r']['start'] = $this->_sections['r']['step'] > 0 ? 0 : $this->_sections['r']['loop']-1;
if ($this->_sections['r']['show']) {
    $this->_sections['r']['total'] = $this->_sections['r']['loop'];
    if ($this->_sections['r']['total'] == 0)
        $this->_sections['r']['show'] = false;
} else
    $this->_sections['r']['total'] = 0;
if ($this->_sections['r']['show']):

            for ($this->_sections['r']['index'] = $this->_sections['r']['start'], $this->_sections['r']['iteration'] = 1;
                 $this->_sections['r']['iteration'] <= $this->_sections['r']['total'];
                 $this->_sections['r']['index'] += $this->_sections['r']['step'], $this->_sections['r']['iteration']++):
$this->_sections['r']['rownum'] = $this->_sections['r']['iteration'];
$this->_sections['r']['index_prev'] = $this->_sections['r']['index'] - $this->_sections['r']['step'];
$this->_sections['r']['index_next'] = $this->_sections['r']['index'] + $this->_sections['r']['step'];
$this->_sections['r']['first']      = ($this->_sections['r']['iteration'] == 1);
$this->_sections['r']['last']       = ($this->_sections['r']['iteration'] == $this->_sections['r']['total']);
?>
<?php $this->assign('index', $this->_sections['r']['index']); ?>
<p><label for="faxnumber<?php echo $this->_tpl_vars['index']; ?>
"><?php echo $this->_tpl_vars['LANG']['CONTACT_HEADER_FAXNUM']; ?>
:</label> <input type="text" name="faxnumber[<?php echo $this->_tpl_vars['index']; ?>
]" id="faxnumber<?php echo $this->_tpl_vars['index']; ?>
" value="<?php echo $this->_tpl_vars['faxnumbers'][$this->_sections['r']['index']]['faxnumber']; ?>
" maxlength="20" /></p>
<p><label for="to_person<?php echo $this->_tpl_vars['index']; ?>
"><?php echo $this->_tpl_vars['LANG']['TO_PERSON']; ?>
:</label> <input type="text" name="to_person[<?php echo $this->_tpl_vars['index']; ?>
]" id="to_person<?php echo $this->_tpl_vars['index']; ?>
" value="<?php echo $this->_tpl_vars['faxnumbers'][$this->_sections['r']['index']]['to_person']; ?>
" size="25" maxlength="30" /></p>
<p><label for="to_location<?php echo $this->_tpl_vars['index']; ?>
"><?php echo $this->_tpl_vars['LANG']['TO_LOCATION']; ?>
:</label> <input type="text" name="to_location[<?php echo $this->_tpl_vars['index']; ?>
]" id="to_location<?php echo $this->_tpl_vars['index']; ?>
" value="<?php echo $this->_tpl_vars['faxnumbers'][$this->_sections['r']['index']]['to_location']; ?>
" size="25" maxlength="30" /></p>
<p><label for="to_voicenumber<?php echo $this->_tpl_vars['index']; ?>
"><?php echo $this->_tpl_vars['LANG']['TO_VOICENUMBER']; ?>
:</label> <input type="text" name="to_voicenumber[<?php echo $this->_tpl_vars['index']; ?>
]" id="to_voicenumber<?php echo $this->_tpl_vars['index']; ?>
" value="<?php echo $this->_tpl_vars['faxnumbers'][$this->_sections['r']['index']]['to_voicenumber']; ?>
" size="25" maxlength="30" /></p>

<?php if ($this->_tpl_vars['SUPERUSER']): ?>
<p><label for="faxcatid<?php echo $this->_tpl_vars['index']; ?>
"><?php echo $this->_tpl_vars['LANG']['CATEGORY']; ?>
:</label> <?php echo smarty_function_html_options(array('name' => "faxcatid[".($this->_tpl_vars['index'])."]",'id' => "faxcatid".($this->_tpl_vars['index']),'options' => $this->_tpl_vars['faxcategories'],'selected' => $this->_tpl_vars['faxnumbers'][$this->_sections['r']['index']]['faxcatid']), $this);?>
</p>
<?php endif; ?>
<p><label for="description<?php echo $this->_tpl_vars['index']; ?>
"><?php echo $this->_tpl_vars['LANG']['DESCRIPTION']; ?>
:</label> <input type="text" name="description[<?php echo $this->_tpl_vars['index']; ?>
]" id="description<?php echo $this->_tpl_vars['index']; ?>
" value="<?php echo $this->_tpl_vars['faxnumbers'][$this->_sections['r']['index']]['description']; ?>
" size="25" maxlength="30" /></p>

<input type="hidden" name="abookfax_id[<?php echo $this->_tpl_vars['index']; ?>
]" value="<?php echo $this->_tpl_vars['faxnumbers'][$this->_sections['r']['index']]['abookfax_id']; ?>
" />
<?php endfor; endif; ?>
<?php if (( count ( $this->_tpl_vars['faxnumbers'] ) > 0 )): ?>
<hr style="width: 20em; margin-left:auto; margin-right:auto" />
<?php endif; ?>
<p><label for="new_faxnum"><?php echo $this->_tpl_vars['LANG']['CONTACT_HEADER_NEWFAX']; ?>
:</label> <input type="text" name="new_faxnum" id="new_faxnum" value="<?php echo $this->_tpl_vars['fvalues']['new_faxnum']; ?>
" maxlength="20" style="background: #FFFFCC;" /></p>
<p><label for="new_to_person"><?php echo $this->_tpl_vars['LANG']['TO']; ?>
:</label> <input type="text" name="new_to_person" id="new_to_person" value="<?php echo $this->_tpl_vars['fvalues']['new_to_person']; ?>
" size="25" maxlength="30" style="background: #FFFFCC;" /></p>
<p><label for="new_to_location"><?php echo $this->_tpl_vars['LANG']['TO_LOCATION']; ?>
:</label> <input type="text" name="new_to_location" id="new_to_location" value="<?php echo $this->_tpl_vars['fvalues']['new_to_location']; ?>
" size="25" maxlength="30" style="background: #FFFFCC;" /></p>
<p><label for="new_to_voicenumber"><?php echo $this->_tpl_vars['LANG']['TO_VOICENUMBER']; ?>
:</label> <input type="text" name="new_to_voicenumber" id="new_to_voicenumber" value="<?php echo $this->_tpl_vars['fvalues']['new_to_voicenumber']; ?>
" size="25" maxlength="30" style="background: #FFFFCC;" /></p>

<?php if ($this->_tpl_vars['SUPERUSER']): ?>
<p><label for="newfaxcatid"><?php echo $this->_tpl_vars['LANG']['CATEGORY']; ?>
:</label> <?php echo smarty_function_html_options(array('name' => 'newfaxcatid','id' => 'newfaxcatid','options' => $this->_tpl_vars['faxcategories']), $this);?>
</p>
<?php endif; ?>

<p><label for="new_desc"><?php echo $this->_tpl_vars['LANG']['DESCRIPTION']; ?>
:</label> <input type="text" name="new_desc" id="new_desc" value="<?php echo $this->_tpl_vars['fvalues']['new_desc']; ?>
" size="25" maxlength="30" style="background: #FFFFCC;" /></p>

</div>
</div>

<br />

<div align="center">
<?php if ($this->_tpl_vars['create']): ?>
	<input type="submit" name="create" class="inputsubmit" value="<?php echo $this->_tpl_vars['LANG']['CREATE']; ?>
" />
<?php else: ?>
	<input type="submit" name="save" class="inputsubmit" value="<?php echo $this->_tpl_vars['LANG']['SAVE']; ?>
" />
<?php if ($this->_tpl_vars['SUPERUSER']): ?>
	&nbsp;<input type="submit" name="delete" value="<?php echo $this->_tpl_vars['LANG']['DELETE']; ?>
" class="inputsubmit inputcancel" onclick="return confirm('<?php echo $this->_tpl_vars['LANG']['QUESTION_DELUSER']; ?>
?')" />
<?php endif; ?>
<?php endif; ?>
	&nbsp;<input type="button" value="<?php echo $this->_tpl_vars['LANG']['CANCEL']; ?>
" class="inputsubmit inputcancel" onclick="location.href='<?php echo $this->_supers['server']['SCRIPT_NAME']; ?>
'" />
</div>
<input type="hidden" name="abook_id" value="<?php echo $this->_tpl_vars['fvalues']['abook_id']; ?>
" />
<input type="hidden" name="_submit_check" value="1" />
</form>

<script type="text/javascript" language="javascript">
// <![CDATA[
	$('company').focus();
// ]]>
</script>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "minfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>