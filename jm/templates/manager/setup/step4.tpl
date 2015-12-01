{**
 * templates/manager/setup/step4.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Step 4 of journal setup.
 *
 *}
{assign var="pageTitle" value="manager.setup.managingTheJournal"}
{include file="manager/setup/setupHeader.tpl"}

<form id="setupForm" method="post" action="{url op="saveSetup" path="4"}" enctype="multipart/form-data">
{include file="common/formErrors.tpl"}

{if count($formLocales) > 1}
<div id="locales" class="form-group">
		{fieldLabel name="formLocale" key="form.formLanguage"}
		<div width="80%" class="col-sm-10">
			{url|assign:"setupFormUrl" op="setup" path="4" escape=false}
			{form_language_chooser form="setupForm" url=$setupFormUrl}
			<span class="instruct">{translate key="form.formLanguage.description"}</span>
		</div>
</div><!-- locales -->
{/if}

<div id="securitySettings">
<h3>4.1 {translate key="manager.setup.securitySettings"}</h3>
<div id="onlineAccessManagement">
<h4>{translate key="manager.setup.onlineAccessManagement"}</h4>
<script type="text/javascript">
	{literal}
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
	{/literal}
</script>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-11 radio">
			<label for="publishingMode-0">
				<input type="radio" name="publishingMode" id="publishingMode-0" value="{$smarty.const.PUBLISHING_MODE_OPEN}" onclick="togglePublishingMode(this.form)"{if $publishingMode == $smarty.const.PUBLISHING_MODE_OPEN} checked="checked"{/if} />
				<strong>{translate key="manager.setup.openAccess"}</strong>
				<h4>{translate key="manager.setup.openAccessPolicy"}</h4>
				<span class="help-block instruct">{translate key="manager.setup.openAccessPolicyDescription"}</span>
				<div class="form-group journal-setup">
					<textarea name="openAccessPolicy[{$formLocale|escape}]" id="openAccessPolicy" rows="12" cols="60" class="form-control"{if $publishingMode != $smarty.const.PUBLISHING_MODE_OPEN} disabled="disabled"{/if}>{$openAccessPolicy[$formLocale]|escape}</textarea>
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
					<input type="radio" name="publishingMode" id="publishingMode-1" value="{$smarty.const.PUBLISHING_MODE_SUBSCRIPTION}" onclick="togglePublishingMode(this.form)"{if $publishingMode == $smarty.const.PUBLISHING_MODE_SUBSCRIPTION} checked="checked"{/if} /> <strong>{translate key="manager.setup.subscription"}</strong>
				<span class="help-block instruct">{translate key="manager.setup.subscriptionDescription"}</span>
					<div class="form-group">
						<div class="col-sm-11 checkbox">
							<label for="showGalleyLinks"><input type="checkbox" name="showGalleyLinks" id="showGalleyLinks" {if $showGalleyLinks} checked="checked"{/if} />{translate key="manager.setup.showGalleyLinksDescription"}</label>
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
				<input type="radio" name="publishingMode" id="publishingMode-2" value="{$smarty.const.PUBLISHING_MODE_NONE}" onclick="togglePublishingMode(this.form)"{if $publishingMode == $smarty.const.PUBLISHING_MODE_NONE} checked="checked"{/if} />
				<strong>{translate key="manager.setup.noPublishing"}</strong>
				<span class="help-block">{translate key="manager.setup.securitySettingsDescription"}</p></span>
			</label>
		
		</div>
	</div>
</div>


</div><!-- onlineAccessManagement -->

<script type="text/javascript">
{literal}
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
{/literal}
</script>

<div id="siteAccess">
<h4>{translate key="manager.setup.siteAccess"}</h4>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-11 checkbox">
			<label for="restrictSiteAccess">
				<input type="checkbox" name="restrictSiteAccess" id="restrictSiteAccess" value="1"{if $restrictSiteAccess} checked="checked"{/if} /><strong>{translate key="manager.setup.restrictSiteAccess"}</strong>
			</label>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-11 checkbox">
			<label for="restrictArticleAccess">
				<input type="checkbox" name="restrictArticleAccess" id="restrictArticleAccess" value="1"{if $restrictArticleAccess} checked="checked"{/if} /><strong>{translate key="manager.setup.restrictArticleAccess"}</strong>
			</label>
		</div>
	</div>
</div>
</div><!-- siteAccess -->

<div id="userRegistration">
<h4>{translate key="manager.setup.userRegistration"}</h4>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="disableUserReg-0">
				<input type="radio" name="disableUserReg" id="disableUserReg-0" value="0" onclick="setRegAllowOpts(this.form)"{if !$disableUserReg} checked="checked"{/if} /><strong>{translate key="manager.setup.enableUserRegistration"}</strong>
				<div class="form-group">
					<div class="col-sm-10 checkbox">
						<label for="allowRegReader">
							<input type="checkbox" name="allowRegReader" id="allowRegReader" value="1"{if $allowRegReader} checked="checked"{/if}{if $disableUserReg} disabled="disabled"{/if} />{translate key="manager.setup.enableUserRegistration.reader"}
						</label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10 checkbox">
						<label for="allowRegAuthor">
							<input type="checkbox" name="allowRegAuthor" id="allowRegAuthor" value="1"{if $allowRegAuthor} checked="checked"{/if}{if $disableUserReg} disabled="disabled"{/if} />{translate key="manager.setup.enableUserRegistration.author"}
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-10 checkbox">
						<label for="allowRegReviewer">
							<input type="checkbox" name="allowRegReviewer" id="allowRegReviewer" value="1"{if $allowRegReviewer} checked="checked"{/if}{if $disableUserReg} disabled="disabled"{/if} />{translate key="manager.setup.enableUserRegistration.reviewer"}
						</label>
					</div>
				</div>
			</label>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="disableUserReg-1">
				<input type="radio" name="disableUserReg" id="disableUserReg-1" value="1" onclick="setRegAllowOpts(this.form)"{if $disableUserReg} checked="checked"{/if} /><strong>{translate key="manager.setup.disableUserRegistration"}</strong>
			</label>
		</div>
	</div>
</div>

</div><!-- userRegistration -->

</div><!-- securitySettings -->

<p><hr></p>

<div id="publicationScheduling">
<h3>4.2 {translate key="manager.setup.publicationScheduling"}</h3>
<div id="publicationSchedule">
<h4>{translate key="manager.setup.publicationSchedule"}</h4>

<p>{translate key="manager.setup.publicationScheduleDescription"}</p>
<div class="form-group journal-setup">
	<p><textarea name="pubFreqPolicy[{$formLocale|escape}]" id="pubFreqPolicy" rows="12" cols="60" class="form-control">{$pubFreqPolicy[$formLocale]|escape}</textarea></p>
</div>	
</div>
<div id="publicationFormat">
<h4>{translate key="manager.setup.publicationFormat"}</h4>

	<p>{translate key="manager.setup.publicationFormatDescription"}</p>

		<div class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-12 checkbox">
					<label for="publicationFormatVolume">
						<input type="checkbox" name="publicationFormatVolume" id="publicationFormatVolume" value="1"{if ($publicationFormatVolume)} checked="checked"{/if} /><strong>&nbsp;{translate key="manager.setup.publicationFormatVolume"}</strong>
					</label>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-11 checkbox">
					<label for="publicationFormatNumber">
						<input type="checkbox" name="publicationFormatNumber" id="publicationFormatNumber" value="1"{if ($publicationFormatNumber)} checked="checked"{/if} /><strong>&nbsp;{translate key="manager.setup.publicationFormatNumber"}</strong>
					</label>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-11 checkbox">
					<label for="publicationFormatYear">
						<input type="checkbox" name="publicationFormatYear" id="publicationFormatYear" value="1"{if ($publicationFormatYear)} checked="checked"{/if} /><strong>&nbsp;{translate key="manager.setup.publicationFormatYear"}</strong>
					</label>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-11 checkbox">
					<label for="publicationFormatTitle">
						<input type="checkbox" name="publicationFormatTitle" id="publicationFormatTitle" value="1"{if ($publicationFormatTitle)} checked="checked"{/if} /><strong>&nbsp;{translate key="manager.setup.publicationFormatTitle"}</strong>
					</label>
				</div>
			</div>
		</div>
	</div>

<div id="frequencyOfPublication">
<h4>{translate key="manager.setup.frequencyOfPublication"}</h4>

<p class="help-block">{translate key="manager.setup.frequencyOfPublicationDescription"}</p>

<div class="form-horizontal">
	<div class="form-group">
		{fieldLabel name="initialNumber" key="issue.number" class="col-sm-3 control-label"}
		<div class="col-sm-3"><input type="text" name="initialNumber" id="initialNumber" value="{$initialNumber|escape}" size="5" maxlength="8" class="form-control" /></div>
	</div>
	<div class="form-group">
		{fieldLabel name="initialVolume" key="issue.volume" class="col-sm-3 control-label"}
		<div class="col-sm-3"><input type="text" name="initialVolume" id="initialVolume" value="{$initialVolume|escape}" size="5" maxlength="8" class="form-control" /></div>
	</div>
	<div class="form-group">
		{fieldLabel name="initialYear" key="issue.year" class="col-sm-3 control-label"}
		<div class="col-sm-3"><input type="text" name="initialYear" id="initialYear" value="{$initialYear|escape}" size="5" maxlength="8" class="form-control" /></div>
	</div>
	<div class="form-group">
		{fieldLabel name="issuePerVolume" key="manager.setup.issuePerVolume" class="col-sm-3 control-label"}
		<div class="col-sm-3"><input type="text" name="issuePerVolume" id="issuePerVolume" value="{if $issuePerVolume}{$issuePerVolume|escape}{/if}" size="5" maxlength="8" class="form-control" /></div>
	</div>
	<div class="form-group">
		{fieldLabel name="volumePerYear" key="manager.setup.volumePerYear" class="col-sm-3 control-label"}
		<div class="col-sm-3"><input type="text" name="volumePerYear" id="volumePerYear" value="{if $volumePerYear}{$volumePerYear|escape}{/if}" size="5" maxlength="8" class="form-control" /></div>
	</div>
</div>


<p class="alert alert-info">{translate key="manager.setup.frequencyOfPublicationNote"}</p>
</div>
</div>

<hr>

<div id="publicIdentifier">
	<h3>4.3 {translate key="manager.setup.publicIdentifier"}</h3>
	<div id="uniqueIdentifier">
	<h4>{translate key="manager.setup.uniqueIdentifier"}</h4>

	<p class="help-block">{translate key="manager.setup.uniqueIdentifierDescription"}</p>

	<div class="form-horizontal">
		<div class="form-group">
			<div class="col-sm-11 checkbox">
				<label for="enablePublicIssueId">
					<input type="checkbox" name="enablePublicIssueId" id="enablePublicIssueId" value="1"{if $enablePublicIssueId} checked="checked"{/if} /><strong>&nbsp;{translate key="manager.setup.enablePublicIssueId"}</strong>
				</label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-11 checkbox">
				<label for="enablePublicArticleId">
					<input type="checkbox" name="enablePublicArticleId" id="enablePublicArticleId" value="1"{if $enablePublicArticleId} checked="checked"{/if} /><strong>&nbsp;{translate key="manager.setup.enablePublicArticleId"}</strong>
				</label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-12 checkbox">
				<label for="enablePublicGalleyId">
					<input type="checkbox" name="enablePublicGalleyId" id="enablePublicGalleyId" value="1"{if $enablePublicGalleyId} checked="checked"{/if} /><strong>&nbsp;{translate key="manager.setup.enablePublicGalleyId"}</strong>
				</label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-11 checkbox">
				<label for="enablePublicSuppFileId">
					<input type="checkbox" name="enablePublicSuppFileId" id="enablePublicSuppFileId" value="1"{if $enablePublicSuppFileId} checked="checked"{/if} /><strong>&nbsp;{translate key="manager.setup.enablePublicSuppFileId"}</strong>
				</label>
			</div>
		</div>

	</div>
	</div><!-- uniqueIdentifier -->
	<br></br>

	<div id="pageNumberIdentifier">
	<h4>{translate key="manager.setup.pageNumberIdentifier"}</h4>

		<div class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-11 checkbox">
					<label for="enablePageNumber">
						<input type="checkbox" name="enablePageNumber" id="enablePageNumber" value="1"{if $enablePageNumber} checked="checked"{/if} /><strong>&nbsp;{translate key="manager.setup.enablePageNumber"}</strong>
					</label>
				</div>
			</div>
		</div>

	</div><!-- pageNumberIdentifier -->
</div><!-- publicIdentifier -->

<hr>

<div id="announcementsSection">
<h3>4.4 {translate key="manager.setup.announcements"}</h3>

<p class="help-block">{translate key="manager.setup.announcementsDescription"}</p>

	<script type="text/javascript">
		{literal}
		<!--
			function toggleEnableAnnouncementsHomepage(form) {
				form.numAnnouncementsHomepage.disabled = !form.numAnnouncementsHomepage.disabled;
			}
		// -->
		{/literal}
	</script>

<p>
	<div class="form-group">
		<div class="col-sm-11 checkbox">
			<label for="enableAnnouncements">
				<input type="checkbox" name="enableAnnouncements" id="enableAnnouncements" value="1" {if $enableAnnouncements} checked="checked"{/if} /><strong>{translate key="manager.setup.enableAnnouncements"}</strong>
			</label>
		</div>
	</div>
</p>

<p>
	<div class="form-group">
		<div class="col-sm-12 checkbox">
			<label for="enableAnnouncementsHomepage">
				<input type="checkbox" name="enableAnnouncementsHomepage" id="enableAnnouncementsHomepage" value="1" onclick="toggleEnableAnnouncementsHomepage(this.form)"{if $enableAnnouncementsHomepage} checked="checked"{/if} /><strong>{translate key="manager.setup.enableAnnouncementsHomepage1"} </strong>
			</label>

			<select name="numAnnouncementsHomepage" size="1" class="selectMenu" {if not $enableAnnouncementsHomepage}disabled="disabled"{/if}>
				{section name="numAnnouncementsHomepageOptions" start=1 loop=11}
				<option value="{$smarty.section.numAnnouncementsHomepageOptions.index}"{if $numAnnouncementsHomepage eq $smarty.section.numAnnouncementsHomepageOptions.index or ($smarty.section.numAnnouncementsHomepageOptions.index eq 1 and not $numAnnouncementsHomepage)} selected="selected"{/if}>{$smarty.section.numAnnouncementsHomepageOptions.index}</option>
				{/section}
			</select>
			<strong>{translate key="manager.setup.enableAnnouncementsHomepage2"}</strong>
		</div>
	</div>
</p>
<div id="announcementsIntroductionSection">
<h4>{translate key="manager.setup.announcementsIntroduction"}</h4>

<p>{translate key="manager.setup.announcementsIntroductionDescription"}</p>
<div class="form-group journal-setup">
	<p><textarea name="announcementsIntroduction[{$formLocale|escape}]" id="announcementsIntroduction" rows="12" cols="60" class="form-control">{$announcementsIntroduction[$formLocale]|escape}</textarea></p>
</div>
</div><!-- announcementsIntroductionSection -->
</div><!-- announcementsSection -->

<hr>

<div id="copyediting">
<h3>4.5 {translate key="manager.setup.copyediting"}</h3>

<p>{translate key="manager.setup.selectOne"}:</p>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="useCopyeditors-1">
				<input type="radio" name="useCopyeditors" id="useCopyeditors-1" value="1"{if $useCopyeditors} checked="checked"{/if} />{translate key="manager.setup.useCopyeditors"}
			</label>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="useCopyeditors-0">
				<input type="radio" name="useCopyeditors" id="useCopyeditors-0" value="0"{if !$useCopyeditors} checked="checked"{/if} />{translate key="manager.setup.noUseCopyeditors"}
			</label>
		</div>
	</div>
</div>
</div><!-- copyediting -->

<div id="copyeditInstructionsSection">
<h4>{translate key="manager.setup.copyeditInstructions"}</h4>

<p class="help-block">{translate key="manager.setup.copyeditInstructionsDescription"}</p>
<div class="form-group journal-setup">
	<p>
		<textarea name="copyeditInstructions[{$formLocale|escape}]" id="copyeditInstructions" rows="12" cols="60" class="form-control">{$copyeditInstructions[$formLocale]|escape}</textarea>
	</p>
</div>
</div><!-- copyeditInstructionsSection -->

<hr>

<div id="layoutAndGalleys">
<h3>4.6 {translate key="manager.setup.layoutAndGalleys"}</h3>

<p>{translate key="manager.setup.selectOne"}:</p>

<div class="horizontal">
	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="useLayoutEditors-1">
				<input type="radio" name="useLayoutEditors" id="useLayoutEditors-1" value="1"{if $useLayoutEditors} checked="checked"{/if} />{translate key="manager.setup.useLayoutEditors"}
			</label>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="useLayoutEditors-0">
				<input type="radio" name="useLayoutEditors" id="useLayoutEditors-0" value="0"{if !$useLayoutEditors} checked="checked"{/if} />{translate key="manager.setup.noUseLayoutEditors"}
			</label>
		</div>
	</div>
</div>

<div id="layoutInstructionsSection">
<h4>{translate key="manager.setup.layoutInstructions"}</h4>

<p>{translate key="manager.setup.layoutInstructionsDescription"}</p>
<div class="form-group journal-setup">
	<p>
		<textarea name="layoutInstructions[{$formLocale|escape}]" id="layoutInstructions" rows="12" cols="60" class="form-control">{$layoutInstructions[$formLocale]|escape}</textarea>
	</p>
</div>
</div><!-- layoutInstructionsSection -->

<div id="layoutTemplates">
<h4>{translate key="manager.setup.layoutTemplates"}</h4>

<p>{translate key="manager.setup.layoutTemplatesDescription"}</p>

	<div class="form-horizontal">
	{foreach name=templates from=$templates key=templateId item=template}
	<div class="form-group">
		<div width="20%" class="label">
			<a href="{url op="downloadLayoutTemplate" path=$templateId}" class="action">{$template.filename|escape}</a>
		</div>
		<div width="50%" class="value">{$template.title|escape}</div>
		<div width="30%">
			<input type="submit" name="delTemplate[{$templateId|escape}]" value="{translate key="common.delete"}" class="btn btn-primary" />
		</div>
	</div>

	{/foreach}
		
			<div class="form-group">
				<p>{fieldLabel name="template-title" key="manager.setup.layoutTemplates.title" class="col-sm-2 control-label"}
					<div class="col-sm-10">
						<input type="text" name="template-title" id="template-title" size="40" maxlength="90" class="form-control" />
					</div>
				</p>
			</div>

			<div class="form-group">
					{fieldLabel name="template-file" key="manager.setup.layoutTemplates.file" class="col-sm-2 control-label"}
					<div class="col-sm-10">
						<input type="file" name="template-file" id="template-file" class="uploadField" />
					</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-2 col-sm-10">
					<input type="submit" name="addTemplate" value="{translate key="common.upload"}" class="btn btn-primary" />
				</div>
			</div>
	</div>

</div><!-- layoutTemplates -->

<div id="referenceLinking">
<h4>{translate key="manager.setup.referenceLinking"}</h4>

<div class="well">{translate key="manager.setup.referenceLinkingDescription"}</div>

<div class="form-group">
	<div class="col-sm-12 checkbox">
		<label for="provideRefLinkInstructions">
			<input type="checkbox" name="provideRefLinkInstructions" id="provideRefLinkInstructions" value="1"{if $provideRefLinkInstructions} checked="checked"{/if} /><strong>&nbsp;{translate key="manager.setup.provideRefLinkInstructions"}</strong>
		</label>
	</div>
</div>
</div><!-- referenceLinking -->

<div id="refLinkInstructionsSection">
<h4>{translate key="manager.setup.refLinkInstructions.description"}</h4>
<div class="form-group journal-setup">
	<textarea name="refLinkInstructions[{$formLocale|escape}]" id="refLinkInstructions" rows="12" cols="60" class="form-control">{$refLinkInstructions[$formLocale]|escape}</textarea>
</div>
</div><!-- refLinkInstructionsSection -->
</div>
<hr>

<div id="proofreading">
<h3>4.7 {translate key="manager.setup.proofreading"}</h3>

<p>{translate key="manager.setup.selectOne"}:</p>

	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="useProofreaders-1">
				<input type="radio" name="useProofreaders" id="useProofreaders-1" value="1"{if $useProofreaders} checked="checked"{/if} /><strong>{translate key="manager.setup.useProofreaders"}</strong>
			</label>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-12 radio">
			<label for="useProofreaders-0">
				<input type="radio" name="useProofreaders" id="useProofreaders-0" value="0"{if !$useProofreaders} checked="checked"{/if} /><strong>{translate key="manager.setup.noUseProofreaders"}</strong>
			</label>
		</div>
	</div>

</div>
<div id="proofingInstructions">
<h4>{translate key="manager.setup.proofingInstructions"}</h4>

<p>{translate key="manager.setup.proofingInstructionsDescription"}</p>
<div class="form-group journal-setup">
	<p>
		<textarea name="proofInstructions[{$formLocale|escape}]" id="proofInstructions" rows="12" cols="60" class="form-control">{$proofInstructions[$formLocale]|escape}</textarea>
	</p>
</div>
</div>

<hr>

<p>
	<input type="submit" value="{translate key="common.saveAndContinue"}" class="btn btn-primary" /> 
	<input type="button" value="{translate key="common.cancel"}" class="btn btn-primary btn-warning" onclick="document.location.href='{url op="setup" escape=false}'" />
</p>

<p><span class="formRequired">{translate key="common.requiredField"}</span></p>

</form><!-- end form -->

{include file="common/footer.tpl"}

