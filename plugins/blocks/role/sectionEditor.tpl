{**
 * plugins/blocks/role/sectionEditor.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Section Editor navigation sidebar.
 *
 *}
<div class="block" id="sidebarSectionEditor">
	<span class="blockTitle"><h4 class="jm-sidebar-list-heading"><i class="glyphicon glyphicon-list-alt"></i> {translate key="user.role.sectionEditor"}</h4></span>
	<span class="blockSubtitle"><i class="glyphicon glyphicon-share-alt"></i> {translate key="article.submissions"}</span>
	<ul style="margin-top: 8px;">
		<li class="jm-sidebar-list-item"><a href="{url op="index" path="submissionsInReview"}"><i class="glyphicon glyphicon-list-alt"></i> {translate key="common.queue.short.submissionsInReview"}</a>&nbsp;<span class="badge">{if $submissionsCount[0]}{$submissionsCount[0]}{else}0{/if}</span></li>
		<li class="jm-sidebar-list-item"><a href="{url op="index" path="submissionsInEditing"}"><i class="glyphicon glyphicon-pencil"></i> {translate key="common.queue.short.submissionsInEditing"}</a>&nbsp;<span class="badge">{if $submissionsCount[1]}{$submissionsCount[1]}{else}0{/if}</span></li>
		<li class="jm-sidebar-list-item"><a href="{url op="index" path="submissionsArchives"}"><i class="glyphicon glyphicon-folder-close"></i> {translate key="common.queue.short.submissionsArchives"}</a></li>
	</ul>
</div>
<hr>