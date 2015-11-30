{**
 * templates/user/login.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2000-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * User login form.
 *
 *}
{strip}
{assign var="pageTitle" value="user.login"}
{include file="common/header.tpl"}
{/strip}

{if !$registerOp}
	{assign var="registerOp" value="register"}
{/if}
{if !$registerLocaleKey}
	{assign var="registerLocaleKey" value="user.login.registerNewAccount"}
{/if}

{if $loginMessage}
	<span class="instruct">{translate key="$loginMessage"}</span>
	<br />
	<br />
{/if}

{if $implicitAuth}
	<a id="implicitAuthLogin" href="{url page="login" op="implicitAuthLogin"}">Login</a>
{else}
	<form id="signinForm" method="post" action="{$loginUrl}" class="form">
{/if}

{if $error}
	<div class="alert alert-danger">
		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		<span class="pkp_form_error">{translate key="$error" reason=$reason}</span>
	</div>
{/if}

<input type="hidden" name="source" value="{$source|strip_unsafe_html|escape}" />

{if ! $implicitAuth}
<div class="row">
	<div class="col-md-7 col-xs-12">
		<div id="signinTable" class="data">


		<div class="form-group">
            <div class="input-group"> 
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" id="loginUsername" name="username" value="{$username|escape}" size="20" maxlength="32" class="textField input-block-level form-control" placeholder="Type Username here"> 
            </div>
        </div>

		<div class="form-group">
            <div class="input-group"> 
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input type="password" id="loginPassword" name="password" value="{$password|escape}" size="20" class="textField input-block-level form-control" placeholder="Type Password here">
            </div>
        </div>

		{if $showRemember}

        <div class="checkbox">
		  <label>
		    <input type="checkbox" id="loginRemember" name="remember" value="1"{if $remember} checked="checked"{/if} >
		    {translate key="user.login.rememberUsernameAndPassword"}
		  </label>
		</div>

		{/if}{* $showRemember *}

        <div class="form-group">
            <input type="submit" value="{translate key="user.login"}" class="btn btn-primary">
        </div> 

		</div>
	</div>

	<div class="col-md-5 col-xs-12">
		<ul class="nav nav-tabs nav-stacked">
			{if !$hideRegisterLink}<li><a href="{url page="user" op=$registerOp}">{translate key=$registerLocaleKey}</a></li>{/if}
			<li><a href="{url page="login" op="lostPassword"}">{translate key="user.login.forgotPassword"}</a></li>
		</ul>
	</div>
</div>

<script type="text/javascript">
<!--
	document.getElementById('{if $username}loginPassword{else}loginUsername{/if}').focus();
// -->
</script>
{/if}{* !$implicitAuth *}

</form>

{include file="common/footer.tpl"}
