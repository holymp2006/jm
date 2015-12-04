<?php /* Smarty version 2.6.26, created on 2015-11-27 21:14:30
         compiled from manager/setup/step1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/setup/step1.tpl', 14, false),array('function', 'fieldLabel', 'manager/setup/step1.tpl', 20, false),array('function', 'form_language_chooser', 'manager/setup/step1.tpl', 23, false),array('function', 'translate', 'manager/setup/step1.tpl', 24, false),array('function', 'html_options', 'manager/setup/step1.tpl', 72, false),array('modifier', 'assign', 'manager/setup/step1.tpl', 22, false),array('modifier', 'escape', 'manager/setup/step1.tpl', 35, false),)), $this); ?>
 <?php $this->assign('pageTitle', "manager.setup.gettingDownTheDetails"); ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "manager/setup/setupHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <form id="setupForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSetup','path' => '1'), $this);?>
" class="form">
 	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 	<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
 	<div id="locales" class="form-group">

 		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage",'class' => "col-sm-2 control-label"), $this);?>

 		<div width="80%" class="col-sm-10">
 			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '1','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'setupFormUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'setupFormUrl'));?>

 			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'setupForm','url' => $this->_tpl_vars['setupFormUrl']), $this);?>

 			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
 		</div>
 	</div>
 	<?php endif; ?>

 	<div id="generalInformation">
 		<h3>1.1 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.generalInformation"), $this);?>
</h3>

 		<div class="form-horizontal">
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','required' => 'true','key' => "manager.setup.journalTitle",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10"><input type="text" name="title[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="120" class="form-control"></div>
 			</div>
 			<div class="form-group">
 				<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initials','required' => 'true','key' => "manager.setup.journalInitials",'class' => "col-sm-2 control-label"), $this);?>
</td>
 				<div class="col-sm-10"><input type="text" name="initials[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="initials" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initials'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="8" maxlength="16" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'abbreviation','key' => "manager.setup.journalAbbreviation",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10"><input type="text" name="abbreviation[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="abbreviation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['abbreviation'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="120" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'printIssn','key' => "manager.setup.printIssn",'class' => "control-label col-sm-2"), $this);?>

 				<div class="col-sm-10"><input type="text" name="printIssn" id="printIssn" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['printIssn'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="8" maxlength="16" class="form-control" /></div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'onlineIssn','key' => "manager.setup.onlineIssn",'class' => "col-sm-2 conrol-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="onlineIssn" id="onlineIssn" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['onlineIssn'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="8" maxlength="16" class="form-control" />
 					
 					<small class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.issnDescription"), $this);?>
</small>
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'mailingAddress','key' => "common.mailingAddress",'class' => "control-label col-sm-2"), $this);?>

 				<div class="col-sm-10">
 					<textarea name="mailingAddress" id="mailingAddress" rows="3" cols="40" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['mailingAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 					
 					<small class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.mailingAddressDescription"), $this);?>
</small>
 				</div>
 			</div>
 			<?php if ($this->_tpl_vars['categoriesEnabled']): ?>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'categories','key' => "manager.setup.categories",'class' => "control-label col-sm-2"), $this);?>

 				<div class="col-sm-10">
 					<select id="categories" name="categories[]" class="form-control" multiple="multiple">
 						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['allCategories'],'selected' => $this->_tpl_vars['categories']), $this);?>

 					</select>
 					<br/>
 					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.categories.description"), $this);?>

 				</div>
 			</div>
 			<?php endif; ?> 		</div> 
 	</div>

 	<hr>

 	<div id="principalContact">
 		<h3>1.2 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.principalContact"), $this);?>
</h3>

 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.principalContactDescription"), $this);?>
</p>



 		<div class="form-horizontal">
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactName','key' => "user.name",'required' => 'true','class' => "control-label col-sm-2"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="contactName" id="contactName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="60" class="form-control">
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactTitle','key' => "user.title",'class' => "control-label col-sm-2"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="contactTitle[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="contactTitle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactTitle'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactAffiliation','key' => "user.affiliation",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<textarea name="contactAffiliation[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="contactAffiliation" rows="5" cols="40" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['contactAffiliation'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactEmail','key' => "user.email",'required' => 'true','class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="contactEmail" id="contactEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactPhone','key' => "user.phone",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="contactPhone" id="contactPhone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactPhone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactFax','key' => "user.fax",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="contactFax" id="contactFax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactFax'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contactMailingAddress','key' => "common.mailingAddress",'class' => "control-label col-sm-2"), $this);?>

 				<div class="col-sm-10">
 					<textarea name="contactMailingAddress[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="contactMailingAddress" rows="3" cols="40" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['contactMailingAddress'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 				</div>
 			</div>
 		</div> 
 	</div>

 	<hr>

 	<div id="technicalSupportContact">
 		<h3>1.3 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.technicalSupportContact"), $this);?>
</h3>

 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.technicalSupportContactDescription"), $this);?>
</p>


 		<div class="form-horizontal">
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'supportName','key' => "user.name",'required' => 'true','class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10"><input type="text" name="supportName" id="supportName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['supportName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="60" class="form-control" /></div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'supportEmail','key' => "user.email",'required' => 'true','class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="supportEmail" id="supportEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['supportEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'supportPhone','key' => "user.phone",'class' => "control-label col-sm-2"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="supportPhone" id="supportPhone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['supportPhone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="form-control" />
 				</div>
 			</div>
 		</div> 
 	</div>

 	<hr>

 	<div id="setupEmails">
 		<h3>1.4 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.emails"), $this);?>
</h3>

 		<div class="form-horizontal">
 			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.emailHeaderDescription"), $this);?>
</p>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'emailHeader','key' => "manager.setup.emailHeader",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<textarea name="emailHeader" id="emailHeader" rows="3" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['emailHeader'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 				</div>
 			</div>
 			
 			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.emailSignatureDescription"), $this);?>
</p>

 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'emailSignature','key' => "manager.setup.emailSignature",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<textarea name="emailSignature" id="emailSignature" rows="3" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['emailSignature'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 				</div>
 			</div>

 			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.emailBounceAddressDescription"), $this);?>
</p>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'envelopeSender','key' => "manager.setup.emailBounceAddress",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="envelopeSender" id="envelopeSender" size="40" maxlength="255" class="form-control" <?php if (! $this->_tpl_vars['envelopeSenderEnabled']): ?>disabled="disabled" value=""<?php else: ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['envelopeSender'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?> />
 					<?php if (! $this->_tpl_vars['envelopeSenderEnabled']): ?>
 					<br />
 					<div class="alert alert-info">
 						<small><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.emailBounceAddressDisabled"), $this);?>
</small>
 					</div>
 					<?php endif; ?>
 				</div>
 			</div>
 		</div> 
 	</div>

 	<hr>

 	<div id="setupPublisher">
 		<h3>1.5 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publisher"), $this);?>
</h3>

 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publisherDescription"), $this);?>
</p>

 		<div class="form-horizontal">
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publisherNote','key' => "manager.setup.note",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<textarea name="publisherNote[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="publisherNote" rows="5" cols="40" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['publisherNote'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 					<small class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publisherNoteDescription"), $this);?>
</small>
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publisherInstitution','key' => "manager.setup.institution",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="publisherInstitution" id="publisherInstitution" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publisherInstitution'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="90" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publisherUrl','key' => "common.url",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="publisherUrl" id="publisherUrl" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publisherUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="form-control">
 				</div>
 			</div>
 		</div> 
 	</div>

 	<hr>

 	<div id="sponsors">
 		<h3>1.6 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.sponsors"), $this);?>
</h3>

 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.sponsorsDescription"), $this);?>
</p>

 		<div class="form-horizontal">
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'sponsorNote','key' => "manager.setup.note",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<textarea name="sponsorNote[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="sponsorNote" rows="5" cols="40" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['sponsorNote'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 					
 					<small><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.sponsorNoteDescription"), $this);?>
</small>
 				</div>
 			</div>
 			<?php $_from = $this->_tpl_vars['sponsors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sponsors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sponsors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sponsorId'] => $this->_tpl_vars['sponsor']):
        $this->_foreach['sponsors']['iteration']++;
?>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "sponsors-".($this->_tpl_vars['sponsorId'])."-institution",'key' => "manager.setup.institution",'class' => "col-sm-2 control-label"), $this);?>
		
 				<div width="80%" class="value">
 					<input type="text" name="sponsors[<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsorId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][institution]" id="sponsors-<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsorId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-institution" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsor']['institution'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="90" class="form-control" />
 					<?php if ($this->_foreach['sponsors']['total'] > 1): ?> 
 					<input type="submit" name="delSponsor[<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsorId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="btn btn-primary" />
 					<?php endif; ?>
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "sponsors-".($this->_tpl_vars['sponsorId'])."-url",'key' => "common.url",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="sponsors[<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsorId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][url]" id="sponsors-<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsorId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsor']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="form-control">
 				</div>
 			</div>
 			<?php if (! ($this->_foreach['sponsors']['iteration'] == $this->_foreach['sponsors']['total'])): ?>
 			<hr>
 			<?php endif; ?>
 			<?php endforeach; else: ?>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "sponsors-0-institution",'key' => "manager.setup.institution",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="sponsors[0][institution]" id="sponsors-0-institution" size="40" maxlength="90" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "sponsors-0-url",'key' => "common.url",'class' => "control-label col-sm-2"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="sponsors[0][url]" id="sponsors-0-url" size="40" maxlength="255" class="form-control">
 				</div>
 			</div>
 			<?php endif; unset($_from); ?>
 		</div> 
 		<p><input type="submit" name="addSponsor" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.addSponsor"), $this);?>
" class="btn btn-primary" /></p>
 	</div>

 	<hr>

 	<div id="contributors">
 		<h3>1.7 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.contributors"), $this);?>
</h3>

 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.contributorsDescription"), $this);?>
</p>


 		<div class="form-horizontal">
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'contributorNote','key' => "manager.setup.note",'class' => "control-label col-sm-2"), $this);?>

 				<div class="col-sm-10">
 					<textarea name="contributorNote[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="contributorNote" rows="5" cols="40" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['contributorNote'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 					
 					<small><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.contributorNoteDescription"), $this);?>
</small>
 				</div>
 			</div>
 			<?php $_from = $this->_tpl_vars['contributors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['contributors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['contributors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['contributorId'] => $this->_tpl_vars['contributor']):
        $this->_foreach['contributors']['iteration']++;
?>
 			<div valign="top">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "contributors-".($this->_tpl_vars['contributorId'])."-name",'key' => "manager.setup.contributor",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10"><input type="text" name="contributors[<?php echo ((is_array($_tmp=$this->_tpl_vars['contributorId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][name]" id="contributors-<?php echo ((is_array($_tmp=$this->_tpl_vars['contributorId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contributor']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="90" class="form-control" /><?php if ($this->_foreach['contributors']['total'] > 1): ?> 
 					<input type="submit" name="delContributor[<?php echo ((is_array($_tmp=$this->_tpl_vars['contributorId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="btn btn-danger" />
 					<?php endif; ?>
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "contributors-".($this->_tpl_vars['contributorId'])."-url",'key' => "common.url",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10"><input type="text" name="contributors[<?php echo ((is_array($_tmp=$this->_tpl_vars['contributorId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][url]" id="contributors-<?php echo ((is_array($_tmp=$this->_tpl_vars['contributorId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contributor']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="form-control" /></div>
 			</div>
 			<?php if (! ($this->_foreach['contributors']['iteration'] == $this->_foreach['contributors']['total'])): ?>
 			
 			<hr>

 			<?php endif; ?>
 			<?php endforeach; else: ?>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "contributors-0-name",'key' => "manager.setup.contributor",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="contributors[0][name]" id="contributors-0-name" size="40" maxlength="90" class="form-control">
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "contributors-0-url",'key' => "common.url",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="contributors[0][url]" id="contributors-0-url" size="40" maxlength="255" class="form-control" />
 				</div>
 			</div>
 			<?php endif; unset($_from); ?>

 		</div> 

 		<p><input type="submit" name="addContributor" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.addContributor"), $this);?>
" class="btn btn-primary" /></p>
 	</div>

 	<hr>

 	<div id="searchEngineIndexing">
 		<h3>1.8 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.searchEngineIndexing"), $this);?>
</h3>

 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.searchEngineIndexingDescription"), $this);?>
</p>

 		<div class="form-horizontal">
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'searchDescription','key' => "common.description",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="searchDescription[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="searchDescription" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchDescription'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'searchKeywords','key' => "common.keywords",'class' => "col-sm-2 control-label"), $this);?>

 				<div class="col-sm-10">
 					<input type="text" name="searchKeywords[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="searchKeywords" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchKeywords'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'customHeaders','key' => "manager.setup.customTags",'class' => "control-label col-sm-2"), $this);?>

 				<div class="col-sm-10">
 					<textarea name="customHeaders[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="customHeaders" rows="3" cols="40" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['customHeaders'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 					
 					<small class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.customTagsDescription"), $this);?>
</small>
 				</div>
 			</div>
 		</div>  	</div>

 	<hr>


 	<h3>1.9 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.history"), $this);?>
</h3>

 	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.historyDescription"), $this);?>
</p>

 	<div class="form-horizontal">
 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'history','key' => "manager.setup.history",'class' => "col-sm-2 control-label"), $this);?>

 			<div class="col-sm-10">
 				<textarea name="history[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="history" rows="5" cols="40" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['history'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 			</div>
 		</div>
 	</div>  

 	<hr>

 	<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndContinue"), $this);?>
" class="btn btn-primary" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="btn btn-warning" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','escape' => false), $this);?>
'" /></p>

 	<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

 </form>

 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
