{**
 * templates/manager/setup/step2.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Step 2 of journal setup.
 *
 *}
 {assign var="pageTitle" value="manager.setup.journalPolicies"}
 {include file="manager/setup/setupHeader.tpl"}

 <form id="setupForm" method="post" action="{url op="saveSetup" path="2"}">
 	{include file="common/formErrors.tpl"}

 	{if count($formLocales) > 1}
 	<div id="locales" class="form-horizontal">
 		<div class="form-group">
 			{fieldLabel name="formLocale" key="form.formLanguage" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				{url|assign:"setupFormUrl" op="setup" path="2" escape=false}
 				{form_language_chooser form="setupForm" url=$setupFormUrl}
 				<div class="alert alert-info">
 					<small class="instruct"> {translate key="form.formLanguage.description"}</small>
 				</div>
 			</div>
 		</div>
 	</div>
 	{/if}
 	<div id="focusAndScopeDescription" class="journal-setup">
 		<h3>2.1 {translate key="manager.setup.focusAndScopeOfJournal"}</h3>
 		<textarea name="focusScopeDesc[{$formLocale|escape}]" id="focusScopeDesc" rows="12" cols="60" class="form-control">{$focusScopeDesc[$formLocale]|escape}</textarea>
 	</div>

 	<hr>

 	<div id="peerReviewPolicy" class="journal-setup">
 		<h3>2.2 {translate key="manager.setup.peerReviewPolicy"}</h3>
 		<div id="peerReviewDescription">
 			<p>{translate key="manager.setup.peerReviewDescription"}</p>

 			<h4>{translate key="manager.setup.reviewPolicy"}</h4>

 			<textarea name="reviewPolicy[{$formLocale|escape}]" id="reviewPolicy" rows="12" cols="60" class="form-control">{$reviewPolicy[$formLocale]|escape}</textarea>

 		</div>
 		<div id="reviewGuidelinesInfo" class="journal-setup">

 			<h4>{translate key="manager.setup.reviewGuidelines"}</h4>

 			{url|assign:"reviewFormsUrl" op="reviewForms"}
 			<p>{translate key="manager.setup.reviewGuidelinesDescription" reviewFormsUrl=$reviewFormsUrl}</p>

 			<textarea name="reviewGuidelines[{$formLocale|escape}]" id="reviewGuidelines" rows="12" cols="60" class="form-control">{$reviewGuidelines[$formLocale]|escape}</textarea>
 		</div>

 		<div id="reviewProcess" class="journal-setup">
 			<h4>{translate key="manager.setup.reviewProcess"}</h4>

 			<p>{translate key="manager.setup.reviewProcessDescription"}</p>

 			<div class="form-group">
 				<div class="radio">

 					<label for="mailSubmissionsToReviewers-0">
 						<input type="radio" name="mailSubmissionsToReviewers" id="mailSubmissionsToReviewers-0" value="0"{if not $mailSubmissionsToReviewers} checked="checked"{/if} />
 						<p><strong>{translate key="manager.setup.reviewProcessStandard"}</strong></p>
 						<div class="alert alert-info">
 							<small class="instruct">{translate key="manager.setup.reviewProcessStandardDescription"}</small>
 						</div>
 					</label>	

 				</div>

 				<hr>

 				<div class="radio">
 					<label for="mailSubmissionsToReviewers-1">
 						<input type="radio" name="mailSubmissionsToReviewers" id="mailSubmissionsToReviewers-1" value="1"{if $mailSubmissionsToReviewers} checked="checked"{/if} />
 						<p><strong>{translate key="manager.setup.reviewProcessEmail"}</strong></p>
 						<div class="alert alert-info">
 							<small class="instruct">{translate key="manager.setup.reviewProcessEmailDescription"}</small>
 						</div>
 					</label>
 				</div>
 			</div> {**<!--.form-group-->**}

 		</div>

 		<div id="reviewOptions">

 			<h4>{translate key="manager.setup.reviewOptions"}</h4>

 			<script type="text/javascript">
 				{literal}
 				<!--
 				function toggleAllowSetInviteReminder(form) {
 					form.numDaysBeforeInviteReminder.disabled = !form.numDaysBeforeInviteReminder.disabled;
 				}
 				function toggleAllowSetSubmitReminder(form) {
 					form.numDaysBeforeSubmitReminder.disabled = !form.numDaysBeforeSubmitReminder.disabled;
 				}
				// -->
				{/literal}
			</script>

			<div class="form-inline">
				<p><strong>{translate key="manager.setup.reviewOptions.reviewTime"}</strong></p>
				<div class="form-group">
					<span>{translate key="manager.setup.reviewOptions.numWeeksPerReview"}: </span><input type="text" name="numWeeksPerReview" id="numWeeksPerReview" value="{$numWeeksPerReview|escape}" size="2" maxlength="8" class="form-control" /> {translate key="common.weeks"}

					<p>
						<small>
							<strong>{translate key="common.note"}</strong>: {translate key="manager.setup.reviewOptions.noteOnModification"}
						</small>
					</p>
				</div>
			</div> <!--.form-inline-->

			
			<div class="form-inline">
				<div class="checkbox {if !$scheduledTasksEnabled} disabled{/if}">
					<label for="remindForInvite">
						<input type="checkbox" name="remindForInvite" id="remindForInvite" value="1" onclick="toggleAllowSetInviteReminder(this.form)"{if !$scheduledTasksEnabled} disabled="disabled" {elseif $remindForInvite} checked="checked"{/if} class="form-control">&nbsp;
						<strong>{translate key="manager.setup.reviewOptions.remindForInvite1"}</strong>
					</label>
				</div>

				<select name="numDaysBeforeInviteReminder" size="1" class="form-control"{if not $remindForInvite || !$scheduledTasksEnabled} disabled="disabled"{/if}>
					{section name="inviteDayOptions" start=3 loop=11}
					<option value="{$smarty.section.inviteDayOptions.index}"{if $numDaysBeforeInviteReminder eq $smarty.section.inviteDayOptions.index or ($smarty.section.inviteDayOptions.index eq 5 and not $remindForInvite)} selected="selected"{/if}>{$smarty.section.inviteDayOptions.index}</option>
					{/section}
				</select>
				<span>{translate key="manager.setup.reviewOptions.remindForInvite2"}</span>

			</div> {*.form-inline*}

			<div class="form-inline">
				<div class="checkbox {if !$scheduledTasksEnabled} disabled{/if}">
					<label for="remindForSubmit">
						<input type="checkbox" name="remindForSubmit" id="remindForSubmit" value="1" onclick="toggleAllowSetSubmitReminder(this.form)"{if !$scheduledTasksEnabled} disabled="disabled"{elseif $remindForSubmit} checked="checked"{/if} class="form-control" />&nbsp;
						<strong>{translate key="manager.setup.reviewOptions.remindForSubmit1"}</strong>
					</label>
				</div>

				<select name="numDaysBeforeSubmitReminder" size="1" class="form-control"{if not $remindForSubmit || !$scheduledTasksEnabled} disabled="disabled"{/if}>
					{section name="submitDayOptions" start=0 loop=11}
					<option value="{$smarty.section.submitDayOptions.index}"{if $numDaysBeforeSubmitReminder eq $smarty.section.submitDayOptions.index} selected="selected"{/if}>{$smarty.section.submitDayOptions.index}</option>
					{/section}
				</select>
				{translate key="manager.setup.reviewOptions.remindForSubmit2"}
			</div> {*.form-inline*}
			{if !$scheduledTasksEnabled}
			<br/>
			<small>{translate key="manager.setup.reviewOptions.automatedRemindersDisabled"}</small>
			{/if}

			<br/>
			<div>
				<strong>{translate key="manager.setup.reviewOptions.reviewerRatings"}</strong><br/>
				<div class="checkbox">
					<label for="rateReviewerOnQuality">
						<input type="checkbox" name="rateReviewerOnQuality" id="rateReviewerOnQuality" value="1"{if $rateReviewerOnQuality} checked="checked"{/if}>&nbsp;
						{translate key="manager.setup.reviewOptions.onQuality"}
					</label>
				</div>
			</div>
			

			<div>
				<strong>{translate key="manager.setup.reviewOptions.reviewerAccess"}</strong><br/>
				<div class="checkbox">
					<label for="reviewerAccessKeysEnabled">
						<input type="checkbox" name="reviewerAccessKeysEnabled" id="reviewerAccessKeysEnabled" value="1"{if $reviewerAccessKeysEnabled} checked="checked"{/if} />&nbsp;
						{translate key="manager.setup.reviewOptions.reviewerAccessKeysEnabled"}</label>
					</div>
					<br/>
					<div class="alert alert-info">
						<small class="instruct"> {translate key="manager.setup.reviewOptions.reviewerAccessKeysEnabled.description"}</small>
					</div>
					<br/>
					<div class="checkbox">
						<label for="restrictReviewerFileAccess">
							<input type="checkbox" name="restrictReviewerFileAccess" id="restrictReviewerFileAccess" value="1"{if $restrictReviewerFileAccess} checked="checked"{/if} />&nbsp;
							{translate key="manager.setup.reviewOptions.restrictReviewerFileAccess"}</label>
						</div>
					</div>

					<div>
						<strong>{translate key="manager.setup.reviewOptions.blindReview"}</strong>
						<br/>
						<div class="checkbox">
							<label for="showEnsuringLink">
								<input type="checkbox" name="showEnsuringLink" id="showEnsuringLink" value="1"{if $showEnsuringLink} checked="checked"{/if} />&nbsp;
								{get_help_id|assign:"blindReviewHelpId" key="editorial.sectionEditorsRole.review.blindPeerReview" url="true"}
								{translate key="manager.setup.reviewOptions.showEnsuringLink" blindReviewHelpId=$blindReviewHelpId}</label>
							</div>
							<br/>
						</div>
					</div>
				</div> <!--#reviewOptions-->

				<hr>
				<div id="privacyStatementInfo" class="journal-setup">
					<h3>2.3 {translate key="manager.setup.privacyStatement"}</h3>

					<div class="form-group">
						<textarea name="privacyStatement[{$formLocale|escape}]" id="privacyStatement" rows="12" cols="60" class="form-control">{$privacyStatement[$formLocale]|escape}</textarea>
					</div>
				</div>

				<hr>

				<div id="editorDecision">
					<h3>2.4 {translate key="manager.setup.editorDecision"}</h3>

					<div class="checkbox">
						<label for="notifyAllAuthorsOnDecision">
							<input type="checkbox" name="notifyAllAuthorsOnDecision" id="notifyAllAuthorsOnDecision" value="1"{if $notifyAllAuthorsOnDecision} checked="checked"{/if} /> {translate key="manager.setup.notifyAllAuthorsOnDecision"}
						</label>
					</div>

				</div>
				<hr>

				<div id="addItemtoAboutJournal">
					<h3>2.5 {translate key="manager.setup.addItemtoAboutJournal"}</h3>

					<div class="form-horizontal">
						{foreach name=customAboutItems from=$customAboutItems[$formLocale] key=aboutId item=aboutItem}
						<div class="form-group">
							{fieldLabel name="customAboutItems-$aboutId-title" key="common.title" class="control-label col-sm-2"}
							<div class="col-sm-10">
								<input type="text" name="customAboutItems[{$formLocale|escape}][{$aboutId|escape}][title]" id="customAboutItems-{$aboutId|escape}-title" value="{$aboutItem.title|escape}" size="40" maxlength="255" class="form-control" />
								{if $smarty.foreach.customAboutItems.total > 1} 
								<input type="submit" name="delCustomAboutItem[{$aboutId|escape}]" value="{translate key="common.delete"}" class="btn btn-danger" />
								{/if}
							</div>
						</div>
						<div class="form-group">
							{fieldLabel name="customAboutItems-$aboutId-content" key="manager.setup.aboutItemContent" class="control-label col-sm-2"}
							<div class="col-sm-10">
								<textarea name="customAboutItems[{$formLocale|escape}][{$aboutId|escape}][content]" id="customAboutItems-{$aboutId|escape}-content" rows="12" cols="40" class="form-control">{$aboutItem.content|escape}</textarea>
							</div>
						</div>
						{if !$smarty.foreach.customAboutItems.last}

						<hr>

						{/if}
						{foreachelse}
						<div class="form-group">
							{fieldLabel name="customAboutItems-0-title" key="common.title" class="control-label col-sm-2"}
							<div class="col-sm-10">
								<input type="text" name="customAboutItems[{$formLocale|escape}][0][title]" id="customAboutItems-0-title" value="" size="40" maxlength="255" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							{fieldLabel name="customAboutItems-0-content" key="manager.setup.aboutItemContent" class="col-sm-2 control-label"}
							<div class="col-sm-10">
								<textarea name="customAboutItems[{$formLocale|escape}][0][content]" id="customAboutItems-0-content" rows="12" cols="40" class="form-control"></textarea>
							</div>
						</div>
						{/foreach}
					</div>

					<p><input type="submit" name="addCustomAboutItem" value="{translate key="manager.setup.addAboutItem"}" class="btn btn-primary" /></p>
				</div>

				<hr>

				<div id="journalArchiving">
					<h3>2.6 {translate key="manager.setup.journalArchiving"}</h3>

					<p>{translate key="manager.setup.preservationDescription"}</p>

					{call_hook name="Templates::Manager::Setup::JournalArchiving"}

					<p>{translate key="manager.setup.lockssDescription" lockssExistingArchiveUrl=$lockssExistingArchiveUrl lockssNewArchiveUrl=$lockssNewArchiveUrl}</p>

					{url|assign:"lockssUrl" page="gateway" op="lockss"}
					<div class="checkbox">
						<label for="enableLockss">
							<input type="checkbox" name="enableLockss" id="enableLockss" value="1"{if $enableLockss} checked="checked"{/if} /> 
							{translate key="manager.setup.lockssEnable" lockssUrl=$lockssUrl}</label>
						</div>

						<div class="form-group journal-setup">
							<textarea name="lockssLicense[{$formLocale|escape}]" id="lockssLicense" rows="6" cols="60" class="form-control">{$lockssLicense[$formLocale]|escape}</textarea>
							<br />
							<div class="alert alert-info">
								<small class="instruct"> {translate key="manager.setup.lockssLicenses"}</small> 
							</div>
						</div>
					</div>

					<hr>

					<div id="reviewerDatabaseLink">
						<h3>2.7 {translate key="manager.setup.reviewerDatabaseLink"}</h3>

						<p>{translate key="manager.setup.reviewerDatabaseLink.desc"}</p>

						<div class="form-horizontal">
							{foreach name=reviewerDatabaseLinks from=$reviewerDatabaseLinks key=reviewerDatabaseLinkId item=reviewerDatabaseLink}
							<div class="form-group">
								{fieldLabel name="reviewerDatabaseLinks-$reviewerDatabaseLinkId-title" key="common.title" class="col-sm-2 control-label"}
								<div class="col-sm-10">
									<input type="text" name="reviewerDatabaseLinks[{$reviewerDatabaseLinkId|escape}][title]" id="reviewerDatabaseLinks-{$reviewerDatabaseLinkId|escape}-title" value="{$reviewerDatabaseLink.title|escape}" size="40" maxlength="255" class="form-control" />
									{if $smarty.foreach.reviewerDatabaseLinks.total > 1} 
									<input type="submit" name="delReviewerDatabaseLink[{$reviewerDatabaseLinkId|escape}]" value="{translate key="common.delete"}" class="btn btn-danger" />
									{/if}
								</div>
							</div>
							<div class="form-group">
								{fieldLabel name="reviewerDatabaseLinks-$reviewerDatabaseLinkId-url" key="common.url" class="control-label col-sm-2"} 
								<div class="col-sm-10">
									<input type="text" name="reviewerDatabaseLinks[{$reviewerDatabaseLinkId|escape}][url]" id="reviewerDatabaseLinks-{$reviewerDatabaseLinkId|escape}-url" value="{$reviewerDatabaseLink.url|escape}" size="40" maxlength="255" class="form-control" />
								</div>
							</div>
							{if !$smarty.foreach.reviewerDatabaseLinks.last}

							<hr>

							{/if}
							{foreachelse}
							<div class="form-group">
								{fieldLabel name="reviewerDatabaseLinks-0-title" key="common.title" class="col-sm-2 control-label"}
								<div class="col-sm-10">
									<input type="text" name="reviewerDatabaseLinks[0][title]" id="reviewerDatabaseLinks-0-title" value="" size="40" maxlength="255" class="form-control">
								</div>
							</div>
							<div class="form-group">
								{fieldLabel name="reviewerDatabaseLinks-0-url" key="common.url" class="col-sm-2 control-label"}
								<div class="col-sm-10">
									<input type="text" name="reviewerDatabaseLinks[0][url]" id="reviewerDatabaseLinks-0-url" value="" size="40" maxlength="255" class="form-control">
								</div>
							</div>
							{/foreach}


						</div> {*.form-horizontal*}
						<div class="form-group">
							<input type="submit" name="addReviewerDatabaseLink" value="{translate key="manager.setup.addReviewerDatabaseLink"}" class="btn btn-primary" />
						</div>
					</div>
					<hr>

					<p><input type="submit" value="{translate key="common.saveAndContinue"}" class="btn btn-primary" /> <input type="button" value="{translate key="common.cancel"}" class="btn btn-warning" onclick="document.location.href='{url op="setup" escape=false}'" /></p>

					<p><span class="formRequired">{translate key="common.requiredField"}</span></p>

				</form>

				{include file="common/footer.tpl"}

