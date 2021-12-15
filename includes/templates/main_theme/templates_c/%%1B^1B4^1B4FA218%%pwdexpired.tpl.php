<?php /* Smarty version 2.6.25, created on 2021-09-12 16:26:58
         compiled from pwdexpired.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_image', 'pwdexpired.tpl', 31, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo $this->_tpl_vars['LANG']['DIRECTION']; ?>
">
<head>
<title>- AvantFAX - Login</title>
<meta http-equiv="Content-Type" content="text/html; <?php echo $this->_tpl_vars['LANG']['ISO']; ?>
" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="imagetoolbar" content="false" />
<meta name="copyright" content="AvantFAX&reg;" />
<meta name="keywords" content="AvantFAX <?php echo $this->_tpl_vars['AVANTFAX_VERSION']; ?>
, HylaFAX, faxcover, fax software, faxing software, fax server, network fax" />
<meta name="description" content="Web 2.0 HylaFAX management" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="css/login.css" type="text/css" />
<link rel="stylesheet" href="css/forms.css" type="text/css" />
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css" /><![endif]-->
<link rel="stylesheet" href="css/custom/custom.css" type="text/css" />
<script language="javascript" type="text/javascript" src="js/scriptaculous-js/lib/prototype.js"></script>
<script language="javascript" type="text/javascript" src="js/scriptaculous-js/src/scriptaculous.js"></script>
</head>
<body>

<div id="main">
	<div id="top"></div>
	
	<div id="header">
		<div style="position: relative; float: left">:: AvantFAX ::</div>
		
		<div style="position: relative; float: left; text-align: center; width: 40em; margin-left: auto; margin-right: auto">&nbsp;</div>
		
		<div style="position: relative; float: right; clear: right"><a href="http://www.avantfax.com" target="_blank"><?php echo smarty_function_html_image(array('file' => "images/clarity-logo-big.png"), $this);?>
</a></div>
	</div>
	
	<div id="content">
		<div style="float:left; position:relative; width: 18em; margin-top: 10em">
			<p><?php echo $this->_tpl_vars['LANG']['PWD_NEEDS_RESET']; ?>
<br /><?php echo $this->_tpl_vars['LANG']['PWD_REQUIREMENTS']; ?>
</p>
			<?php if ($this->_tpl_vars['error']): ?><div class="error"><?php echo $this->_tpl_vars['error']; ?>
</div><?php endif; ?>
		</div>
		
		<div style="height: 35em; background-image: url(images/line.gif); background-repeat:no-repeat; width:4em; position: relative; float: left; margin-left: auto; margin-right:auto; margin-bottom: 1em;"></div>
		
		<div style="width: 18em; position: relative; float: left; margin-top: 10em">
			<form action="<?php echo $this->_supers['server']['SCRIPT_NAME']; ?>
" method="post">
				<p><label for="oldpwd"><?php echo $this->_tpl_vars['LANG']['OPASS']; ?>
:</label><br /><br /><input type="password" name="oldpwd" id="oldpwd" maxlength="<?php echo $this->_tpl_vars['MAX_PASSWD_SIZE']; ?>
" style="width: 10em" /></p>
				<br />
				<p><label for="newpwd"><?php echo $this->_tpl_vars['LANG']['NPASS']; ?>
:</label><br /><br /><input type="password" name="newpwd" id="newpwd" maxlength="<?php echo $this->_tpl_vars['MAX_PASSWD_SIZE']; ?>
" style="width: 10em" /></p>
				<br />
				<p><label for="conpwd"><?php echo $this->_tpl_vars['LANG']['VPASS']; ?>
:</label><br /><br /><input type="password" name="conpwd" id="conpwd" maxlength="<?php echo $this->_tpl_vars['MAX_PASSWD_SIZE']; ?>
" style="width: 10em" /></p>
				<br />
				<input type="submit" class="inputsubmit" value="<?php echo $this->_tpl_vars['LANG']['UPDATE']; ?>
" style="padding-top: 0.4em" />
				<input type="hidden" name="_submit_check" value="1" />
			</form>
		</div>
	</div>
	
	<div id="bottom"></div>
</div>

<script language="javascript" type="text/javascript">
	// <![CDATA[
	$('oldpwd').focus();
	// ]]>
</script>
</body>
</html>