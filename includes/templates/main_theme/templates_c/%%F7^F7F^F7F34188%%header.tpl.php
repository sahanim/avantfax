<?php /* Smarty version 2.6.25, created on 2021-09-12 16:29:12
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_image', 'header.tpl', 62, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo $this->_tpl_vars['LANG']['DIRECTION']; ?>
">
<head>
<title>- AvantFAX -</title>
<meta http-equiv="Content-Type" content="text/html; <?php echo $this->_tpl_vars['LANG']['ISO']; ?>
" />
<meta http-equiv="imagetoolbar" content="false" />
<meta name="copyright" content="AvantFAX&reg;" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="description" content="AvantFAX <?php echo $this->_tpl_vars['AVANTFAX_VERSION']; ?>
" />
<link rel="alternate" type="application/rss+xml" href="http://www.avantfax.com/rss.php" title="The latest AvantFAX news" />
<link rel="search" type="application/opensearchdescription+xml" href="search.php" title="Archive search" />
<link rel="stylesheet" href="interface.css" type="text/css" />
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css" /><![endif]-->
<link rel="stylesheet" href="css/custom/custom.css" type="text/css" />
<script language="javascript" type="text/javascript" src="js/scriptaculous-js/lib/prototype.js"></script>
<script language="javascript" type="text/javascript" src="js/scriptaculous-js/src/scriptaculous.js"></script>
<script language="javascript" type="text/javascript" src="js/avantfax.js"></script>
<script language="javascript" type="text/javascript" src="js/xhrobject.js"></script>
<script language="javascript" type="text/javascript" src="js/dialog.js"></script>
<?php echo $this->_tpl_vars['INC_LIST']; ?>

<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body dir="<?php echo $this->_tpl_vars['LANG']['DIRECTION']; ?>
">
<div id="nav-top">
	<div id="menu-area">
		<div id="avantfax-logo">
			<a href="index.php" accesskey="a"><img src="images/clarity-logo-big.png" align="bottom" alt="<?php echo $this->_tpl_vars['LANG']['MENU_INBOX']; ?>
" title="AvantFAX <?php echo $this->_tpl_vars['AVANTFAX_VERSION']; ?>
" /></a>
		</div>
		
		<div id="main-menu">
			<div class="main-menu-item" align="center">
				<a href="inbox.php" accesskey="i" title="<?php echo $this->_tpl_vars['LANG']['MENU_INBOX']; ?>
" class="main-menu-item"><img src="images/inbox.png" alt="<?php echo $this->_tpl_vars['LANG']['MENU_INBOX']; ?>
" /><br />
				<?php echo $this->_tpl_vars['LANG']['MENU_INBOX']; ?>
 <?php if ($this->_tpl_vars['numfaxesinbox']): ?>(<?php echo $this->_tpl_vars['numfaxesinbox']; ?>
)<?php endif; ?></a>
			</div>
			<div class="main-menu-item" align="center">
				<a href="sendfax.php" accesskey="s" title="<?php echo $this->_tpl_vars['LANG']['MENU_SENDFAX']; ?>
" class="main-menu-item"><img src="images/sendfax.png" alt="<?php echo $this->_tpl_vars['LANG']['MENU_SENDFAX']; ?>
" /><br />
				<?php echo $this->_tpl_vars['LANG']['MENU_SENDFAX']; ?>
</a>
			</div>
			<div class="main-menu-item" align="center">
				<a href="archive.php" accesskey="a" title="<?php echo $this->_tpl_vars['LANG']['MENU_ARCHIVE']; ?>
" class="main-menu-item"><img src="images/archive.png" alt="<?php echo $this->_tpl_vars['LANG']['MENU_ARCHIVE']; ?>
" /><br />
				<?php echo $this->_tpl_vars['LANG']['MENU_ARCHIVE']; ?>
</a>
			</div>
			<div class="main-menu-item" align="center">
				<a href="outbox.php" accesskey="o" title="<?php echo $this->_tpl_vars['LANG']['MENU_OUTBOX']; ?>
" class="main-menu-item"><img src="images/outbox.png" alt="<?php echo $this->_tpl_vars['LANG']['MENU_OUTBOX']; ?>
" /><br />
				<?php echo $this->_tpl_vars['LANG']['MENU_OUTBOX']; ?>
</a>
			</div>
			<div class="main-menu-item" align="center">
				<a href="addressbook.php" accesskey="c" title="<?php echo $this->_tpl_vars['LANG']['MENU_CONTACTS']; ?>
" class="main-menu-item"><img src="images/contacts.png" alt="<?php echo $this->_tpl_vars['LANG']['MENU_CONTACTS']; ?>
" /><br />
				<?php echo $this->_tpl_vars['LANG']['MENU_CONTACTS']; ?>
</a>
			</div>
		</div>
		
		<div id="menu-right">
			<p><span class="strorange"><?php echo $this->_tpl_vars['LANG']['USER']; ?>
:</span>&nbsp;<?php echo $this->_tpl_vars['USER_FULLNAME']; ?>
</p>
			<p align="center"><a href="settings.php" accesskey="p"><?php echo $this->_tpl_vars['LANG']['BUTTON_SETTINGS']; ?>
</a> | <a href="logout.php" accesskey="l"><?php echo $this->_tpl_vars['LANG']['BUTTON_LOGOUT']; ?>
</a></p>
<?php if ($this->_tpl_vars['SHOWSERVER_DETAILS']): ?>
			<p align="center" class="servername"><?php echo $this->_tpl_vars['AVANTFAX_SERVERNAME']; ?>
</p>
<?php endif; ?>
			<p align="center"><?php if ($this->_tpl_vars['SUPERUSER']): ?><?php echo smarty_function_html_image(array('file' => 'images/su.gif'), $this);?>
<?php endif; ?> <?php if ($this->_tpl_vars['IS_ADMIN']): ?><a href="admin/"><?php echo smarty_function_html_image(array('file' => 'images/config.png'), $this);?>
</a><?php endif; ?></p>
		</div>
	</div>
</div>

<div id="scrollingcontent">
<div id="innerbox">