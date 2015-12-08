{**
 * plugins/blocks/help/block.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- help pop-up link.
 *
 *}
 
<div class="block" id="sidebarHelp">
	<a class="blockTitle btn btn-default hvr-sweep-to-bottom" href="javascript:openHelp('{if $helpTopicId}{get_help_id|escape key="$helpTopicId" url="true"}{else}{url page="help"}{/if}')"><span><i class="glyphicon glyphicon-question-sign"></i></span> {translate key="navigation.journalHelp"}</a>
</div>
<hr>