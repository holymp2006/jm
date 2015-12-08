{**
 * plugins/blocks/notification/block.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- "Notification" block.
 *
 *}
 {if $currentJournal}
<div class="block" id="notification">
	<span class="blockTitle"><h4 class="jm-sidebar-list-heading"><i class="fa fa-comment"></i> {translate key="notification.notifications"}</h4></span>
	<ul>
		{if $isUserLoggedIn}
			<li class="jm-sidebar-list-item"><a href="{url page="notification"}"><i class="fa fa-comment"></i> {translate key="common.view"}</a>
				<span class="badge">{if $unreadNotifications > 0}{translate key="notification.notificationsNew" numNew=$unreadNotifications}{/if}</span></li>
			<li class="jm-sidebar-list-item"><a href="{url page="notification" op="settings"}"><i class="fa fa-wrench"></i> {translate key="common.manage"}</a></li>
		{else}
			<li><a href="{url page="notification"}"><i class="fa fa-comment"></i> {translate key="common.view"}</a></li>
			<li><a href="{url page="notification" op="subscribeMailList"}"><i class="glyphicon glyphicon-plus"></i> {translate key="notification.subscribe"}</a></li>
		{/if}
	</ul>
</div>
<hr>
{/if}