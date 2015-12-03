{**
 * templates/manager/files/index.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Files browser.
 *
 *}
 {strip}
 {assign var="pageTitle" value="manager.filesBrowser"}
 {include file="common/header.tpl"}
 {/strip}

 {assign var=displayDir value="/$currentDir"}
 <h3>{translate key="manager.files.indexOfDir" dir=$displayDir|escape}</h3>

 {if $currentDir}
 <p><a href="{url op="files" path=$parentDir|explode:"/"}" class="action">&lt; {translate key="manager.files.parentDir"}</a></p>
 {/if}

 <table class="table table-striped">
 	<thead>
 		<tr valign="bottom">
 			<th></th>
 			<th>{translate key="common.fileName"}</th>
 			<th>{translate key="common.type"}</th>
 			<th>{translate key="common.dateModified"}</th>
 			<th>{translate key="common.size"}</th>
 			<th>{translate key="common.action"}</th>
 		</tr>
 	</thead>
 	<tbody>
 		{foreach from=$files item=file name=files}
 		{if $currentDir}
 		{assign var=filePath value=$currentDir|concat:"/":$file.name}
 		{else}
 		{assign var=filePath value=$file.name}
 		{/if}
 		{assign var=filePath value=$filePath|escape}
 		<tr valign="top">
 			<td><i class='fa {if $file.isDir}fa-folder-o{else}fa-file-o{/if}'></i></td>
 			<td><a href="{url op="files" path=$filePath|explode:"/"}">{$file.name}</a></td>
 			<td>{$file.mimetype|escape|default:"&mdash;"}</td>
 			<td>{$file.mtime|escape|date_format:$datetimeFormatShort}</td>
 			<td>{$file.size|escape|default:"&mdash;"}</td>
 			<td class="nowrap">
 				{if !$file.isDir}
 				<a href="{url op="files" path=$filePath|explode:"/" download=1}" class="action">{translate key="common.download"}</a>&nbsp;|
 				{/if}
 				<a href="{url op="fileDelete" path=$filePath|explode:"/"}" onclick="return confirm('{translate|escape:"jsparam" key="manager.files.confirmDelete"}')" class="action">{translate key="common.delete"}</a>
 			</td>
 		</tr>

 		{foreachelse}
 		<tr>
 			<td colspan="6" class="nodata">{translate key="manager.files.emptyDir"}</td>
 		</tr>

 		{/foreach}
 	</tbody>
 </table>

 <form method="post" action="{url op="fileUpload" path=$currentDir|explode:"/"}" enctype="multipart/form-data">
 	<div class="form-horizontal">
 		<div class="form-group">
 			<div class="col-sm-8"> 	
 				<div class="input-group image-preview">
<<<<<<< HEAD
 					<input id="" placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
=======
 					<input id="image-name" placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
>>>>>>> test
 					<span class="input-group-btn">
 						<div class="btn btn-default image-preview-input"> 
 							<span class="glyphicon glyphicon-folder-open"></span> 
 							<span class="image-preview-input-title">Browse</span>
 							<input type="file" size="20" name="file" class="uploadField" multiple>
 						</div>

 						<input type="submit" value="{translate key="manager.files.uploadFile"}" class="btn btn-default btn-labeled" />
 						
 					</span>
 				</div>
<<<<<<< HEAD
 			</div> 
 			<script type="text/javascript" charset="utf-8">
 				{literal}
 				$(document).ready(function() {
 					$('#image_name').html(file.name); 				
 				});
 				{/literal}
 			</script>		
 			
 		</div> 	
 	</div>
=======
 			</div>  			
 		</div> 	
 	</div>
 	<script type="text/javascript" charset="utf-8">
 		{literal}
 		$(function() {
			//$('#image-name').val() = $('.uploadField').val(); 				
			var mmm = $('.uploadField').val();
			alert('hey, javascript now works! please continue with the initial plan.');
 				}); 		
 		{/literal}
 	</script>	
>>>>>>> test
 </form>

 <hr>

 <form method="post" action="{url op="fileMakeDir" path=$currentDir|explode:"/"}" enctype="multipart/form-data" class="mb-15">
 	<div class="form-inline">
 		<div class="form-group">
 			<input type="text" size="20" maxlength="255" name="dirName" class="form-control" />
 			<input type="submit" value="{translate key="manager.files.createDir"}" class="btn btn-primary" />
 		</div> 	
 	</div>
 </form>
 <p class="alert alert-info">{translate key="manager.files.note"}</p>

 {include file="common/footer.tpl"}

