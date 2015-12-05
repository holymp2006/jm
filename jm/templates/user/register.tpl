{**
 * templates/user/register.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * User registration form.
 *
 *}
 {strip}
 {assign var="pageTitle" value="user.register"}
 {include file="common/header.tpl"}
 {/strip}

 <form id="registerForm" method="post" action="{url op="registerUser"}">

 	<p>{translate key="user.register.completeForm"}</p>

 	{if !$implicitAuth}
 	{if !$existingUser}
 	{url|assign:"url" page="user" op="register" existingUser=1}
 	<p>{translate key="user.register.alreadyRegisteredOtherJournal" registerUrl=$url}</p>
 	{else}
 	{url|assign:"url" page="user" op="register"}
 	<p>{translate key="user.register.notAlreadyRegisteredOtherJournal" registerUrl=$url}</p>
 	<input type="hidden" name="existingUser" value="1"/>
 	{/if}

 	<h3>{translate key="user.profile"}</h3>

 	{include file="common/formErrors.tpl"}

 	{if $existingUser}
 	<p>{translate key="user.register.loginToRegister"}</p>
 	{/if}
 	{/if}{* !$implicitAuth *}

 	{if $source}
 	<input type="hidden" name="source" value="{$source|escape}" />
 	{/if}

 	<div class="form-horizontal">
 		{if count($formLocales) > 1 && !$existingUser}
 		<div class="form-group">
 			{fieldLabel name="formLocale" key="form.formLanguage" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				{url|assign:"userRegisterUrl" page="user" op="register" escape=false}
 				{form_language_chooser form="register" url=$userRegisterUrl}
 				<small class="instruct">{translate key="form.formLanguage.description"}</small>
 			</div>
 		</div>
 		{/if}{* count($formLocales) > 1 && !$existingUser *}

 		{if !$implicitAuth}
 		<div class="form-group">
 			{fieldLabel name="username" required="true" key="user.username" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<input type="text" name="username" value="{$username|escape}" id="username" size="20" maxlength="32" class="form-control" />
 				{if !$existingUser}

 				<small class="instruct">{translate key="user.register.usernameRestriction"}</small>

 				{/if}{* !$existingUser *}
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="password" required="true" key="user.password" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<input type="password" name="password" value="{$password|escape}" id="password" size="20" class="form-control" />
 			</div>
 		</div>

 		{if !$existingUser}
 		<div class="form-group">
 			<div class="col-sm-10 col-sm-offset-2">
 				<small class="instruct">{translate key="user.register.passwordLengthRestriction" length=$minPasswordLength}</small>
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="password2" required="true" key="user.repeatPassword" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				<input type="password" name="password2" id="password2" value="{$password2|escape}" size="20" class="form-control" />
 			</div>
 		</div>

 		{if $captchaEnabled}
 		<div>
 			{if $reCaptchaEnabled}
 			{fieldLabel name="recaptcha_challenge_field" required="true" key="common.captchaField" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				{$reCaptchaHtml}
 			</div>
 			{else}
 			{fieldLabel name="captcha" required="true" key="common.captchaField" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<img src="{url page="user" op="viewCaptcha" path=$captchaId}" alt="{translate key="common.captchaField.altText"}" /><br />
 				<span class="instruct">{translate key="common.captchaField.description"}</span><br />
 				<input name="captcha" id="captcha" value="" size="20" maxlength="32" class="form-control" />
 				<input type="hidden" name="captchaId" value="{$captchaId|escape:"quoted"}" />
 			</div>
 			{/if}
 		</div>
 		{/if}{* $captchaEnabled *}

 		<div class="form-group">
 			{fieldLabel name="salutation" key="user.salutation" class="control-label col-sm-2"}
 			<div class="col-sm-4">
 				<input type="text" name="salutation" id="salutation" value="{$salutation|escape}" size="20" maxlength="40" class="form-control" />
 			</div>
 		</div>
 		<div class="form-group">
 			{fieldLabel name="firstName" required="true" key="user.firstName" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				<input type="text" id="firstName" name="firstName" value="{$firstName|escape}" size="20" maxlength="40" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="middleName" key="user.middleName" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				<input type="text" id="middleName" name="middleName" value="{$middleName|escape}" size="20" maxlength="40" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="lastName" required="true" key="user.lastName" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				<input type="text" id="lastName" name="lastName" value="{$lastName|escape}" size="20" maxlength="90" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="initials" key="user.initials" class="control-label col-sm-2"}
 			<div class="col-sm-4">
 				<input type="text" id="initials" name="initials" value="{$initials|escape}" size="5" maxlength="5" class="form-control" placeholder'{translate key="user.initialsExample"}'/>
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="gender-m" key="user.gender" class="control-label col-sm-2"}
 			<div class="col-sm-4">
 				<select name="gender" id="gender" size="1" class="form-control">
 					{html_options_translate options=$genderOptions selected=$gender}
 				</select>
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="affiliation" key="user.affiliation" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				<textarea id="affiliation" name="affiliation[{$formLocale|escape}]" rows="5" cols="40" class="form-control" placeholder='{translate key="user.affiliation.description"}'>{$affiliation[$formLocale]|escape}</textarea> 				
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="signature" key="user.signature" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<textarea name="signature[{$formLocale|escape}]" id="signature" rows="5" cols="40" class="form-control">{$signature[$formLocale]|escape}</textarea>
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="email" required="true" key="user.email" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<div class="form-inline">
 					<input type="text" id="email" name="email" value="{$email|escape}" size="30" maxlength="90" class="form-control" /> {if $privacyStatement}<a class="action" href="#privacyStatement">{translate key="user.register.privacyStatement"}</a>{/if}
 				</div>
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="confirmEmail" required="true" key="user.confirmEmail" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				<input type="text" id="confirmEmail" name="confirmEmail" value="{$confirmEmail|escape}" size="30" maxlength="90" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="orcid" key="user.orcid" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<input type="text" id="orcid" name="orcid" value="{$orcid|escape}" size="40" maxlength="255" class="form-control" />
 				<p class="alert alert-info mt-10">{translate key="user.orcid.description"}</p>
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="userUrl" key="user.url" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<input type="text" id="userUrl" name="userUrl" value="{$userUrl|escape}" size="30" maxlength="255" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="phone" key="user.phone" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<input type="text" name="phone" id="phone" value="{$phone|escape}" size="15" maxlength="24" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="fax" key="user.fax" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<input type="text" name="fax" id="fax" value="{$fax|escape}" size="15" maxlength="24" class="form-control" />
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="mailingAddress" key="common.mailingAddress" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				<textarea name="mailingAddress" id="mailingAddress" rows="3" cols="40" class="form-control">{$mailingAddress|escape}</textarea>
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="country" key="common.country" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				<select name="country" id="country" class="form-control">
 					<option value=""></option>
 					{html_options options=$countries selected=$country}
 				</select>
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="biography" key="user.biography" class="col-sm-2 control-label"}
 			<div class="col-sm-10">
 				<textarea name="biography[{$formLocale|escape}]" id="biography" rows="5" cols="40" class="form-control" placeholder='{translate key="user.biography.description"}'>{$biography[$formLocale]|escape}</textarea>
 			</div>
 		</div>

 		<div class="form-group">
 			{fieldLabel name="sendPassword" key="user.sendPassword" class="col-sm-2 control-label"}
 			<div class="col-sm-10 checkbox">
 				<label for="sendPassword">
 					<input type="checkbox" name="sendPassword" id="sendPassword" value="1"{if $sendPassword} checked="checked"{/if} />&nbsp;{translate key="user.sendPassword.description"}</label>
 				</div>
 			</div>

 			{if count($availableLocales) > 1}
 			<div class="form-group">
 				{translate key="user.workingLanguages" class="col-sm-2 control-label"}
 				<div class="col-sm-10">
 					{foreach from=$availableLocales key=localeKey item=localeName}
 					<div class="checkbox">
 						<label for="userLocales-{$localeKey|escape}">
 							<input type="checkbox" name="userLocales[]" id="userLocales-{$localeKey|escape}" value="{$localeKey|escape}"{if in_array($localeKey, $userLocales)} checked="checked"{/if} />&nbsp;{$localeName|escape}</label>
 						</div>
 						{/foreach}
 					</div>
 				</div>
 				{/if}{* count($availableLocales) > 1 *}
 				{/if}{* !$existingUser *}
 				{/if}{* !$implicitAuth *}

 				{if $allowRegReader || $allowRegReader === null || $allowRegAuthor || $allowRegAuthor === null || $allowRegReviewer || $allowRegReviewer === null || ($currentJournal && $currentJournal->getSetting('publishingMode') == $smarty.const.PUBLISHING_MODE_SUBSCRIPTION && $enableOpenAccessNotification)}
 				<div class="form-group">
 					{fieldLabel suppressId="true" name="registerAs" key="user.register.registerAs" class="col-sm-2 control-label"}
 					<div class="col-sm-10">
 						{if $allowRegReader || $allowRegReader === null}
 						<div class="checkbox">
 							<label for="registerAsReader">
 								<input type="checkbox" name="registerAsReader" id="registerAsReader" value="1"{if $registerAsReader} checked="checked"{/if} />&nbsp;<strong>{translate key="user.role.reader"}</strong>:&nbsp;{translate key="user.register.readerDescription"}</label>
 							</div>
 							{/if}
 							{if $currentJournal && $currentJournal->getSetting('publishingMode') == $smarty.const.PUBLISHING_MODE_SUBSCRIPTION && $enableOpenAccessNotification}
 							<div class="checkbox">
 								<label for="openAccessNotification">
 									<input type="checkbox" name="openAccessNotification" id="openAccessNotification" value="1"{if $openAccessNotification} checked="checked"{/if} />&nbsp;<strong>{translate key="user.role.reader"}</strong>:&nbsp;{translate key="user.register.openAccessNotificationDescription"}
 								</label>
 							</div>
 							{/if}
 							{if $allowRegAuthor || $allowRegAuthor === null}
 							<div class="checkbox">
 								<label for="registerAsAuthor">
 									<input type="checkbox" name="registerAsAuthor" id="registerAsAuthor" value="1"{if $registerAsAuthor} checked="checked"{/if} />&nbsp;<strong>{translate key="user.role.author"}</strong>:&nbsp;{translate key="user.register.authorDescription"}
 								</label>
 							</div>
 							{/if}
 							{if $allowRegReviewer || $allowRegReviewer === null}
 							<div class="checkbox">
 								<label for="registerAsReviewer">
 									<input type="checkbox" name="registerAsReviewer" id="registerAsReviewer" value="1"{if $registerAsReviewer} checked="checked"{/if} />&nbsp;<strong>{translate key="user.role.reviewer"}</strong>:&nbsp;{if $existingUser}{translate key="user.register.reviewerDescriptionNoInterests"}{else}{translate key="user.register.reviewerDescription"}{/if}</label>
 								</div>
 								<div id="reviewerInterestsContainer" class="checkbox mt-20">			
 									<p>
 										<strong>{translate key="user.register.reviewerInterests"}</strong>
 									</p>
 									<div class="col-sm-12">
 										{include file="form/interestsInput.tpl" FBV_interestsKeywords=$interestsKeywords FBV_interestsTextOnly=$interestsTextOnly}
 									</div> <!--.col-sm-12-->								
 								</div>
 							</div>
 							{/if}
 						</div>
 						{/if}

 					</div> <!--.form-horizontal-->

 					<br />
 					{if ! $implicitAuth}
 					<p class="alert alert-warning"> 
 						<span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;			
 						<span class="formRequired">{translate key="common.requiredField"}</span>
 					</p>
 					{/if}{* !$implicitAuth *}

 					<p><input type="submit" value="{translate key="user.register"}" class="btn btn-primary" /> <input type="button" value="{translate key="common.cancel"}" class="btn btn-warning" onclick="document.location.href='{url page="index" escape=false}'" /></p>


 					<div id="privacyStatement">
 						{if $privacyStatement}
 						<h3>{translate key="user.register.privacyStatement"}</h3>
 						<p>{$privacyStatement|nl2br}</p>
 						{/if}
 					</div>

 				</form>

 				{include file="common/footer.tpl"}

