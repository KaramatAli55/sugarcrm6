<?php /* Smarty version 2.6.11, created on 2017-09-26 04:32:04
         compiled from modules/Users/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/Users/login.tpl', 20, false),array('function', 'sugar_getimagepath', 'modules/Users/login.tpl', 114, false),)), $this); ?>
<!--
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

/*********************************************************************************

 ********************************************************************************/
-->
<script type='text/javascript'>
var LBL_LOGIN_SUBMIT = '<?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_LOGIN_SUBMIT'), $this);?>
';
var LBL_REQUEST_SUBMIT = '<?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_REQUEST_SUBMIT'), $this);?>
';
var LBL_SHOWOPTIONS = '<?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_SHOWOPTIONS'), $this);?>
';
var LBL_HIDEOPTIONS = '<?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_HIDEOPTIONS'), $this);?>
';
</script>
<table cellpadding="0" align="center" width="100%" cellspacing="0" border="0" style="margin-top: 100px;">
	<tr>
		<td align="center">
		<div class="loginBoxShadow" style="width: 460px;">
			<div class="loginBox">
			<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
				<tr>
					<td align="left"><b><?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_LOGIN_WELCOME_TO'), $this);?>
</b><br>
					    <?php echo $this->_tpl_vars['LOGIN_IMAGE']; ?>

					</td>
				</tr>
				<tr>
					<td align="center">
						<div class="login">
							<form action="index.php" method="post" name="DetailView" id="form" onsubmit="return document.getElementById('cant_login').value == ''">
								<table cellpadding="0" cellspacing="2" border="0" align="center" width="100%">
						    	<td scope="row" colspan="2">
						    	    <span class="error" id="browser_warning" style="display:none">
						    	        <?php echo smarty_function_sugar_translate(array('label' => 'WARN_BROWSER_VERSION_WARNING'), $this);?>

						    	    </span>
						    	    <span class="error" id="ie_compatibility_mode_warning" style="display:none">
						    	        <?php echo smarty_function_sugar_translate(array('label' => 'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING'), $this);?>

						    	    </span>
						    	</td>
						    	<?php if ($this->_tpl_vars['LOGIN_ERROR'] != ''): ?>
									<tr>
										<td scope="row" colspan="2"><span class="error"><?php echo $this->_tpl_vars['LOGIN_ERROR']; ?>
</span></td>
						    	<?php if ($this->_tpl_vars['WAITING_ERROR'] != ''): ?>
							        <tr>
							            <td scope="row" colspan="2"><span class="error"><?php echo $this->_tpl_vars['WAITING_ERROR']; ?>
</span></td>
									</tr>
								<?php endif; ?>
									</tr>
								<?php else: ?>
									<tr>
										<td scope="row" width='1%'></td>
										<td scope="row"><span id='post_error' class="error"></span></td>
									</tr>
								<?php endif; ?>
									<tr>
										<td scope="row" colspan="2" width="100%" style="font-size: 12px; font-weight: normal; padding-bottom: 4px;">
										<input type="hidden" name="module" value="Users">
										<input type="hidden" name="action" value="Authenticate">
										<input type="hidden" name="return_module" value="Users">
										<input type="hidden" name="return_action" value="Login">
										<input type="hidden" id="cant_login" name="cant_login" value="">
										<?php $_from = $this->_tpl_vars['LOGIN_VARS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['var']):
?>
											<input type="hidden" name="<?php echo $this->_tpl_vars['key']; ?>
" value="<?php echo $this->_tpl_vars['var']; ?>
">
										<?php endforeach; endif; unset($_from); ?>
										</td>
									</tr>

                                    <tr><td>&nbsp;</td></tr>
                                <?php if (! empty ( $this->_tpl_vars['SELECT_LANGUAGE'] )): ?>
                                    <tr>
                                        <td scope="row"><?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_LANGUAGE'), $this);?>
:</td>
                                        <td><select style='width: 152px' name='login_language' onchange="switchLanguage(this.value)"><?php echo $this->_tpl_vars['SELECT_LANGUAGE']; ?>
</select></td>
                                    </tr>
                                <?php endif; ?>
									<tr>
										<td scope="row" width="30%"><label for="user_name"><?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_USER_NAME'), $this);?>
:</label></td>
										<td width="70%"><input type="text" size='35' tabindex="1" id="user_name" name="user_name"  value='<?php echo $this->_tpl_vars['LOGIN_USER_NAME']; ?>
' /></td>
									</tr>
									<tr>
										<td scope="row"><label for="user_password"><?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_PASSWORD'), $this);?>
:</label></td>
										<td width="30%"><input type="password" size='26' tabindex="2" id="user_password" name="user_password" value='<?php echo $this->_tpl_vars['LOGIN_PASSWORD']; ?>
' /></td>
									</tr>

									<tr>
										<td>&nbsp;</td>
										<td><input title="<?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_LOGIN_BUTTON_TITLE'), $this);?>
"  class="button primary" class="button primary" type="submit" tabindex="3" id="login_button" name="Login" value="<?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_LOGIN_BUTTON_LABEL'), $this);?>
"><br>&nbsp;</td>
									</tr>
								</table>
							</form>
							
						</div>


					</td>
				</tr>
			</table>
			</div>
			<div class="password">
			
			<form action="index.php" method="post" name="fp_form" id="fp_form" >
								<table cellpadding="0" cellspacing="2" border="0" align="center" width="100%">
									<tr>
										<td colspan="2" class="login_more">
										<div  style="cursor: hand; cursor: pointer; display:<?php echo $this->_tpl_vars['DISPLAY_FORGOT_PASSWORD_FEATURE']; ?>
;" onclick='toggleDisplay("forgot_password_dialog");'>
											<a href='javascript:void(0)'><IMG src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'advanced_search.gif'), $this);?>
" border="0" alt="Hide Options" id="forgot_password_dialog_options"><?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_LOGIN_FORGOT_PASSWORD'), $this);?>
</a>
										</div>
											<div id="forgot_password_dialog" style="display:none" >
												<input type="hidden" name="entryPoint" value="GeneratePassword">
												<table cellpadding="0" cellspacing="2" border="0" align="center" width="100%" >
													<tr>
														<td colspan="2">
															<div id="generate_success" class='error' style="display:inline;"> </div>
														</td>
													</tr>
													<tr>
														<td scope="row" width="30%"><label for="fp_user_name"><?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_USER_NAME'), $this);?>
:</label></td>
														<td width="70%"><input type="text" size='26' id="fp_user_name" name="fp_user_name"  value='<?php echo $this->_tpl_vars['LOGIN_USER_NAME']; ?>
' /></td>
													</tr>
													<tr>
											            <td scope="row" width="30%"><label for="fp_user_mail"><?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_EMAIL'), $this);?>
:</label></td>
											            <td width="70%"><input type="text" size='26' id="fp_user_mail" name="fp_user_mail"  value='' ></td>
											     	</tr>
													<?php echo $this->_tpl_vars['CAPTCHA']; ?>

													<tr>
													    <td scope="row" width="30%"><div id='wait_pwd_generation'></div></td>
														<td width="70%"><input title="Email Temp Password" class="button" type="button" style="display:inline" onclick="validateAndSubmit(); return document.getElementById('cant_login').value == ''" id="generate_pwd_button" name="fp_login" value="<?php echo smarty_function_sugar_translate(array('module' => 'Users','label' => 'LBL_LOGIN_SUBMIT'), $this);?>
"></td>
													</tr>
												</table>
											</div>
										</td>
									</tr>
								</table>
							</form>
			</div>	
		</div>
		</td>
	</tr>
</table>
<br>
<br>