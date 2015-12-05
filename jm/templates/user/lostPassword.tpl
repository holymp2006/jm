{**
 * templates/user/lostPassword.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2000-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Password reset form.
 *
 *}
{strip}
{assign var="pageTitle" value="user.login.resetPassword"}
{include file="common/header.tpl"}
{/strip}
{if !$registerLocaleKey}
	{assign var="registerLocaleKey" value="user.login.registerNewAccount"}
{/if}

<form id="reset" action="{url page="login" op="requestResetPassword"}" method="post" class="form">
<p><span class="instruct">{translate key="user.login.resetPasswordInstructions"}</span></p>

<div class="row">

{if $error}
<div class="col-md-12 col-xs-12">
	<div class="alert alert-danger">
	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	<span class="pkp_form_error">{translate key="$error"}</span>
	</div>
</div>
{/if}

<div class="col-md-7 col-xs-12">
	<div class="form-group">
	    <div class="input-group"> 
	        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
			<input type="text" name="email" value="{$username|escape}" size="30" maxlength="90" class="textField form-control">
		</div>
	</div>

 <div class="form-group">
 	<input type="submit" value="{translate key="user.login.resetPassword"}" class="btn btn-default">
 </div>

 </div> <!--.col-md-7-->

 <div class="col-md-5 col-xs-12">
{if !$hideRegisterLink}
	<ul class="nav nav-tabs nav-stacked">
		<li>
			<a href="{url page="user" op=$registerOp}">{translate key=$registerLocaleKey}</a>
		</li>
	</ul>
{/if}
</div>

</div> <!--.row-->
<script type="text/javascript">
<!--
	document.getElementById('reset').email.focus();
// -->
</script>
</form>

{include file="common/footer.tpl"}
