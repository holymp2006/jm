{**
 * templates/manager/reviewForms/reviewFormForm.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Form to create/modify a review form.
 *
 *}
 {strip}
 {include file="common/header.tpl"}
 {/strip}

 {if $reviewFormId}
 <ul class="menu">
 	<li class="current"><a href="{url op="editReviewForm" path=$reviewFormId}">{translate key="manager.reviewForms.edit"}</a></li>
 	<li><a href="{url op="reviewFormElements" path=$reviewFormId}">{translate key="manager.reviewFormElements"}</a></li>
 	<li><a href="{url op="previewReviewForm" path=$reviewFormId}">{translate key="manager.reviewForms.preview"}</a></li>
 </ul>
 {/if}

 <br/>

 <form id="reviewFormForm" method="post" action="{url op="updateReviewForm"}">
 	{if $reviewFormId}
 	<input type="hidden" name="reviewFormId" value="{$reviewFormId}"/>
 	{/if}

 	{include file="common/formErrors.tpl"}

 	<div class="form-horizontal">
 		{if count($formLocales) > 1}
 		<div class="form-group">
 			{fieldLabel name="formLocale" key="form.formLanguage" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				{if $reviewFormId}{url|assign:"reviewFormFormUrl" op="editReviewForm" path=$reviewFormId escape=false}
 				{else}{url|assign:"reviewFormFormUrl" op="createReviewForm" escape=false}
 				{/if}
 				{form_language_chooser form="reviewFormForm" url=$reviewFormFormUrl}
 				<span class="instruct">{translate key="form.formLanguage.description"}</span>
 			</div>
 		</div>
 		{/if}
 		<div class="form-group">
 			{fieldLabel name="title" required="true" key="manager.reviewForms.title" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<input type="text" name="title[{$formLocale|escape}]" value="{$title[$formLocale]|escape}" id="title" size="40" maxlength="120" class="form-control" />
 			</div>
 		</div>
 		<div class="form-group journal-setup">
 			{fieldLabel name="description" key="manager.reviewForms.description" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<textarea name="description[{$formLocale|escape}]" rows="4" cols="40" id="description" class="form-control">{$description[$formLocale]|escape}</textarea>
 			</div>
 		</div>
 	</div>

 	<hr>

 	<p class="alert alert-info mb-10">
 	<span class="formRequired"><i class="glyphicon glyphicon-exclamation-sign"></i>&nbsp;&nbsp;&nbsp;{translate key="common.requiredField"}</span>
 	</p>
 	<p><input type="submit" value="{translate key="common.save"}" class="btn btn-primary" /> <input type="button" value="{translate key="common.cancel"}" class="btn btn-warning" onclick="document.location.href='{url op="reviewForms" escape=false}'" /></p>
 </form>


 {include file="common/footer.tpl"}

