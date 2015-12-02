{**
 * plugins/generic/lucene/templates/filterInput.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * A template to be included via Templates::Search::SearchResults::FilterInput hook.
 *
 * Parameters:
 *   $filterName string
 *   $filterValue string
 *}
<script type="text/javascript">
	{if $filterName == "simpleQuery"}
		{url|assign:"autocompleteUrl" page="lucene" op="queryAutocomplete"}
		{assign var="searchForm" value="simpleSearchForm"}
	{else}
		{url|assign:"autocompleteUrl" page="lucene" op="queryAutocomplete" searchField=$filterName}
		{assign var="searchForm" value="searchForm"}
	{/if}
	$(function() {ldelim}
		$('#{$filterName}Autocomplete').pkpHandler(
			'$.pkp.plugins.generic.lucene.LuceneAutocompleteHandler',
			{ldelim}
				sourceUrl: "{$autocompleteUrl|escape:javascript}",
				searchForm: "{$searchForm}"
			{rdelim});
	{rdelim});
</script>
{if $filterName !== 'query'}
<div id="{$filterName}Autocomplete" class="col-sm-6">
{/if}
	<input placeholder="{$filterPlaceholder}" type="text" id="{$filterName}_input" name="{$filterName}" size="{$size|default:40}" maxlength="255" value="{$filterValue|escape}" class="form-control" placeholder="{if $filterName == 'query'}Enter Search item{/if}">
	<input type="hidden" id="{$filterName}" name="{$filterName}_hidden" value="{$filterValue|escape}" />
	<script type="text/javascript">
		{* The following lines guarantee graceful fallback in case
		   a client does not support JavaScript. We do this here and not
		   in the handler to better document whats going on. Otherwise
		   the renaming would be even more obscure. ;-) We also want to
		   do this at the earliest point possible to avoid errors in case
		   a client loads slowly. *}
		$('#{$filterName}_input').attr('name', '{$filterName}_input');
		$('#{$filterName}').attr('name', '{$filterName}');
	</script>
{if $filterName !== 'query'}
</div>
{/if}