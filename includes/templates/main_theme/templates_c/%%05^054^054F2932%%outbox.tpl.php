<?php /* Smarty version 2.6.25, created on 2021-09-22 06:29:10
         compiled from outbox.tpl */ ?>
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
<h1 align="center"><?php echo $this->_tpl_vars['LANG']['MENU_OUTBOX']; ?>
</h1>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<th width='40'>JID</th>
		<th><?php echo $this->_tpl_vars['LANG']['PRIORITY']; ?>
</th>
		<th><?php echo $this->_tpl_vars['LANG']['USER']; ?>
</th>
		<th><?php echo $this->_tpl_vars['LANG']['CONTACT_HEADER_COMPANY']; ?>
</th>
		<th><?php echo $this->_tpl_vars['LANG']['PN_PAGES']; ?>
</th>
		<th><?php echo $this->_tpl_vars['LANG']['NUM_DIALS']; ?>
</th>
		<th>TTS</th>
		<th>Status</th>
		<th>&nbsp;</th>
	</tr>
<?php unset($this->_sections['r']);
$this->_sections['r']['name'] = 'r';
$this->_sections['r']['loop'] = is_array($_loop=$this->_tpl_vars['queue']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<tr align="center" class="highlight">
		<td><?php echo $this->_tpl_vars['queue'][$this->_sections['r']['index']]['jid']; ?>
</td>
		<td><?php echo $this->_tpl_vars['queue'][$this->_sections['r']['index']]['pri']; ?>
</td>
		<td><?php echo $this->_tpl_vars['queue'][$this->_sections['r']['index']]['user']; ?>
</td>
		<td><?php echo $this->_tpl_vars['queue'][$this->_sections['r']['index']]['company']; ?>
</td>
		<td><?php echo $this->_tpl_vars['queue'][$this->_sections['r']['index']]['pages']; ?>
</td>
		<td><?php echo $this->_tpl_vars['queue'][$this->_sections['r']['index']]['dials']; ?>
</td>
		<td><?php echo $this->_tpl_vars['queue'][$this->_sections['r']['index']]['tts']; ?>
</td>
		<td><?php echo $this->_tpl_vars['queue'][$this->_sections['r']['index']]['status']; ?>
</td>
		<td>
			<span title="<?php echo $this->_tpl_vars['LANG']['MODIFY_FAXJOB']; ?>
"><input type="button" value="&radic;" class="inputsubmit" id="fabtn_<?php echo $this->_tpl_vars['queue'][$this->_sections['r']['index']]['jid']; ?>
" onclick="dialogFaxAlter(<?php echo $this->_tpl_vars['queue'][$this->_sections['r']['index']]['jid']; ?>
,0,'<?php echo $this->_tpl_vars['queue'][$this->_sections['r']['index']]['owner']; ?>
')" /></span>
			<span title="<?php echo $this->_tpl_vars['LANG']['KILL_JOB']; ?>
"><input type="button" value="X" class="inputsubmit" onclick="if (confirm ('<?php echo $this->_tpl_vars['LANG']['KILL_JOB']; ?>
 <?php echo $this->_tpl_vars['queue'][$this->_sections['r']['index']]['jid']; ?>
')) <?php echo '{'; ?>
this.disabled = true; location.href='outbox.php?kill=<?php echo $this->_tpl_vars['queue'][$this->_sections['r']['index']]['jid']; ?>
'<?php echo '}'; ?>
" /></span>
		</td>
	</tr>
<?php endfor; endif; ?>

<?php unset($this->_sections['r']);
$this->_sections['r']['name'] = 'r';
$this->_sections['r']['loop'] = is_array($_loop=$this->_tpl_vars['failed_queue']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<tr align="center" class="highlight">
		<td><?php echo $this->_tpl_vars['failed_queue'][$this->_sections['r']['index']]['jid']; ?>
</td>
		<td><?php echo $this->_tpl_vars['failed_queue'][$this->_sections['r']['index']]['pri']; ?>
</td>
		<td><?php echo $this->_tpl_vars['failed_queue'][$this->_sections['r']['index']]['user']; ?>
</td>
		<td><?php echo $this->_tpl_vars['failed_queue'][$this->_sections['r']['index']]['company']; ?>
</td>
		<td><?php echo $this->_tpl_vars['failed_queue'][$this->_sections['r']['index']]['pages']; ?>
</td>
		<td><?php echo $this->_tpl_vars['failed_queue'][$this->_sections['r']['index']]['dials']; ?>
</td>
		<td><?php echo $this->_tpl_vars['failed_queue'][$this->_sections['r']['index']]['tts']; ?>
</td>
		<td><?php echo $this->_tpl_vars['failed_queue'][$this->_sections['r']['index']]['status']; ?>
</td>
		<td>
			<span title="<?php echo $this->_tpl_vars['LANG']['MODIFY_FAXJOB']; ?>
"><input type="button" value="&crarr;" class="inputsubmit" id="fabtn_<?php echo $this->_tpl_vars['failed_queue'][$this->_sections['r']['index']]['jid']; ?>
" onclick="dialogFaxAlter(<?php echo $this->_tpl_vars['failed_queue'][$this->_sections['r']['index']]['jid']; ?>
,1,'<?php echo $this->_tpl_vars['failed_queue'][$this->_sections['r']['index']]['owner']; ?>
')" /></span>
			<span title="<?php echo $this->_tpl_vars['LANG']['KILL_JOB']; ?>
"><input type="button" value="X" class="inputsubmit" onclick="if (confirm ('<?php echo $this->_tpl_vars['LANG']['KILL_JOB']; ?>
 <?php echo $this->_tpl_vars['failed_queue'][$this->_sections['r']['index']]['jid']; ?>
')) <?php echo '{'; ?>
this.disabled = true; location.href='outbox.php?kill=<?php echo $this->_tpl_vars['failed_queue'][$this->_sections['r']['index']]['jid']; ?>
'<?php echo '}'; ?>
" /></span>
		</td>
	</tr>
<?php endfor; endif; ?>

</table>
<div align="center"><?php echo $this->_tpl_vars['queue_count']; ?>
 <?php echo $this->_tpl_vars['LANG']['FAXES']; ?>
</div>
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