{**
 * templates/admin/journalSettings.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Basic journal settings under site administration.
 *
 *}
{strip}
{assign var="pageTitle" value="admin.journals.journalSettings"}
{include file="common/header.tpl"}
{/strip}

<br />

<script type="text/javascript">
{literal}
<!--
// Ensure that the form submit button cannot be double-clicked
function doSubmit() {
	if (document.getElementById('journal').submitted.value != 1) {
		document.getElementById('journal').submitted.value = 1;
		document.getElementById('journal').submit();
	}
	return true;
}
// -->
{/literal}
</script>

<form id="journal" method="post" action="{url op="updateJournal"}" class="form-group">
<input type="hidden" name="submitted" value="0" />
{if $journalId}
<input type="hidden" name="journalId" value="{$journalId|escape}" />
{/if}

{include file="common/formErrors.tpl"}

{if not $journalId}
	<div class="alert alert-info" role="alert">
	  {translate key="admin.journals.createInstructions"}
	</div>
{/if}


<div class="form-horizontal">
{if count($formLocales) > 1}
	<tr valign="top">
		<td width="20%" class="label">{fieldLabel name="formLocale" key="form.formLanguage"}</td>
		<td width="80%" class="value">
			{url|assign:"settingsUrl" op="editJournal" path=$journalId escape=false}
			{form_language_chooser form="journal" url=$settingsUrl}
			<span class="instruct">{translate key="form.formLanguage.description"}</span>
		</td>
	</tr>
{/if}
	
		 <div class="form-group">
		 {fieldLabel name="title" key="manager.setup.journalTitle" required="true" class="col-sm-2 control-label"}
		 <div class="col-sm-10">
			<input type="text" id="title" name="title[{$formLocale|escape}]" value="{$title[$formLocale]|escape}" size="40" maxlength="120" class="form-control">
			</div>
		</div>
	
	 <div class="form-group">
		{fieldLabel name="description" key="admin.journals.journalDescription"  class="col-sm-2 control-label"} 
		<div class="col-sm-10">
		 <textarea name="description[{$formLocale|escape}]" id="description" cols="40" rows="10" class="form-control">{$description[$formLocale]|escape}</textarea> 
		 </div>
	</div>

	<div class="form-group">
	{fieldLabel name="journalPath" key="journal.path" required="true" class="col-sm-2 control-label"}
		<div class="col-sm-10">
				<input type="text" id="journalPath" name="journalPath" value="{$journalPath|escape}" size="16" maxlength="32" class="form-control" />
				<br />
				{url|assign:"sampleUrl" journal="path"}
				<span class="instruct">{translate key="admin.journals.urlWillBe" sampleUrl=$sampleUrl}</span>
		</div>
	</div>

</div>

<div class="form-group">
	<div class="checkbox">
		<label for="enabled"><input type="checkbox" name="enabled" id="enabled" value="1"{if $enabled} checked="checked"{/if} /> {translate key="admin.journals.enableJournalInstructions"}</label>
	</div>
</div>

<div class="btn-group btn-group-justified">
<div class="btn-group">
	<input type="button" id="saveJournal" value="{translate key="common.save"}" class="btn btn-primary" onclick="doSubmit()" /> 
</div>
<div class="btn-group">
	<input type="button" value="{translate key="common.cancel"}" class="btn btn-danger" onclick="document.location.href='{url op="journals" escape=false}'" />
</div>
</div>

</form>

<p><span class="formRequired">{translate key="common.requiredField"}</span></p>

{include file="common/footer.tpl"}

