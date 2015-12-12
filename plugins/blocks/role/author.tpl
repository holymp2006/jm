{**
 * plugins/blocks/role/author.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Author navigation sidebar.
 *
 *}

<div class="block" id="sidebarAuthor">
	<span class="blockTitle"><h4 class="jm-sidebar-list-heading"><i class="glyphicon glyphicon-pencil"></i> {translate key="user.role.author"}</h4></span>
	<span class="blockSubtitle"><span><i class="glyphicon glyphicon-share-alt"></i></span> {translate key="article.submissions"}</span>
	<ul style="margin-top: 8px;">
		<li class="jm-sidebar-list-item"><a href="{url op="index" path="active"}"><span><i class="glyphicon glyphicon-flash"></i> {translate key="common.queue.short.active"}</span></a>&nbsp;<span class="badge">{if $submissionsCount[0]}{$submissionsCount[0]}{else}0{/if}</span></li>
		<li class="jm-sidebar-list-item"><a href="{url op="index" path="completed"}"><span><i class="glyphicon glyphicon-ok"></i> {translate key="common.queue.short.completed"}</span></a>&nbsp;<span class="badge">{if $submissionsCount[1]}{$submissionsCount[1]}{else}0{/if}</span></li>
		<li class="jm-sidebar-list-item"><a href="{url op="submit"}"><span><i class="glyphicon glyphicon-share-alt"></i> {translate key="author.submit"}</span></a></li>
	</ul>
</div>
<hr>

