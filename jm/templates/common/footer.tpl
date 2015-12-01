{**
 * templates/common/footer.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2000-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site footer.
 *
 *}
{if $displayCreativeCommons}
	{translate key="common.ccLicense"}
{/if}
{if $pageFooter}
	<br /><br />
	<div id="pageFooter">{$pageFooter}</div>
{/if}
{call_hook name="Templates::Common::Footer::PageFooter"}
</div><!-- content -->
</div><!-- main -->

{call_hook|assign:"leftSidebarCode" name="Templates::Common::LeftSidebar"}
{call_hook|assign:"rightSidebarCode" name="Templates::Common::RightSidebar"}

{if $leftSidebarCode || $rightSidebarCode}
	<div id="sidebar" class="col-md-3">
		{* {if $leftSidebarCode}
			<div id="leftSidebar">
				{$leftSidebarCode}
			</div>
		{/if}  *}
		{if $rightSidebarCode}
			<div id="rightSidebar">
				{$rightSidebarCode}
			</div>
		{/if}
	</div>
{/if}


</div><!-- .row -->

</div><!-- body -->

{get_debug_info}
{if $enableDebugStats}{include file=$pqpTemplate}{/if}

<!-- </div> --><!-- container -->
</body>
</html>
