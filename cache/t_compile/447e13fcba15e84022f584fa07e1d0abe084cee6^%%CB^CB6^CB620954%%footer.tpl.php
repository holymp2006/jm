<?php /* Smarty version 2.6.26, created on 2015-11-26 13:19:39
         compiled from common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/footer.tpl', 12, false),array('function', 'call_hook', 'common/footer.tpl', 18, false),array('function', 'get_debug_info', 'common/footer.tpl', 45, false),array('modifier', 'assign', 'common/footer.tpl', 22, false),)), $this); ?>
<?php if ($this->_tpl_vars['displayCreativeCommons']): ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.ccLicense"), $this);?>

<?php endif; ?>
<?php if ($this->_tpl_vars['pageFooter']): ?>
	<br /><br />
	<div id="pageFooter"><?php echo $this->_tpl_vars['pageFooter']; ?>
</div>
<?php endif; ?>
<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>

</div><!-- content -->
</div><!-- main -->

<?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::LeftSidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'leftSidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'leftSidebarCode'));?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::RightSidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'rightSidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'rightSidebarCode'));?>


<?php if ($this->_tpl_vars['leftSidebarCode'] || $this->_tpl_vars['rightSidebarCode']): ?>
	<div id="sidebar" class="col-md-3">
				<?php if ($this->_tpl_vars['rightSidebarCode']): ?>
			<div id="rightSidebar">
				<?php echo $this->_tpl_vars['rightSidebarCode']; ?>

			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>


</div><!-- .row -->

</div><!-- body -->

<?php echo $this->_plugins['function']['get_debug_info'][0][0]->smartyGetDebugInfo(array(), $this);?>

<?php if ($this->_tpl_vars['enableDebugStats']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['pqpTemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>

<!-- </div> --><!-- container -->
</body>
</html>