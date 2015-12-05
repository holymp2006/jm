{**
 * templates/rtadmin/versions.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * RTAdmin version list
 *
 *}
 {strip}
 {assign var="pageTitle" value="rt.versions"}
 {include file="common/header.tpl"}
 {/strip}

 <br/>

 <div id="versions">
 	<table class="table table-striped">
 		<thead>
 			<tr>
 				<th>{translate key="rt.version.title"}</th>
 				<th>{translate key="rt.version.locale"}</th>
 				<th align="right">&nbsp;</th>
 			</tr>
 		</thead>

 		<tbody>

 			{iterate from=versions item=version}
 			<tr valign="top">
 				<td>{$version->getTitle()|escape}</td>
 				<td>{$version->getLocale()|escape}</td>
 				<td align="right"><a href="{url op="validateUrls" path=$version->getVersionId()}" class="action">{translate key="rt.admin.validateUrls.validate"}</a>&nbsp;|&nbsp;<a href="{url op="editVersion" path=$version->getVersionId()}" class="action">{translate key="rt.admin.versions.metadata"}</a>&nbsp;|&nbsp;<a href="{url op="contexts" path=$version->getVersionId()}" class="action">{translate key="rt.contexts"}</a>&nbsp;|&nbsp;<a href="{url op="exportVersion" path=$version->getVersionId()}" class="action">{translate key="rt.admin.versions.export"}</a>&nbsp;|&nbsp;<a href="{url op="deleteVersion" path=$version->getVersionId()}" onclick="return confirm('{translate|escape:"jsparam" key="rt.admin.versions.confirmDelete"}')" class="action">{translate key="common.delete"}</a></td>
 			</tr>
 			
 			{/iterate}
 			{if $versions->wasEmpty()}
 			<tr valign="top">
 				<td class="nodata" colspan="3">{translate key="common.none"}</td>
 			</tr>
 			
 			{else}
 			<tr>
 				<td align="left">{page_info iterator=$versions}</td>
 				<td colspan="2" align="right">
 					<ul class="pagination">
 						{page_links anchor="versions" name="versions" iterator=$versions}
 					</ul>
 				</td>
 			</tr>
 			{/if}

 		</tbody>
 	</table>
 </div>	
 
 <hr>

 <a href="{url op="createVersion"}" class="btn btn-primary">{translate key="rt.admin.versions.createVersion"}</a>

 <a href="{url op="restoreVersions"}" onclick="return confirm('{translate|escape:"jsparam" key="rt.admin.versions.confirmRestore"}')" class="btn btn-danger">{translate key="rt.admin.versions.restoreVersions"}</a>

 <hr>

 <form method="post" action="{url op="importVersion"}" enctype="multipart/form-data">
 	<div class="row">
 		<div class="col-sm-8"> 	
 			<div class="input-group image-preview">
 				<input id="image-name" placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
 				<span class="input-group-btn">
 					<div class="btn btn-default image-preview-input"> 
 						<span class="glyphicon glyphicon-folder-open"></span> 
 						<span class="image-preview-input-title">Browse</span>
 						<input id="image-name-get" type="file" class="uploadField" name="versionFile" />
 					</div>

 					<input type="submit" class="btn btn-default btn-labeled" value="{translate key="rt.admin.versions.importVersion"}" />

 				</span>
 			</div>
 		</div>  			
 	</div>

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

 </form>






 {include file="common/footer.tpl"}

