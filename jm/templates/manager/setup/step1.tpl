{**
 * templates/manager/setup/step1.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Step 1 of journal setup.
 *
 *}
 {assign var="pageTitle" value="manager.setup.gettingDownTheDetails"}
 {include file="manager/setup/setupHeader.tpl"}

 <form id="setupForm" method="post" action="{url op="saveSetup" path="1"}" class="form">
 	{include file="common/formErrors.tpl"}

 	{if count($formLocales) > 1}
 	<div id="locales" class="form-group">

 		{fieldLabel name="formLocale" key="form.formLanguage" class="col-sm-2 control-label"}
 		<div width="80%" class="col-sm-10">
 			{url|assign:"setupFormUrl" op="setup" path="1" escape=false}
 			{form_language_chooser form="setupForm" url=$setupFormUrl}
 			<span class="instruct">{translate key="form.formLanguage.description"}</span>
 		</div>
 	</div>
 	{/if}

 	<div id="generalInformation">
 		<h3>1.1 {translate key="manager.setup.generalInformation"}</h3>

 		<div class="form-horizontal">
 			<div class="form-group">
 				{fieldLabel name="title" required="true" key="manager.setup.journalTitle" class="col-sm-2 control-label"}
 				<div class="col-sm-10"><input type="text" name="title[{$formLocale|escape}]" id="title" value="{$title[$formLocale]|escape}" size="40" maxlength="120" class="form-control"></div>
 			</div>
 			<div class="form-group">
 				<td width="20%" class="label">{fieldLabel name="initials" required="true" key="manager.setup.journalInitials" class="col-sm-2 control-label"}</td>
 				<div class="col-sm-10"><input type="text" name="initials[{$formLocale|escape}]" id="initials" value="{$initials[$formLocale]|escape}" size="8" maxlength="16" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="abbreviation" key="manager.setup.journalAbbreviation" class="col-sm-2 control-label"}
 				<div class="col-sm-10"><input type="text" name="abbreviation[{$formLocale|escape}]" id="abbreviation" value="{$abbreviation[$formLocale]|escape}" size="40" maxlength="120" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="printIssn" key="manager.setup.printIssn" class="control-label col-sm-2"}
 				<div class="col-sm-10"><input type="text" name="printIssn" id="printIssn" value="{$printIssn|escape}" size="8" maxlength="16" class="form-control" /></div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="onlineIssn" key="manager.setup.onlineIssn" class="col-sm-2 conrol-label"}
 				<div class="col-sm-10">
 					<input type="text" name="onlineIssn" id="onlineIssn" value="{$onlineIssn|escape}" size="8" maxlength="16" class="form-control" />
 					
 					<small class="instruct">{translate key="manager.setup.issnDescription"}</small>
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="mailingAddress" key="common.mailingAddress" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					<textarea name="mailingAddress" id="mailingAddress" rows="3" cols="40" class="form-control">{$mailingAddress|escape}</textarea>
 					
 					<small class="instruct">{translate key="manager.setup.mailingAddressDescription"}</small>
 				</div>
 			</div>
 			{if $categoriesEnabled}
 			<div class="form-group">
 				{fieldLabel name=categories key="manager.setup.categories" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					<select id="categories" name="categories[]" class="form-control" multiple="multiple">
 						{html_options options=$allCategories selected=$categories}
 					</select>
 					<br/>
 					{translate key="manager.setup.categories.description"}
 				</div>
 			</div>
 			{/if}{* $categoriesEnabled *}
 		</div> {* <!--.form-horizontal--> *}

 	</div>

 	<hr>

 	<div id="principalContact">
 		<h3>1.2 {translate key="manager.setup.principalContact"}</h3>

 		<p>{translate key="manager.setup.principalContactDescription"}</p>



 		<div class="form-horizontal">
 			<div class="form-group">
 				{fieldLabel name="contactName" key="user.name" required="true" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					<input type="text" name="contactName" id="contactName" value="{$contactName|escape}" size="30" maxlength="60" class="form-control">
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="contactTitle" key="user.title" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					<input type="text" name="contactTitle[{$formLocale|escape}]" id="contactTitle" value="{$contactTitle[$formLocale]|escape}" size="30" maxlength="90" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="contactAffiliation" key="user.affiliation" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<textarea name="contactAffiliation[{$formLocale|escape}]" id="contactAffiliation" rows="5" cols="40" class="form-control">{$contactAffiliation[$formLocale]|escape}</textarea>
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="contactEmail" key="user.email" required="true" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="contactEmail" id="contactEmail" value="{$contactEmail|escape}" size="30" maxlength="90" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="contactPhone" key="user.phone" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="contactPhone" id="contactPhone" value="{$contactPhone|escape}" size="15" maxlength="24" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="contactFax" key="user.fax" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="contactFax" id="contactFax" value="{$contactFax|escape}" size="15" maxlength="24" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="contactMailingAddress" key="common.mailingAddress" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					<textarea name="contactMailingAddress[{$formLocale|escape}]" id="contactMailingAddress" rows="3" cols="40" class="form-control">{$contactMailingAddress[$formLocale]|escape}</textarea>
 				</div>
 			</div>
 		</div> {*<!--.form-horizontal-->*}

 	</div>

 	<hr>

 	<div id="technicalSupportContact">
 		<h3>1.3 {translate key="manager.setup.technicalSupportContact"}</h3>

 		<p>{translate key="manager.setup.technicalSupportContactDescription"}</p>


 		<div class="form-horizontal">
 			<div class="form-group">
 				{fieldLabel name="supportName" key="user.name" required="true" class="col-sm-2 control-label"}
 				<div class="col-sm-10"><input type="text" name="supportName" id="supportName" value="{$supportName|escape}" size="30" maxlength="60" class="form-control" /></div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="supportEmail" key="user.email" required="true" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="supportEmail" id="supportEmail" value="{$supportEmail|escape}" size="30" maxlength="90" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="supportPhone" key="user.phone" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					<input type="text" name="supportPhone" id="supportPhone" value="{$supportPhone|escape}" size="15" maxlength="24" class="form-control" />
 				</div>
 			</div>
 		</div> {*<!--.form-horizontal-->*}

 	</div>

 	<hr>

 	<div id="setupEmails">
 		<h3>1.4 {translate key="manager.setup.emails"}</h3>

 		<div class="form-horizontal">
 			<p>{translate key="manager.setup.emailHeaderDescription"}</p>
 			<div class="form-group">
 				{fieldLabel name="emailHeader" key="manager.setup.emailHeader" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<textarea name="emailHeader" id="emailHeader" rows="3" cols="60" class="form-control">{$emailHeader|escape}</textarea>
 				</div>
 			</div>
 			
 			<p>{translate key="manager.setup.emailSignatureDescription"}</p>

 			<div class="form-group">
 				{fieldLabel name="emailSignature" key="manager.setup.emailSignature" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<textarea name="emailSignature" id="emailSignature" rows="3" cols="60" class="form-control">{$emailSignature|escape}</textarea>
 				</div>
 			</div>

 			<p>{translate key="manager.setup.emailBounceAddressDescription"}</p>
 			<div class="form-group">
 				{fieldLabel name="envelopeSender" key="manager.setup.emailBounceAddress" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="envelopeSender" id="envelopeSender" size="40" maxlength="255" class="form-control" {if !$envelopeSenderEnabled}disabled="disabled" value=""{else}value="{$envelopeSender|escape}"{/if} />
 					{if !$envelopeSenderEnabled}
 					<br />
 					<div class="alert alert-info">
 						<small>{translate key="manager.setup.emailBounceAddressDisabled"}</small>
 					</div>
 					{/if}
 				</div>
 			</div>
 		</div> {*<!--.form-horizontal-->*}

 	</div>

 	<hr>

 	<div id="setupPublisher">
 		<h3>1.5 {translate key="manager.setup.publisher"}</h3>

 		<p>{translate key="manager.setup.publisherDescription"}</p>

 		<div class="form-horizontal">
 			<div class="form-group">
 				{fieldLabel name="publisherNote" key="manager.setup.note" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<textarea name="publisherNote[{$formLocale|escape}]" id="publisherNote" rows="5" cols="40" class="form-control">{$publisherNote[$formLocale]|escape}</textarea>
 					<small class="instruct">{translate key="manager.setup.publisherNoteDescription"}</small>
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="publisherInstitution" key="manager.setup.institution" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="publisherInstitution" id="publisherInstitution" value="{$publisherInstitution|escape}" size="40" maxlength="90" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="publisherUrl" key="common.url" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="publisherUrl" id="publisherUrl" value="{$publisherUrl|escape}" size="40" maxlength="255" class="form-control">
 				</div>
 			</div>
 		</div> {*<!--.form-horizontal-->*}

 	</div>

 	<hr>

 	<div id="sponsors">
 		<h3>1.6 {translate key="manager.setup.sponsors"}</h3>

 		<p>{translate key="manager.setup.sponsorsDescription"}</p>

 		<div class="form-horizontal">
 			<div class="form-group">
 				{fieldLabel name="sponsorNote" key="manager.setup.note" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<textarea name="sponsorNote[{$formLocale|escape}]" id="sponsorNote" rows="5" cols="40" class="form-control">{$sponsorNote[$formLocale]|escape}</textarea>
 					
 					<small>{translate key="manager.setup.sponsorNoteDescription"}</small>
 				</div>
 			</div>
 			{foreach name=sponsors from=$sponsors key=sponsorId item=sponsor}
 			<div class="form-group">
 				{fieldLabel name="sponsors-$sponsorId-institution" key="manager.setup.institution" class="col-sm-2 control-label"}		
 				<div width="80%" class="value">
 					<input type="text" name="sponsors[{$sponsorId|escape}][institution]" id="sponsors-{$sponsorId|escape}-institution" value="{$sponsor.institution|escape}" size="40" maxlength="90" class="form-control" />
 					{if $smarty.foreach.sponsors.total > 1} 
 					<input type="submit" name="delSponsor[{$sponsorId|escape}]" value="{translate key="common.delete"}" class="btn btn-primary" />
 					{/if}
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="sponsors-$sponsorId-url" key="common.url" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="sponsors[{$sponsorId|escape}][url]" id="sponsors-{$sponsorId|escape}-url" value="{$sponsor.url|escape}" size="40" maxlength="255" class="form-control">
 				</div>
 			</div>
 			{if !$smarty.foreach.sponsors.last}
 			<hr>
 			{/if}
 			{foreachelse}
 			<div class="form-group">
 				{fieldLabel name="sponsors-0-institution" key="manager.setup.institution" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="sponsors[0][institution]" id="sponsors-0-institution" size="40" maxlength="90" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="sponsors-0-url" key="common.url" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					<input type="text" name="sponsors[0][url]" id="sponsors-0-url" size="40" maxlength="255" class="form-control">
 				</div>
 			</div>
 			{/foreach}
 		</div> {*<!--.form-horizontal-->*}

 		<p><input type="submit" name="addSponsor" value="{translate key="manager.setup.addSponsor"}" class="btn btn-primary" /></p>
 	</div>

 	<hr>

 	<div id="contributors">
 		<h3>1.7 {translate key="manager.setup.contributors"}</h3>

 		<p>{translate key="manager.setup.contributorsDescription"}</p>


 		<div class="form-horizontal">
 			<div class="form-group">
 				{fieldLabel name="contributorNote" key="manager.setup.note" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					<textarea name="contributorNote[{$formLocale|escape}]" id="contributorNote" rows="5" cols="40" class="form-control">{$contributorNote[$formLocale]|escape}</textarea>
 					
 					<small>{translate key="manager.setup.contributorNoteDescription"}</small>
 				</div>
 			</div>
 			{foreach name=contributors from=$contributors key=contributorId item=contributor}
 			<div class="form-group">
 				{fieldLabel name="contributors-$contributorId-name" key="manager.setup.contributor" class="col-sm-2 control-label"}
 				<div class="col-sm-10"><input type="text" name="contributors[{$contributorId|escape}][name]" id="contributors-{$contributorId|escape}-name" value="{$contributor.name|escape}" size="40" maxlength="90" class="form-control" />{if $smarty.foreach.contributors.total > 1} 
 					<input type="submit" name="delContributor[{$contributorId|escape}]" value="{translate key="common.delete"}" class="btn btn-danger" />
 					{/if}
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="contributors-$contributorId-url" key="common.url" class="col-sm-2 control-label"}
 				<div class="col-sm-10"><input type="text" name="contributors[{$contributorId|escape}][url]" id="contributors-{$contributorId|escape}-url" value="{$contributor.url|escape}" size="40" maxlength="255" class="form-control" /></div>
 			</div>
 			{if !$smarty.foreach.contributors.last}
 			
 			<hr>

 			{/if}
 			{foreachelse}
 			<div class="form-group">
 				{fieldLabel name="contributors-0-name" key="manager.setup.contributor" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="contributors[0][name]" id="contributors-0-name" size="40" maxlength="90" class="form-control">
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="contributors-0-url" key="common.url" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="contributors[0][url]" id="contributors-0-url" size="40" maxlength="255" class="form-control" />
 				</div>
 			</div>
 			{/foreach}

 		</div> {*<!--.form-horizontal-->*}


 		<p><input type="submit" name="addContributor" value="{translate key="manager.setup.addContributor"}" class="btn btn-primary" /></p>
 	</div>

 	<hr>

 	<div id="searchEngineIndexing">
 		<h3>1.8 {translate key="manager.setup.searchEngineIndexing"}</h3>

 		<p>{translate key="manager.setup.searchEngineIndexingDescription"}</p>

 		<div class="form-horizontal">
 			<div class="form-group">
 				{fieldLabel name="searchDescription" key="common.description" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="searchDescription[{$formLocale|escape}]" id="searchDescription" value="{$searchDescription[$formLocale]|escape}" size="40" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="searchKeywords" key="common.keywords" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					<input type="text" name="searchKeywords[{$formLocale|escape}]" id="searchKeywords" value="{$searchKeywords[$formLocale]|escape}" size="40" class="form-control" />
 				</div>
 			</div>
 			<div class="form-group">
 				{fieldLabel name="customHeaders" key="manager.setup.customTags" class="control-label col-sm-2"}
 				<div class="col-sm-10">
 					<textarea name="customHeaders[{$formLocale|escape}]" id="customHeaders" rows="3" cols="40" class="form-control">{$customHeaders[$formLocale]|escape}</textarea>
 					
 					<small class="instruct">{translate key="manager.setup.customTagsDescription"}</small>
 				</div>
 			</div>
 		</div> {*<!--.form-horizontal-->*}
 	</div>

 	<hr>


 	<h3>1.9 {translate key="manager.setup.history"}</h3>

 	<p>{translate key="manager.setup.historyDescription"}</p>

 	<div class="form-horizontal">
 		<div class="form-group">
 			{fieldLabel name="history" key="manager.setup.history" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<textarea name="history[{$formLocale|escape}]" id="history" rows="5" cols="40" class="form-control">{$history[$formLocale]|escape}</textarea>
 			</div>
 		</div>
 	</div> {*<!-- .form-horizontal-->*} 

 	<hr>

 	<p><input type="submit" value="{translate key="common.saveAndContinue"}" class="btn btn-primary" /> <input type="button" value="{translate key="common.cancel"}" class="btn btn-warning" onclick="document.location.href='{url op="setup" escape=false}'" /></p>

 	<p><span class="formRequired">{translate key="common.requiredField"}</span></p>

 </form>

 {include file="common/footer.tpl"}

