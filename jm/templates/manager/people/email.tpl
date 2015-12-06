{**
 * templates/manager/people/email.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Generic email template form
 *
 *}
 {strip}
 {assign var="pageTitle" value="email.compose"}
 {assign var="pageCrumbTitle" value="email.email"}
 {include file="common/header.tpl"}
 {/strip}

 <script type="text/javascript">
 	{literal}
 	<!--
 	function deleteAttachment(fileId) {
 		document.getElementById('submit').deleteAttachment.value = fileId;
 		document.getElementById('submit').submit();
 	}
// -->
{/literal}
</script>
<div id="genericEmail">
	<form method="post" id="submit" action="{$formActionUrl}"{if $attachmentsEnabled} enctype="multipart/form-data"{/if}>
		<input type="hidden" name="continued" value="1"/>
		{if $attachmentsEnabled}
		<input type="hidden" name="deleteAttachment" value="" />
		{foreach from=$persistAttachments item=temporaryFile}
		<input type="hidden" name="persistAttachments[]" value="{$temporaryFile->getId()}" />
		{/foreach}
		{/if}

		{if $hiddenFormParams}
		{foreach from=$hiddenFormParams item=hiddenFormParam key=key}
		<input type="hidden" name="{$key|escape}" value="{$hiddenFormParam|escape}" />
		{/foreach}
		{/if}

		{include file="common/formErrors.tpl"}

		{foreach from=$errorMessages item=message}
		{if !$notFirstMessage}
		{assign var=notFirstMessage value=1}
		<h4>{translate key="form.errorsOccurred"}</h4>
		<ul class="plain">
			{/if}
			{if $message.type == MAIL_ERROR_INVALID_EMAIL}
			{translate|assign:"message" key="email.invalid" email=$message.address}
			<li>{$message|escape}</li>
			{/if}
			{/foreach}
			{if $notFirstMessage}</ul>{/if}

			<br/>

			<div class="form-horizontal">
				<div class="form-group">
					{fieldLabel name="to" key="email.to" class="control-label col-sm-2"}
					<div class="col-sm-10">
						{foreach from=$to item=toAddress}
						<input type="text" name="to[]" id="to" value="{if $toAddress.name != ''}{$toAddress.name|escape} &lt;{$toAddress.email|escape}&gt;{else}{$toAddress.email|escape}{/if}" {if !$addressFieldsEnabled}disabled="disabled" {/if}size="40" maxlength="120" class="form-control" /><br/>
						{foreachelse}
						<input type="text" name="to[]" id="to" size="40" maxlength="120" class="form-control" {if !$addressFieldsEnabled}disabled="disabled" {/if}/>
						{/foreach}

						{if $blankTo}
						<input type="text" name="to[]" id="to" size="40" maxlength="120" class="form-control" {if !$addressFieldsEnabled}disabled="disabled" {/if}/>
						{/if}
					</div>
				</div>
				<div class="form-group">
					{fieldLabel name="cc" key="email.cc" class="control-label col-sm-2"}
					<div class="col-sm-10">
						{foreach from=$cc item=ccAddress}
						<input type="text" name="cc[]" id="cc" value="{if $ccAddress.name != ''}{$ccAddress.name|escape} &lt;{$ccAddress.email|escape}&gt;{else}{$ccAddress.email|escape}{/if}" size="40" maxlength="120" class="form-control" {if !$addressFieldsEnabled}disabled="disabled" {/if}/><br/>
						{foreachelse}
						<input type="text" name="cc[]" id="cc" size="40" maxlength="120" class="form-control" {if !$addressFieldsEnabled}disabled="disabled" {/if}/>
						{/foreach}

						{if $blankCc}
						<input type="text" name="cc[]" id="cc" size="40" maxlength="120" class="form-control" {if !$addressFieldsEnabled}disabled="disabled" {/if}/>
						{/if}
					</div>
				</div>
				<div class="form-group">
					{fieldLabel name="bcc" key="email.bcc" class="control-label col-sm-2"}
					<div class="col-sm-10">
						{foreach from=$bcc item=bccAddress}
						<input type="text" name="bcc[]" id="bcc" value="{if $bccAddress.name != ''}{$bccAddress.name|escape} &lt;{$bccAddress.email|escape}&gt;{else}{$bccAddress.email|escape}{/if}" size="40" maxlength="120" class="form-control" {if !$addressFieldsEnabled}disabled="disabled" {/if}/><br/>
						{foreachelse}
						<input type="text" name="bcc[]" id="bcc" size="40" maxlength="120" class="form-control" {if !$addressFieldsEnabled}disabled="disabled" {/if}/>
						{/foreach}

						{if $blankBcc}
						<input type="text" name="bcc[]" id="bcc" size="40" maxlength="120" class="form-control" {if !$addressFieldsEnabled}disabled="disabled" {/if}/>
						{/if}
					</div>
				</div>
				{if $addressFieldsEnabled}
				<div class="form-group">
					<label class="col-sm-2 control-label">&nbsp;</label>
					<div class="col-sm-10">
						<input type="submit" name="blankTo" class="btn btn-default" value="{translate key="email.addToRecipient"}"/>
						<input type="submit" name="blankCc" class="btn btn-default" value="{translate key="email.addCcRecipient"}"/>
						<input type="submit" name="blankBcc" class="btn btn-default" value="{translate key="email.addBccRecipient"}"/>
						<hr>
					</div>
				</div>
				{/if}{* $addressFieldsEnabled *}

				{if $attachmentsEnabled}
				
				<div class="form-group">
					{fieldLabel key="email.attachments" class="col-sm-2 control-label"}
					<div class="col-sm-10">
						{assign var=attachmentNum value=1}
						{foreach from=$persistAttachments item=temporaryFile}
						{$attachmentNum|escape}.&nbsp;{$temporaryFile->getOriginalFileName()|escape}&nbsp;
						({$temporaryFile->getNiceFileSize()})&nbsp;
						<a href="javascript:deleteAttachment({$temporaryFile->getId()})" class="btn btn-danger btn-sm">{translate key="common.delete"}</a>
						<br/>
						{assign var=attachmentNum value=$attachmentNum+1}
						{/foreach}

						{if $attachmentNum != 1}<br/>{/if}

						<div class="row">
							<div class="col-sm-8"> 	
								<div class="input-group image-preview">
									<input id="image-name" placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
									<span class="input-group-btn">
										<div class="btn btn-default image-preview-input"> 
											<span class="glyphicon glyphicon-folder-open"></span> 
											<span class="image-preview-input-title">Browse</span>
											<input id="image-name-get" type="file" name="newAttachment" class="uploadField" /> 
										</div>
										
										<input name="addAttachment" type="submit" class="btn btn-default btn-labeled" value="{translate key="common.upload"}" />

									</span>
								</div>
							</div>  			
						</div> <!--.row-->

					</div>

					{literal}	
					<script type="text/javascript">
						$(document).ready(function($) {
							$('#image-name-get').change(function() {
								var filename = $(this).val();
								var lastIndex = filename.lastIndexOf("\\");
								if (lastIndex >= 0) {
									filename = filename.substring(lastIndex + 1);
								}
								$('#image-name').val(filename);
							});

						}(jQuery));
					</script> 		
					{/literal}	

				</div>
				{/if}
				
				<div class="form-group">
					{fieldLabel name="subject" key="email.subject" class="col-sm-2 control-label"}
					<div class="col-sm-10">
						<input type="text" id="subject" name="subject" value="{$subject|escape}" size="60" maxlength="120" class="form-control" />
					</div>
				</div>
				<div class="form-group">
					{fieldLabel name="body" key="email.body" class="col-sm-2 control-label"}
					<div class="col-sm-10">
						<textarea name="body" cols="60" rows="15" class="form-control">{$body|escape}</textarea>
					</div>
				</div>
			</div>

			<hr>

			<p><input name="send" type="submit" value="{translate key="email.send"}" class="btn btn-primary" />
			<input type="button" value="{translate key="common.cancel"}" class="btn btn-warning" onclick="history.go(-1)" /></p>
		</form>
	</div>
	{include file="common/footer.tpl"}

