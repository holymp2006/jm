{**
 * templates/rtadmin/version.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * RTAdmin version editing
 *
 *}
 {strip}
 {assign var="pageTitle" value="rt.admin.versions.edit.editVersion"}
 {include file="common/header.tpl"}
 {/strip}

 {if $versionId}
 <div class="row mb-10"> 
 	<nav class="col-md-12">
 		<ul class="menu nav navbar-nav">
 			<li class="current"><a href="{url op="editVersion" path=$versionId}" class="action">{translate key="rt.admin.versions.metadata"}</a></li>
 			<li><a href="{url op="contexts" path=$versionId}" class="action">{translate key="rt.contexts"}</a></li>
 		</ul>
 	</nav>
 </div>
 {/if}

 <br />

 <form action="{if $versionId}{url op="saveVersion" path=$versionId}{else}{url op="createVersion" path="save"}{/if}" method="post">
 	<div class="form-horizontal">
 		<div class="form-group">
 			<label for="title" class="col-sm-2 control-label">{translate key="rt.version.title"}</label>
 			<div class="col-sm-10">
 				<input type="text" class="form-control" name="title" id="title" value="{$title|escape}" size="60" />
 			</div>
 		</div>
 		<div class="form-group">
 			<label for="key" class="control-label col-sm-2">{translate key="rt.version.key"}</label>
 			<div class="col-sm-10">
 				<input type="text" class="form-control" name="key" id="key" value="{$key|escape}" size="60" />
 			</div>
 		</div>
 		<div class="form-group">
 			<label class="col-sm-2 control-label" for="locale">{translate key="rt.version.locale"}</label>
 			<div class="col-sm-10">
 				<input type="text" class="form-control" name="locale" id="locale" maxlength="5" size="5" value="{$locale|escape}" />
 			</div>
 		</div>
 		<div class="form-group">
 			<label for="description" class="col-sm-2 control-label">{translate key="rt.version.description"}</label>
 			<div class="col-sm-10">
 				<textarea class="form-control" name="description" id="description" rows="5" cols="60">{$description|escape}</textarea>
 			</div>
 		</div>
 	</div>
 	<hr>
 	<p><input type="submit" value="{translate key="common.save"}" class="btn btn-primary" /> <input type="button" value="{translate key="common.cancel"}" class="btn btn-warning" onclick="document.location.href='{url op="versions" escape=false}'" /></p>

 </form>

 {include file="common/footer.tpl"}

