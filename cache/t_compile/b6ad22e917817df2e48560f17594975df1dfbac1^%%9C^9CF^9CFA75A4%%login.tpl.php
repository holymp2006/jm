<?php /* Smarty version 2.6.26, created on 2015-12-01 21:28:10
         compiled from user/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'user/login.tpl', 24, false),array('function', 'url', 'user/login.tpl', 30, false),array('modifier', 'strip_unsafe_html', 'user/login.tpl', 42, false),array('modifier', 'escape', 'user/login.tpl', 42, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "user.login"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php if (! $this->_tpl_vars['registerOp']): ?>
	<?php $this->assign('registerOp', 'register'); ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['registerLocaleKey']): ?>
	<?php $this->assign('registerLocaleKey', "user.login.registerNewAccount"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['loginMessage']): ?>
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['loginMessage'])), $this);?>
</span>
	<br />
	<br />
<?php endif; ?>

<?php if ($this->_tpl_vars['implicitAuth']): ?>
	<a id="implicitAuthLogin" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'implicitAuthLogin'), $this);?>
">Login</a>
<?php else: ?>
	<form id="signinForm" method="post" action="<?php echo $this->_tpl_vars['loginUrl']; ?>
" class="form">
<?php endif; ?>

<?php if ($this->_tpl_vars['error']): ?>
	<div class="alert alert-danger">
		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		<span class="pkp_form_error"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['error']),'reason' => $this->_tpl_vars['reason']), $this);?>
</span>
	</div>
<?php endif; ?>

<input type="hidden" name="source" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['source'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />

<?php if (! $this->_tpl_vars['implicitAuth']): ?>
<div class="row">
	<div class="col-md-7 col-xs-12">
		<div id="signinTable" class="data">


		<div class="form-group">
            <div class="input-group"> 
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" id="loginUsername" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="32" class="textField input-block-level form-control" placeholder="Type Username here"> 
            </div>
        </div>

		<div class="form-group">
            <div class="input-group"> 
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input type="password" id="loginPassword" name="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" class="textField input-block-level form-control" placeholder="Type Password here">
            </div>
        </div>

		<?php if ($this->_tpl_vars['showRemember']): ?>

        <div class="checkbox">
		  <label>
		    <input type="checkbox" id="loginRemember" name="remember" value="1"<?php if ($this->_tpl_vars['remember']): ?> checked="checked"<?php endif; ?> >
		    <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.rememberUsernameAndPassword"), $this);?>

		  </label>
		</div>

		<?php endif; ?>
        <div class="form-group">
            <input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login"), $this);?>
" class="btn btn-primary">
        </div> 

		</div>
	</div>

	<div class="col-md-5 col-xs-12">
		<ul class="nav nav-tabs nav-stacked">
			<?php if (! $this->_tpl_vars['hideRegisterLink']): ?><li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => $this->_tpl_vars['registerOp']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['registerLocaleKey']), $this);?>
</a></li><?php endif; ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'lostPassword'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.forgotPassword"), $this);?>
</a></li>
		</ul>
	</div>
</div>

<script type="text/javascript">
<!--
	document.getElementById('<?php if ($this->_tpl_vars['username']): ?>loginPassword<?php else: ?>loginUsername<?php endif; ?>').focus();
// -->
</script>
<?php endif; ?>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>