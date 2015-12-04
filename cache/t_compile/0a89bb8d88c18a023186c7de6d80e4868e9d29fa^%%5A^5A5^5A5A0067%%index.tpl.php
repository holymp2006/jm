<?php /* Smarty version 2.6.26, created on 2015-11-30 12:12:02
         compiled from admin/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'admin/index.tpl', 17, false),array('function', 'url', 'admin/index.tpl', 24, false),array('function', 'call_hook', 'admin/index.tpl', 29, false),array('modifier', 'escape', 'admin/index.tpl', 37, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "admin.siteAdmin"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php if ($this->_tpl_vars['newVersionAvailable']): ?>
<div class="warningMessage"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.upgradeAvailable.admin",'currentVersion' => $this->_tpl_vars['currentVersion'],'latestVersion' => $this->_tpl_vars['latestVersion']), $this);?>
</div>
<?php endif; ?>

<div id="siteManagement">
<h3 class="list-group-item active"><span><i class="glyphicon glyphicon-check"></i>&nbsp;</span><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.siteManagement"), $this);?>
</h3>

<ul class="list-group">
	<li class="list-group-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'settings'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.siteSettings"), $this);?>
</a></li>
	<li class="list-group-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'journals'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.hostedJournals"), $this);?>
</a></li>
	<li class="list-group-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'languages'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.languages"), $this);?>
</a></li>
	<li class="list-group-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'auth'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.authSources"), $this);?>
</a></li>
	<li class="list-group-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'categories'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.categories"), $this);?>
</a></li>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Admin::Index::SiteManagement"), $this);?>

</ul>
</div>
<div id="adminFunctions">
<h3 class="list-group-item active"><span><i class="glyphicon glyphicon-book"></i>&nbsp;</span><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.adminFunctions"), $this);?>
</h3>

<ul class="list-group">
	<li class="list-group-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'systemInfo'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.systemInformation"), $this);?>
</a></li>
	<li class="list-group-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'expireSessions'), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.confirmExpireSessions"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.expireSessions"), $this);?>
</a></li>
	<li class="list-group-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'clearDataCache'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.clearDataCache"), $this);?>
</a></li>
	<li class="list-group-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'clearTemplateCache'), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.confirmClearTemplateCache"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.clearTemplateCache"), $this);?>
</a></li>
	<li class="list-group-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'clearScheduledTaskLogFiles'), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.scheduledTask.confirmClearLogs"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.scheduledTask.clearLogs"), $this);?>
</a></li>
	<li class="list-group-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'mergeUsers'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.mergeUsers"), $this);?>
</a></li>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Admin::Index::AdminFunctions"), $this);?>

</ul>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
