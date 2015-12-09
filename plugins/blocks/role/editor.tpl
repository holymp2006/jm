{**
 * plugins/blocks/role/editor.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Editor navigation sidebar.
 * Lists active assignments and editor functions.
 *
 *}

<div class="block" id="sidebarEditor">
	<span class="blockTitle"><h4 class="jm-sidebar-list-heading"><i class="glyphicon glyphicon-edit"></i> {translate key="user.role.editor"}</h4></span>

	<span class="blockSubtitle"><h5><i class="glyphicon glyphicon-share-alt"></i> {translate key="article.submissions"}</h5></span>
	<ul style="margin-top: 8px;">
		<li class="jm-sidebar-list-item"><a href="{url op="submissions" path="submissionsUnassigned"}"><i class="glyphicon glyphicon-pushpin"></i> {translate key="common.queue.short.submissionsUnassigned"}</a>&nbsp;<span class="badge">{if $submissionsCount[0]}{$submissionsCount[0]}{else}0{/if}</span></li>
		<li class="jm-sidebar-list-item"><a href="{url op="submissions" path="submissionsInReview"}"><i class="glyphicon glyphicon-list-alt"></i> {translate key="common.queue.short.submissionsInReview"}</a>&nbsp;<span class="badge">{if $submissionsCount[1]}{$submissionsCount[1]}{else}0{/if}</span></li>
		<li class="jm-sidebar-list-item"><a href="{url op="submissions" path="submissionsInEditing"}"><i class="glyphicon glyphicon-pencil"></i> {translate key="common.queue.short.submissionsInEditing"}</a>&nbsp;<span class="badge">{if $submissionsCount[2]}{$submissionsCount[2]}{else}0{/if}</span></li>
		<li class="jm-sidebar-list-item"><a href="{url op="submissions" path="submissionsArchives"}"><i class="glyphicon glyphicon-folder-close"></i> {translate key="common.queue.short.submissionsArchives"}</a></li>
	</ul>

	<span class="blockSubtitle" style="margin-top: 8px;"><h5><i class=" glyphicon glyphicon-link"></i> {translate key="editor.navigation.issues"}</h5></span>
	<ul>
		<li class="jm-sidebar-list-item"><a href="{url op="createIssue"}"><i class="glyphicon glyphicon-link"></i> {translate key="editor.navigation.createIssue"}</a></li>
		<li class="jm-sidebar-list-item"><a href="{url op="notifyUsers"}"><i class="glyphicon glyphicon-send"></i> {translate key="editor.notifyUsers"}</a></li>
		<li class="jm-sidebar-list-item"><a href="{url op="futureIssues"}"><i class="glyphicon glyphicon-circle-arrow-right"></i> {translate key="editor.navigation.futureIssues"}</a></li>
		<li class="jm-sidebar-list-item"><a href="{url op="backIssues"}"><i class="glyphicon glyphicon-folder-open"></i> {translate key="editor.navigation.issueArchive"}</a></li>
	</ul>
</div>
<hr>