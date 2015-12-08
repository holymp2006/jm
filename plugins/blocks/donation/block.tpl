{**
 * plugins/blocks/donation/block.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- donation links.
 *
 *}
{if $donationEnabled}
<div class="block" id="sidebarDonation">
	<span class="blockTitle"><a href="{url page="donations"}" class="btn btn-default hvr-sweep-to-bottom"><i class="glyphicon glyphicon-credit-card"></i> {translate key="payment.type.donation"}</a></span>
</div>
{/if}
