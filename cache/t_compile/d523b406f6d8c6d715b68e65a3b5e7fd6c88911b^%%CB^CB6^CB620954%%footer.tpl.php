<?php /* Smarty version 2.6.26, created on 2015-12-01 21:27:19
         compiled from common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/footer.tpl', 12, false),array('function', 'call_hook', 'common/footer.tpl', 18, false),array('function', 'get_debug_info', 'common/footer.tpl', 44, false),array('modifier', 'assign', 'common/footer.tpl', 22, false),)), $this); ?>
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

<footer  class="footer row">
	
	<div class="footer_top well well-lg">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="#"> <img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/public/assets/images/journal.png" class="img-circle" alt="View Journals"> <span class="footer_top">&nbsp;Journals</span></a>	
				</div>	
				<div class="col-sm-4">
					<a href="#"> <img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/public/assets/images/archive.png" class="img-circle" alt="Our Archive"> <span class="footer_top">&nbsp;Archives </span></a>				
				</div>
				<div class="col-sm-4">
					<a href="#"> <img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/public/assets/images/editorial.png" class="img-circle" alt="Editorials"> <span class="footer_top">&nbsp;Editorials </span> </a>				
				</div>		
			</div>	 <!--.row-->		
		</div>
	</div>
	

	<div class="dark">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 text">
					<div style="background: url('<?php echo $this->_tpl_vars['baseUrl']; ?>
/public/assets/images/footer-logo-bg.png') no-repeat;">
						<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/public/assets/images/footer-logo.png" alt="" class="footer-logo">
						<div style="background: url('<?php echo $this->_tpl_vars['baseUrl']; ?>
/public/assets/images/world-map.png') no-repeat center center; background-size: 100%;"> <p></p>
							<address>
								<i class="fa fa-map-marker"></i><strong>  Headquarters:</strong><br>
								C/O Jos University Teaching Hospital,<br>
								P.M.B. 2076, Jos. Nigeria.<br>
							</address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> +234 (80) 3715 4469 <br>
							<abbr title="Email Address"><strong>Email:</strong></abbr><a href="mailto:info@journalmanagers.com"> info@journalmanagers.com</a> 
						</div>
					</div>
				</div>
				<div class="col-sm-4 text">
					<h4>
						About Us
					</h4>
					<p align="justify" class="about-us">
						Journal Managers is committed to providing and discriminating World Class Information Globally, by making genuine contributions to the science and health communities through publishing trusted leading-edge Scientific, Technical and Medical (STM) information - pushing the frotiers and fueling a continuous cycle of exploration, discovery and application, diseminating and preserving STM literature to meet the information needs of the World's present future scientists and clinicians - transforming ideas to realities.
					</p>
					<div class="social">
						<a href="#" alt="Like us on Facebook"><i class="fa fa-facebook social-item"></i></a>
						<a href="#" alt="Follow us on Twitter"><i class="fa fa-twitter social-item"></i></a>
						<a href="#" alt="Let's Connect on LinkedIn"><i class="fa fa-linkedin social-item"></i></a>
						<!-- <a href="#"><i class="fa fa-github social-item"></i></a> -->
					</div>				
				</div>		
				<div class="col-sm-4 text">
					<div class="row">

						<div class="col-md-6">
							<div class="counter counter-small"><span data-from="0" data-to="9" data-refresh-interval="1" data-speed="30000" data-comma="false">3</span></div>
							<h5 style="color: #CCC;">JOURNALS</h5>
						</div>

						<div class="col-md-6">
							<div class="counter counter-small"><span data-from="0" data-to="99" data-refresh-interval="1" data-speed="20000" data-comma="true">20</span></div>
							<h5 style="color: #CCC;">EDITORS</h5>
						</div>

					</div>				
					<h5><strong>Subscribe</strong> to Our Newsletter to get Important News on our Journals</h5>				
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input aria-required="true" id="sub-form-email" name="sub-form-email" class="form-control required email" placeholder="Enter your Email" type="email">
						<span class="input-group-btn">
							<button class="btn btn-success" type="submit">Subscribe</button>
						</span>
					</div>
					<p></p>
					<p>Copyright © 2016 <a href="http://www.journalmanagers.com/" target="blank"><Journal Managers</a> / All rights reserved.</p>                				
				</div>
			</div> <!-- end row -->
		</div>
	</footer>
</body>
</html>