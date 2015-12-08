{**
 * plugins/blocks/information/block.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- information links.
 *
 *}
{if !empty($forReaders) || !empty($forAuthors) || !empty($forLibrarians)}
<div class="block" id="sidebarInformation">
	<span class="blockTitle jm-sidebar-list-heading"><i class="glyphicon glyphicon-info-sign"></i> {translate key="plugins.block.information.link"}</span>
	<ul>
		{if !empty($forReaders)}<li class="jm-sidebar-list-item"><a href="{url page="information" op="readers"}"><i class="fa fa-book"></i> {translate key="navigation.infoForReaders"}</a></li>{/if}
		{if !empty($forAuthors)}<li class="jm-sidebar-list-item"><a href="{url page="information" op="authors"}"><i class="fa fa-pencil"></i> {translate key="navigation.infoForAuthors"}</a></li>{/if}
		{if !empty($forLibrarians)}<li class="jm-sidebar-list-item"><a href="{url page="information" op="librarians"}"><i class="fa fa-tags"></i> {translate key="navigation.infoForLibrarians"}</a></li>{/if}
	</ul>
</div>
<hr>
{/if}
