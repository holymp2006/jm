<?php /* Smarty version 2.6.26, created on 2015-12-01 21:28:20
         compiled from user/register.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'user/register.tpl', 16, false),array('function', 'translate', 'user/register.tpl', 18, false),array('function', 'fieldLabel', 'user/register.tpl', 46, false),array('function', 'form_language_chooser', 'user/register.tpl', 49, false),array('function', 'html_options_translate', 'user/register.tpl', 146, false),array('function', 'html_options', 'user/register.tpl', 222, false),array('modifier', 'assign', 'user/register.tpl', 22, false),array('modifier', 'escape', 'user/register.tpl', 40, false),array('modifier', 'nl2br', 'user/register.tpl', 316, false),)), $this); ?>
 <?php echo ''; ?><?php $this->assign('pageTitle', "user.register"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


 <form id="registerForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'registerUser'), $this);?>
">

 	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.completeForm"), $this);?>
</p>

 	<?php if (! $this->_tpl_vars['implicitAuth']): ?>
 	<?php if (! $this->_tpl_vars['existingUser']): ?>
 	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register','existingUser' => 1), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

 	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.alreadyRegisteredOtherJournal",'registerUrl' => $this->_tpl_vars['url']), $this);?>
</p>
 	<?php else: ?>
 	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

 	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.notAlreadyRegisteredOtherJournal",'registerUrl' => $this->_tpl_vars['url']), $this);?>
</p>
 	<input type="hidden" name="existingUser" value="1"/>
 	<?php endif; ?>

 	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile"), $this);?>
</h3>

 	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 	<?php if ($this->_tpl_vars['existingUser']): ?>
 	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.loginToRegister"), $this);?>
</p>
 	<?php endif; ?>
 	<?php endif; ?>
 	<?php if ($this->_tpl_vars['source']): ?>
 	<input type="hidden" name="source" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['source'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
 	<?php endif; ?>

 	<div class="form-horizontal">
 		<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1 && ! $this->_tpl_vars['existingUser']): ?>
 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage",'class' => "control-label col-sm-2"), $this);?>

 			<div class="col-sm-10">
 				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'userRegisterUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'userRegisterUrl'));?>

 				<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'register','url' => $this->_tpl_vars['userRegisterUrl']), $this);?>

 				<small class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</small>
 			</div>
 		</div>
 		<?php endif; ?>
 		<?php if (! $this->_tpl_vars['implicitAuth']): ?>
 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'username','required' => 'true','key' => "user.username",'class' => "col-sm-2 control-label"), $this);?>

 			<div class="col-sm-10">
 				<input type="text" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" id="username" size="20" maxlength="32" class="form-control" />
 				<?php if (! $this->_tpl_vars['existingUser']): ?>

 				<small class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.usernameRestriction"), $this);?>
</small>

 				<?php endif; ?> 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password','required' => 'true','key' => "user.password",'class' => "col-sm-2 control-label"), $this);?>

 			<div class="col-sm-10">
 				<input type="password" name="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" id="password" size="20" class="form-control" />
 			</div>
 		</div>

 		<?php if (! $this->_tpl_vars['existingUser']): ?>
 		<div class="form-group">
 			<div class="col-sm-10 col-sm-offset-2">
 				<small class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.passwordLengthRestriction",'length' => $this->_tpl_vars['minPasswordLength']), $this);?>
</small>
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password2','required' => 'true','key' => "user.repeatPassword",'class' => "control-label col-sm-2"), $this);?>

 			<div class="col-sm-10">
 				<input type="password" name="password2" id="password2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" class="form-control" />
 			</div>
 		</div>

 		<?php if ($this->_tpl_vars['captchaEnabled']): ?>
 		<div>
 			<?php if ($this->_tpl_vars['reCaptchaEnabled']): ?>
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'recaptcha_challenge_field','required' => 'true','key' => "common.captchaField",'class' => "col-sm-2 control-label"), $this);?>

 			<div class="col-sm-10">
 				<?php echo $this->_tpl_vars['reCaptchaHtml']; ?>

 			</div>
 			<?php else: ?>
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'captcha','required' => 'true','key' => "common.captchaField",'class' => "col-sm-2 control-label"), $this);?>

 			<div class="col-sm-10">
 				<img src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'viewCaptcha','path' => $this->_tpl_vars['captchaId']), $this);?>
" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.captchaField.altText"), $this);?>
" /><br />
 				<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.captchaField.description"), $this);?>
</span><br />
 				<input name="captcha" id="captcha" value="" size="20" maxlength="32" class="form-control" />
 				<input type="hidden" name="captchaId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['captchaId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quoted') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'quoted')); ?>
" />
 			</div>
 			<?php endif; ?>
 		</div>
 		<?php endif; ?>
 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'salutation','key' => "user.salutation",'class' => "control-label col-sm-2"), $this);?>

 			<div class="col-sm-4">
 				<input type="text" name="salutation" id="salutation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['salutation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" class="form-control" />
 			</div>
 		</div>
 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'firstName','required' => 'true','key' => "user.firstName",'class' => "control-label col-sm-2"), $this);?>

 			<div class="col-sm-10">
 				<input type="text" id="firstName" name="firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'middleName','key' => "user.middleName",'class' => "control-label col-sm-2"), $this);?>

 			<div class="col-sm-10">
 				<input type="text" id="middleName" name="middleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'lastName','required' => 'true','key' => "user.lastName",'class' => "control-label col-sm-2"), $this);?>

 			<div class="col-sm-10">
 				<input type="text" id="lastName" name="lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="90" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initials','key' => "user.initials",'class' => "control-label col-sm-2"), $this);?>

 			<div class="col-sm-4">
 				<input type="text" id="initials" name="initials" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initials'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="5" maxlength="5" class="form-control" placeholder'<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.initialsExample"), $this);?>
'/>
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "gender-m",'key' => "user.gender",'class' => "control-label col-sm-2"), $this);?>

 			<div class="col-sm-4">
 				<select name="gender" id="gender" size="1" class="form-control">
 					<?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('options' => $this->_tpl_vars['genderOptions'],'selected' => $this->_tpl_vars['gender']), $this);?>

 				</select>
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'affiliation','key' => "user.affiliation",'class' => "control-label col-sm-2"), $this);?>

 			<div class="col-sm-10">
 				<textarea id="affiliation" name="affiliation[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" rows="5" cols="40" class="form-control" placeholder='<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.affiliation.description"), $this);?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['affiliation'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea> 				
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'signature','key' => "user.signature",'class' => "col-sm-2 control-label"), $this);?>

 			<div class="col-sm-10">
 				<textarea name="signature[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="signature" rows="5" cols="40" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['signature'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'email','required' => 'true','key' => "user.email",'class' => "col-sm-2 control-label"), $this);?>

 			<div class="col-sm-10">
 				<div class="form-inline">
 					<input type="text" id="email" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="form-control" /> <?php if ($this->_tpl_vars['privacyStatement']): ?><a class="action" href="#privacyStatement"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.privacyStatement"), $this);?>
</a><?php endif; ?>
 				</div>
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'confirmEmail','required' => 'true','key' => "user.confirmEmail",'class' => "control-label col-sm-2"), $this);?>

 			<div class="col-sm-10">
 				<input type="text" id="confirmEmail" name="confirmEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['confirmEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'orcid','key' => "user.orcid",'class' => "col-sm-2 control-label"), $this);?>

 			<div class="col-sm-10">
 				<input type="text" id="orcid" name="orcid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['orcid'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="form-control" />
 				<p class="alert alert-info mt-10"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.orcid.description"), $this);?>
</p>
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'userUrl','key' => "user.url",'class' => "col-sm-2 control-label"), $this);?>

 			<div class="col-sm-10">
 				<input type="text" id="userUrl" name="userUrl" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="255" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'phone','key' => "user.phone",'class' => "col-sm-2 control-label"), $this);?>

 			<div class="col-sm-10">
 				<input type="text" name="phone" id="phone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['phone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'fax','key' => "user.fax",'class' => "col-sm-2 control-label"), $this);?>

 			<div class="col-sm-10">
 				<input type="text" name="fax" id="fax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['fax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'mailingAddress','key' => "common.mailingAddress",'class' => "control-label col-sm-2"), $this);?>

 			<div class="col-sm-10">
 				<textarea name="mailingAddress" id="mailingAddress" rows="3" cols="40" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['mailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'country','key' => "common.country",'class' => "control-label col-sm-2"), $this);?>

 			<div class="col-sm-10">
 				<select name="country" id="country" class="form-control">
 					<option value=""></option>
 					<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['country']), $this);?>

 				</select>
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'biography','key' => "user.biography",'class' => "col-sm-2 control-label"), $this);?>

 			<div class="col-sm-10">
 				<textarea name="biography[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="biography" rows="5" cols="40" class="form-control" placeholder='<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.biography.description"), $this);?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['biography'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 			</div>
 		</div>

 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'sendPassword','key' => "user.sendPassword",'class' => "col-sm-2 control-label"), $this);?>

 			<div class="col-sm-10 checkbox">
 				<label for="sendPassword">
 					<input type="checkbox" name="sendPassword" id="sendPassword" value="1"<?php if ($this->_tpl_vars['sendPassword']): ?> checked="checked"<?php endif; ?> />&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.sendPassword.description"), $this);?>
</label>
 				</div>
 			</div>

 			<?php if (count ( $this->_tpl_vars['availableLocales'] ) > 1): ?>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.workingLanguages",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<?php $_from = $this->_tpl_vars['availableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
 					<div class="checkbox">
 						<label for="userLocales-<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
 							<input type="checkbox" name="userLocales[]" id="userLocales-<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if (in_array ( $this->_tpl_vars['localeKey'] , $this->_tpl_vars['userLocales'] )): ?> checked="checked"<?php endif; ?> />&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['localeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</label>
 						</div>
 						<?php endforeach; endif; unset($_from); ?>
 					</div>
 				</div>
 				<?php endif; ?> 				<?php endif; ?> 				<?php endif; ?>
 				<?php if ($this->_tpl_vars['allowRegReader'] || $this->_tpl_vars['allowRegReader'] === null || $this->_tpl_vars['allowRegAuthor'] || $this->_tpl_vars['allowRegAuthor'] === null || $this->_tpl_vars['allowRegReviewer'] || $this->_tpl_vars['allowRegReviewer'] === null || ( $this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_SUBSCRIPTION && $this->_tpl_vars['enableOpenAccessNotification'] )): ?>
 				<div class="form-group">
 					<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('suppressId' => 'true','name' => 'registerAs','key' => "user.register.registerAs",'class' => "col-sm-2 control-label"), $this);?>

 					<div class="col-sm-10">
 						<?php if ($this->_tpl_vars['allowRegReader'] || $this->_tpl_vars['allowRegReader'] === null): ?>
 						<div class="checkbox">
 							<label for="registerAsReader">
 								<input type="checkbox" name="registerAsReader" id="registerAsReader" value="1"<?php if ($this->_tpl_vars['registerAsReader']): ?> checked="checked"<?php endif; ?> />&nbsp;<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reader"), $this);?>
</strong>:&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.readerDescription"), $this);?>
</label>
 							</div>
 							<?php endif; ?>
 							<?php if ($this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_SUBSCRIPTION && $this->_tpl_vars['enableOpenAccessNotification']): ?>
 							<div class="checkbox">
 								<label for="openAccessNotification">
 									<input type="checkbox" name="openAccessNotification" id="openAccessNotification" value="1"<?php if ($this->_tpl_vars['openAccessNotification']): ?> checked="checked"<?php endif; ?> />&nbsp;<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reader"), $this);?>
</strong>:&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.openAccessNotificationDescription"), $this);?>

 								</label>
 							</div>
 							<?php endif; ?>
 							<?php if ($this->_tpl_vars['allowRegAuthor'] || $this->_tpl_vars['allowRegAuthor'] === null): ?>
 							<div class="checkbox">
 								<label for="registerAsAuthor">
 									<input type="checkbox" name="registerAsAuthor" id="registerAsAuthor" value="1"<?php if ($this->_tpl_vars['registerAsAuthor']): ?> checked="checked"<?php endif; ?> />&nbsp;<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author"), $this);?>
</strong>:&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.authorDescription"), $this);?>

 								</label>
 							</div>
 							<?php endif; ?>
 							<?php if ($this->_tpl_vars['allowRegReviewer'] || $this->_tpl_vars['allowRegReviewer'] === null): ?>
 							<div class="checkbox">
 								<label for="registerAsReviewer">
 									<input type="checkbox" name="registerAsReviewer" id="registerAsReviewer" value="1"<?php if ($this->_tpl_vars['registerAsReviewer']): ?> checked="checked"<?php endif; ?> />&nbsp;<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewer"), $this);?>
</strong>:&nbsp;<?php if ($this->_tpl_vars['existingUser']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.reviewerDescriptionNoInterests"), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.reviewerDescription"), $this);?>
<?php endif; ?></label>
 								</div>
 								<div id="reviewerInterestsContainer" class="checkbox mt-20">			
 									<p>
 										<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.reviewerInterests"), $this);?>
</strong>
 									</p>
 									<div class="col-sm-12">
 										<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/interestsInput.tpl", 'smarty_include_vars' => array('FBV_interestsKeywords' => $this->_tpl_vars['interestsKeywords'],'FBV_interestsTextOnly' => $this->_tpl_vars['interestsTextOnly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 									</div> <!--.col-sm-12-->								
 								</div>
 							</div>
 							<?php endif; ?>
 						</div>
 						<?php endif; ?>

 					</div> <!--.form-horizontal-->

 					<br />
 					<?php if (! $this->_tpl_vars['implicitAuth']): ?>
 					<p class="alert alert-warning"> 
 						<span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;			
 						<span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span>
 					</p>
 					<?php endif; ?>
 					<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register"), $this);?>
" class="btn btn-primary" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="btn btn-warning" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index','escape' => false), $this);?>
'" /></p>


 					<div id="privacyStatement">
 						<?php if ($this->_tpl_vars['privacyStatement']): ?>
 						<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.privacyStatement"), $this);?>
</h3>
 						<p><?php echo ((is_array($_tmp=$this->_tpl_vars['privacyStatement'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
 						<?php endif; ?>
 					</div>

 				</form>

 				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
