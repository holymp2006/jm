{**
 * templates/manager/setup/step5.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Step 5 of journal setup.
 *
 *}
{assign var="pageTitle" value="manager.setup.customizingTheLook"}
{include file="manager/setup/setupHeader.tpl"}

<script type="text/javascript">
{literal}
<!--

// Swap the given entries in the select field.
function swapEntries(field, i, j) {
	var tmpLabel = field.options[j].label;
	var tmpVal = field.options[j].value;
	var tmpText = field.options[j].text;
	var tmpSel = field.options[j].selected;
	field.options[j].label = field.options[i].label;
	field.options[j].value = field.options[i].value;
	field.options[j].text = field.options[i].text;
	field.options[j].selected = field.options[i].selected;
	field.options[i].label = tmpLabel;
	field.options[i].value = tmpVal;
	field.options[i].text = tmpText;
	field.options[i].selected = tmpSel;
}

// Move selected items up in the given select list.
function moveUp(field) {
	var i;
	for (i=0; i<field.length; i++) {
		if (field.options[i].selected == true && i>0) {
			swapEntries(field, i-1, i);
		}
	}
}

// Move selected items down in the given select list.
function moveDown(field) {
	var i;
	var max = field.length - 1;
	for (i = max; i >= 0; i=i-1) {
		if(field.options[i].selected == true && i < max) {
			swapEntries(field, i+1, i);
		}
	}
}

// Move selected items from select list a to select list b.
function jumpList(a, b) {
	var i;
	for (i=0; i<a.options.length; i++) {
		if (a.options[i].selected == true) {
			bMax = b.options.length;
			b.options[bMax] = new Option(a.options[i].text);
			b.options[bMax].value = a.options[i].value;
			a.options[i] = null;
			i=i-1;
		}
	}
}

function prepBlockFields() {
	var i;
	var theForm = document.getElementById('setupForm');

	theForm.elements["blockSelectLeft"].value = "";
	for (i=0; i<theForm.blockSelectLeftWidget.options.length; i++) {
		theForm.blockSelectLeft.value += encodeURI(theForm.blockSelectLeftWidget.options[i].value) + " ";
	}

	theForm.blockSelectRight.value = "";
	for (i=0; i<theForm.blockSelectRightWidget.options.length; i++) {
		theForm.blockSelectRight.value += encodeURI(theForm.blockSelectRightWidget.options[i].value) + " ";
	}

	theForm.blockUnselected.value = "";
	for (i=0; i<theForm.blockUnselectedWidget.options.length; i++) {
		theForm.blockUnselected.value += encodeURI(theForm.blockUnselectedWidget.options[i].value) + " ";
	}
	return true;
}

// -->
{/literal}
</script>

<form id="setupForm" method="post" action="{url op="saveSetup" path="5"}" enctype="multipart/form-data">
{include file="common/formErrors.tpl"}

{if count($formLocales) > 1}
<div width="100%" class="data" class="form-horizontal">
	<div class="form-group">
		{fieldLabel name="formLocale" key="form.formLanguage" class="col-sm-2"}
		<div width="80%" class="col-sm-10">
			{url|assign:"setupFormUrl" op="setup" path="5" escape=false}
			{form_language_chooser form="setupForm" url=$setupFormUrl}
			<span class="instruct">{translate key="form.formLanguage.description"}</span>
		</div>
	</div>
</div>
{/if}
<div id="journalHomepageHeader">
<h3>5.1 {translate key="manager.setup.journalHomepageHeader"}</h3>

<p>{translate key="manager.setup.journalHomepageHeaderDescription"}</p>
<div id="journalTitleAndLogo">
<h4>{translate key="manager.setup.journalTitle"}</h4>

<div width="100%" class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-2"><input type="radio" name="homeHeaderTitleType[{$formLocale|escape}]" id="homeHeaderTitleType-0" value="0"{if not $homeHeaderTitleType[$formLocale]} checked="checked"{/if} /> {fieldLabel name="homeHeaderTitleType-0" key="manager.setup.useTextTitle"}</div>
		<div class="col-sm-10"><input type="text" name="homeHeaderTitle[{$formLocale|escape}]" value="{$homeHeaderTitle[$formLocale]|escape}" size="40" maxlength="255" class="form-control" /></div>
	</div>

	<div class="form-group">
		<div class="col-sm-2"><input type="radio" name="homeHeaderTitleType[{$formLocale|escape}]" id="homeHeaderTitleType-1" value="1"{if $homeHeaderTitleType[$formLocale]} checked="checked"{/if} />{fieldLabel name="homeHeaderTitleType-1" key="manager.setup.useImageTitle"}</div>
		<p><div class="col-sm-10"><input type="file" name="homeHeaderTitleImage" class="uploadField" /> </p><input type="submit" name="uploadHomeHeaderTitleImage" value="{translate key="common.upload"}" class="btn btn-primary" /></div>
	</div>
</div>

<p>
{if $homeHeaderTitleImage[$formLocale]}
{translate key="common.fileName"}: {$homeHeaderTitleImage[$formLocale].name|escape} {$homeHeaderTitleImage[$formLocale].dateUploaded|date_format:$datetimeFormatShort} <input type="submit" name="deleteHomeHeaderTitleImage" value="{translate key="common.delete"}" class="btn btn-primary" />
</p>


<p>
<img src="{$publicFilesDir}/{$homeHeaderTitleImage[$formLocale].uploadName|escape:"url"}" width="{$homeHeaderTitleImage[$formLocale].width|escape}" height="{$homeHeaderTitleImage[$formLocale].height|escape}" style="border: 0;" alt="{translate key="common.homePageHeader.altText"}" />
</p>

<!-- -->

<div class="form-horizontal">
	<div class="form-group">
		<strong>{fieldLabel name="homeHeaderTitleImageAltText" key="common.altText" class="col-sm-2 control-label"}</strong>
		<div width="80%" class="col-sm-10"><input type="text" name="homeHeaderTitleImageAltText[{$formLocale|escape}]" value="{$homeHeaderTitleImageAltText[$formLocale]|escape}" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div valign="top">
		<div>&nbsp;</div>
		<div class="value"><span class="instruct">{translate key="common.altTextInstructions"}</span></div>
	</div>
</div>
{/if}
</div>
<div id="journalLogoImage">
<h4>{translate key="manager.setup.journalLogo"}</h4>


<div width="100%" class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-2 control-label">{translate key="manager.setup.useImageLogo"}</div>
		<p><div class="col-sm-10"><input type="file" name="homeHeaderLogoImage" class="uploadField" /> </p><input type="submit" name="uploadHomeHeaderLogoImage" value="{translate key="common.upload"}" class="btn btn-primary" /></div>
	</div>
</div>
<p>
{if $homeHeaderLogoImage[$formLocale]}
{translate key="common.fileName"}: {$homeHeaderLogoImage[$formLocale].name|escape} {$homeHeaderLogoImage[$formLocale].dateUploaded|date_format:$datetimeFormatShort} <input type="submit" name="deleteHomeHeaderLogoImage" value="{translate key="common.delete"}" class="btn btn-primary" />
</p>
<p>
<img src="{$publicFilesDir}/{$homeHeaderLogoImage[$formLocale].uploadName|escape:"url"}" width="{$homeHeaderLogoImage[$formLocale].width|escape}" height="{$homeHeaderLogoImage[$formLocale].height|escape}" style="border: 0;" alt="{translate key="common.homePageHeaderLogo.altText"}" />
</p>

<div class="form-horizontal">
	<div class="form-group">
		{fieldLabel name="homeHeaderLogoImageAltText" key="common.altText" class="col-sm-3 control-label"}
		<div class="col-sm-9"><input type="text" name="homeHeaderLogoImageAltText[{$formLocale|escape}]" value="{$homeHeaderLogoImageAltText[$formLocale]|escape}" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div>
		<td class="value"><span class="instruct">{translate key="common.altTextInstructions"}</span></td>
	</div>
</div>
{/if}
</div>

<div id="journalThumbnail">
<h4>{translate key="manager.setup.journalThumbnail"}</h4>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-2 control-label">{translate key="manager.setup.useThumbnail"}</div>
		<p><div class="col-sm-10"><input type="file" name="journalThumbnail" class="uploadField" /></p> <input type="submit" name="uploadJournalThumbnail" value="{translate key="common.upload"}" class="btn btn-primary" /></div>
	</div>
</div>
<p>
{if $journalThumbnail[$formLocale]}
{translate key="common.fileName"}: {$journalThumbnail[$formLocale].name|escape} {$journalThumbnail[$formLocale].dateUploaded|date_format:$datetimeFormatShort} <input type="submit" name="deleteJournalThumbnail" value="{translate key="common.delete"}" class="btn btn-primary" />
</p>
<img src="{$publicFilesDir}/{$journalThumbnail[$formLocale].uploadName|escape:"url"}" width="{$journalThumbnail[$formLocale].width|escape}" height="{$journalThumbnail[$formLocale].height|escape}" style="border: 0;" alt="{translate key="common.journalThumbnail.altText"}" />
<p>
<div class="form-horizontal">
	<div class="form-group">
		{fieldLabel name="journalThumbnailAltText" key="common.altText" class="col-sm-3 control-label"}
		<div class="col-sm-9"><input type="text" name="journalThumbnailAltText[{$formLocale|escape}]" value="{$journalThumbnailAltText[$formLocale]|escape}" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div>
		<div class="value"><span class="instruct">{translate key="common.altTextInstructions"}</span></div>
	</div>
</div>
</p>
{/if}
</div>
</div>
<hr>

<div id="journalHomepageContent">
<h3>5.2 {translate key="manager.setup.journalHomepageContent"}</h3>

<p>{translate key="manager.setup.journalHomepageContentDescription"}</p>
</div>

<div id="journalDescription">
<h4>{translate key="manager.setup.journalDescription"}</h4>

<p>{translate key="manager.setup.journalDescriptionDescription"}</p>
<div class="form-group journal-setup">
	<p><textarea id="description" name="description[{$formLocale|escape}]" rows="3" cols="60" class="form-control">{$description[$formLocale]|escape}</textarea></p>
</div>
</div>
<div id="homepageImage">
<h4>{translate key="manager.setup.homepageImage"}</h4>

<p>{translate key="manager.setup.homepageImageDescription"}</p>

<div width="100%" class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-3 control-label"><strong>{translate key="manager.setup.homepageImage"}</div></strong>
		<p><div class="col-sm-9"><input type="file" name="homepageImage" class="uploadField" /></p> <input type="submit" name="uploadHomepageImage" value="{translate key="common.upload"}" class="btn btn-primary" /></div>
	</div>
</div>

{if $homepageImage[$formLocale]}
{translate key="common.fileName"}: {$homepageImage[$formLocale].name|escape} {$homepageImage[$formLocale].dateUploaded|date_format:$datetimeFormatShort} <input type="submit" name="deleteHomepageImage" value="{translate key="common.delete"}" class="btn btn-primary" />
<br />
<img src="{$publicFilesDir}/{$homepageImage[$formLocale].uploadName|escape:"url"}" width="{$homepageImage[$formLocale].width|escape}" height="{$homepageImage[$formLocale].height|escape}" style="border: 0;" alt="{translate key="common.journalHomepageImage.altText"}" />
<br />
<div class="form-horizontal">
	<div class="form-group">
		{fieldLabel name="homepageImageAltText" key="common.altText" class="col-sm-2 control-label"}
		<div class="col-sm-10"><input type="text" name="homepageImageAltText[{$formLocale|escape}]" value="{$homepageImageAltText[$formLocale]|escape}" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div>
		<div class="value"><span class="instruct">{translate key="common.altTextInstructions"}</span></div>
	</div>
</div>
{/if}

<div id="currentIssue">
<h4>{translate key="manager.setup.currentIssue"}</h4>

<div class="form-group">
	<div class="col-sm-12 checkbox">
		<label for="displayCurrentIssue">
			<input type="checkbox" name="displayCurrentIssue" id="displayCurrentIssue" value="1" {if $displayCurrentIssue} checked="checked"{/if} /><strong>&nbsp;{translate key="manager.setup.displayCurrentIssue"}</strong>
		</label>
	</div>
</div>
</div>

<div id="additionalContent">
<h4>{translate key="manager.setup.additionalContent"}</h4>
<p>{translate key="manager.setup.additionalContentDescription"}</p>
<div class="form-group journal-setup">
	<p><textarea name="additionalHomeContent[{$formLocale|escape}]" id="additionalHomeContent" rows="12" cols="60" class="form-control">{$additionalHomeContent[$formLocale]|escape}</textarea></p>
</div>
</div>
</div>
<hr>

<div id="journalPageHeaderInfo">
<h3>5.3 {translate key="manager.setup.journalPageHeader"}</h3>

<p>{translate key="manager.setup.journalPageHeaderDescription"}</p>
<div id="pageHeaderTitle">
<h4>{translate key="manager.setup.journalTitle"}</h4>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-2"><input type="radio" name="pageHeaderTitleType[{$formLocale|escape}]" id="pageHeaderTitleType-0" value="0"{if not $pageHeaderTitleType[$formLocale]} checked="checked"{/if} /> {fieldLabel name="pageHeaderTitleType-0" key="manager.setup.useTextTitle"}</div>
		<div class="col-sm-10"><input type="text" name="pageHeaderTitle[{$formLocale|escape}]" value="{$pageHeaderTitle[$formLocale]|escape}" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div class="form-group">
		<div class="col-sm-2 control-label"><input type="radio" name="pageHeaderTitleType[{$formLocale|escape}]" id="pageHeaderTitleType-1" value="1"{if $pageHeaderTitleType[$formLocale]} checked="checked"{/if} /> {fieldLabel name="pageHeaderTitleType-1" key="manager.setup.useImageTitle"}</div>
		<p><div class="col-sm-10"><input type="file" name="pageHeaderTitleImage" class="uploadField" /> </p><input type="submit" name="uploadPageHeaderTitleImage" value="{translate key="common.upload"}" class="btn btn-primary" /></div>
	</div>
</div>
<p>
{if $pageHeaderTitleImage[$formLocale]}
{translate key="common.fileName"}: {$pageHeaderTitleImage[$formLocale].name|escape} {$pageHeaderTitleImage[$formLocale].dateUploaded|date_format:$datetimeFormatShort} <input type="submit" name="deletePageHeaderTitleImage" value="{translate key="common.delete"}" class="button" />
</p>
<img src="{$publicFilesDir}/{$pageHeaderTitleImage[$formLocale].uploadName|escape:"url"}" width="{$pageHeaderTitleImage[$formLocale].width|escape}" height="{$pageHeaderTitleImage[$formLocale].height|escape}" style="border: 0;" alt="{translate key="common.pageHeader.altText"}" />
<p>
<div class="form-horizontal">
	<div class="form-group">
		{fieldLabel name="pageHeaderTitleImageAltText" key="common.altText" class="col-sm-2 control-label"}
		<div class="col-sm-10"><input type="text" name="pageHeaderTitleImageAltText[{$formLocale|escape}]" value="{$pageHeaderTitleImageAltText[$formLocale]|escape}" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div class="form-group">
		<div class="value"><span class="instruct">{translate key="common.altTextInstructions"}</span></div>
	</div>
</div>
</p>
{/if}
</div>
<div id="journalLogo">
<h4>{translate key="manager.setup.journalLogo"}</h4>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-2 control-label"><strong>{translate key="manager.setup.useImageLogo"}</strong></div>
		<p><div class="col-sm-10"><input type="file" name="pageHeaderLogoImage" class="uploadField" /> </p><input type="submit" name="uploadPageHeaderLogoImage" value="{translate key="common.upload"}" class="btn btn-primary" /></div>
	</div>
</div>
<p>
{if $pageHeaderLogoImage[$formLocale]}
{translate key="common.fileName"}: {$pageHeaderLogoImage[$formLocale].name|escape} {$pageHeaderLogoImage[$formLocale].dateUploaded|date_format:$datetimeFormatShort} <input type="submit" name="deletePageHeaderLogoImage" value="{translate key="common.delete"}" class="btn btn-primary" />
</p>
<img src="{$publicFilesDir}/{$pageHeaderLogoImage[$formLocale].uploadName|escape:"url"}" width="{$pageHeaderLogoImage[$formLocale].width|escape}" height="{$pageHeaderLogoImage[$formLocale].height|escape}" style="border: 0;" alt="{translate key="common.pageHeaderLogo.altText"}" />
<p>
<div width="100%" class="form-horizontal">
	<div class="form-group">
		{fieldLabel name="pageHeaderLogoImageAltText" key="common.altText class="col-sm-2 control-label"}
		<div class="col-sm-10"><input type="text" name="pageHeaderLogoImageAltText[{$formLocale|escape}]" value="{$pageHeaderLogoImageAltText[$formLocale]|escape}" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div>
		<div class="value"><span class="instruct">{translate key="common.altTextInstructions"}</span></div>
	</div>
</div>
</p>
{/if}
</div>

<div id="journalFavicon">
<h4>{translate key="manager.setup.journalFavicon"}</h4>

<p>{translate key="manager.setup.journalFaviconDescription"}</p>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-2 control-label"><strong>{translate key="manager.setup.useImageLogo"}</strong></div>
		<p><div class="col-sm-10"><input type="file" name="journalFavicon" class="uploadField" /> </p><input type="submit" name="uploadJournalFavicon" value="{translate key="common.upload"}" class="btn btn-primary" /></div>
	</div>
</div>

{if $journalFavicon[$formLocale]}
{translate key="common.fileName"}: {$journalFavicon[$formLocale].name|escape} {$journalFavicon[$formLocale].dateUploaded|date_format:$datetimeFormatShort} <input type="submit" name="deleteJournalFavicon" value="{translate key="common.delete"}" class="btn btn-primary" />

<p>&nbsp;</p
<img src="{$publicFilesDir}/{$journalFavicon[$formLocale].uploadName|escape:"url"}" width="16px" height="16px" style="border: 0;" alt="favicon" />
{/if}
</div>

<div id="alternateHeader">
<h4>{translate key="manager.setup.alternateHeader"}</h4>

<p>{translate key="manager.setup.alternateHeaderDescription"}</p>
<div class="form-group journal-setup">
	<p><textarea name="journalPageHeader[{$formLocale|escape}]" id="journalPageHeader" rows="12" cols="60" class="form-control">{$journalPageHeader[$formLocale]|escape}</textarea></p>
</div>
</div>
</div>
<hr>

<div id="journalPageFooterInfo">
<h3>5.4 {translate key="manager.setup.journalPageFooter"}</h3>

<p>{translate key="manager.setup.journalPageFooterDescription"}</p>
<div class="form-group journal-setup">
	<p><textarea name="journalPageFooter[{$formLocale|escape}]" id="journalPageFooter" rows="12" cols="60" class="form-control">{$journalPageFooter[$formLocale]|escape}</textarea></p>
</div>
</div>

<hr>

<div id="navigationBar">
<h3>5.5 {translate key="manager.setup.navigationBar"}</h3>

<p>{translate key="manager.setup.itemsDescription"}</p>





<div class="form-horizontal">
{foreach name=navItems from=$navItems[$formLocale] key=navItemId item=navItem}
	<div class="form-group">
		{fieldLabel name="navItems-$navItemId-name" key="manager.setup.labelName" class="col-sm-2 control-label"}
			<div class="col-sm-10"><input type="text" name="navItems[{$formLocale|escape}][{$navItemId|escape}][name]" id="navItems-{$navItemId|escape}-name" value="{$navItem.name|escape}" size="30" maxlength="90" class="form-control" /></div><br></br> <div class="col-md-offset-2 col-sm-10"><input type="submit" name="delNavItem[{$navItemId|escape}]" value="{translate key="common.delete"}" class="btn btn-primary" /></div>
			<div class="form-group">
				<div class="col-sm-10 col-md-offset-2 checkbox">
					<label for="navItems-{$navItemId|escape}-isLiteral">
						<input type="checkbox" name="navItems[{$formLocale|escape}][{$navItemId|escape}][isLiteral]" id="navItems-{$navItemId|escape}-isLiteral" value="1"{if $navItem.isLiteral} checked="checked"{/if} /><strong>&nbsp;{translate key="manager.setup.navItemIsLiteral"}</strong>
					</label>
				</div>
			</div>
	</div>


	<div class="form-group">
		{fieldLabel name="navItems-$navItemId-url" key="common.url" class="col-sm-2 control-label"}
			<div class="col-sm-10">
				<input type="text" name="navItems[{$formLocale|escape}][{$navItemId|escape}][url]" id="navItems-{$navItemId|escape}-url" value="{$navItem.url|escape}" size="60" maxlength="255" class="form-control" /> </div>		
			<div class="form-group">
				<div class="col-sm-10 col-md-offset-2 checkbox">
					<label for="navItems-{$navItemId|escape}-isAbsolute">
						<input type="checkbox" name="navItems[{$formLocale|escape}][{$navItemId|escape}][isAbsolute]" id="navItems-{$navItemId|escape}-isAbsolute" value="1"{if $navItem.isAbsolute} checked="checked"{/if} /><strong>{translate key="manager.setup.navItemIsAbsolute"}</strong>
					</label>
				</div>
			</div>
	</div>

	{if !$smarty.foreach.navItems.last}
	<div>
		&nbsp;
	</div>
	{/if}
{foreachelse}



	<div class="form-group">
		{fieldLabel name="navItems-0-name" key="manager.setup.labelName class="col-sm-2 control-label"}
		<div class="col-sm-10">
			<input type="text" name="navItems[{$formLocale|escape}][0][name]" id="navItems-0-name" size="30" maxlength="90" class="form-control" />
		</div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2 checkbox">
				<label for="navItems-0-isLiteral">
					<input type="checkbox" name="navItems[{$formLocale|escape}][0][isLiteral]" id="navItems-0-isLiteral" value="1" /><strong>{translate key="manager.setup.navItemIsLiteral"}</strong>
				</label>
			</div>
		</div>
	</div>



	<div class="form-group">
		{fieldLabel name="navItems-0-url" key="common.url" class="col-sm-2 control-label"}
		<div class="col-sm-10">
			<input type="text" name="navItems[{$formLocale|escape}][0][url]" id="navItems-0-url" size="60" maxlength="255" class="form-control" />
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2 checkbox">
				<label for="navItems-0-isAbsolute">
					<input type="checkbox" name="navItems[{$formLocale|escape}][0][isAbsolute]" id="navItems-0-isAbsolute" value="1" /><strong>{translate key="manager.setup.navItemIsAbsolute"}</strong>
				</label>
			</div>
		</div>
	</div>
{/foreach}
</div>

<p><input type="submit" name="addNavItem" value="{translate key="manager.setup.addNavItem"}" class="btn btn-primary" /></p>
</div>

<hr>

<div id="journalLayout">
<h3>5.6 {translate key="manager.setup.journalLayout"}</h3>

<p>{translate key="manager.setup.journalLayoutDescription"}</p>

<div class="form-horizontal">
<div class="form-group">
	<div class="col-sm-3 control-label"><label for="journalTheme">{translate key="manager.setup.journalTheme"}</label></div>
		<div class="col-sm-8">
			<select name="journalTheme" class="form-control" id="journalTheme"{if empty($journalThemes)} disabled="disabled"{/if}>
				<option value="">{translate key="common.none"}</option>
				{foreach from=$journalThemes key=path item=journalThemePlugin}
					<option value="{$path|escape}"{if $path == $journalTheme} selected="selected"{/if}>{$journalThemePlugin->getDisplayName()|escape}</option>
				{/foreach}
			</select>
		</div>
		
</div>
<div>
	<div class="col-sm-3 control-label"><label for="journalStyleSheet">{translate key="manager.setup.useJournalStyleSheet"}</label></div>
	<p><div class="col-sm-9"><input type="file" name="journalStyleSheet" id="journalStyleSheet" class="uploadField" /> </p><input type="submit" name="uploadJournalStyleSheet" value="{translate key="common.upload"}" class="btn btn-primary" /></div>
</div>
</div>

<p><br></br><br></br></p>

{if $journalStyleSheet}
{translate key="common.fileName"}: <a href="{$publicFilesDir}/{$journalStyleSheet.uploadName|escape:"url"}" class="file">{$journalStyleSheet.name|escape}</a> {$journalStyleSheet.dateUploaded|date_format:$datetimeFormatShort} <input type="submit" name="deleteJournalStyleSheet" value="{translate key="common.delete"}" class="btn btn-primary" />
{/if}

<table id="assignBlocksToSidebars" border="0" align="center" style="width: 100%;">
	<tr align="center">
		<td rowspan="2" id="assignBlocksToSidebarLeft" style="with: 30%;" class="text-success">
			{translate key="manager.setup.layout.leftSidebar"}<br/>
			<input class="btn btn-success" style="width: 100%;" type="button" value="&uarr;" onclick="moveUp(this.form.elements['blockSelectLeftWidget']);" /><br/>
			<select name="blockSelectLeftWidget" multiple="multiple" size="10" class="form-control" style="width: 100%; height:200px">
				{foreach from=$leftBlockPlugins item=block}
					<option value="{$block->getName()|escape}">{$block->getDisplayName()|escape}</option>
				{foreachelse}
					<option value=""></option>
				{/foreach}
			</select><br/>
			<input class="btn btn-success" style="width: 100%;" type="button" value="&darr;" onclick="moveDown(this.form.elements['blockSelectLeftWidget']);" />
		</td>
		<td>
			<input class="btn btn-info" style="width: 100%;" type="button" value="&larr;" onclick="jumpList(this.form.elements['blockUnselectedWidget'],this.form.elements['blockSelectLeftWidget']);" /><br/>
			<input class="btn btn-info" style="width: 100%;" type="button" value="&rarr;" onclick="jumpList(this.form.elements['blockSelectLeftWidget'],this.form.elements['blockUnselectedWidget']);" />
		</td>
		<td valign="top" id="assignBlocksToSidebarUnselected" style="width: 30%;" class="text-success">
			{translate key="manager.setup.layout.unselected"}<br/>
			<select name="blockUnselectedWidget" multiple="multiple" size="10" class="form-control" style="width: 100%; height:180px;" >
				{foreach from=$disabledBlockPlugins item=block}
					<option value="{$block->getName()|escape}">{$block->getDisplayName()|escape}</option>
				{foreachelse}
					<option value=""></option>
				{/foreach}
			</select>
		</td>
		<td>
			<input class="btn btn-info" style="width: 100%;" type="button" value="&larr;" onclick="jumpList(this.form.elements['blockSelectRightWidget'],this.form.elements['blockUnselectedWidget']);" /><br/>
			<input class="btn btn-info" style="width: 100%;" type="button" value="&rarr;" onclick="jumpList(this.form.elements['blockUnselectedWidget'],this.form.elements['blockSelectRightWidget']);" />
		</td>
		<td rowspan="2" id="assignBlocksToSidebarRight" style="width: 30%;" class="text-success">
			{translate key="manager.setup.layout.rightSidebar"}<br/>
			<input class="btn btn-success" style="width: 100%;" type="button" value="&uarr;" onclick="moveUp(this.form.elements['blockSelectRightWidget']);" /><br/>
			<select name="blockSelectRightWidget" multiple="multiple" size="10" class="form-control" style="width: 100%; height:200px" >
				{foreach from=$rightBlockPlugins item=block}
					<option value="{$block->getName()|escape}">{$block->getDisplayName()|escape}</option>
				{foreachelse}
					<option value=""></option>
				{/foreach}
			</select><br/>
			<input class="btn btn-success" style="width: 100%;" type="button" value="&darr;" onclick="moveDown(this.form.elements['blockSelectRightWidget']);" />
		</td>
	</tr>
	<tr align="center">
		<td colspan="3" valign="top" height="60px">
			<input class="btn btn-info" style="width: 100%;" type="button" value="&larr;" onclick="jumpList(this.form.elements['blockSelectRightWidget'],this.form.elements['blockSelectLeftWidget']);" /><br/>
			<input class="btn btn-info" style="width: 100%;" type="button" value="&rarr;" onclick="jumpList(this.form.elements['blockSelectLeftWidget'],this.form.elements['blockSelectRightWidget']);" />
		</td>
	</tr>
</table>
<input type="hidden" name="blockSelectLeft" value="" />
<input type="hidden" name="blockSelectRight" value="" />
<input type="hidden" name="blockUnselected" value="" />
</div>
<hr>
<div id="setupInfo">
<h3>5.7 {translate key="manager.setup.information"}</h3>

<p>{translate key="manager.setup.information.description"}</p>

<div id="infoForReaders"><h4>{translate key="manager.setup.information.forReaders"}</h4>
<div class="form-group journal-setup">
	<p><textarea name="readerInformation[{$formLocale|escape}]" id="readerInformation" rows="12" cols="60" class="form-control">{$readerInformation[$formLocale]|escape}</textarea></p></div>
</div>
<div id="infoForAuth"><h4>{translate key="manager.setup.information.forAuthors"}</h4>
<div class="form-group journal-setup">
	<p><textarea name="authorInformation[{$formLocale|escape}]" id="authorInformation" rows="12" cols="60" class="form-control">{$authorInformation[$formLocale]|escape}</textarea></p></div>
</div>
<div id="infoForLibs"><h4>{translate key="manager.setup.information.forLibrarians"}</h4>
<div class="form-group journal-setup">
	<p><textarea name="librarianInformation[{$formLocale|escape}]" id="librarianInformation" rows="12" cols="60" class="form-control">{$librarianInformation[$formLocale]|escape}</textarea></p></div>
</div>
</div>

<hr>

<div id="lists">
<h3>5.8 {translate key="manager.setup.lists"}</h3>
<p>{translate key="manager.setup.listsDescription"}</p>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-3 control-label"><strong>{translate key="manager.setup.itemsPerPage"}</strong></div>
		<p><div class="col-sm-6"><input type="text" size="3" name="itemsPerPage" class="form-control" value="{$itemsPerPage|escape}" /></div>
	</div>
	<div class="form-group">
		<div class="col-sm-3 control-label"><strong>{translate key="manager.setup.numPageLinks"}</strong></div>
		<p><div class="col-sm-6"><input type="text" size="3" name="numPageLinks" class="form-control" value="{$numPageLinks|escape}" /></div>
	</div>
</div>

</div>

<p class="alert alert-info mt-20"><span class="formRequired"><i class="glyphicon glyphicon-exclamation-sign"></i>&nbsp;&nbsp;&nbsp;{translate key="common.requiredField"}</span></p>

<hr>

<p><input type="submit" onclick="prepBlockFields()" value="{translate key="common.saveAndContinue"}" class="btn btn-primary" /> <input type="button" value="{translate key="common.cancel"}" class="btn btn-primary btn-warning" onclick="document.location.href='{url op="setup" escape=false}'" /></p>



</form> <!-- end form -->

{include file="common/footer.tpl"}
