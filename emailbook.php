<?php
/**
 * AvantFAX - "Web 2.0" HylaFAX management
 *
 * PHP 5 only
 *
 * @author		David Mimms <david@avantfax.com>
 * @copyright	2005 - 2007 MENTALBARCODE Software, LLC
 * @copyright	2007 - 2008 iFAX Solutions, Inc.
 * @license		http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

	require_once 'check_login.php';

	$INC_LIST = "<script language=\"javascript\" type=\"text/javascript\" src=\"js/emailbook.js\"></script>";
	
	$abookemail_id = array_key_exists('abookemail_id', $_GET) ? $_GET['abookemail_id'] : NULL;
	
	/******************************************************************************************************************************
			SHOW TEMPLATE
	 ******************************************************************************************************************************/
	$usmarty = new UserSmarty;
	$usmarty->assign('abookemail_id',	$abookemail_id);
	$usmarty->assign('INC_LIST',		$INC_LIST);
	$usmarty->assign('numfaxesinbox',	get_inbox_count());	// number of faxes in inbox
	display_template('emailbook.tpl',	$usmarty);
