<?php /* Smarty version 2.6.25, created on 2021-09-22 06:29:11
         compiled from addressbook.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "div_top.tpl", 'smarty_include_vars' => array('div_size' => 40)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div align="center"><a href="emailbook.php"><?php echo $this->_tpl_vars['LANG']['MENU_CONTACTS']; ?>
</a> | <a href="addressbook.php"><?php echo $this->_tpl_vars['LANG']['TITLE_FAXNUMS']; ?>
</a> | <a href="distrolist.php"><?php echo $this->_tpl_vars['LANG']['TITLE_DISTROLIST']; ?>
</a></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "div_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h1 align="center"><?php echo $this->_tpl_vars['LANG']['TITLE_FAXNUMS']; ?>
</h1>

<br />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "div_top.tpl", 'smarty_include_vars' => array('div_size' => 60)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="100%">
	<tr>
		<td valign="top">
		<form method="post" action="addressbook_edit.php" target="edit">
			<p><label for="regexp"><?php echo $this->_tpl_vars['LANG']['SEARCH_TITLE']; ?>
:</label> <input type="text" onkeyup="myfilter.query()" name="regexp" id="regexp" style="width: 17em" /></p>
			<br />
			<select name="abook_id" id="abook_id" size="17" style="width: 100%; font-size:0.9em" onchange="submit()"></select>
		</form>
		</td>
		<td width="400">
			<iframe src="addressbook_edit.php<?php if ($this->_tpl_vars['abook_id']): ?>?abook_id=<?php echo $this->_tpl_vars['abook_id']; ?>
<?php endif; ?>" width="400" height="400" frameborder="0" scrolling="auto" name="edit"></iframe>
		</td>
	</tr>
</table>

<script type="text/javascript" language="javascript">
// <![CDATA[
	$('regexp').focus();
	var myfilter = new CompanyList ('abook_id', 'regexp');
	myfilter.allcontacts (<?php echo $this->_tpl_vars['SHOW_ALL_CONTACTS']; ?>
);
	myfilter.query();
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