{**
 * templates/manager/sections/sections.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display list of sections in journal management.
 *
 *}
 {strip}
 {assign var="pageTitle" value="section.sections"}
 {include file="common/header.tpl"}
 {/strip}

 <script type="text/javascript">
 	{literal}
 	$(document).ready(function() { setupTableDND("#dragTable", "moveSection"); });
 	{/literal}
 </script>

 <br/>

 <div id="sections">
 	<table class="table table-striped" id="dragTable">
 		<thead>			
 			<tr class="heading" valign="bottom">
 				<th width="60%">{translate key="section.title"}</th>
 				<th width="25%">{translate key="section.abbreviation"}</th>
 				<th width="15%" align="right">{translate key="common.action"}</th>
 			</tr>
 		</thead>
 		<tbody>
 			{iterate from=sections item=section name=sections}
 			<tr valign="top" id="section-{$section->getId()}" class="data">
 				<td class="drag">{$section->getLocalizedTitle()|escape}</td>
 				<td class="drag">{$section->getLocalizedAbbrev()|escape}</td>
 				<td align="right" class="nowrap">
 					<a href="{url op="editSection" path=$section->getId()}" class="action">{translate key="common.edit"}</a>&nbsp;|&nbsp;<a href="{url op="deleteSection" path=$section->getId()}" onclick="{if !in_array($section->getId(), $emptySectionIds)}alert('{translate|escape:"jsparam" key="manager.sections.alertDelete"}'); return false{else}return confirm('{translate|escape:"jsparam" key="manager.sections.confirmDelete"}'){/if}" class="action">{translate key="common.delete"}</a>&nbsp;|&nbsp;<a href="{url op="moveSection" d=u id=$section->getId()}">&uarr;</a>&nbsp;<a href="{url op="moveSection" d=d id=$section->getId()}">&darr;</a>
 				</td>
 			</tr>
 			{/iterate}
 			
 			{if $sections->wasEmpty()}
 			<tr>
 				<td colspan="3" class="nodata">{translate key="manager.sections.noneCreated"}</td>
 			</tr>
 			
 			{else}
 			<tr>
 				<td align="left">{page_info iterator=$sections}</td>
 				<td colspan="2" align="right">{page_links anchor="sections" name="sections" iterator=$sections}</td>
 			</tr>
 			{/if}
 		</tbody>
 	</table>
 	<hr>
 	<a class="btn btn-primary" href="{url op="createSection"}">{translate key="manager.sections.create"}</a>
 </div>

 {include file="common/footer.tpl"}

