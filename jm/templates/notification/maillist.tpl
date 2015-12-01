{**
 * templates/notification/maillist.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Displays the notification settings page and unchecks  
 *
 *}
 {strip}
 {assign var="pageTitle" value="notification.mailList"}
 {include file="common/header.tpl"}
 {/strip}

 <p><span class="instruct">{translate key="notification.mailListDescription"}</span></p>

 {if $isError}
 <div class="alert alert-danger">
 	<span class="formError">{translate key="form.errorsOccurred"}:</span>
 	<ul class="formErrorList">
 		{foreach key=field item=message from=$errors}
 		<li>{$message}</li>
 		{/foreach}
 	</ul>
 </div>
 {/if}

 {if $success}
 <div class="alert alert-success"><span class="formSuccess">{translate key="$success"}</span></div>
 {/if}

 <form id="notificationSettings" method="post" action="{url op="saveSubscribeMailList"}">

 	<div class="form-horizontal">
 		<div class="form-group">
 			{fieldLabel name="email" key="user.email" class="control-label col-sm-2"}
 			<div class="col-sm-10"><input type="text" id="email" name="email" size="30" maxlength="90" class="form-control" /></div>
 		</div>
 		<div class="form-group">
 			{fieldLabel name="confirmEmail" key="user.confirmEmail" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				<input type="text" id="confirmEmail" name="confirmEmail" size="30" maxlength="90" class="form-control" />
 			</div>
 		</div>
 		{if $captchaEnabled && $reCaptchaHtml}
 		<div class="form-group">
 			{fieldLabel name="recaptcha_challenge_field" required="true" key="common.captchaField" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				{$reCaptchaHtml}
 			</div>
 		</div>
 		{elseif $captchaEnabled}
 		<div class="form-group">
 			{fieldLabel name="captcha" required="true" key="common.captchaField" class="control-label col-sm-2"}
 			<div class="col-sm-10">
 				<img src="{url page="user" op="viewCaptcha" path=$captchaId}" alt="{translate key="common.captchaField.altText"}" /><br />
 				<span class="instruct">{translate key="common.captchaField.description"}</span><br />
 				<input name="captcha" id="captcha" value="" size="20" maxlength="32" class="form-control" />
 				<input type="hidden" name="captchaId" value="{$captchaId|escape:"quoted"}" />
 			</div>
 		</div>
 		{/if}{* $captchaEnabled *}
 		<div class="form-group"> 
 			<div class="col-sm-10 col-sm-offset-2">			
 				<input type="submit" value="{translate key="form.submit"}" class="btn btn-primary" />
 			</div>
 		</div>
 	</div>
 </form>

 <div class="form-horizontal">
 	<div class="form-group">
 		<div class="col-sm-10 col-sm-offset-2">

 			<h5>{translate key="notification.mailList.register"}</h5>
 			<ul>
 				{if $settings.allowRegReviewer}
 				{url|assign:"url" page="user" op="register"}
 				<li>{translate key="notification.mailList.review" reviewUrl=$url} </li>
 				{/if}
 				{if $settings.allowRegAuthor}
 				{url|assign:"url" page="information" op="authors"}
 				<li>{translate key="notification.mailList.submit" submitUrl=$url} </li>
 				{/if}
 				{if $settings.subscriptionsEnabled}
 				{url|assign:"url" page="user" op="register"}
 				<li>{translate key="notification.mailList.protectedContent" subscribeUrl=$url}
 					{/if}
 					<li><a href="{url page="about" op="submissions" anchor="privacyStatement"}">{translate key="about.privacyStatement"}</a></li>
 				</ul>

 				
 			</div>
 		</div>
 	</div>
 	
 </form>

 {include file="common/footer.tpl"}

