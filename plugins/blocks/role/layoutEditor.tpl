{**
 * plugins/blocks/role/layoutEditor.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * LayoutEditor navigation sidebar.
 *
 *}
<div class="block" id="sidebarLayoutEditor">
	<span class="blockTitle"><h4 class="jm-sidebar-list-heading"><i class="glyphicon glyphicon-indent-right"></i> {translate key="user.role.layoutEditor"}</h4></span>
	<span class="blockSubtitle"><i class="glyphicon glyphicon-share-alt"></i> {translate key="article.submissions"}</span>
	<ul style="margin-top: 8px;">
		<li class="jm-sidebar-list-item"><a href="{url op="submissions" path="active"}"><i class="glyphicon glyphicon-flash"></i> {translate key="common.queue.short.active"}</a>&nbsp;<span class="badge">{if $submissionsCount[0]}{$submissionsCount[0]}{else}0{/if}</span></li>
		<li class="jm-sidebar-list-item"><a href="{url op="submissions" path="completed"}"><i class="glyphicon glyphicon-briefcase"></i> {translate key="common.queue.short.completed"}</a>&nbsp;<span class="badge">{if $submissionsCount[1]}{$submissionsCount[1]}{else}0{/if}</span></li>
	</ul>
</div>