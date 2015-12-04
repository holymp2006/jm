{**
 * templates/manager/groups/groupForm.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Group form under journal management.
 *
 *}
 {strip}
 {assign var="pageId" value="manager.groups.groupForm"}
 {assign var="pageCrumbTitle" value=$pageTitle}
 {include file="common/header.tpl"}
 {/strip}
 <div id="groupFormDiv">
 	{if $group}
 	<ul class="menu navbar navbar-default">
 		<li class="current"><a href="{url op="editGroup" path=$group->getId()}">{translate key="manager.groups.editTitle"}</a></li>
 		<li><a href="{url op="groupMembership" path=$group->getId()}">{translate key="manager.groups.membership}</a></li>
 	</ul>
 	{/if}

 	<br/>

 	<form id="groupForm" method="post" action="{url op="updateGroup"}">
 		{if $group}
 		<input type="hidden" name="groupId" value="{$group->getId()}"/>
 		{/if}

 		{include file="common/formErrors.tpl"}
 		<div class="form-horizontal">
 			{if count($formLocales) > 1}
 			<div class="form-group">
 				{fieldLabel name="formLocale" key="form.formLanguage" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					{if $group}{url|assign:"groupFormUrl" op="editGroup" path=$group->getId() escape=false}
 					{else}{url|assign:"groupFormUrl" op="createGroup" escape=false}
 					{/if}
 					{form_language_chooser form="groupForm" url=$groupFormUrl}
 					<small class="instruct">{translate key="form.formLanguage.description"}</small>
 				</div>
 			</div>
 			{/if}
 			<div class="form-group">
 				{fieldLabel name="title" required="true" key="manager.groups.title" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="title[{$formLocale|escape}]" value="{$title[$formLocale]|escape}" size="35" maxlength="80" id="title" class="form-control" />
 				</div>
 			</div>

 			<div class="form-group">
 				<label class="control-label col-sm-2">&nbsp;</label>
 				<div class="col-sm-10">
 					<div class="checkbox">
 						<label for="publishEmail">
 							<input type="checkbox" name="publishEmail" value="1" {if $publishEmail}checked="checked" {/if} id="publishEmail" />&nbsp;
 							{translate key="manager.groups.publishEmails"}	
 						</label>		
 					</div>
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel key="common.type" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					{foreach from=$groupContextOptions item=groupContextOptionKey key=groupContextOptionValue}
 					<div class="checkbox">
 						<label for="context-{$groupContextOptionValue|escape}">
 							<input type="radio" name="context" value="{$groupContextOptionValue|escape}" {if $context == $groupContextOptionValue}checked="checked" {/if} id="context-{$groupContextOptionValue|escape}" />
 							{translate key=$groupContextOptionKey}
 						</label> 						
 					</div>
 					{/foreach}
 				</div>
 			</div>
 		</div> <!--.form-horizontal-->

 		<p class="mt-20 alert alert-info">
 		<span class="formRequired"><i class="glyphicon glyphicon-exclamation-sign"></i>&nbsp;&nbsp;&nbsp;&nbsp;{translate key="common.requiredField"}</span>
 		</p>

 		<hr>

 		<p><input type="submit" value="{translate key="common.save"}" class="btn btn-primary" /> <input type="button" value="{translate key="common.cancel"}" class="btn btn-warning" onclick="document.location.href='{url op="groups" escape=false}'" /></p>
 	</form>

 	
 </div>
 {include file="common/footer.tpl"}

