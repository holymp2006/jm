{**
 * templates/manager/sections/sectionForm.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Form to create/modify a journal section.
 *
 *}
 {strip}
 {assign var="pageTitle" value="section.section"}
 {assign var="pageCrumbTitle" value="section.section"}
 {include file="common/header.tpl"}
 {/strip}

 <form id="section" method="post" action="{url op="updateSection" path=$sectionId}" onsubmit="return checkEditorAssignments()">
 	<input type="hidden" name="editorAction" value="" />
 	<input type="hidden" name="userId" value="" />

 	{literal}
 	<script type="text/javascript">
 		<!--

 		function addSectionEditor(editorId) {
 			var sectionForm = document.getElementById('section');
 			sectionForm.editorAction.value = "addSectionEditor";
 			sectionForm.userId.value = editorId;
 			sectionForm.submit();
 		}

 		function removeSectionEditor(editorId) {
 			var sectionForm = document.getElementById('section');
 			sectionForm.editorAction.value = "removeSectionEditor";
 			sectionForm.userId.value = editorId;
 			sectionForm.submit();
 		}

 		function checkEditorAssignments() {
 			var isOk = true;
 			{/literal}
 			{foreach from=$assignedEditors item=editorEntry}
 			{assign var=editor value=$editorEntry.user}
 			{literal}
 			if (!document.getElementById('section').canReview{/literal}{$editor->getId()}{literal}.checked && !document.getElementById('section').canEdit{/literal}{$editor->getId()}{literal}.checked) {
 				isOk = false;
 			}
 			{/literal}{/foreach}{literal}
 			if (!isOk) {
 				alert({/literal}'{translate|escape:"jsparam" key="manager.sections.form.mustAllowPermission"}'{literal});
 				return false;
 			}
 			return true;
 		}

// -->
</script>
{/literal}

{include file="common/formErrors.tpl"}
<div id="sectionForm">
	<div class="form-horizontal">
		{if count($formLocales) > 1}
		<div class="form-group">
			{fieldLabel name="formLocale" key="form.formLanguage" class="col-sm-2 control-label"}
			<div class="col-sm-10">
				{if $sectionId}{url|assign:"sectionFormUrl" op="editSection" path=$sectionId escape=false}
				{else}{url|assign:"sectionFormUrl" op="createSection" path=$sectionId escape=false}
				{/if}
				{form_language_chooser form="section" url=$sectionFormUrl}
				<small class="instruct">{translate key="form.formLanguage.description"}</small>
			</div>
		</div>
		{/if}
		<div class="form-group">
			{fieldLabel name="title" required="true" key="section.title" class="col-sm-2 control-label"}
			<div class="col-sm-10">
				<input type="text" name="title[{$formLocale|escape}]" value="{$title[$formLocale]|escape}" id="title" size="40" maxlength="120" class="form-control" />
			</div>
		</div>
		<div class="form-group">
			{fieldLabel name="abbrev" required="true" key="section.abbreviation" class="control-label col-sm-2"}
			<div class="col-sm-10">
				<input type="text" name="abbrev[{$formLocale|escape}]" id="abbrev" value="{$abbrev[$formLocale]|escape}" size="20" maxlength="20" class="form-control" placeholder='{translate key="section.abbreviation.example"}'/>
			</div>
		</div>
		<div class="form-group journal-setup">
			{fieldLabel name="policy" key="manager.sections.policy" class="col-sm-2 control-label"}
			<div class="col-sm-10">
				<textarea name="policy[{$formLocale|escape}]" rows="4" cols="40" id="policy" class="form-control">{$policy[$formLocale]|escape}</textarea>
			</div>
		</div>
		<div class="form-group">
			{fieldLabel name="reviewFormId" key="submission.reviewForm" class="col-sm-2 control-label"}
			<div class="col-sm-10">
				<select name="reviewFormId" size="1" id="reviewFormId" class="form-control">
					<option value="">{translate key="manager.reviewForms.noneChosen"}</option>
					{html_options options=$reviewFormOptions selected=$reviewFormId}
				</select>
			</div>
		</div>
		{call_hook name="Templates::Manager::Sections::SectionForm::AdditionalMetadata" sectionId=$sectionId}
		<div class="form-group">
			{fieldLabel suppressId="true" key="submission.indexing" class="col-sm-2 control-label"}
			<div class="col-sm-10">
				<p>{translate key="manager.section.submissionsToThisSection"}</p><br/>
				<div class="checkbox">
					<label for="metaReviewed">				
						<input type="checkbox" name="metaReviewed" id="metaReviewed" value="1" {if $metaReviewed}checked="checked"{/if} />
						{translate key="manager.sections.submissionReview"}
					</label>					
				</div>
				<div class="checkbox">
					<label for="abstractsNotRequired">
						<input type="checkbox" name="abstractsNotRequired" id="abstractsNotRequired" value="1" {if $abstractsNotRequired}checked="checked"{/if} />&nbsp;
						{translate key="manager.sections.abstractsNotRequired"}
					</label>					
				</div>
				<div class="checkbox">
					<label for="metaIndexed">
						<input type="checkbox" name="metaIndexed" id="metaIndexed" value="1" {if $metaIndexed}checked="checked"{/if} />&nbsp;
						{translate key="manager.sections.submissionIndexing"}
					</label>														
				</div>
				<div class="form-inline">
					<div class="form-group">
						{fieldLabel name="identifyType" key="manager.sections.identifyType"}
						<input type="text" name="identifyType[{$formLocale|escape}]" id="identifyType" value="{$identifyType[$formLocale]|escape}" size="20" maxlength="60" class="form-control" placeholder='{translate key="manager.sections.identifyTypeExamples"}'/>
					</div>
				</div> <!--.form-inline-->
			</div>
		</div>

		<tr valign="top">
			<td class="value">
				{fieldLabel name="identifyType" key="manager.sections.identifyType"} <input type="text" name="identifyType[{$formLocale|escape}]" id="identifyType" value="{$identifyType[$formLocale]|escape}" size="20" maxlength="60" class="textField" />
				<br />
				<span class="instruct">{translate key="manager.sections.identifyTypeExamples"}</span>
			</td>
		</tr>
		<tr valign="top">
			<td class="label">{fieldLabel suppressId="true" key="submission.restrictions"}</td>
			<td class="value">
				<input type="checkbox" name="editorRestriction" id="editorRestriction" value="1" {if $editorRestriction}checked="checked"{/if} />
				{fieldLabel name="editorRestriction" key="manager.sections.editorRestriction"}
			</td>
		</tr>
		<tr valign="top">
			<td class="label">{fieldLabel key="manager.sections.wordCount"}</td>
			<td class="value">
				{fieldLabel name="wordCount" key="manager.sections.wordCountInstructions"}&nbsp;&nbsp;<input type="text" name="wordCount" id="abbrev" value="{$wordCount}" size="10" maxlength="20" class="textField" />
			</td>
		</tr>
		<tr valign="top">
			<td class="label">{fieldLabel name="hideTitle" key="issue.toc"}</td>
			<td class="value">
				<input type="checkbox" name="hideTitle" id="hideTitle" value="1" {if $hideTitle}checked="checked"{/if} />
				{fieldLabel name="hideTitle" key="manager.sections.hideTocTitle"}
			</td>
		</tr>
		<tr valign="top">
			<td class="label">&nbsp;</td>
			<td class="value">
				<input type="checkbox" name="hideAuthor" id="hideAuthor" value="1" {if $hideAuthor}checked="checked"{/if} />
				{fieldLabel name="hideAuthor" key="manager.sections.hideTocAuthor"}
			</td>
		</tr>
		<tr valign="top">
			<td class="label">{fieldLabel name="hideAbout" key="navigation.about"}</td>
			<td class="value">
				<input type="checkbox" name="hideAbout" id="hideAbout" value="1" {if $hideAbout}checked="checked"{/if} />
				{fieldLabel name="hideAbout" key="manager.sections.hideAbout"}
			</td>
		</tr>
		{if $commentsEnabled}
		<tr valign="top">
			<td class="label">{fieldLabel name="disableComments" key="comments.readerComments"}</td>
			<td class="value">
				<input type="checkbox" name="disableComments" id="disableComments" value="1" {if $disableComments}checked="checked"{/if} />
				{fieldLabel name="disableComments" key="manager.sections.disableComments"}
			</td>
		</tr>
		{/if}
	</div>
</div>
<div class="separator"></div>
<div id="sectionEditors">
	<h3>{translate key="user.role.sectionEditors"}</h3>
	{url|assign:"sectionEditorsUrl" op="people" path="sectionEditors"|to_array}
	<p><span class="instruct">{translate key="manager.section.sectionEditorInstructions"}</span></p>
	<h4>{translate key="manager.sections.unassigned"}</h4>

	<table width="100%" class="listing" id="unassignedSectionEditors">
		<tr>
			<td colspan="3" class="headseparator">&nbsp;</td>
		</tr>
		<tr valign="top" class="heading">
			<td width="20%">{translate key="user.username"}</td>
			<td width="60%">{translate key="user.name"}</td>
			<td width="20%" align="right">{translate key="common.action"}</td>
		</tr>
		<tr>
			<td colspan="3" class="headseparator">&nbsp;</td>
		</tr>
		{foreach from=$unassignedEditors item=editor}
		<tr valign="top">
			<td>{$editor->getUsername()|escape}</td>
			<td>{$editor->getFullName()|escape}</td>
			<td align="right">
				<a class="action" href="javascript:addSectionEditor({$editor->getId()})">{translate key="common.add"}</a>
			</td>
		</tr>
		{foreachelse}
		<tr>
			<td colspan="3" class="nodata">{translate key="common.none"}</td>
		</tr>
		{/foreach}
		<tr>
			<td colspan="3" class="endseparator">&nbsp;</td>
		</tr>
	</table>
</div>
<div id="sectionsAssigned">
	<h4>{translate key="manager.sections.assigned"}</h4>

	<table width="100%" class="listing" id="assignedSectionEditors">
		<tr>
			<td colspan="5" class="headseparator">&nbsp;</td>
		</tr>
		<tr valign="top" class="heading">
			<td width="20%">{translate key="user.username"}</td>
			<td width="40%">{translate key="user.name"}</td>
			<td width="10%" align="center">{translate key="submission.review"}</td>
			<td width="10%" align="center">{translate key="submission.editing"}</td>
			<td width="20%" align="right">{translate key="common.action"}</td>
		</tr>
		<tr>
			<td colspan="5" class="headseparator">&nbsp;</td>
		</tr>
		{foreach from=$assignedEditors item=editorEntry}
		{assign var=editor value=$editorEntry.user}
		<input type="hidden" name="assignedEditorIds[]" value="{$editor->getId()|escape}" />
		<tr valign="top">
			<td>{$editor->getUsername()|escape}</td>
			<td>{$editor->getFullName()|escape}</td>
			<td align="center"><input type="checkbox" {if $editorEntry.canReview}checked="checked"{/if} name="canReview{$editor->getId()}" /></td>
			<td align="center"><input type="checkbox" {if $editorEntry.canEdit}checked="checked"{/if} name="canEdit{$editor->getId()}" /></td>
			<td align="right">
				<a class="action" href="javascript:removeSectionEditor({$editor->getId()})">{translate key="common.remove"}</a>
			</td>
		</tr>
		{foreachelse}
		<tr>
			<td colspan="5" class="nodata">{translate key="common.none"}</td>
		</tr>
		{/foreach}
		<tr>
			<td colspan="5" class="endseparator">&nbsp;</td>
		</tr>
	</table>
</div>
<p><input type="submit" value="{translate key="common.save"}" class="button defaultButton" /> <input type="button" value="{translate key="common.cancel"}" class="button" onclick="document.location.href='{url op="sections" escape=false}'" /></p>

</form>

<p><span class="formRequired">{translate key="common.requiredField"}</span></p>
{include file="common/footer.tpl"}

