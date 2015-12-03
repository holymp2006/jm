{**
 * templates/manager/emails/emailTemplateForm.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Basic journal settings under site administration.
 *
 *}
 {strip}
 {if !$isNewTemplate}
 {assign var="pageTitle" value="manager.emails.editEmail"}
 {else}
 {assign var="pageTitle" value="manager.emails.createEmail"}
 {/if}
 {include file="common/header.tpl"}
 {/strip}
 <div id="emailTemplateForm">
 	<form method="post" action="{url op="updateEmail"}">
 		<input type="hidden" name="emailId" value="{$emailId|escape}" />
 		<input type="hidden" name="journalId" value="{$journalId|escape}" />
 		{if !$isNewTemplate}
 		<input type="hidden" name="emailKey" value="{$emailKey|escape}" />
 		{/if}

 		{if $description}
 		<p>{$description|escape}</p>
 		{/if}

 		<br/>

 		{include file="common/formErrors.tpl"}

 		<div class="form-horizontal">

 			{if $isNewTemplate}
 			<div class="form-group">
 				{fieldLabel name="emailKey" key="manager.emails.emailKey" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					<input type="text" name="emailKey" value="{$emailKey|escape}" id="emailKey" size="20" maxlength="120" class="form-control" /><br/>&nbsp;
 				</div>
 			</div>
 			{/if}

 			{foreach from=$supportedLocales item=localeName key=localeKey}
 			<div class="form-group">
 				<div class="col-sm-6">
 					<h3>{translate key="manager.emails.emailTemplate"} ({$localeName|escape})</h3>
 				</div>
 			</div>

 			<div class="form-group">
 				{fieldLabel name="subject-$localeKey" key="email.subject" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					<input type="text" name="subject[{$localeKey|escape}]" id="subject-{$localeKey|escape}" value="{$subject.$localeKey|escape}" size="70" maxlength="120" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="body-$localeKey" key="email.body" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					<textarea name="body[{$localeKey|escape}]" id="body-{$localeKey|escape}" cols="70" rows="20" class="form-control">{$body.$localeKey|escape}</textarea>
 				</div>
 			</div>
 			{foreachelse}
 			<div class="form-group">
 				<div class="col-sm-6">
 					<h3>{translate key="manager.emails.emailTemplate"}</h3>
 				</div>
 			</div>

 			<div class="form-group">
 				{fieldLabel name="subject-$currentLocale" key="email.subject" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="subject[{$currentLocale|escape}]" id="subject-{$currentLocale|escape}" value="{$subject.$currentLocale|escape}" size="70" maxlength="120" class="control-label" />
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="body-$currentLocale" key="email.body" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<textarea name="body[{$currentLocale|escape}]" id="body-{$currentLocale|escape}" cols="70" rows="20" class="form-control">{$body.$currentLocale|escape}</textarea>
 				</div>
 			</div>
 			{/foreach}
 		</div>

 		{if $canDisable}
 		<div class="checkbox">
 			<label for="emailEnabled">
 				<input type="checkbox" name="enabled" id="emailEnabled" value="1"{if $enabled} checked="checked"{/if} />{translate key="manager.emails.enabled"}
 			</label>
 		</div>
 		{/if}

 		<p><input type="submit" value="{translate key="common.save"}" class="btn btn-primary" /> <input type="button" value="{translate key="common.cancel"}" class="btn btn-warning" onclick="document.location.href='{url op="emails" escape=false}'" /> 
 			<input type="reset" class="btn btn-danger" /></p>
 		</form>
 	</div>
 	{include file="common/footer.tpl"}

