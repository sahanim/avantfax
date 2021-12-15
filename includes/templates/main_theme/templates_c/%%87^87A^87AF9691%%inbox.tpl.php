<?php /* Smarty version 2.6.25, created on 2021-09-12 16:29:12
         compiled from inbox.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'inbox.tpl', 4, false),array('modifier', 'default', 'inbox.tpl', 73, false),array('function', 'counter', 'inbox.tpl', 5, false),array('function', 'html_image', 'inbox.tpl', 50, false),array('function', 'html_options', 'inbox.tpl', 57, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="modem-status-div" align="center">
<?php $this->assign('len', count($this->_tpl_vars['modemlist'])); ?>
<?php echo smarty_function_counter(array('assign' => 'cnt','print' => false,'start' => 0), $this);?>

<?php unset($this->_sections['r']);
$this->_sections['r']['name'] = 'r';
$this->_sections['r']['loop'] = is_array($_loop=$this->_tpl_vars['modemlist']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<span class="modem-alias"><?php echo $this->_tpl_vars['modemlist'][$this->_sections['r']['index']]['alias']; ?>
</span> <span class="modem-status" id="<?php echo $this->_tpl_vars['modemlist'][$this->_sections['r']['index']]['device']; ?>
">[<span class="<?php echo $this->_tpl_vars['modemlist'][$this->_sections['r']['index']]['status']['class']; ?>
"><?php echo $this->_tpl_vars['modemlist'][$this->_sections['r']['index']]['status']['status']; ?>
</span>]</span>
	<?php echo smarty_function_counter(array(), $this);?>

	<?php if ($this->_tpl_vars['cnt'] % 4 == 0): ?><?php echo smarty_function_counter(array('start' => 0), $this);?>
<br /><?php endif; ?>
<?php endfor; endif; ?>
</div>

<?php $this->assign('mselectdim', '24'); ?>
<?php if ($this->_tpl_vars['numfaxesinbox']): ?>
<div align="center"><input type="checkbox" onClick="selectAllFaxes();" id="selectAll" /> <label for="selectAll"><?php echo $this->_tpl_vars['LANG']['SELECT_ALL_FAXES']; ?>
</label>&nbsp;&nbsp;&nbsp;<a href="javascript:archiveSelectedFaxes();"><img src="images/folder.png" align="absmiddle" width="<?php echo $this->_tpl_vars['mselectdim']; ?>
" height="<?php echo $this->_tpl_vars['mselectdim']; ?>
" alt="" title="<?php echo $this->_tpl_vars['LANG']['ARCHIVE_FAX']; ?>
" /></a><?php if ($this->_tpl_vars['SESSION_CAN_DEL']): ?>&nbsp;&nbsp;&nbsp;<a href="javascript:dialogDeleteSelectedFaxes();"><img src="images/remove.png" align="absmiddle" width="<?php echo $this->_tpl_vars['mselectdim']; ?>
" height="<?php echo $this->_tpl_vars['mselectdim']; ?>
" alt="" title="<?php echo $this->_tpl_vars['LANG']['DELETE_FAX']; ?>
" /></a><?php endif; ?></div>
<br />
<?php endif; ?>

<?php $this->assign('old_alias', ""); ?>
<?php unset($this->_sections['r']);
$this->_sections['r']['name'] = 'r';
$this->_sections['r']['loop'] = is_array($_loop=$this->_tpl_vars['inbox']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php if ($this->_tpl_vars['INBOX_LIST_MODEM']): ?>
	<?php if ($this->_tpl_vars['inbox'][$this->_sections['r']['index']]['modem_alias'] != $this->_tpl_vars['old_alias']): ?>
		<?php $this->assign('old_alias', $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['modem_alias']); ?>
		<?php if ($this->_sections['r']['index']): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "div_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<br />
		<?php endif; ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "div_top.tpl", 'smarty_include_vars' => array('div_size' => 60)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
<?php else: ?>
	<?php if ($this->_sections['r']['index'] == 0): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "div_top.tpl", 'smarty_include_vars' => array('div_size' => 60)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
<?php endif; ?>

<div class="inbox_div" id="faxid_<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxid']; ?>
">
	<div class="inbox_thumbnail">
		<div class="inbox_thumbnail_container">
			<a href="viewfax.php?fid=<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxid']; ?>
"><img src="<?php if ($this->_tpl_vars['inbox'][$this->_sections['r']['index']]['thumbnail']): ?>file.php?file=<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['thumbnail']; ?>
<?php else: ?><?php echo $this->_tpl_vars['NOTHUMB']; ?>
<?php endif; ?>" style="border: 1px #FFCC99 dashed" title="<?php echo $this->_tpl_vars['LANG']['PN_PAGE']; ?>
 1 <?php echo $this->_tpl_vars['LANG']['PN_OF']; ?>
 <?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['pages']; ?>
" alt="" /></a>
		</div>
		<div class="inbox_checkbox"><input type="checkbox" name="removefax[]" value="<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxid']; ?>
" /></div>
	</div>
	<div class="inbox_content_div">
		<div class="inbox_data_div">
			<div class="inbox_from_date">
				<?php if (( $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxnum_loadby'] == 'faxnumid' )): ?>
					<?php if (( $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['assign_type'] == 'x' || ! $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxnum_cid'] )): ?>
						<a href="javascript:mkwin('assignx.php?fid=<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxid']; ?>
');" title="<?php echo $this->_tpl_vars['LANG']['ASSIGN_CNAME']; ?>
"><?php echo $this->_tpl_vars['LANG']['FROM']; ?>
: <?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['company_name']; ?>
 <img src="images/contacts-sm.png" alt="" /></a>
					<?php elseif (( $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['assign_type'] == 'c' )): ?>
						<a href="javascript:mkwin('assign.php?cid=<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxnum_cid']; ?>
');" title="<?php echo $this->_tpl_vars['LANG']['ASSIGN_CNAME']; ?>
"><?php echo $this->_tpl_vars['LANG']['FROM']; ?>
: <?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['company_name']; ?>
 <?php echo smarty_function_html_image(array('file' => "images/contacts-sm.png"), $this);?>
</a>
					<?php else: ?>
						<a href="addressbook.php?abook_id=<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxnum_cid']; ?>
"><?php echo $this->_tpl_vars['LANG']['FROM']; ?>
</a>: <?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['company_name']; ?>

					<?php endif; ?>
				<?php else: ?>
					<?php if (is_array ( $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['mult_nums'] )): ?>
						<form action="setcompany.php" method="post">
						<?php echo smarty_function_html_options(array('name' => 'faxnumid','options' => $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['mult_nums']), $this);?>
&nbsp;<input type="submit" class="inputsubmit" value="<?php echo $this->_tpl_vars['LANG']['SELECT']; ?>
" />
						<input type="hidden" name="fid" value="<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxid']; ?>
" />
						<input type="hidden" name="_submit_check" value="1" />
						</form>
					<?php elseif (( $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['assign_type'] == 'c' )): ?>
						<a href="javascript:mkwin('assign.php?cid=<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxnum_cid']; ?>
');" title="<?php echo $this->_tpl_vars['LANG']['ASSIGN_CNAME']; ?>
"><?php echo $this->_tpl_vars['LANG']['FROM']; ?>
: <?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['company_name']; ?>
 <?php echo smarty_function_html_image(array('file' => "images/contacts-sm.png"), $this);?>
</a>
					<?php else: ?>
						<a href="addressbook.php?abook_id=<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxnum_cid']; ?>
"><?php echo $this->_tpl_vars['LANG']['FROM']; ?>
</a>: <?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['company_name']; ?>

					<?php endif; ?>
				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['inbox'][$this->_sections['r']['index']]['description']): ?>&nbsp;- <?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['description']; ?>
<?php endif; ?>
				<br /><?php echo $this->_tpl_vars['LANG']['DATE']; ?>
: <?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['archstamp']; ?>

			</div>
			<div class="inbox_modem_pages">
			<?php if ($this->_tpl_vars['ENABLE_DID_ROUTING']): ?>
				<?php echo $this->_tpl_vars['LANG']['GROUP']; ?>
: <?php echo ((is_array($_tmp=@$this->_tpl_vars['inbox'][$this->_sections['r']['index']]['did_group'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['LANG']['DIDROUTE_CATCHALL']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['LANG']['DIDROUTE_CATCHALL'])); ?>

			<?php else: ?>
				<?php echo $this->_tpl_vars['LANG']['MODEM_DEVICE']; ?>
: <?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['modem_alias']; ?>

			<?php endif; ?>
				<br /><?php echo $this->_tpl_vars['LANG']['PN_PAGES']; ?>
: <?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['pages']; ?>

			</div>
		</div>
		<div class="inbox_menu_div">
			<span class="inbox_item"><a href="viewfax.php?fid=<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxid']; ?>
"><img src="images/viewfax.png" alt="" title="<?php echo $this->_tpl_vars['LANG']['VIEW_FAX']; ?>
" /></a></span>
			<span class="inbox_item"><a href="rotate.php?fid=<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxid']; ?>
"><img src="images/rotate.png" alt="" title="<?php echo $this->_tpl_vars['LANG']['ROTATE_FAX']; ?>
" /></a></span>
			<span class="inbox_item"><a href="javascript:mkpdfwin('pdf.php?fid=<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxid']; ?>
');"><img src="images/pdf.png" alt="" title="<?php echo $this->_tpl_vars['LANG']['DOWNLOAD_PDF']; ?>
" /></a></span>
<?php if ($this->_tpl_vars['ENABLE_DL_TIFF']): ?>
			<span class="inbox_item"><a href="file.php?file=<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['tiffpath']; ?>
" target="_blank"><img src="images/tiff.png" alt="" title="<?php echo $this->_tpl_vars['LANG']['DOWNLOAD_TIFF']; ?>
" /></a></span>
<?php endif; ?>
			<span class="inbox_item"><a href="refax.php?fid=<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxid']; ?>
"><img src="images/refax.png" alt="" title="<?php echo $this->_tpl_vars['LANG']['REPLY_TO_FAX']; ?>
" /></a></span>
			<span class="inbox_item"><a href="email.php?fid=<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxid']; ?>
"><img src="images/email.png" alt="" title="<?php echo $this->_tpl_vars['LANG']['EMAIL_PDF']; ?>
" /></a></span>
			<span class="inbox_item"><a href="javascript:dialogNote(<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxid']; ?>
);"><img src="images/note.png" alt="" title="<?php echo $this->_tpl_vars['LANG']['ADD_NOTE_FAX']; ?>
" /></a></span>
			<span class="inbox_item"><a href="javascript:archiveFax(<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxid']; ?>
,0);"><img src="images/folder.png" alt="" title="<?php echo $this->_tpl_vars['LANG']['ARCHIVE_FAX']; ?>
" class="imgRoll images/folder-accept.png" /></a></span>
<?php if ($this->_tpl_vars['SESSION_CAN_DEL']): ?>
			<span class="inbox_item"><a href="javascript:dialogDeleteFax(<?php echo $this->_tpl_vars['inbox'][$this->_sections['r']['index']]['faxid']; ?>
,0);"><img src="images/remove.png" alt="" title="<?php echo $this->_tpl_vars['LANG']['DELETE_FAX']; ?>
" class="imgRoll images/remove-full.png" /></a></span>
<?php endif; ?>
		</div>
	</div>
	<div class="inbox_clear_div"></div>
</div>

<?php endfor; else: ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "div_top.tpl", 'smarty_include_vars' => array('div_size' => 60)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<div align="center"><?php if ($this->_tpl_vars['numpages']): ?><?php echo $this->_tpl_vars['currentindex']; ?>
 - <?php echo $this->_tpl_vars['currentmax']; ?>
 <?php endif; ?>(<span id="inboxcount"><?php echo $this->_tpl_vars['numfaxesinbox']; ?>
</span> <?php echo $this->_tpl_vars['LANG']['FAXES']; ?>
)</div>
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
			<a href="inbox.php?pageindex=<?php echo $this->_tpl_vars['prev']; ?>
"><img src="images/stock_left.png" title="" align="absmiddle" /></a>
		<?php endif; ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['currentpage'] == $this->_sections['p']['index']): ?>
		<?php echo $this->_sections['p']['iteration']; ?>

	<?php else: ?>
		<a href="inbox.php?pageindex=<?php echo $this->_sections['p']['index']; ?>
"><?php echo $this->_sections['p']['iteration']; ?>
</a>
	<?php endif; ?>

	<?php if (! $this->_sections['p']['last']): ?>|<?php endif; ?>

	<?php if ($this->_sections['p']['last']): ?>
		<?php if ($this->_tpl_vars['currentpage'] == $this->_sections['p']['index']): ?>
			<img src="images/stock_right.png" title="" align="absmiddle" />
		<?php else: ?>
			<?php $this->assign('next', ($this->_tpl_vars['currentpage']+1)); ?>
			<a href="inbox.php?pageindex=<?php echo $this->_tpl_vars['next']; ?>
"><img src="images/stock_right.png" title="" align="absmiddle" /></a>
		<?php endif; ?>
	<?php endif; ?>
<?php endfor; endif; ?>
</div>
<?php endif; ?>

<script type="text/javascript" language="javascript">
// <![CDATA[
	function initInbox () <?php echo '{'; ?>

		checkInbox (<?php echo $this->_tpl_vars['numfaxesinbox']; ?>
);
	}
	
	addLoadEvent (initInbox);
	
<?php if ($this->_tpl_vars['FOCUS_ON_NEW_FAX']): ?>
	InboxTakeFocus = true;
<?php endif; ?>
<?php if ($this->_tpl_vars['FOCUS_ON_NEW_FAX_POPUP']): ?>
	InboxDoPopupNewFax = true;
<?php endif; ?>
// ]]>
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>