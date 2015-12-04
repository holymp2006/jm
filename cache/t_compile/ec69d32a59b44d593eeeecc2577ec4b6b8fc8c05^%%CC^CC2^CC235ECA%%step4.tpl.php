<?php /* Smarty version 2.6.26, created on 2015-12-01 18:26:19
         compiled from manager/setup/step4.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/setup/step4.tpl', 14, false),array('function', 'fieldLabel', 'manager/setup/step4.tpl', 19, false),array('function', 'form_language_chooser', 'manager/setup/step4.tpl', 22, false),array('function', 'translate', 'manager/setup/step4.tpl', 23, false),array('modifier', 'assign', 'manager/setup/step4.tpl', 21, false),array('modifier', 'escape', 'manager/setup/step4.tpl', 63, false),)), $this); ?>
<?php $this->assign('pageTitle', "manager.setup.managingTheJournal"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "manager/setup/setupHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form id="setupForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSetup','path' => '4'), $this);?>
" enctype="multipart/form-data">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
<div id="locales" class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>

		<div width="80%" class="col-sm-10">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '4','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'setupFormUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'setupFormUrl'));?>

			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'setupForm','url' => $this->_tpl_vars['setupFormUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</div>
</div><!-- locales -->
<?php endif; ?>

<div id="securitySettings">
<h3>4.1 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.securitySettings"), $this);?>
</h3>
<div id="onlineAccessManagement">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.onlineAccessManagement"), $this);?>
</h4>
<script type="text/javascript">
	<?php echo '
	<!--
		function togglePublishingMode(form) {
			if (form.publishingMode[0].checked) {
				// PUBLISHING_MODE_OPEN
				form.openAccessPolicy.disabled = false;
				form.showGalleyLinks.disabled = true;
			} else if (form.publishingMode[1].checked) {
				// PUBLISHING_MODE_SUBSCRIPTION
				form.openAccessPolicy.disabled = true;
				form.showGalleyLinks.disabled = false;
			} else {
				// PUBLISHING_MODE_NONE
				form.openAccessPolicy.disabled = true;
				form.showGalleyLinks.disabled = true;
			}
		}
	// -->
	'; ?>

</script>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-11 radio">
			<label for="publishingMode-0">
				<input type="radio" name="publishingMode" id="publishingMode-0" value="<?php echo @PUBLISHING_MODE_OPEN; ?>
" onclick="togglePublishingMode(this.form)"<?php if ($this->_tpl_vars['publishingMode'] == @PUBLISHING_MODE_OPEN): ?> checked="checked"<?php endif; ?> />
				<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.openAccess"), $this);?>
</strong>
				<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.openAccessPolicy"), $this);?>
</h4>
				<span class="help-block instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.openAccessPolicyDescription"), $this);?>
</span>
				<div class="form-group journal-setup">
					<textarea name="openAccessPolicy[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="openAccessPolicy" rows="12" cols="60" class="form-control"<?php if ($this->_tpl_vars['publishingMode'] != @PUBLISHING_MODE_OPEN): ?> disabled="disabled"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['openAccessPolicy'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
				</div>				
			</label>
		</div>					
	</div>
	<tr>
		<td colspan="2" class="separator">&nbsp;</td>
	</tr>
	
		<div class="form-group">
			<div class="col-sm-11 radio">
				<label for="publishingMode-1">
					<input type="radio" name="publishingMode" id="publishingMode-1" value="<?php echo @PUBLISHING_MODE_SUBSCRIPTION; ?>
" onclick="togglePublishingMode(this.form)"<?php if ($this->_tpl_vars['publishingMode'] == @PUBLISHING_MODE_SUBSCRIPTION): ?> checked="checked"<?php endif; ?> /> <strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subscription"), $this);?>
</strong>
				<span class="help-block instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.subscriptionDescription"), $this);?>
</span>
					<div class="form-group">
						<div class="col-sm-11 checkbox">
							<label for="showGalleyLinks"><input type="checkbox" name="showGalleyLinks" id="showGalleyLinks" <?php if ($this->_tpl_vars['showGalleyLinks']): ?> checked="checked"<?php endif; ?> /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.showGalleyLinksDescription"), $this);?>
</label>
						</div>
					</div>				
				</label>

			</div>

		</div>
	
	
	<div>
		<hr>
	</div>
	<div class="form-group">
		<div class="col-sm-11 radio">
			<label for="publishingMode-2">
				<input type="radio" name="publishingMode" id="publishingMode-2" value="<?php echo @PUBLISHING_MODE_NONE; ?>
" onclick="togglePublishingMode(this.form)"<?php if ($this->_tpl_vars['publishingMode'] == @PUBLISHING_MODE_NONE): ?> checked="checked"<?php endif; ?> />
				<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.noPublishing"), $this);?>
</strong>
				<span class="help-block"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.securitySettingsDescription"), $this);?>
</p></span>
			</label>
		
		</div>
	</div>
</div>


</div><!-- onlineAccessManagement -->

<script type="text/javascript">
<?php echo '
<!--
function setRegAllowOpts(form) {
	if(form.disableUserReg[0].checked) {
		form.allowRegReader.disabled=false;
		form.allowRegAuthor.disabled=false;
		form.allowRegReviewer.disabled=false;
	} else {
		form.allowRegReader.disabled=true;
		form.allowRegAuthor.disabled=true;
		form.allowRegReviewer.disabled=true;
	}
}
// -->
'; ?>

</script>

<div id="siteAccess">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.siteAccess"), $this);?>
</h4>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-11 checkbox">
			<label for="restrictSiteAccess">
				<input type="checkbox" name="restrictSiteAccess" id="restrictSiteAccess" value="1"<?php if ($this->_tpl_vars['restrictSiteAccess']): ?> checked="checked"<?php endif; ?> /><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.restrictSiteAccess"), $this);?>
</strong>
			</label>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-11 checkbox">
			<label for="restrictArticleAccess">
				<input type="checkbox" name="restrictArticleAccess" id="restrictArticleAccess" value="1"<?php if ($this->_tpl_vars['restrictArticleAccess']): ?> checked="checked"<?php endif; ?> /><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.restrictArticleAccess"), $this);?>
</strong>
			</label>
		</div>
	</div>
</div>
</div><!-- siteAccess -->

<div id="userRegistration">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.userRegistration"), $this);?>
</h4>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="disableUserReg-0">
				<input type="radio" name="disableUserReg" id="disableUserReg-0" value="0" onclick="setRegAllowOpts(this.form)"<?php if (! $this->_tpl_vars['disableUserReg']): ?> checked="checked"<?php endif; ?> /><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enableUserRegistration"), $this);?>
</strong>
				<div class="form-group">
					<div class="col-sm-10 checkbox">
						<label for="allowRegReader">
							<input type="checkbox" name="allowRegReader" id="allowRegReader" value="1"<?php if ($this->_tpl_vars['allowRegReader']): ?> checked="checked"<?php endif; ?><?php if ($this->_tpl_vars['disableUserReg']): ?> disabled="disabled"<?php endif; ?> /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enableUserRegistration.reader"), $this);?>

						</label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10 checkbox">
						<label for="allowRegAuthor">
							<input type="checkbox" name="allowRegAuthor" id="allowRegAuthor" value="1"<?php if ($this->_tpl_vars['allowRegAuthor']): ?> checked="checked"<?php endif; ?><?php if ($this->_tpl_vars['disableUserReg']): ?> disabled="disabled"<?php endif; ?> /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enableUserRegistration.author"), $this);?>

						</label>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-10 checkbox">
						<label for="allowRegReviewer">
							<input type="checkbox" name="allowRegReviewer" id="allowRegReviewer" value="1"<?php if ($this->_tpl_vars['allowRegReviewer']): ?> checked="checked"<?php endif; ?><?php if ($this->_tpl_vars['disableUserReg']): ?> disabled="disabled"<?php endif; ?> /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enableUserRegistration.reviewer"), $this);?>

						</label>
					</div>
				</div>
			</label>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="disableUserReg-1">
				<input type="radio" name="disableUserReg" id="disableUserReg-1" value="1" onclick="setRegAllowOpts(this.form)"<?php if ($this->_tpl_vars['disableUserReg']): ?> checked="checked"<?php endif; ?> /><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.disableUserRegistration"), $this);?>
</strong>
			</label>
		</div>
	</div>
</div>

</div><!-- userRegistration -->

</div><!-- securitySettings -->

<p><hr></p>

<div id="publicationScheduling">
<h3>4.2 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationScheduling"), $this);?>
</h3>
<div id="publicationSchedule">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationSchedule"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationScheduleDescription"), $this);?>
</p>
<div class="form-group journal-setup">
	<p><textarea name="pubFreqPolicy[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="pubFreqPolicy" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['pubFreqPolicy'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></p>
</div>	
</div>
<div id="publicationFormat">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormat"), $this);?>
</h4>

	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatDescription"), $this);?>
</p>

		<div class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-12 checkbox">
					<label for="publicationFormatVolume">
						<input type="checkbox" name="publicationFormatVolume" id="publicationFormatVolume" value="1"<?php if (( $this->_tpl_vars['publicationFormatVolume'] )): ?> checked="checked"<?php endif; ?> /><strong>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatVolume"), $this);?>
</strong>
					</label>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-11 checkbox">
					<label for="publicationFormatNumber">
						<input type="checkbox" name="publicationFormatNumber" id="publicationFormatNumber" value="1"<?php if (( $this->_tpl_vars['publicationFormatNumber'] )): ?> checked="checked"<?php endif; ?> /><strong>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatNumber"), $this);?>
</strong>
					</label>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-11 checkbox">
					<label for="publicationFormatYear">
						<input type="checkbox" name="publicationFormatYear" id="publicationFormatYear" value="1"<?php if (( $this->_tpl_vars['publicationFormatYear'] )): ?> checked="checked"<?php endif; ?> /><strong>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatYear"), $this);?>
</strong>
					</label>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-11 checkbox">
					<label for="publicationFormatTitle">
						<input type="checkbox" name="publicationFormatTitle" id="publicationFormatTitle" value="1"<?php if (( $this->_tpl_vars['publicationFormatTitle'] )): ?> checked="checked"<?php endif; ?> /><strong>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicationFormatTitle"), $this);?>
</strong>
					</label>
				</div>
			</div>
		</div>
	</div>

<div id="frequencyOfPublication">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.frequencyOfPublication"), $this);?>
</h4>

<p class="help-block"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.frequencyOfPublicationDescription"), $this);?>
</p>

<div class="form-horizontal">
	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initialNumber','key' => "issue.number",'class' => "col-sm-3 control-label"), $this);?>

		<div class="col-sm-3"><input type="text" name="initialNumber" id="initialNumber" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initialNumber'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="5" maxlength="8" class="form-control" /></div>
	</div>
	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initialVolume','key' => "issue.volume",'class' => "col-sm-3 control-label"), $this);?>

		<div class="col-sm-3"><input type="text" name="initialVolume" id="initialVolume" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initialVolume'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="5" maxlength="8" class="form-control" /></div>
	</div>
	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'initialYear','key' => "issue.year",'class' => "col-sm-3 control-label"), $this);?>

		<div class="col-sm-3"><input type="text" name="initialYear" id="initialYear" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['initialYear'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="5" maxlength="8" class="form-control" /></div>
	</div>
	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'issuePerVolume','key' => "manager.setup.issuePerVolume",'class' => "col-sm-3 control-label"), $this);?>

		<div class="col-sm-3"><input type="text" name="issuePerVolume" id="issuePerVolume" value="<?php if ($this->_tpl_vars['issuePerVolume']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issuePerVolume'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>" size="5" maxlength="8" class="form-control" /></div>
	</div>
	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'volumePerYear','key' => "manager.setup.volumePerYear",'class' => "col-sm-3 control-label"), $this);?>

		<div class="col-sm-3"><input type="text" name="volumePerYear" id="volumePerYear" value="<?php if ($this->_tpl_vars['volumePerYear']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['volumePerYear'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>" size="5" maxlength="8" class="form-control" /></div>
	</div>
</div>


<p class="alert alert-info"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.frequencyOfPublicationNote"), $this);?>
</p>
</div>
</div>

<hr>

<div id="publicIdentifier">
	<h3>4.3 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.publicIdentifier"), $this);?>
</h3>
	<div id="uniqueIdentifier">
	<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.uniqueIdentifier"), $this);?>
</h4>

	<p class="help-block"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.uniqueIdentifierDescription"), $this);?>
</p>

	<div class="form-horizontal">
		<div class="form-group">
			<div class="col-sm-11 checkbox">
				<label for="enablePublicIssueId">
					<input type="checkbox" name="enablePublicIssueId" id="enablePublicIssueId" value="1"<?php if ($this->_tpl_vars['enablePublicIssueId']): ?> checked="checked"<?php endif; ?> /><strong>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enablePublicIssueId"), $this);?>
</strong>
				</label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-11 checkbox">
				<label for="enablePublicArticleId">
					<input type="checkbox" name="enablePublicArticleId" id="enablePublicArticleId" value="1"<?php if ($this->_tpl_vars['enablePublicArticleId']): ?> checked="checked"<?php endif; ?> /><strong>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enablePublicArticleId"), $this);?>
</strong>
				</label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-12 checkbox">
				<label for="enablePublicGalleyId">
					<input type="checkbox" name="enablePublicGalleyId" id="enablePublicGalleyId" value="1"<?php if ($this->_tpl_vars['enablePublicGalleyId']): ?> checked="checked"<?php endif; ?> /><strong>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enablePublicGalleyId"), $this);?>
</strong>
				</label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-11 checkbox">
				<label for="enablePublicSuppFileId">
					<input type="checkbox" name="enablePublicSuppFileId" id="enablePublicSuppFileId" value="1"<?php if ($this->_tpl_vars['enablePublicSuppFileId']): ?> checked="checked"<?php endif; ?> /><strong>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enablePublicSuppFileId"), $this);?>
</strong>
				</label>
			</div>
		</div>

	</div>
	</div><!-- uniqueIdentifier -->
	<br></br>

	<div id="pageNumberIdentifier">
	<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.pageNumberIdentifier"), $this);?>
</h4>

		<div class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-11 checkbox">
					<label for="enablePageNumber">
						<input type="checkbox" name="enablePageNumber" id="enablePageNumber" value="1"<?php if ($this->_tpl_vars['enablePageNumber']): ?> checked="checked"<?php endif; ?> /><strong>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enablePageNumber"), $this);?>
</strong>
					</label>
				</div>
			</div>
		</div>

	</div><!-- pageNumberIdentifier -->
</div><!-- publicIdentifier -->

<hr>

<div id="announcementsSection">
<h3>4.4 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.announcements"), $this);?>
</h3>

<p class="help-block"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.announcementsDescription"), $this);?>
</p>

	<script type="text/javascript">
		<?php echo '
		<!--
			function toggleEnableAnnouncementsHomepage(form) {
				form.numAnnouncementsHomepage.disabled = !form.numAnnouncementsHomepage.disabled;
			}
		// -->
		'; ?>

	</script>

<p>
	<div class="form-group">
		<div class="col-sm-11 checkbox">
			<label for="enableAnnouncements">
				<input type="checkbox" name="enableAnnouncements" id="enableAnnouncements" value="1" <?php if ($this->_tpl_vars['enableAnnouncements']): ?> checked="checked"<?php endif; ?> /><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enableAnnouncements"), $this);?>
</strong>
			</label>
		</div>
	</div>
</p>

<p>
	<div class="form-group">
		<div class="col-sm-12 checkbox">
			<label for="enableAnnouncementsHomepage">
				<input type="checkbox" name="enableAnnouncementsHomepage" id="enableAnnouncementsHomepage" value="1" onclick="toggleEnableAnnouncementsHomepage(this.form)"<?php if ($this->_tpl_vars['enableAnnouncementsHomepage']): ?> checked="checked"<?php endif; ?> /><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enableAnnouncementsHomepage1"), $this);?>
 </strong>
			</label>

			<select name="numAnnouncementsHomepage" size="1" class="selectMenu" <?php if (! $this->_tpl_vars['enableAnnouncementsHomepage']): ?>disabled="disabled"<?php endif; ?>>
				<?php unset($this->_sections['numAnnouncementsHomepageOptions']);
$this->_sections['numAnnouncementsHomepageOptions']['name'] = 'numAnnouncementsHomepageOptions';
$this->_sections['numAnnouncementsHomepageOptions']['start'] = (int)1;
$this->_sections['numAnnouncementsHomepageOptions']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['numAnnouncementsHomepageOptions']['show'] = true;
$this->_sections['numAnnouncementsHomepageOptions']['max'] = $this->_sections['numAnnouncementsHomepageOptions']['loop'];
$this->_sections['numAnnouncementsHomepageOptions']['step'] = 1;
if ($this->_sections['numAnnouncementsHomepageOptions']['start'] < 0)
    $this->_sections['numAnnouncementsHomepageOptions']['start'] = max($this->_sections['numAnnouncementsHomepageOptions']['step'] > 0 ? 0 : -1, $this->_sections['numAnnouncementsHomepageOptions']['loop'] + $this->_sections['numAnnouncementsHomepageOptions']['start']);
else
    $this->_sections['numAnnouncementsHomepageOptions']['start'] = min($this->_sections['numAnnouncementsHomepageOptions']['start'], $this->_sections['numAnnouncementsHomepageOptions']['step'] > 0 ? $this->_sections['numAnnouncementsHomepageOptions']['loop'] : $this->_sections['numAnnouncementsHomepageOptions']['loop']-1);
if ($this->_sections['numAnnouncementsHomepageOptions']['show']) {
    $this->_sections['numAnnouncementsHomepageOptions']['total'] = min(ceil(($this->_sections['numAnnouncementsHomepageOptions']['step'] > 0 ? $this->_sections['numAnnouncementsHomepageOptions']['loop'] - $this->_sections['numAnnouncementsHomepageOptions']['start'] : $this->_sections['numAnnouncementsHomepageOptions']['start']+1)/abs($this->_sections['numAnnouncementsHomepageOptions']['step'])), $this->_sections['numAnnouncementsHomepageOptions']['max']);
    if ($this->_sections['numAnnouncementsHomepageOptions']['total'] == 0)
        $this->_sections['numAnnouncementsHomepageOptions']['show'] = false;
} else
    $this->_sections['numAnnouncementsHomepageOptions']['total'] = 0;
if ($this->_sections['numAnnouncementsHomepageOptions']['show']):

            for ($this->_sections['numAnnouncementsHomepageOptions']['index'] = $this->_sections['numAnnouncementsHomepageOptions']['start'], $this->_sections['numAnnouncementsHomepageOptions']['iteration'] = 1;
                 $this->_sections['numAnnouncementsHomepageOptions']['iteration'] <= $this->_sections['numAnnouncementsHomepageOptions']['total'];
                 $this->_sections['numAnnouncementsHomepageOptions']['index'] += $this->_sections['numAnnouncementsHomepageOptions']['step'], $this->_sections['numAnnouncementsHomepageOptions']['iteration']++):
$this->_sections['numAnnouncementsHomepageOptions']['rownum'] = $this->_sections['numAnnouncementsHomepageOptions']['iteration'];
$this->_sections['numAnnouncementsHomepageOptions']['index_prev'] = $this->_sections['numAnnouncementsHomepageOptions']['index'] - $this->_sections['numAnnouncementsHomepageOptions']['step'];
$this->_sections['numAnnouncementsHomepageOptions']['index_next'] = $this->_sections['numAnnouncementsHomepageOptions']['index'] + $this->_sections['numAnnouncementsHomepageOptions']['step'];
$this->_sections['numAnnouncementsHomepageOptions']['first']      = ($this->_sections['numAnnouncementsHomepageOptions']['iteration'] == 1);
$this->_sections['numAnnouncementsHomepageOptions']['last']       = ($this->_sections['numAnnouncementsHomepageOptions']['iteration'] == $this->_sections['numAnnouncementsHomepageOptions']['total']);
?>
				<option value="<?php echo $this->_sections['numAnnouncementsHomepageOptions']['index']; ?>
"<?php if ($this->_tpl_vars['numAnnouncementsHomepage'] == $this->_sections['numAnnouncementsHomepageOptions']['index'] || ( $this->_sections['numAnnouncementsHomepageOptions']['index'] == 1 && ! $this->_tpl_vars['numAnnouncementsHomepage'] )): ?> selected="selected"<?php endif; ?>><?php echo $this->_sections['numAnnouncementsHomepageOptions']['index']; ?>
</option>
				<?php endfor; endif; ?>
			</select>
			<strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enableAnnouncementsHomepage2"), $this);?>
</strong>
		</div>
	</div>
</p>
<div id="announcementsIntroductionSection">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.announcementsIntroduction"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.announcementsIntroductionDescription"), $this);?>
</p>
<div class="form-group journal-setup">
	<p><textarea name="announcementsIntroduction[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="announcementsIntroduction" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['announcementsIntroduction'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></p>
</div>
</div><!-- announcementsIntroductionSection -->
</div><!-- announcementsSection -->

<hr>

<div id="copyediting">
<h3>4.5 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.copyediting"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.selectOne"), $this);?>
:</p>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="useCopyeditors-1">
				<input type="radio" name="useCopyeditors" id="useCopyeditors-1" value="1"<?php if ($this->_tpl_vars['useCopyeditors']): ?> checked="checked"<?php endif; ?> /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useCopyeditors"), $this);?>

			</label>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="useCopyeditors-0">
				<input type="radio" name="useCopyeditors" id="useCopyeditors-0" value="0"<?php if (! $this->_tpl_vars['useCopyeditors']): ?> checked="checked"<?php endif; ?> /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.noUseCopyeditors"), $this);?>

			</label>
		</div>
	</div>
</div>
</div><!-- copyediting -->

<div id="copyeditInstructionsSection">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.copyeditInstructions"), $this);?>
</h4>

<p class="help-block"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.copyeditInstructionsDescription"), $this);?>
</p>
<div class="form-group journal-setup">
	<p>
		<textarea name="copyeditInstructions[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="copyeditInstructions" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['copyeditInstructions'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
	</p>
</div>
</div><!-- copyeditInstructionsSection -->

<hr>

<div id="layoutAndGalleys">
<h3>4.6 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layoutAndGalleys"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.selectOne"), $this);?>
:</p>

<div class="horizontal">
	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="useLayoutEditors-1">
				<input type="radio" name="useLayoutEditors" id="useLayoutEditors-1" value="1"<?php if ($this->_tpl_vars['useLayoutEditors']): ?> checked="checked"<?php endif; ?> /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useLayoutEditors"), $this);?>

			</label>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="useLayoutEditors-0">
				<input type="radio" name="useLayoutEditors" id="useLayoutEditors-0" value="0"<?php if (! $this->_tpl_vars['useLayoutEditors']): ?> checked="checked"<?php endif; ?> /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.noUseLayoutEditors"), $this);?>

			</label>
		</div>
	</div>
</div>

<div id="layoutInstructionsSection">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layoutInstructions"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layoutInstructionsDescription"), $this);?>
</p>
<div class="form-group journal-setup">
	<p>
		<textarea name="layoutInstructions[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="layoutInstructions" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['layoutInstructions'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
	</p>
</div>
</div><!-- layoutInstructionsSection -->

<div id="layoutTemplates">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layoutTemplates"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layoutTemplatesDescription"), $this);?>
</p>

	<div class="form-horizontal">
	<?php $_from = $this->_tpl_vars['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['templates'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['templates']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['templateId'] => $this->_tpl_vars['template']):
        $this->_foreach['templates']['iteration']++;
?>
	<div class="form-group">
		<div width="20%" class="label">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadLayoutTemplate','path' => $this->_tpl_vars['templateId']), $this);?>
" class="action"><?php echo ((is_array($_tmp=$this->_tpl_vars['template']['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
		</div>
		<div width="50%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['template']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</div>
		<div width="30%">
			<input type="submit" name="delTemplate[<?php echo ((is_array($_tmp=$this->_tpl_vars['templateId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="btn btn-primary" />
		</div>
	</div>

	<?php endforeach; endif; unset($_from); ?>
		
			<div class="form-group">
				<p><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "template-title",'key' => "manager.setup.layoutTemplates.title",'class' => "col-sm-2 control-label"), $this);?>

					<div class="col-sm-10">
						<input type="text" name="template-title" id="template-title" size="40" maxlength="90" class="form-control" />
					</div>
				</p>
			</div>

			<div class="form-group">
					<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "template-file",'key' => "manager.setup.layoutTemplates.file",'class' => "col-sm-2 control-label"), $this);?>

					<div class="col-sm-10">
						<input type="file" name="template-file" id="template-file" class="uploadField" />
					</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-sm-10">
					<input type="submit" name="addTemplate" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="btn btn-primary" />
				</div>
			</div>
	</div>

</div><!-- layoutTemplates -->

<div id="referenceLinking">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.referenceLinking"), $this);?>
</h4>

<div class="well"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.referenceLinkingDescription"), $this);?>
</div>

<div class="form-group">
	<div class="col-sm-12 checkbox">
		<label for="provideRefLinkInstructions">
			<input type="checkbox" name="provideRefLinkInstructions" id="provideRefLinkInstructions" value="1"<?php if ($this->_tpl_vars['provideRefLinkInstructions']): ?> checked="checked"<?php endif; ?> /><strong>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.provideRefLinkInstructions"), $this);?>
</strong>
		</label>
	</div>
</div>
</div><!-- referenceLinking -->

<div id="refLinkInstructionsSection">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.refLinkInstructions.description"), $this);?>
</h4>
<div class="form-group journal-setup">
	<textarea name="refLinkInstructions[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="refLinkInstructions" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['refLinkInstructions'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
</div>
</div><!-- refLinkInstructionsSection -->
</div>
<hr>

<div id="proofreading">
<h3>4.7 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.proofreading"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.selectOne"), $this);?>
:</p>

	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="useProofreaders-1">
				<input type="radio" name="useProofreaders" id="useProofreaders-1" value="1"<?php if ($this->_tpl_vars['useProofreaders']): ?> checked="checked"<?php endif; ?> /><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useProofreaders"), $this);?>
</strong>
			</label>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="useProofreaders-0">
				<input type="radio" name="useProofreaders" id="useProofreaders-0" value="0"<?php if (! $this->_tpl_vars['useProofreaders']): ?> checked="checked"<?php endif; ?> /><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.noUseProofreaders"), $this);?>
</strong>
			</label>
		</div>
	</div>

</div>
<div id="proofingInstructions">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.proofingInstructions"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.proofingInstructionsDescription"), $this);?>
</p>
<div class="form-group journal-setup">
	<p>
		<textarea name="proofInstructions[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="proofInstructions" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['proofInstructions'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
	</p>
</div>
</div>

<hr>

<p>
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndContinue"), $this);?>
" class="btn btn-primary" /> 
	<input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="btn btn-primary btn-warning" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','escape' => false), $this);?>
'" />
</p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form><!-- end form -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
