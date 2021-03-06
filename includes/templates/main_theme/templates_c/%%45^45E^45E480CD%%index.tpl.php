<?php /* Smarty version 2.6.25, created on 2021-09-11 17:15:26
         compiled from index.tpl */ ?>
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
		<div style="position: relative; float: left">Clarity Eye Fax Login</div>
		
		<div style="position: relative; float: left; text-align: center; width: 40em; margin-left: auto; margin-right: auto">&nbsp;</div>
		
		<div style="clear:both"></div>
		<div style="position: relative; float: right;">
			<p><a href="http://www.avantfax.com" target="_blank"><img src="images/clarity-logo-big.png" border="0" alt="AvantFAX" /></a></p>
			<p align="center"><?php echo $this->_tpl_vars['AVANTFAX_VERSION']; ?>
</p>
		</div>
	</div>
	
	<div id="content">
		<div style="float:left; position:relative; width: 18em; margin-top: 10em">
<?php if ($this->_tpl_vars['SHOWSERVER_DETAILS']): ?>
			<p class="servername"><?php echo $this->_tpl_vars['AVANTFAX_SERVERNAME']; ?>
</p><br />
<?php endif; ?>
			<p><?php echo $this->_tpl_vars['LANG']['LOGIN_TEXT']; ?>
</p>
			<div style="margin-top: 2em">
				<p><a href="forgot.php" style="text-decoration: underline; color: #993300"><?php echo $this->_tpl_vars['LANG']['LOST_PASSWORD']; ?>
</a></p>
				<?php if ($this->_tpl_vars['error']): ?><br /><div class="error"><?php echo $this->_tpl_vars['error']; ?>
</div><?php endif; ?>
			</div>
			<br />
			<div id="auth_msg"></div>
		</div>
		
		<div style="background-image: url(images/line.gif); background-repeat:no-repeat; width:4em; height: 35em; position: relative; float: left; margin-left: auto; margin-right:auto; margin-bottom: 1em;">
		</div>
		
		<div style="width: 18em; position: relative; float: left; margin-top: 10em">
			<form action="<?php echo $this->_supers['server']['SCRIPT_NAME']; ?>
" method="post">
				<p><label for="username"><?php echo $this->_tpl_vars['LANG']['USERNAME']; ?>
</label><br /><br /><input type="text" name="username" id="username" style="width: 12em" maxlength="<?php echo $this->_tpl_vars['MAX_USERNAME_SIZE']; ?>
" /></p><br />
				<p><label for="password"><?php echo $this->_tpl_vars['LANG']['PASSWORD']; ?>
</label><br /><br /><input type="password" name="password" id="password" style="width: 12em" maxlength="<?php echo $this->_tpl_vars['MAX_PASSWD_SIZE']; ?>
" /></p><br />
				<input type="submit" class="inputsubmit" value="<?php echo $this->_tpl_vars['LANG']['BUTTON_LOGIN']; ?>
" />
				<input type="hidden" name="_submit_check" value="1" />
			</form>
		</div>
	</div>
	
	<div id="bottom"></div>
</div>

<script language="javascript" type="text/javascript">
// <![CDATA[
	$('username').focus();
// ]]>
</script>	
</body>
</html>