<?php /* Smarty version 2.6.26, created on 2015-12-01 21:27:18
         compiled from manager/setup/step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/setup/step3.tpl', 13, false),array('function', 'fieldLabel', 'manager/setup/step3.tpl', 19, false),array('function', 'form_language_chooser', 'manager/setup/step3.tpl', 22, false),array('function', 'translate', 'manager/setup/step3.tpl', 24, false),array('function', 'load_url_in_div', 'manager/setup/step3.tpl', 427, false),array('function', 'fbvElement', 'manager/setup/step3.tpl', 434, false),array('modifier', 'assign', 'manager/setup/step3.tpl', 21, false),array('modifier', 'escape', 'manager/setup/step3.tpl', 37, false),array('modifier', 'translate', 'manager/setup/step3.tpl', 174, false),)), $this); ?>
 <?php $this->assign('pageTitle', "manager.setup.guidingSubmissions"); ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "manager/setup/setupHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <form name="setupForm" id="setupForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSetup','path' => '3'), $this);?>
">
 	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 	<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
 	<div id="locale" class="form-horizontal">
 		<div class="form-group">
 			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage",'class' => "control-label col-sm-2"), $this);?>

 			<div class="col-sm-10">
 				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '3','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'setupFormUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'setupFormUrl'));?>

 				<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'setupForm','url' => $this->_tpl_vars['setupFormUrl']), $this);?>

 				<div class="alert alert-info">
 					<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
 				</div>
 			</div>
 		</div>
 	</div>
 	<?php endif; ?>

 	<div id="authorGuidelinesInfo">
 		<h3>3.1 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.authorGuidelines"), $this);?>
</h3>

 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.authorGuidelinesDescription"), $this);?>
</p>

 		<div class="form-group journal-setup">
 			<textarea name="authorGuidelines[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="authorGuidelines" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['authorGuidelines'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 		</div>

 	</div>

 	<div id="submissionPreparationChecklist">
 		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.submissionPreparationChecklist"), $this);?>
</h4>

 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.submissionPreparationChecklistDescription"), $this);?>
</p>

 		<?php $_from = $this->_tpl_vars['submissionChecklist'][$this->_tpl_vars['formLocale']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['checklist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['checklist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['checklistId'] => $this->_tpl_vars['checklistItem']):
        $this->_foreach['checklist']['iteration']++;
?>
 		<?php if (! $this->_tpl_vars['notFirstChecklistItem']): ?>
 		<?php $this->assign('notFirstChecklistItem', 1); ?>
 		<div class="form-horizontal">
 			<div class="row">
 				<div class="col-sm-2"><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.order"), $this);?>
</strong></div>
 				<div class="col-sm-10">&nbsp;</div>
 			</div>
 			<?php endif; ?>

 			<div class="form-group">
 				<div class="col-sm-2">
 					<input type="text" name="submissionChecklist[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][<?php echo ((is_array($_tmp=$this->_tpl_vars['checklistId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][order]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['checklistItem']['order'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="3" maxlength="2" class="form-control" />
 				</div>
 				<div class="col-sm-8">
 					<textarea name="submissionChecklist[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][<?php echo ((is_array($_tmp=$this->_tpl_vars['checklistId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][content]" id="submissionChecklist-<?php echo ((is_array($_tmp=$this->_tpl_vars['checklistId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" rows="3" cols="40" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['checklistItem']['content'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 				</div>
 				<div class="col-sm-2">
 					<input type="submit" name="delChecklist[<?php echo ((is_array($_tmp=$this->_tpl_vars['checklistId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="btn btn-danger" />
 				</div>
 			</div>
 			<?php endforeach; endif; unset($_from); ?>

 			<?php if ($this->_tpl_vars['notFirstChecklistItem']): ?>
 		</div>
 		<?php endif; ?>

 		<input type="submit" name="addChecklist" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.addChecklistItem"), $this);?>
" class="btn btn-primary" />
 	</div>

 	<hr>

 	<div id="permissions">
 		<h3>3.2 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.permissions"), $this);?>
</h3>

 		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.authorCopyrightNotice"), $this);?>
</h4>
 		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'information','op' => 'sampleCopyrightWording'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'sampleCopyrightWordingUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'sampleCopyrightWordingUrl'));?>

 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.authorCopyrightNoticeDescription",'sampleCopyrightWordingUrl' => $this->_tpl_vars['sampleCopyrightWordingUrl']), $this);?>
</p>

 		<div class="journal-setup form-group">
 			<textarea name="copyrightNotice[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="copyrightNotice" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['copyrightNotice'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

 			</textarea>
 		</div>

 		<div class="form-horizontal">
 			<div class="form-group">
 				<label class="col-sm-3 control-label text-left">
 					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyrightHolder"), $this);?>

 				</label>
 				<div class="col-sm-9">
 					<div class="form-group">
 						<div class="radio col-sm-2">
 							<label for="copyrightHolderType-author">
 								<input type="radio" value="author" name="copyrightHolderType" <?php if ($this->_tpl_vars['copyrightHolderType'] == 'author'): ?>checked="checked" <?php endif; ?>id="copyrightHolderType-author" />&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author"), $this);?>

 							</label>
 						</div>
 						<div class="radio col-sm-10">
 							<label for="copyrightHolderType-journal">
 								<input type="radio" value="journal" name="copyrightHolderType" <?php if ($this->_tpl_vars['copyrightHolderType'] == 'journal'): ?>checked="checked" <?php endif; ?>id="copyrightHolderType-journal" />&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.journal"), $this);?>

 							</label> (<?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
)
 						</div>
 					</div>
 					<div class="form-group">
 						<div class="radio col-sm-2">
 							<label for="copyrightHolderType-other" class="">
 								<input type="radio" value="other" name="copyrightHolderType" <?php if ($this->_tpl_vars['copyrightHolderType'] == 'other'): ?>checked="checked" <?php endif; ?>id="copyrightHolderType-other" />&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.other"), $this);?>

 							</label>
 						</div>
 						<div class="col-sm-10">
 							<input type="text" name="copyrightHolderOther[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="copyrightHolderOther" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['copyrightHolderOther'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="form-control" placeholder='<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.custom.othersselected"), $this);?>
'>
 						</div>

 					</div>
 				</div>

 			</div>
 			<div class="form-group">
 				<label class="col-sm-3 control-label text-left">
 					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.copyrightYearBasis"), $this);?>

 				</label>
 				<div class="col-sm-9">
 					<div class="form-group">
 						<div class="col-sm-12">
 							<div class="radio">
 								<label for="copyrightYearBasis-issue">
 									<input type="radio" value="issue" name="copyrightYearBasis" <?php if ($this->_tpl_vars['copyrightYearBasis'] == 'issue'): ?>checked="checked" <?php endif; ?>id="copyrightYearBasis-issue" />&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>

 								</label> (<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.copyrightYearBasis.Issue"), $this);?>
)
 							</div>
 						</div>
 					</div> <!--.form-group-->
 					<div class="form-group">
 						<div class="col-sm-12">
 							<div class="radio">
 								<label for="copyrightYearBasis-article">
 									<input type="radio" value="article" name="copyrightYearBasis" <?php if ($this->_tpl_vars['copyrightYearBasis'] == 'article'): ?>checked="checked" <?php endif; ?>id="copyrightYearBasis-article" />&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.article"), $this);?>

 								</label> (<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.copyrightYearBasis.Article"), $this);?>
)
 							</div>
 						</div>
 					</div> <!--.form-group-->					
 				</div>
 			</div>

 			<div class="form-group">
 				<label class="col-sm-3 control-label text-left"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.permissions.priorAgreement"), $this);?>

 				</label>
 				<div class="col-sm-9 checkbox">
 					<label for="copyrightNoticeAgree">
 						<input type="checkbox" name="copyrightNoticeAgree" id="copyrightNoticeAgree" value="1"<?php if ($this->_tpl_vars['copyrightNoticeAgree']): ?> checked="checked"<?php endif; ?> />&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.authorCopyrightNoticeAgree"), $this);?>

 					</label>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="col-sm-3 control-label text-left"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.permissions.display"), $this);?>
</label>
 				<div class="col-sm-9 checkbox">
 					<label for="includeCopyrightStatement">
 						<input type="checkbox" name="includeCopyrightStatement" id="includeCopyrightStatement" value="1"<?php if ($this->_tpl_vars['includeCopyrightStatement']): ?> checked="checked"<?php endif; ?> />&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.includeCopyrightStatement"), $this);?>

 					</label>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="col-sm-3 control-label text-left"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'licenseURL','key' => "submission.licenseURL"), $this);?>
</label>
 				<div class="col-sm-9"> 					
 					<div class="form-group">
 						<div class="col-sm-12">
 							<select class="form-control" name="licenseURLSelect" id="licenseURLSelect" onchange="document.getElementById('licenseURL').value=document.getElementById('licenseURLSelect').options[document.getElementById('licenseURLSelect').selectedIndex].value; document.getElementById('licenseURL').readOnly=(document.getElementById('licenseURL').value==''?false:true);">
 								<?php $this->assign('foundCc', 0); ?>
 								<?php $_from = $this->_tpl_vars['ccLicenseOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ccUrl'] => $this->_tpl_vars['ccNameKey']):
?>
 								<option <?php if ($this->_tpl_vars['licenseURL'] == $this->_tpl_vars['ccUrl']): ?>selected="selected" <?php endif; ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ccUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['ccNameKey'])) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)); ?>
</option>
 								<?php if ($this->_tpl_vars['licenseURL'] == $this->_tpl_vars['ccUrl']): ?>
 								<?php $this->assign('foundCc', 1); ?>
 								<?php endif; ?>
 								<?php endforeach; endif; unset($_from); ?>
 								<option <?php if (! $this->_tpl_vars['foundCc']): ?>selected="selected" <?php endif; ?>value="">Other</option>
 							</select>
 						</div>
 					</div><!--.form-group-->
 					
 					<div class="form-group">
 						<div class="col-sm-12">
 							<input type="text" name="licenseURL" id="licenseURL" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['licenseURL'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" <?php if ($this->_tpl_vars['foundCc']): ?>readonly="readonly" <?php endif; ?>size="40" maxlength="255" class="form-control" placeholder="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.licenseURLDescription"), $this);?>
">
 						</div>
 					</div><!--.form-group-->
 				</div>
 				
 			</div>
 			<div class="form-group">
 				<label class="col-sm-3 control-label text-left"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.permissions.display"), $this);?>
</label>
 				<div class="col-sm-9 checkbox">
 					<label for="includeLicense">
 						<input type="checkbox" name="includeLicense" id="includeLicense" value="1"<?php if ($this->_tpl_vars['includeLicense']): ?> checked="checked"<?php endif; ?> />&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.includeLicense"), $this);?>

 					</label>
 				</div>
 			</div>
 		</div> <!--.form-horizontal-->

 		<div class="alert alert-info form-group"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.resetPermissions.description"), $this);?>
</div>
 		<div class="form-group mt-20">
 			<input id="resetPermissionsButton" type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.resetPermissions"), $this);?>
" class="btn btn-primary" />
 		</div>
 	</div>

 	<hr>

 	<div id="competingInterests">
 		<h3>3.3 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.competingInterests"), $this);?>
</h3>

 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.competingInterests.description"), $this);?>
</p>

 		<div class="form-group">
 			<div class="checkbox">
 				<label for="requireAuthorCompetingInterests">
 					<input type="checkbox" name="requireAuthorCompetingInterests" id="requireAuthorCompetingInterests" value="1"<?php if ($this->_tpl_vars['requireAuthorCompetingInterests']): ?> checked="checked"<?php endif; ?> />&nbsp;<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.competingInterests.requireAuthors"), $this);?>
</strong>
 				</label> 				
 			</div>
 			<div class="checkbox">
 				<label for="requireReviewerCompetingInterests"> 				
 					<input type="checkbox" name="requireReviewerCompetingInterests" id="requireReviewerCompetingInterests" value="1"<?php if ($this->_tpl_vars['requireReviewerCompetingInterests']): ?> checked="checked"<?php endif; ?> />&nbsp;<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.competingInterests.requireReviewers"), $this);?>
</strong>
 				</label>
 			</div>
 		</div>

 		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.competingInterests.guidelines"), $this);?>
</h4>
 		<div class="form-group journal-setup">
 			<textarea name="competingInterestGuidelines[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="competingInterestGuidelines" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['competingInterestGuidelines'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
 		</div>
 	</div>

 	<hr>

 	<div id="forAuthorsToIndexTheirWork">
 		<h3>3.4 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.forAuthorsToIndexTheirWork"), $this);?>
</h3>

 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.forAuthorsToIndexTheirWorkDescription"), $this);?>
</p>

 		
 		<div class="form-group">
 			<div class="checkbox">
 				<label for="metaDiscipline">
 					<h4>
 						<input type="checkbox" name="metaDiscipline" id="metaDiscipline" value="1"<?php if ($this->_tpl_vars['metaDiscipline']): ?> checked="checked"<?php endif; ?> /> 
 						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.discipline"), $this);?>

 						<small class="help-block"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.disciplineDescription"), $this);?>
</small>
 					</h4>
 				</label>

 				<div class="form-group">
 					<p class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.disciplineProvideExamples"), $this);?>
:</p>
 					<input type="text" name="metaDisciplineExamples[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="metaDisciplineExamples" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaDisciplineExamples'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" class="form-control" placeholder='<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.disciplineExamples"), $this);?>
'> 							
 				</div>
 				
 			</div>

 		</div> <!--.form-group-->

 		<hr>

 		<div class="form-group">
 			<div class="checkbox">
 				<label for="metaSubjectClass">
 					<h4>
 						<input type="checkbox" name="metaSubjectClass" id="metaSubjectClass" value="1"<?php if ($this->_tpl_vars['metaSubjectClass']): ?> checked="checked"<?php endif; ?> />
 						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subjectClassification"), $this);?>

 					</h4>

 				</label>
 				<div class="form-horizontal">
 					<div class="form-group">
 						<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'metaSubjectClassTitle','key' => "common.title",'class' => "col-sm-1 control-label text-left"), $this);?>

 						<div class="col-sm-11">
 							<input type="text" name="metaSubjectClassTitle[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="metaSubjectClassTitle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaSubjectClassTitle'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" class="form-control" placeholder='<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subjectClassificationExamples"), $this);?>
'/>
 						</div>
 					</div>
 					<div class="form-group">
 						<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'metaSubjectClassUrl','key' => "common.url",'class' => "col-sm-1 control-label text-left"), $this);?>

 						<div class="col-sm-11">
 							<input type="text" name="metaSubjectClassUrl[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="metaSubjectClassUrl" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaSubjectClassUrl'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" class="form-control">
 						</div>
 					</div>
 				</div> <!--.form-horizontal-->
 			</div>
 		</div>
 		
 		<hr>

 		<div class="form-group">
 			<div class="checkbox">
 				<label for="metaSubject">
 					<h4>
 						<input type="checkbox" name="metaSubject" id="metaSubject" value="1"<?php if ($this->_tpl_vars['metaSubject']): ?> checked="checked"<?php endif; ?> />
 						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subjectKeywordTopic"), $this);?>

 					</h4>

 				</label>

 				<div class="form-group">
 					<p class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subjectProvideExamples"), $this);?>
:</p>
 					<input type="text" name="metaSubjectExamples[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="metaSubjectExamples" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaSubjectExamples'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" class="form-control" placeholder='<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subjectExamples"), $this);?>
'/>
 				</div>
 			</div>
 		</div> <!--.form-group-->

 		<hr>

 		<div class="form-group">
 			<div class="checkbox">
 				<label for="metaCoverage">
 					<h4>
 						<input type="checkbox" name="metaCoverage" id="metaCoverage" value="1"<?php if ($this->_tpl_vars['metaCoverage']): ?> checked="checked"<?php endif; ?> />
 						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverage"), $this);?>
 
 						<small class="help-block"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageDescription"), $this);?>
</small>						
 					</h4>
 				</label>

 				<div class="form-group">
 					<p class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageGeoProvideExamples"), $this);?>
:</p>
 					<input type="text" name="metaCoverageGeoExamples[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="metaCoverageGeoExamples" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaCoverageGeoExamples'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" class="form-control" placeholder='<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageGeoExamples"), $this);?>
'/>
 				</div>

 				<div class="form-group">
 					<p class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageChronProvideExamples"), $this);?>
:</p>
 					<input type="text" name="metaCoverageChronExamples[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="metaCoverageChronExamples" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaCoverageChronExamples'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" class="form-control" placeholder='<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageChronExamples"), $this);?>
'/>
 				</div>

 				<div class="form-group">
 					<p class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageResearchSampleProvideExamples"), $this);?>
:</p>
 					<input type="text" name="metaCoverageResearchSampleExamples[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="metaCoverageResearchSampleExamples" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaCoverageResearchSampleExamples'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" class="form-control" placeholder='<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.coverageResearchSampleExamples"), $this);?>
'/>		
 				</div>
 			</div>
 		</div> <!--.form-group-->

 		<hr>

 		<div class="form-group">
 			<div class="checkbox">
 				<label for="metaType">
 					<h4>
 						<input type="checkbox" name="metaType" id="metaType" value="1"<?php if ($this->_tpl_vars['metaType']): ?> checked="checked"<?php endif; ?> /> 	
 						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.typeMethodApproach"), $this);?>
					
 					</h4>
 				</label>
 				<div class="form-group">
 					<p class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.typeProvideExamples"), $this);?>
:</p>
 					<input type="text" name="metaTypeExamples[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="metaTypeExamples" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaTypeExamples'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" class="form-control" placeholder='<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.typeExamples"), $this);?>
'/>
 				</div>
 			</div>
 		</div> <!--.form-group-->

 	</div> <!--#forAuthorsToIndexTheirWork-->

 	<hr>

 	<div id="registerJournalForIndexing">
 		<h3>3.5 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.registerJournalForIndexing"), $this);?>
</h3>

 		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'oai'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'oaiUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'oaiUrl'));?>

 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.registerJournalForIndexingDescription",'oaiUrl' => $this->_tpl_vars['oaiUrl'],'siteUrl' => $this->_tpl_vars['baseUrl']), $this);?>
</p>
 	</div>

 	<hr>

 	<div id="notifications">
 		<h3>3.6 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.notifications"), $this);?>
</h3>

 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.notifications.description"), $this);?>
</p>

 		<div class="form-group">
 			<div class="checkbox">
 				<label for="copySubmissionAckPrimaryContact">
 					<input <?php if (! $this->_tpl_vars['submissionAckEnabled']): ?>disabled="disabled" <?php endif; ?>type="checkbox" name="copySubmissionAckPrimaryContact" id="copySubmissionAckPrimaryContact" value="true" <?php if ($this->_tpl_vars['copySubmissionAckPrimaryContact']): ?>checked="checked"<?php endif; ?>/>&nbsp;
 					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.notifications.copyPrimaryContact"), $this);?>

 				</label>

 			</div>

 			<div class="row">
 				<div class="col-sm-5 control-label">
 					<div class="checkbox">
 						<label for="copySubmissionAckAddress">
 							<input <?php if (! $this->_tpl_vars['submissionAckEnabled']): ?>disabled="disabled" <?php endif; ?>type="checkbox" name="copySubmissionAckSpecified" id="copySubmissionAckSpecified" value="true" <?php if ($this->_tpl_vars['copySubmissionAckSpecified']): ?>checked="checked"<?php endif; ?>/>&nbsp;
 							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.notifications.copySpecifiedAddress"), $this);?>


 						</label>
 					</div>
 				</div>
 				<div class="col-sm-7">		
 					<input <?php if (! $this->_tpl_vars['submissionAckEnabled']): ?>disabled="disabled" <?php endif; ?>type="text" class="form-control" id="copySubmissionAckAddress" name="copySubmissionAckAddress" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['copySubmissionAckAddress'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
 				</div>
 			</div>

 			<div class="form-group">
 				<?php if (! $this->_tpl_vars['submissionAckEnabled']): ?> 					
 				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'emails'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'preparedEmailsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'preparedEmailsUrl'));?>

 				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.notifications.submissionAckDisabled",'preparedEmailsUrl' => $this->_tpl_vars['preparedEmailsUrl']), $this);?>

 				<?php endif; ?>
 			</div>
 		</div>
 	</div> <!--#notifications-->

 	<hr>

 	<div id="citationAssistant">
 		<h3>3.7 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.citationAssistant"), $this);?>
</h3>

 		<a name="metaCitationEditing"></a>
 		<?php if ($this->_tpl_vars['citationEditorError']): ?>
 		<div class="alert alert-danger"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['citationEditorError']), $this);?>
</div>
 		<?php else: ?>
 		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.metaCitationsDescription"), $this);?>
</p>
 		<div class="form-group">
 			<div class="checkbox">
 				<label for="metaCitations"> 				
 					<input type="checkbox" name="metaCitations" id="metaCitations" value="1"<?php if ($this->_tpl_vars['metaCitations']): ?> checked="checked"<?php endif; ?> />&nbsp;
 					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.citations"), $this);?>

 				</label>
 			</div>
 		</div> <!--.form-group-->

 		<div id="citationFilterSetupToggle" <?php if (! $this->_tpl_vars['metaCitations']): ?>style="visible: none"<?php endif; ?>>
 			<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.citationFilterParser"), $this);?>
</h4>
 			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.citationFilterParserDescription"), $this);?>
</p>
 			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'parserFilterGridContainer','loadMessageId' => "manager.setup.filter.parser.grid.loadMessage",'url' => ($this->_tpl_vars['parserFilterGridUrl'])), $this);?>


 			<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.citationFilterLookup"), $this);?>
</h4>
 			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.citationFilterLookupDescription"), $this);?>
</p>
 			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'lookupFilterGridContainer','loadMessageId' => "manager.setup.filter.lookup.grid.loadMessage",'url' => ($this->_tpl_vars['lookupFilterGridUrl'])), $this);?>

 			<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.citationOutput"), $this);?>
</h4>
 			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.citationOutputStyleDescription"), $this);?>
</p>
 			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('class' => "form-control",'type' => 'select','id' => 'metaCitationOutputFilterSelect','name' => 'metaCitationOutputFilterId','from' => $this->_tpl_vars['metaCitationOutputFilters'],'translate' => false,'selected' => ((is_array($_tmp=$this->_tpl_vars['metaCitationOutputFilterId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'defaultValue' => "-1",'defaultLabel' => ((is_array($_tmp="manager.setup.filter.pleaseSelect")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp))), $this);?>

 		</div>
 		<?php echo '<script type=\'text/javascript\'>
 		$(function(){
			// jQuerify DOM elements
			$metaCitationsCheckbox = $(\'#metaCitations\');
			$metaCitationsSetupBox = $(\'#citationFilterSetupToggle\');

			// Set the initial state
			initialCheckboxState = $metaCitationsCheckbox.attr(\'checked\');
			if (initialCheckboxState) {
				$metaCitationsSetupBox.css(\'display\', \'block\');
			} else {
				$metaCitationsSetupBox.css(\'display\', \'none\');
			}

			// Toggle the settings box.
			// NB: Has to be click() rather than change() to work in IE.
			$metaCitationsCheckbox.click(function(){
				checkboxState = $metaCitationsCheckbox.attr(\'checked\');
				toggleState = ($metaCitationsSetupBox.css(\'display\') === \'block\');
				if (checkboxState !== toggleState) {
					$metaCitationsSetupBox.toggle(300);
				}
			});
		});

 		function permissionsValues() {
 			perm = \':\';
 			licenseNames = ["copyrightYearBasis", "copyrightHolderType"];
 			for (l = 0; l < licenseNames.length; l++) {
 				ele = document.getElementsByName(licenseNames[l]);
 				for (i = 0; i < ele.length; i++) {
 					if (ele[i].type == \'radio\') {
 						if (ele[i].checked) {
 							perm += ele[i].value + \':\';
 							break;
 						}
 					} else {
 						perm += ele[i].value + \':\';
 					}
 				}
 			};
 			licenseIds = ["copyrightHolderOther", "licenseURL"];
 			for (l = 0; l < licenseIds.length; l++) {
 				ele = document.getElementById(licenseIds[l]);
 				if (ele) {
 					perm += ele.value + \':\';
 				}
 			}
 			return perm;
 		}
 		var resetValues;
 		$(document).ready( function () {
 			resetValues = permissionsValues();
 			$(\'#resetPermissionsButton\').click( function ( event ) {
 				if (resetValues == permissionsValues()) {
 					'; ?>

 					confirmAction('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'resetPermissions'), $this);?>
', '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.confirmResetLicense"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
');
 					<?php echo '
 				} else {
 					'; ?>

 					window.alert('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.confirmResetLicenseChanged"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')
 					<?php echo '
 				}
 				event.preventDefault();
 			});
 		});
 	</script>'; ?>

 	<?php endif; ?>
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