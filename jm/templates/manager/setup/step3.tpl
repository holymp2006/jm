{**
 * templates/manager/setup/step3.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Step 3 of journal setup.
 *}
 {assign var="pageTitle" value="manager.setup.guidingSubmissions"}
 {include file="manager/setup/setupHeader.tpl"}

 <form name="setupForm" id="setupForm" method="post" action="{url op="saveSetup" path="3"}">
 	{include file="common/formErrors.tpl"}

 	{if count($formLocales) > 1}
 	<div id="locale" class="form-horizontal">
 		<div class="form-group">
 			{fieldLabel name="formLocale" key="form.formLanguage" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				{url|assign:"setupFormUrl" op="setup" path="3" escape=false}
 				{form_language_chooser form="setupForm" url=$setupFormUrl}
 				<div class="alert alert-info">
 					<span class="instruct">{translate key="form.formLanguage.description"}</span>
 				</div>
 			</div>
 		</div>
 	</div>
 	{/if}

 	<div id="authorGuidelinesInfo">
 		<h3>3.1 {translate key="manager.setup.authorGuidelines"}</h3>

 		<p>{translate key="manager.setup.authorGuidelinesDescription"}</p>

 		<div class="form-group journal-setup">
 			<textarea name="authorGuidelines[{$formLocale|escape}]" id="authorGuidelines" rows="12" cols="60" class="form-control">{$authorGuidelines[$formLocale]|escape}</textarea>
 		</div>

 	</div>

 	<div id="submissionPreparationChecklist">
 		<h4>{translate key="manager.setup.submissionPreparationChecklist"}</h4>

 		<p>{translate key="manager.setup.submissionPreparationChecklistDescription"}</p>

 		{foreach name=checklist from=$submissionChecklist[$formLocale] key=checklistId item=checklistItem}
 		{if !$notFirstChecklistItem}
 		{assign var=notFirstChecklistItem value=1}
 		<div class="form-horizontal">
 			<div class="row">
 				<div class="col-sm-2"><strong>{translate key="common.order"}</strong></div>
 				<div class="col-sm-10">&nbsp;</div>
 			</div>
 			{/if}

 			<div class="form-group">
 				<div class="col-sm-2">
 					<input type="text" name="submissionChecklist[{$formLocale|escape}][{$checklistId|escape}][order]" value="{$checklistItem.order|escape}" size="3" maxlength="2" class="form-control" />
 				</div>
 				<div class="col-sm-8">
 					<textarea name="submissionChecklist[{$formLocale|escape}][{$checklistId|escape}][content]" id="submissionChecklist-{$checklistId|escape}" rows="3" cols="40" class="form-control">{$checklistItem.content|escape}</textarea>
 				</div>
 				<div class="col-sm-2">
 					<input type="submit" name="delChecklist[{$checklistId|escape}]" value="{translate key="common.delete"}" class="btn btn-danger" />
 				</div>
 			</div>
 			{/foreach}

 			{if $notFirstChecklistItem}
 		</div>
 		{/if}

 		<input type="submit" name="addChecklist" value="{translate key="manager.setup.addChecklistItem"}" class="btn btn-primary" />
 	</div>

 	<hr>

 	<div id="permissions">
 		<h3>3.2 {translate key="submission.permissions"}</h3>

 		<h4>{translate key="manager.setup.authorCopyrightNotice"}</h4>
 		{url|assign:"sampleCopyrightWordingUrl" page="information" op="sampleCopyrightWording"}
 		<p>{translate key="manager.setup.authorCopyrightNoticeDescription" sampleCopyrightWordingUrl=$sampleCopyrightWordingUrl}</p>

 		<div class="journal-setup form-group">
 			<textarea name="copyrightNotice[{$formLocale|escape}]" id="copyrightNotice" rows="12" cols="60" class="form-control">{$copyrightNotice[$formLocale]|escape}
 			</textarea>
 		</div>

 		<div class="form-horizontal">
 			<div class="form-group">
 				<label class="col-sm-3 control-label text-left">
 					{translate key="submission.copyrightHolder"}
 				</label>
 				<div class="col-sm-9">
 					<div class="form-group">
 						<div class="radio col-sm-2">
 							<label for="copyrightHolderType-author">
 								<input type="radio" value="author" name="copyrightHolderType" {if $copyrightHolderType=="author"}checked="checked" {/if}id="copyrightHolderType-author" />&nbsp;{translate key="user.role.author"}
 							</label>
 						</div>
 						<div class="radio col-sm-10">
 							<label for="copyrightHolderType-journal">
 								<input type="radio" value="journal" name="copyrightHolderType" {if $copyrightHolderType=="journal"}checked="checked" {/if}id="copyrightHolderType-journal" />&nbsp;{translate key="journal.journal"}
 							</label> ({$currentJournal->getLocalizedTitle()|escape})
 						</div>
 					</div>
 					<div class="form-group">
 						<div class="radio col-sm-2">
 							<label for="copyrightHolderType-other" class="">
 								<input type="radio" value="other" name="copyrightHolderType" {if $copyrightHolderType=="other"}checked="checked" {/if}id="copyrightHolderType-other" />&nbsp;{translate key="common.other"}
 							</label>
 						</div>
 						<div class="col-sm-10">
 							<input type="text" name="copyrightHolderOther[{$formLocale|escape}]" id="copyrightHolderOther" value="{$copyrightHolderOther[$formLocale]|escape}" class="form-control" placeholder='{translate key="manager.setup.custom.othersselected"}'>
 						</div>

 					</div>
 				</div>

 			</div>
 			<div class="form-group">
 				<label class="col-sm-3 control-label text-left">
 					{translate key="manager.setup.copyrightYearBasis"}
 				</label>
 				<div class="col-sm-9">
 					<div class="form-group">
 						<div class="col-sm-12">
 							<div class="radio">
 								<label for="copyrightYearBasis-issue">
 									<input type="radio" value="issue" name="copyrightYearBasis" {if $copyrightYearBasis=="issue"}checked="checked" {/if}id="copyrightYearBasis-issue" />&nbsp;{translate key="issue.issue"}
 								</label> ({translate key="manager.setup.copyrightYearBasis.Issue"})
 							</div>
 						</div>
 					</div> <!--.form-group-->
 					<div class="form-group">
 						<div class="col-sm-12">
 							<div class="radio">
 								<label for="copyrightYearBasis-article">
 									<input type="radio" value="article" name="copyrightYearBasis" {if $copyrightYearBasis=="article"}checked="checked" {/if}id="copyrightYearBasis-article" />&nbsp;{translate key="article.article"}
 								</label> ({translate key="manager.setup.copyrightYearBasis.Article"})
 							</div>
 						</div>
 					</div> <!--.form-group-->					
 				</div>
 			</div>

 			<div class="form-group">
 				<label class="col-sm-3 control-label text-left">{translate key="manager.setup.permissions.priorAgreement"}
 				</label>
 				<div class="col-sm-9 checkbox">
 					<label for="copyrightNoticeAgree">
 						<input type="checkbox" name="copyrightNoticeAgree" id="copyrightNoticeAgree" value="1"{if $copyrightNoticeAgree} checked="checked"{/if} />&nbsp;{translate key="manager.setup.authorCopyrightNoticeAgree"}
 					</label>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="col-sm-3 control-label text-left">{translate key="manager.setup.permissions.display"}</label>
 				<div class="col-sm-9 checkbox">
 					<label for="includeCopyrightStatement">
 						<input type="checkbox" name="includeCopyrightStatement" id="includeCopyrightStatement" value="1"{if $includeCopyrightStatement} checked="checked"{/if} />&nbsp;{translate key="manager.setup.includeCopyrightStatement"}
 					</label>
 				</div>
 			</div>
 			<div class="form-group">
 				<label class="col-sm-3 control-label text-left">{fieldLabel name=licenseURL key="submission.licenseURL"}</label>
 				<div class="col-sm-9"> 					
 					<div class="form-group">
 						<div class="col-sm-12">
 							<select class="form-control" name="licenseURLSelect" id="licenseURLSelect" onchange="document.getElementById('licenseURL').value=document.getElementById('licenseURLSelect').options[document.getElementById('licenseURLSelect').selectedIndex].value; document.getElementById('licenseURL').readOnly=(document.getElementById('licenseURL').value==''?false:true);">
 								{assign var=foundCc value=0}
 								{foreach from=$ccLicenseOptions key=ccUrl item=ccNameKey}
 								<option {if $licenseURL == $ccUrl}selected="selected" {/if}value="{$ccUrl|escape}">{$ccNameKey|translate}</option>
 								{if $licenseURL == $ccUrl}
 								{assign var=foundCc value=1}
 								{/if}
 								{/foreach}
 								<option {if !$foundCc}selected="selected" {/if}value="">Other</option>
 							</select>
 						</div>
 					</div><!--.form-group-->
 					
 					<div class="form-group">
 						<div class="col-sm-12">
 							<input type="text" name="licenseURL" id="licenseURL" value="{$licenseURL|escape}" {if $foundCc}readonly="readonly" {/if}size="40" maxlength="255" class="form-control" placeholder="{translate key="manager.setup.licenseURLDescription"}">
 						</div>
 					</div><!--.form-group-->
 				</div>
 				
 			</div>
 			<div class="form-group">
 				<label class="col-sm-3 control-label text-left">{translate key="manager.setup.permissions.display"}</label>
 				<div class="col-sm-9 checkbox">
 					<label for="includeLicense">
 						<input type="checkbox" name="includeLicense" id="includeLicense" value="1"{if $includeLicense} checked="checked"{/if} />&nbsp;{translate key="manager.setup.includeLicense"}
 					</label>
 				</div>
 			</div>
 		</div> <!--.form-horizontal-->

 		<div class="alert alert-info form-group">{translate key="manager.setup.resetPermissions.description"}</div>
 		<div class="form-group mt-20">
 			<input id="resetPermissionsButton" type="button" value="{translate key="manager.setup.resetPermissions"}" class="btn btn-primary" />
 		</div>
 	</div>

 	<hr>

 	<div id="competingInterests">
 		<h3>3.3 {translate key="manager.setup.competingInterests"}</h3>

 		<p>{translate key="manager.setup.competingInterests.description"}</p>

 		<div class="form-group">
 			<div class="checkbox">
 				<label for="requireAuthorCompetingInterests">
 					<input type="checkbox" name="requireAuthorCompetingInterests" id="requireAuthorCompetingInterests" value="1"{if $requireAuthorCompetingInterests} checked="checked"{/if} />&nbsp;<strong>{translate key="manager.setup.competingInterests.requireAuthors"}</strong>
 				</label> 				
 			</div>
 			<div class="checkbox">
 				<label for="requireReviewerCompetingInterests"> 				
 					<input type="checkbox" name="requireReviewerCompetingInterests" id="requireReviewerCompetingInterests" value="1"{if $requireReviewerCompetingInterests} checked="checked"{/if} />&nbsp;<strong>{translate key="manager.setup.competingInterests.requireReviewers"}</strong>
 				</label>
 			</div>
 		</div>

 		<h4>{translate key="manager.setup.competingInterests.guidelines"}</h4>
 		<div class="form-group journal-setup">
 		<textarea name="competingInterestGuidelines[{$formLocale|escape}]" id="competingInterestGuidelines" rows="12" cols="60" class="form-control">{$competingInterestGuidelines[$formLocale]|escape}</textarea>
 		</div>
 	</div>

 	<hr>

 	<div id="forAuthorsToIndexTheirWork">
 		<h3>3.4 {translate key="manager.setup.forAuthorsToIndexTheirWork"}</h3>

 		<p>{translate key="manager.setup.forAuthorsToIndexTheirWorkDescription"}</p>

 		<table width="100%" class="data">
 			<tr valign="top">
 				<td width="5%" class="label" valign="bottom"><input type="checkbox" name="metaDiscipline" id="metaDiscipline" value="1"{if $metaDiscipline} checked="checked"{/if} /></td>
 				<td width="95%" class="value">
 					<h4>{fieldLabel name="metaDiscipline" key="manager.setup.discipline"}</h4>
 				</td>
 			</tr>
 			<tr valign="top">
 				<td>&nbsp;</td>
 				<td class="value">
 					<span class="instruct">{translate key="manager.setup.disciplineDescription"}</span><br/>
 					<span class="instruct">{translate key="manager.setup.disciplineProvideExamples"}:</span>
 					<br />
 					<input type="text" name="metaDisciplineExamples[{$formLocale|escape}]" id="metaDisciplineExamples" value="{$metaDisciplineExamples[$formLocale]|escape}" size="60" class="textField" />
 					<br />
 					<span class="instruct">{translate key="manager.setup.disciplineExamples"}</span>
 				</td>
 			</tr>

 			<tr>
 				<td class="separator" colspan="2"><br />&nbsp;</td>
 			</tr>

 			<tr valign="top">
 				<td width="5%" class="label" valign="bottom"><input type="checkbox" name="metaSubjectClass" id="metaSubjectClass" value="1"{if $metaSubjectClass} checked="checked"{/if} /></td>
 				<td width="95%" class="value">
 					<h4>{fieldLabel name="metaSubjectClass" key="manager.setup.subjectClassification"}</h4>
 				</td>
 			</tr>
 			<tr valign="top">
 				<td>&nbsp;</td>
 				<td class="value">
 					<table width="100%">
 						<tr valign="top">
 							<td width="10%">{fieldLabel name="metaSubjectClassTitle" key="common.title"}</td>
 							<td width="90%"><input type="text" name="metaSubjectClassTitle[{$formLocale|escape}]" id="metaSubjectClassTitle" value="{$metaSubjectClassTitle[$formLocale]|escape}" size="40" class="textField" /></td>
 						</tr>
 						<tr valign="top">
 							<td width="10%">{fieldLabel name="metaSubjectClassUrl" key="common.url"}</td>
 							<td width="90%"><input type="text" name="metaSubjectClassUrl[{$formLocale|escape}]" id="metaSubjectClassUrl" value="{$metaSubjectClassUrl[$formLocale]|escape}" size="40" class="textField" /></td>
 						</tr>
 					</table>
 					<span class="instruct">{translate key="manager.setup.subjectClassificationExamples"}</span>
 				</td>
 			</tr>

 			<tr>
 				<td class="separator" colspan="2"><br />&nbsp;</td>
 			</tr>

 			<tr valign="top">
 				<td width="5%" class="label" valign="bottom"><input type="checkbox" name="metaSubject" id="metaSubject" value="1"{if $metaSubject} checked="checked"{/if} /></td>
 				<td width="95%" class="value">
 					<h4>{fieldLabel name="metaSubject" key="manager.setup.subjectKeywordTopic"}</h4>
 				</td>
 			</tr>
 			<tr valign="top">
 				<td>&nbsp;</td>
 				<td class="value">
 					<span class="instruct">{translate key="manager.setup.subjectProvideExamples"}:</span>
 					<br />
 					<input type="text" name="metaSubjectExamples[{$formLocale|escape}]" id="metaSubjectExamples" value="{$metaSubjectExamples[$formLocale]|escape}" size="60" class="textField" />
 					<br />
 					<span class="instruct">{translate key="manager.setup.subjectExamples"}</span>
 				</td>
 			</tr>

 			<tr>
 				<td class="separator" colspan="2"><br />&nbsp;</td>
 			</tr>

 			<tr valign="top">
 				<td width="5%" class="label" valign="bottom"><input type="checkbox" name="metaCoverage" id="metaCoverage" value="1"{if $metaCoverage} checked="checked"{/if} /></td>
 				<td width="95%" class="value">
 					<h4>{fieldLabel name="metaCoverage" key="manager.setup.coverage"}</h4>
 				</td>
 			</tr>
 			<tr>
 				<td class="separator" colspan="2">&nbsp;</td>
 			</tr>
 			<tr valign="top">
 				<td>&nbsp;</td>
 				<td class="value">
 					<span class="instruct">{translate key="manager.setup.coverageDescription"}</span><br/>
 					<span class="instruct">{translate key="manager.setup.coverageGeoProvideExamples"}:</span>
 					<br />
 					<input type="text" name="metaCoverageGeoExamples[{$formLocale|escape}]" id="metaCoverageGeoExamples" value="{$metaCoverageGeoExamples[$formLocale]|escape}" size="60" class="textField" />
 					<br />
 					<span class="instruct">{translate key="manager.setup.coverageGeoExamples"}</span>
 				</td>
 			</tr>
 			<tr>
 				<td class="separator" colspan="2">&nbsp;</td>
 			</tr>
 			<tr valign="top">
 				<td>&nbsp;</td>
 				<td class="value">
 					<span class="instruct">{translate key="manager.setup.coverageChronProvideExamples"}:</span>
 					<br />
 					<input type="text" name="metaCoverageChronExamples[{$formLocale|escape}]" id="metaCoverageChronExamples" value="{$metaCoverageChronExamples[$formLocale]|escape}" size="60" class="textField" />
 					<br />
 					<span class="instruct">{translate key="manager.setup.coverageChronExamples"}</span>
 				</td>
 			</tr>
 			<tr>
 				<td class="separator" colspan="2">&nbsp;</td>
 			</tr>
 			<tr valign="top">
 				<td>&nbsp;</td>
 				<td class="value">
 					<span class="instruct">{translate key="manager.setup.coverageResearchSampleProvideExamples"}:</span>
 					<br />
 					<input type="text" name="metaCoverageResearchSampleExamples[{$formLocale|escape}]" id="metaCoverageResearchSampleExamples" value="{$metaCoverageResearchSampleExamples[$formLocale]|escape}" size="60" class="textField" />
 					<br />
 					<span class="instruct">{translate key="manager.setup.coverageResearchSampleExamples"}</span>
 				</td>
 			</tr>

 			<tr>
 				<td class="separator" colspan="2"><br />&nbsp;</td>
 			</tr>

 			<tr valign="top">
 				<td width="5%" class="label" valign="bottom"><input type="checkbox" name="metaType" id="metaType" value="1"{if $metaType} checked="checked"{/if} /></td>
 				<td width="95%" class="value">
 					<h4>{fieldLabel name="metaType" key="manager.setup.typeMethodApproach"}</h4>
 				</td>
 			</tr>
 			<tr valign="top">
 				<td>&nbsp;</td>
 				<td class="value">
 					<span class="instruct">{translate key="manager.setup.typeProvideExamples"}:</span>
 					<br />
 					<input type="text" name="metaTypeExamples[{$formLocale|escape}]" id="metaTypeExamples" value="{$metaTypeExamples[$formLocale]|escape}" size="60" class="textField" />
 					<br />
 					<span class="instruct">{translate key="manager.setup.typeExamples"}</span>
 				</td>
 			</tr>
 		</table>
 	</div>

 	<div class="separator"></div>

 	<div id="registerJournalForIndexing">
 		<h3>3.5 {translate key="manager.setup.registerJournalForIndexing"}</h3>

 		{url|assign:"oaiUrl" page="oai"}
 		<p>{translate key="manager.setup.registerJournalForIndexingDescription" oaiUrl=$oaiUrl siteUrl=$baseUrl}</p>
 	</div>

 	<div class="separator"></div>

 	<div id="notifications">
 		<h3>3.6 {translate key="manager.setup.notifications"}</h3>

 		<p>{translate key="manager.setup.notifications.description"}</p>

 		<table width="100%" class="data">
 			<tr valign="top">
 				<td class="label"><input {if !$submissionAckEnabled}disabled="disabled" {/if}type="checkbox" name="copySubmissionAckPrimaryContact" id="copySubmissionAckPrimaryContact" value="true" {if $copySubmissionAckPrimaryContact}checked="checked"{/if}/></td>
 				<td class="value">{fieldLabel name="copySubmissionAckPrimaryContact" key="manager.setup.notifications.copyPrimaryContact"}</td>
 			</tr>
 			<tr valign="top">
 				<td class="label"><input {if !$submissionAckEnabled}disabled="disabled" {/if}type="checkbox" name="copySubmissionAckSpecified" id="copySubmissionAckSpecified" value="true" {if $copySubmissionAckSpecified}checked="checked"{/if}/></td>
 				<td class="value">{fieldLabel name="copySubmissionAckAddress" key="manager.setup.notifications.copySpecifiedAddress"}&nbsp;&nbsp;<input {if !$submissionAckEnabled}disabled="disabled" {/if}type="text" class="textField" id="copySubmissionAckAddress" name="copySubmissionAckAddress" value="{$copySubmissionAckAddress|escape}"/></td>
 			</tr>
 			{if !$submissionAckEnabled}
 			<tr valign="top">
 				<td>&nbsp;</td>
 				{url|assign:"preparedEmailsUrl" op="emails"}
 				<td>{translate key="manager.setup.notifications.submissionAckDisabled" preparedEmailsUrl=$preparedEmailsUrl}</td>
 			</tr>
 			{/if}
 		</table>
 	</div>

 	<div class="separator"></div>

 	<div id="citationAssistant">
 		<h3>3.7 {translate key="manager.setup.citationAssistant"}</h3>

 		<a name="metaCitationEditing"></a>
 		{if $citationEditorError}
 		<p>{translate key=$citationEditorError}</p>
 		{else}
 		<p>{translate key="manager.setup.metaCitationsDescription"}</p>
 		<table width="100%" class="data">
 			<tr valign="top">
 				<td width="5%" class="label">
 					<input type="checkbox" name="metaCitations" id="metaCitations" value="1"{if $metaCitations} checked="checked"{/if} />
 				</td>
 				<td width="95%" class="value"><label for="metaCitations">{translate key="manager.setup.citations"}</label>
 				</td>
 			</tr>
 		</table>

 		<div id="citationFilterSetupToggle" {if !$metaCitations}style="visible: none"{/if}>
 			<h4>{translate key="manager.setup.citationFilterParser"}</h4>
 			<p>{translate key="manager.setup.citationFilterParserDescription"}</p>
 			{load_url_in_div id="parserFilterGridContainer" loadMessageId="manager.setup.filter.parser.grid.loadMessage" url="$parserFilterGridUrl"}

 			<h4>{translate key="manager.setup.citationFilterLookup"}</h4>
 			<p>{translate key="manager.setup.citationFilterLookupDescription"}</p>
 			{load_url_in_div id="lookupFilterGridContainer" loadMessageId="manager.setup.filter.lookup.grid.loadMessage" url="$lookupFilterGridUrl"}
 			<h4>{translate key="manager.setup.citationOutput"}</h4>
 			<p>{translate key="manager.setup.citationOutputStyleDescription"}</p>
 			{fbvElement type="select" id="metaCitationOutputFilterSelect" name="metaCitationOutputFilterId"
 			from=$metaCitationOutputFilters translate=false selected=$metaCitationOutputFilterId|escape
 			defaultValue="-1" defaultLabel="manager.setup.filter.pleaseSelect"|translate}
 		</div>
 		{literal}<script type='text/javascript'>
 		$(function(){
			// jQuerify DOM elements
			$metaCitationsCheckbox = $('#metaCitations');
			$metaCitationsSetupBox = $('#citationFilterSetupToggle');

			// Set the initial state
			initialCheckboxState = $metaCitationsCheckbox.attr('checked');
			if (initialCheckboxState) {
				$metaCitationsSetupBox.css('display', 'block');
			} else {
				$metaCitationsSetupBox.css('display', 'none');
			}

			// Toggle the settings box.
			// NB: Has to be click() rather than change() to work in IE.
			$metaCitationsCheckbox.click(function(){
				checkboxState = $metaCitationsCheckbox.attr('checked');
				toggleState = ($metaCitationsSetupBox.css('display') === 'block');
				if (checkboxState !== toggleState) {
					$metaCitationsSetupBox.toggle(300);
				}
			});
		});

 		function permissionsValues() {
 			perm = ':';
 			licenseNames = ["copyrightYearBasis", "copyrightHolderType"];
 			for (l = 0; l < licenseNames.length; l++) {
 				ele = document.getElementsByName(licenseNames[l]);
 				for (i = 0; i < ele.length; i++) {
 					if (ele[i].type == 'radio') {
 						if (ele[i].checked) {
 							perm += ele[i].value + ':';
 							break;
 						}
 					} else {
 						perm += ele[i].value + ':';
 					}
 				}
 			};
 			licenseIds = ["copyrightHolderOther", "licenseURL"];
 			for (l = 0; l < licenseIds.length; l++) {
 				ele = document.getElementById(licenseIds[l]);
 				if (ele) {
 					perm += ele.value + ':';
 				}
 			}
 			return perm;
 		}
 		var resetValues;
 		$(document).ready( function () {
 			resetValues = permissionsValues();
 			$('#resetPermissionsButton').click( function ( event ) {
 				if (resetValues == permissionsValues()) {
 					{/literal}
 					confirmAction('{url op="resetPermissions"}', '{translate|escape:"jsparam" key="manager.setup.confirmResetLicense"}');
 					{literal}
 				} else {
 					{/literal}
 					window.alert('{translate|escape:"jsparam" key="manager.setup.confirmResetLicenseChanged"}')
 					{literal}
 				}
 				event.preventDefault();
 			});
 		});
 	</script>{/literal}
 	{/if}
 </div>

 <div class="separator"></div>

 <p><input type="submit" value="{translate key="common.saveAndContinue"}" class="button defaultButton" /> <input type="button" value="{translate key="common.cancel"}" class="button" onclick="document.location.href='{url op="setup" escape=false}'" /></p>

 <p><span class="formRequired">{translate key="common.requiredField"}</span></p>

</form>

{include file="common/footer.tpl"}
