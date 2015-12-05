{**
 * templates/admin/settings.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Site settings form.
 *
 *}
 {strip}
 {assign var="pageTitle" value="admin.siteSettings"}
 {include file="common/header.tpl"}
 {/strip}

 <form id="settings" method="post" action="{url op="saveSettings"}" enctype="multipart/form-data">
 	{include file="common/formErrors.tpl"}

 	<div class="form-horizontal">
 		{if count($formLocales) > 1}
 		<div class="form-group">
 			{fieldLabel name="formLocale" key="form.formLanguage" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				{url|assign:"settingsUrl" op="settings" escape=false}
 				{form_language_chooser form="settings" url=$settingsUrl}
 				<small class="instruct">{translate key="form.formLanguage.description"}</small>
 			</div>
 		</div>
 		{/if}
 		<div class="form-group">
 			{fieldLabel name="title" key="admin.settings.siteTitle" required="true" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<div class="form-group">
 					<div class="col-sm-3 radio">
 						<label for="pageHeaderTitleType-0">
 							<input type="radio" name="pageHeaderTitleType[{$formLocale|escape}]" id="pageHeaderTitleType-0" value="0"{if not $pageHeaderTitleType[$formLocale]} checked="checked"{/if} />
 							{translate key="manager.setup.useTextTitle"}
 						</label>						 
 					</div> 
 					<div class="col-sm-9">
 						<input type="text" id="title" name="title[{$formLocale|escape}]" value="{$title[$formLocale]|escape}" size="40" maxlength="120" class="form-control" />  						
 					</div>
 				</div>

 				<div class="form-group">
 					<div class="radio col-sm-3">
 						<label for="pageHeaderTitleType-1">
 							<input type="radio" name="pageHeaderTitleType[{$formLocale|escape}]" id="pageHeaderTitleType-1" value="1"{if $pageHeaderTitleType[$formLocale]} checked="checked"{/if} />
 							{translate key="manager.setup.useImageTitle"}
 						</label>
 					</div>
 					<div class="col-sm-9">

 						<div class="row">
 							<div class="col-sm-8"> 	
 								<div class="input-group image-preview">
 									<input id="image-name" placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
 									<span class="input-group-btn">
 										<div class="btn btn-default image-preview-input"> 
 											<span class="glyphicon glyphicon-folder-open"></span> 
 											<span class="image-preview-input-title">choose file</span>
 											<input id="image-name-get" type="file" name="pageHeaderTitleImage" class="uploadField" />
 										</div>

 										<input type="submit" name="uploadPageHeaderTitleImage" value="{translate key="common.upload"}" class="btn btn-default btn-labeled" />

 									</span>
 								</div>
 							</div>  			
 						</div> <!--.row-->

 						{literal}	
 						<script type="text/javascript">
 							$(document).ready(function($) {
 								$('#image-name-get').change(function() {
 									var filename = $(this).val();
 									var lastIndex = filename.lastIndexOf("\\");
 									if (lastIndex >= 0) {
 										filename = filename.substring(lastIndex + 1);
 									}
 									$('#image-name').val(filename);
 								});

 							}(jQuery));
 						</script> 		
 						{/literal}	

 					</div> <!--.col-sm-9-->
 				</div>	<!--.form-group-->	

 				<div class="form-group">
 					<div class="col-sm-12">
 						{if $pageHeaderTitleType[$formLocale] && $pageHeaderTitleImage[$formLocale]}
 						{translate key="common.fileName"}: {$pageHeaderTitleImage[$formLocale].originalFilename|escape} {$pageHeaderTitleImage[$formLocale].dateUploaded|date_format:$datetimeFormatShort} <input type="submit" name="deletePageHeaderTitleImage" value="{translate key="common.delete"}" class="btn btn-danger" />
 					</div>
 					<div class="col-sm-12">
 						<img src="{$publicFilesDir}/{$pageHeaderTitleImage[$formLocale].uploadName|escape:"url"}" width="{$pageHeaderTitleImage[$formLocale].width|escape}" height="{$pageHeaderTitleImage[$formLocale].height|escape}" style="border: 0;" alt="{translate key="admin.settings.homeHeaderImage.altText"}" />
 						{/if}
 					</div>
 				</div> <!--.form-group-->

 				{if $pageHeaderTitleType[$formLocale] && $pageHeaderTitleImage[$formLocale]}
 				<div class="form-group">
 					{fieldLabel name="pageHeaderTitleImageAltText" key="common.altText" class="control-label col-sm-3"}
 					<div class="col-sm-9">
 						<input type="text" id="pageHeaderTitleImageAltText" name="pageHeaderTitleImageAltText[{$formLocale|escape}]" value="{$pageHeaderTitleImage[$formLocale].altText|escape}" size="40" maxlength="255" class="form-control" />
 						<small class="instruct">{translate key="common.altTextInstructions"}</small>
 					</div>
 				</div>

 				{/if}

 			</div><!--.col-sm-10-->
 		</div>

 		<div class="form-group">
 			{fieldLabel name="intro" key="admin.settings.introduction" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<textarea name="intro[{$formLocale|escape}]" id="intro" cols="40" rows="10" class="form-control">{$intro[$formLocale]|escape}</textarea>
 			</div>
 		</div>
 		<div class="form-group">
 			{fieldLabel name="redirect" key="admin.settings.journalRedirect" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				<select name="redirect" id="redirect" size="1" class="form-control">
 					<option value="">{translate key="admin.settings.noJournalRedirect"}</option>
 					{html_options options=$redirectOptions selected=$redirect}
 				</select>
 				<small class="instruct">{translate key="admin.settings.journalRedirectInstructions"}</small>
 			</div>
 		</div> 		
 		<div class="form-group">
 			{fieldLabel name="aboutField" key="admin.settings.aboutDescription" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				<textarea name="about[{$formLocale|escape}]" id="aboutField" cols="40" rows="10" class="form-control">{$about[$formLocale]|escape}</textarea>
 			</div>
 		</div>
 		<div class="form-group">
 			{fieldLabel name="contactName" key="admin.settings.contactName" required="true" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<input type="text" id="contactName" name="contactName[{$formLocale|escape}]" value="{$contactName[$formLocale]|escape}" size="40" maxlength="90" class="form-control" />
 			</div>
 		</div>
 		<div class="form-control">
 			<td class="label">{fieldLabel name="contactEmail" key="admin.settings.contactEmail" required="true"}</td>
 			<td colspan="2" class="value"><input type="text" id="contactEmail" name="contactEmail[{$formLocale|escape}]" value="{$contactEmail[$formLocale]|escape}" size="40" maxlength="90" class="textField" /></td>
 		</div>
 		<tr valign="top">
 			<td class="label">{fieldLabel name="minPasswordLength" key="admin.settings.minPasswordLength" required="true"}</td>
 			<td colspan="2" class="value"><input type="text" id="minPasswordLength" name="minPasswordLength" value="{$minPasswordLength|escape}" size="4" maxlength="2" class="textField" /> {translate key="admin.settings.passwordCharacters"}</td>
 		</tr>
 		<tr valign="top">
 			<td class="label">{fieldLabel name="oneStepReset" key="admin.settings.oneStepReset"}</td>
 			<td class="value" colspan="2"><input type="checkbox" id="oneStepReset" name="oneStepReset" {if $oneStepReset}checked="checked" {/if}/></td>
 		</tr>
 		<tr>
 			<td class="label"><label for="journalTheme">{translate key="admin.settings.siteTheme"}</label></td>
 			<td colspan="2" class="value">
 				<select name="siteTheme" class="selectMenu" id="theme"{if empty($themes)} disabled="disabled"{/if}>
 					<option value="">{translate key="common.none"}</option>
 					{foreach from=$themes key=path item=themePlugin}
 					<option value="{$path|escape}"{if $path == $siteTheme} selected="selected"{/if}>{$themePlugin->getDisplayName()|escape}</option>
 					{/foreach}
 				</select>
 			</td>
 		</tr>
 		<tr valign="top">
 			<td class="label">{translate key="admin.settings.siteStyleSheet"}</td>
 			<td colspan="2" width="80%" class="value">
 				<input type="file" name="siteStyleSheet" class="uploadField" /> <input type="submit" name="uploadSiteStyleSheet" value="{translate key="common.upload"}" class="button" />
 				{if $siteStyleFileExists}
 				<br />
 				{translate key="common.fileName"}: <a href="{$publicFilesDir}/{$styleFilename}" class="file">{$originalStyleFilename|escape}</a> {$dateStyleFileUploaded|date_format:$datetimeFormatShort} <input type="submit" name="deleteSiteStyleSheet" value="{translate key="common.delete"}" class="button" />
 				{/if}
 			</td>
 		</tr>
 		<tr valign="top">
 			<td rowspan="2" class="label">{translate key="admin.settings.options"}</td>
 			<td class="value" colspan="2">
 				<input type="checkbox" id="useAlphalist" name="useAlphalist" {if $useAlphalist}checked="checked" {/if}/>
 				{fieldLabel name="useAlphalist" key="admin.settings.useAlphalist"}
 			</tr>
 			<tr valign="top">
 				<td class="value" colspan="2">
 					<input type="checkbox" id="usePaging" name="usePaging" {if $usePaging}checked="checked" {/if}/>
 					{fieldLabel name="usePaging" key="admin.settings.usePaging"}
 				</td>
 			</tr>
 			<tr valign="top">
 				<td class="label">{translate key="admin.settings.journalsList"}</td>
 				<td colspan="2" class="value">
 					{translate key="admin.settings.journalsList.description"}<br />
 					<input type="checkbox" name="showThumbnail" id="showThumbnail" value="1"{if $showThumbnail} checked="checked"{/if} />
 					{fieldLabel name="showThumbnail" key="admin.settings.journalsList.showThumbnail"}<br />
 					<input type="checkbox" name="showTitle" id="showTitle" value="1"{if $showTitle} checked="checked"{/if} />
 					{fieldLabel name="showTitle" key="admin.settings.journalsList.showTitle"}<br />
 					<input type="checkbox" name="showDescription" id="showDescription" value="1"{if $showDescription} checked="checked"{/if} />
 					{fieldLabel name="showDescription" key="admin.settings.journalsList.showDescription"}<br />
 				</td>
 			</tr>
 			<tr valign="top">
 				<td class="label">{translate key="admin.settings.security"}</td>
 				<td colspan="2" class="value">
 					<input type="checkbox" name="preventManagerPluginManagement" id="preventManagerPluginManagement" value="1"{if $preventManagerPluginManagement} checked="checked"{/if} />
 					{fieldLabel name="preventManagerPluginManagement" key="admin.settings.security.plugins"}<br />
 				</td>
 			</tr>
 		</div>

 		<br />
 		<div id="oaiRegistration">
 			<h4>{translate key="admin.settings.oaiRegistration"}</h4>

 			{url|assign:"oaiUrl" page="oai"}
 			{url|assign:"siteUrl" page="index"}
 			<p>{translate key="admin.settings.oaiRegistrationDescription" siteUrl=$siteUrl oaiUrl=$oaiUrl}</p>
 		</div>

 		{if count($availableMetricTypes) > 2}
 		<br />
 		<div id="defaultMetricSelection">
 			<h4>{translate key="defaultMetric.title"}</h4>
 			<p>{translate key="admin.settings.defaultMetricDescription"}</p>
 			<table class="data" width="100%">
 				<tr valign="top">
 					<td width="20%" class="label">{fieldLabel name="defaultMetricType" key="defaultMetric.availableMetrics"}</td>
 					<td colspan="2" width="80%" class="value">
 						<select name="defaultMetricType" class="selectMenu" id="defaultMetricType">
 							{foreach from=$availableMetricTypes key=metricType item=displayName}
 							<option value="{$metricType|escape}"{if $metricType == $defaultMetricType} selected="selected"{/if}>{$displayName|escape}</option>
 							{/foreach}
 						</select>
 					</td>
 				</tr>
 			</table>
 		</div>
 		{/if}

 		<p><input type="submit" value="{translate key="common.save"}" class="button defaultButton" /> <input type="button" value="{translate key="common.cancel"}" class="button" onclick="document.location.href='{url page="admin" escape=false}'" /></p>

 	</form>

 	<p><span class="formRequired">{translate key="common.requiredField"}</span></p>

 	{include file="common/footer.tpl"}

