<?php /* Smarty version 2.6.25, created on 2021-09-22 06:29:08
         compiled from archive.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'archive.tpl', 15, false),array('function', 'html_image', 'archive.tpl', 69, false),array('modifier', 'replace', 'archive.tpl', 126, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "div_top.tpl", 'smarty_include_vars' => array('div_size' => 80)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h1 align="center"><?php echo $this->_tpl_vars['LANG']['MENU_ARCHIVE']; ?>
</h1>

<form action="<?php echo $this->_supers['server']['SCRIPT_NAME']; ?>
" method="get">
<div class="archiveForm">
	<div class="archiveFormLeft">
		<p><label for="regexp"><?php echo $this->_tpl_vars['LANG']['COMPANY_SEARCH']; ?>
:</label> <input type="text" onkeyup="myfilter.query()" name="regexp" id="regexp" value="<?php echo $this->_tpl_vars['fvalues']['regexp']; ?>
" style="width: 25em; font-size: 0.9em" /></p>
		<p><label for="companyid"><?php echo $this->_tpl_vars['LANG']['COMPANY_LIST']; ?>
:</label> <select name="companyid" id="companyid" size="5" style="width: 25em; font-size: 0.9em"><option value=""></option></select></p>
		<p><label for="faxid">FaxID:</label> <input type="text" id="faxid" name="faxid" style="width:5em" value="<?php echo $this->_tpl_vars['fvalues']['faxid']; ?>
" /></p>
	</div>
	<div class="archiveFormRight">
		<p><label for="kw"><?php echo $this->_tpl_vars['LANG']['KEYWORDS']; ?>
:</label> <input type="text" name="kw" id="kw" style="width: 15em" value="<?php echo $this->_tpl_vars['fvalues']['kw']; ?>
" /></p>
		<p><label for="category2"><?php echo $this->_tpl_vars['LANG']['CATEGORY']; ?>
:</label> <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['category_list'],'name' => 'category','id' => 'category2','selected' => $this->_tpl_vars['fvalues']['category']), $this);?>
</p>		
<?php if ($this->_tpl_vars['SUPERUSER']): ?>
		<p><label for="userid"><?php echo $this->_tpl_vars['LANG']['USER']; ?>
:</label> <?php echo smarty_function_html_options(array('name' => 'userid','id' => 'userid','options' => $this->_tpl_vars['user_list'],'selected' => $this->_tpl_vars['fvalues']['userid']), $this);?>
</p>
<?php endif; ?>
		<p><label for="start_day"><?php echo $this->_tpl_vars['LANG']['DATE_START']; ?>
:</label> <?php echo smarty_function_html_options(array('name' => 'start_day','id' => 'start_day','options' => $this->_tpl_vars['day_list'],'selected' => $this->_tpl_vars['fvalues']['start_day']), $this);?>
&nbsp;<?php echo smarty_function_html_options(array('name' => 'start_month','options' => $this->_tpl_vars['month_list'],'selected' => $this->_tpl_vars['fvalues']['start_month']), $this);?>
&nbsp;<?php echo smarty_function_html_options(array('name' => 'start_year','options' => $this->_tpl_vars['year_list'],'selected' => $this->_tpl_vars['fvalues']['start_year']), $this);?>
</p>
		<p><label for="end_day"><?php echo $this->_tpl_vars['LANG']['DATE_END']; ?>
:</label> <?php echo smarty_function_html_options(array('name' => 'end_day','id' => 'end_day','options' => $this->_tpl_vars['day_list'],'selected' => $this->_tpl_vars['fvalues']['end_day']), $this);?>
&nbsp;<?php echo smarty_function_html_options(array('name' => 'end_month','options' => $this->_tpl_vars['month_list'],'selected' => $this->_tpl_vars['fvalues']['end_month']), $this);?>
&nbsp;<?php echo smarty_function_html_options(array('name' => 'end_year','options' => $this->_tpl_vars['year_list'],'selected' => $this->_tpl_vars['fvalues']['end_year']), $this);?>
</p>
		<p><label for="sentrecvd"><?php echo $this->_tpl_vars['LANG']['SENT_RECVD']; ?>
:</label> <?php echo smarty_function_html_options(array('name' => 'sentrecvd','id' => 'sentrecvd','options' => $this->_tpl_vars['sentrecvd_list'],'selected' => $this->_tpl_vars['fvalues']['sentrecvd']), $this);?>
</p>
	</div>
</div>

<div style="clear:both" align="center">
	<br />
	<input type="submit" class="inputsubmit" value="<?php echo $this->_tpl_vars['LANG']['SEARCH_TITLE']; ?>
" style="width: 15em" />&nbsp;<input type="reset" class="inputsubmit inputcancel" onclick="location.href='archive.php'" />
</div>

</form>

<br />

<div style="clear:both; margin-left:auto; margin-right:auto">
	<table border="0" width="<?php echo $this->_tpl_vars['WIDE_TABLE']; ?>
%" align="right" cellpadding="0" cellspacing="0">
		<tr><td colspan="9" align="left"><?php echo $this->_tpl_vars['results_string']; ?>
</td></tr>
		<tr>
			<th width="3%">#</th>
			<th width="14%"></th>
			<th align="left" width="20%"><?php echo $this->_tpl_vars['LANG']['CONTACT_HEADER_COMPANY']; ?>
</th>
			<th align="left" width="20%"><?php echo $this->_tpl_vars['LANG']['DESCRIPTION']; ?>
</th>
			<th><?php echo $this->_tpl_vars['LANG']['PN_PAGES']; ?>
</th>
			<th><?php echo $this->_tpl_vars['LANG']['CATEGORY']; ?>
</th>
			<th><?php echo $this->_tpl_vars['LANG']['DATE']; ?>
</th>		
<?php if ($this->_tpl_vars['SUPERUSER']): ?>
			<th><?php echo $this->_tpl_vars['LANG']['USER']; ?>
</th>
<?php endif; ?>
		</tr>
<?php unset($this->_sections['r']);
$this->_sections['r']['name'] = 'r';
$this->_sections['r']['loop'] = is_array($_loop=$this->_tpl_vars['archive']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<tr class="previewimg" name="<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['thumbnail']; ?>
" id="faxid_<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxid']; ?>
">
			<td align="center" class="archive-results"><?php if ($this->_tpl_vars['currentindex'] > 0): ?><?php echo $this->_sections['r']['index']+$this->_tpl_vars['currentindex']; ?>
<?php else: ?><?php echo $this->_sections['r']['iteration']; ?>
<?php endif; ?></td>
			<td align="left"><a href="javascript:mkpdfwin('pdf.php?fid=<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxid']; ?>
');"><img src="images/pdf-sm.png" border=0 title="<?php echo $this->_tpl_vars['LANG']['DOWNLOAD_PDF']; ?>
" /></a>
<?php if (( $this->_tpl_vars['ENABLE_DL_TIFF'] && ! $this->_tpl_vars['archive'][$this->_sections['r']['index']]['userid'] )): ?>
			<a href="file.php?file=<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['tiffpath']; ?>
" target="_blank"><img src="images/tiff-sm.png" border=0 title="<?php echo $this->_tpl_vars['LANG']['DOWNLOAD_TIFF']; ?>
" /></a>
<?php endif; ?>
			<a href="refax.php?fid=<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxid']; ?>
"><img src="images/refax-sm.png" border=0 title="<?php echo $this->_tpl_vars['LANG']['REPLY_TO_FAX']; ?>
" /></a>
			<a href="email.php?fid=<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxid']; ?>
"><img src="images/email-sm.png" border=0 title="<?php echo $this->_tpl_vars['LANG']['EMAIL_PDF']; ?>
" /></a>
			<a href="javascript:dialogNote(<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxid']; ?>
);"><img src="images/note-sm.png" border=0 title="<?php echo $this->_tpl_vars['LANG']['ADD_NOTE_FAX']; ?>
" /></a>
<?php if ($this->_tpl_vars['SESSION_CAN_DEL']): ?>
			<a href="javascript:dialogDeleteFax(<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxid']; ?>
,0);"><img src="images/remove-sm.png" alt="" title="<?php echo $this->_tpl_vars['LANG']['DELETE_FAX']; ?>
" /></a>
<?php endif; ?>
			</td>
			<td align="left" class="archive-company">

<?php if (( $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxnum_loadby'] == 'faxnumid' )): ?>
	<?php if (( $this->_tpl_vars['archive'][$this->_sections['r']['index']]['assign_type'] == 'x' || ! $this->_tpl_vars['archive']['faxnum_cid'] )): ?>
			<a href="javascript:mkwin('assignx.php?fid=<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxid']; ?>
');" title="<?php echo $this->_tpl_vars['LANG']['ASSIGN_CNAME']; ?>
"><?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['company_name']; ?>
 <img src="images/contacts-sm.png" alt="" /></a>
	<?php elseif (( $this->_tpl_vars['archive'][$this->_sections['r']['index']]['assign_type'] == 'c' )): ?>
			<a href="javascript:mkwin('assign.php?cid=<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxnum_cid']; ?>
');" title="<?php echo $this->_tpl_vars['LANG']['ASSIGN_CNAME']; ?>
"><?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['company_name']; ?>
 <?php echo smarty_function_html_image(array('file' => "images/contacts-sm.png"), $this);?>
</a>
	<?php else: ?>
			<a href="addressbook.php?abook_id=<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxnum_cid']; ?>
"><?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['company_name']; ?>
</a>
	<?php endif; ?>
<?php else: ?>
	<?php if (( is_array ( $this->_tpl_vars['archive'][$this->_sections['r']['index']]['mult_nums'] ) )): ?>
			<form action="setcompany.php" method="post">
			<?php echo smarty_function_html_options(array('name' => 'faxnumid','options' => $this->_tpl_vars['archive'][$this->_sections['r']['index']]['mult_nums']), $this);?>
&nbsp;<input type="submit" class="inputsubmit" value="<?php echo $this->_tpl_vars['LANG']['SELECT']; ?>
" />
			<input type="hidden" name="fid" value="<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxid']; ?>
" />
			</form>
	<?php elseif (( $this->_tpl_vars['archive'][$this->_sections['r']['index']]['assign_type'] == 'c' )): ?>
			<a href="javascript:mkwin('assign.php?cid=<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxnum_cid']; ?>
');" title="<?php echo $this->_tpl_vars['LANG']['ASSIGN_CNAME']; ?>
"><?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['company_name']; ?>
 <?php echo smarty_function_html_image(array('file' => "images/contacts-sm.png"), $this);?>
</a>
	<?php else: ?>
			<a href="addressbook.php?abook_id=<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxnum_cid']; ?>
"><?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['company_name']; ?>
</a>
	<?php endif; ?>
<?php endif; ?>
			</td>
			<td align="left" class="archive-description"><?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['description']; ?>
</td>
			<td align="center" class="archive-results"><?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['pages']; ?>
</td>
			<td align="center" class="archive-results"><?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxcategory']; ?>
</td>
			<td align="center" class="archive-results"><small><?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['archstamp']; ?>
</small></td>
			
<?php if ($this->_tpl_vars['SUPERUSER']): ?>
			<td align="center" class="archive-results"><?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['archiveuser']; ?>
</td>
<?php endif; ?>
			<td align="center"><a href="javascript:mkpdfwin('txreport.php?fid=<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxid']; ?>
')"><?php if ($this->_tpl_vars['archive'][$this->_sections['r']['index']]['modemdev']): ?><img src="images/rcvdfax.png" border=0 title="FaxID: <?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxid']; ?>
 [<?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['modemdev']; ?>
]" /><?php else: ?><img src="images/sentfax.png" border=0 title="FaxID: <?php echo $this->_tpl_vars['archive'][$this->_sections['r']['index']]['faxid']; ?>
" /><?php endif; ?></a></td>
		</tr>
<?php endfor; else: ?>
		<tr><td align="center" colspan="9"><br /><?php echo $this->_tpl_vars['LANG']['NOKEYWORD']; ?>
<br /><br /></td></tr>
<?php endif; ?>
	</table>
    <div style="clear:both"></div>
</div>

<div id="faxpreview"></div>

<script language="javascript" type="text/javascript">
// <![CDATA[
	$('regexp').focus();
	var myfilter = new CompanyList ('companyid', 'regexp');
	myfilter.setSelected (<?php echo $this->_tpl_vars['fvalues']['companyid']; ?>
);
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

<br />

<?php if ($this->_tpl_vars['numpages']): ?>
<div align="center">
<?php unset($this->_sections['p']);
$this->_sections['p']['name'] = 'p';
$this->_sections['p']['loop'] = is_array($_loop=$this->_tpl_vars['numpages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['p']['show'] = true;
$this->_sections['p']['max'] = $this->_sections['p']['loop'];
$this->_sections['p']['step'] = 1;
$this->_sections['p']['start'] = $this->_sections['p']['step'] > 0 ? 0 : $this->_sections['p']['loop']-1;
if ($this->_sections['p']['show']) {
    $this->_sections['p']['total'] = $this->_sections['p']['loop'];
    if ($this->_sections['p']['total'] == 0)
        $this->_sections['p']['show'] = false;
} else
    $this->_sections['p']['total'] = 0;
if ($this->_sections['p']['show']):

            for ($this->_sections['p']['index'] = $this->_sections['p']['start'], $this->_sections['p']['iteration'] = 1;
                 $this->_sections['p']['iteration'] <= $this->_sections['p']['total'];
                 $this->_sections['p']['index'] += $this->_sections['p']['step'], $this->_sections['p']['iteration']++):
$this->_sections['p']['rownum'] = $this->_sections['p']['iteration'];
$this->_sections['p']['index_prev'] = $this->_sections['p']['index'] - $this->_sections['p']['step'];
$this->_sections['p']['index_next'] = $this->_sections['p']['index'] + $this->_sections['p']['step'];
$this->_sections['p']['first']      = ($this->_sections['p']['iteration'] == 1);
$this->_sections['p']['last']       = ($this->_sections['p']['iteration'] == $this->_sections['p']['total']);
?>
	<?php if ($this->_sections['p']['first']): ?>
		<?php if ($this->_tpl_vars['currentpage'] == 0): ?>
			<img src="images/stock_left.png" title="" align="absmiddle" />
		<?php else: ?>
			<?php $this->assign('prev', ($this->_tpl_vars['currentpage']-1)); ?>
			<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['uri'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'XXPAGEINDEXXX', $this->_tpl_vars['prev']) : smarty_modifier_replace($_tmp, 'XXPAGEINDEXXX', $this->_tpl_vars['prev'])); ?>
"><img src="images/stock_left.png" title="" align="absmiddle" /></a>
		<?php endif; ?>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['currentpage'] == $this->_sections['p']['index']): ?>
		<?php echo $this->_sections['p']['iteration']; ?>

	<?php else: ?>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['uri'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'XXPAGEINDEXXX', $this->_sections['p']['index']) : smarty_modifier_replace($_tmp, 'XXPAGEINDEXXX', $this->_sections['p']['index'])); ?>
"><?php echo $this->_sections['p']['iteration']; ?>
</a>
	<?php endif; ?>

	<?php if (! $this->_sections['p']['last']): ?>|<?php endif; ?>

	<?php if ($this->_sections['p']['last']): ?>
		<?php if ($this->_tpl_vars['currentpage'] == $this->_sections['p']['index']): ?>
			<img src="images/stock_right.png" title="" align="absmiddle" />
		<?php else: ?>
			<?php $this->assign('next', ($this->_tpl_vars['currentpage']+1)); ?>
			<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['uri'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'XXPAGEINDEXXX', $this->_tpl_vars['next']) : smarty_modifier_replace($_tmp, 'XXPAGEINDEXXX', $this->_tpl_vars['next'])); ?>
"><img src="images/stock_right.png" title="" align="absmiddle" /></a>
		<?php endif; ?>
	<?php endif; ?>
<?php endfor; endif; ?>
</div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>