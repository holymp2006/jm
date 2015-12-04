<?php /* Smarty version 2.6.26, created on 2015-12-04 01:05:31
         compiled from common/navbar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'common/navbar.tpl', 43, false),array('function', 'translate', 'common/navbar.tpl', 43, false),array('function', 'call_hook', 'common/navbar.tpl', 59, false),array('modifier', 'escape', 'common/navbar.tpl', 63, false),)), $this); ?>
	
	<nav id="navbar" class="navbar navbar-default row" role="navigation">
		<div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div id="headerlogo" class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="" id="logo" class="navbar-brand logo">
					<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/public/assets/images/navbar-logo.png" alt="JM logo" class="img-responsive">
				</a>
			</div> <!-- end #headerlogo -->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse top-menu">
				<ul class="nav navbar-nav navbar-right menu" role="menu">
					
					<li role="presentation" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="false" href="#" role="button" aria-expanded="false">About Umuawulu<i class="more glyphicon glyphicon-chevron-down"></i>
						</a>
						<ul class="dropdown-menu bullet pull-right" role="menu"> 
							<li class="navbar-main-menu-item"><a tabindex="-1" href="#"><i class="fa fa-users"></i> History</a></li>
							<li class="navbar-main-menu-item"><a tabindex="-1" href="#"><i class="fa fa-users"></i> People And Culture</a></li>
							<li class="navbar-main-menu-item"><a tabindex="-1" href="#"><i class="fa fa-bank navbar-main-menu-item"></i> U.P.U.</a></li>	
							<li class="navbar-main-menu-item"><a tabindex="-1" href="#"><i class="fa fa-hand-o-right navbar-main-menu-item"></i> Get Direction</a></li>	
						</ul> 
					</li>  
					
					<li id="home"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.home"), $this);?>
</a></li>
					<li id="about"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>
</a></li>

					<?php if ($this->_tpl_vars['siteCategoriesEnabled']): ?>
					<li id="categories"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'search','op' => 'categories'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.categories"), $this);?>
</a></li>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?>
					<li id="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'current'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.current"), $this);?>
</a></li>
					<li id="archives"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'archive'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.archives"), $this);?>
</a></li>
					<?php endif; ?>

					<?php if ($this->_tpl_vars['enableAnnouncements']): ?>
					<li id="announcements"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'announcement'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcements"), $this);?>
</a></li>
					<?php endif; ?>
					<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Header::Navbar::CurrentJournal"), $this);?>


					<?php $_from = $this->_tpl_vars['navMenuItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['navItemKey'] => $this->_tpl_vars['navItem']):
?>
					<?php if ($this->_tpl_vars['navItem']['url'] != '' && $this->_tpl_vars['navItem']['name'] != ''): ?>
					<li class="navItem" id="navItem-<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><a href="<?php if ($this->_tpl_vars['navItem']['isAbsolute']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>"><?php if ($this->_tpl_vars['navItem']['isLiteral']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['navItem']['name']), $this);?>
<?php endif; ?></a></li>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>



					<?php if (! $this->_tpl_vars['currentJournal'] || $this->_tpl_vars['currentJournal']->getSetting('publishingMode') != @PUBLISHING_MODE_NONE): ?>
					<li>
					<div class="col-sm-12 col-md-12">
						<form class="navbar-form" role="search" method="post"  action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'search','op' => 'search'), $this);?>
">

							<?php ob_start(); ?><?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Search::SearchResults::FilterInput",'filterName' => 'simpleQuery','filterValue' => "",'size' => 8,'filterPlaceholder' => 'Search'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('filterInput', ob_get_contents());ob_end_clean(); ?>

							<div class="input-group">
								<?php if (empty ( $this->_tpl_vars['filterInput'] )): ?>
								<input id="simpleQuery" type="text" class="form-control" placeholder='<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.search"), $this);?>
' name="simpleQuery">
								<?php else: ?>
								<?php echo $this->_tpl_vars['filterInput']; ?>

								<?php endif; ?>
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>
					</div>					
					</li>
					<?php endif; ?>


					<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
					<li role="presentation" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="false" href="#" role="button" aria-expanded="false">
							<div class="img-circle profile-img">
								<img class="img-responsive img-circle" alt="" src="">
							</div>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['loggedInUsername'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<i class="more glyphicon glyphicon-chevron-down"></i>
						</a>
						<ul class="dropdown-menu bullet pull-right" role="menu">
							<?php if ($this->_tpl_vars['hasOtherJournals']): ?>
							<li class="navbar-main-menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => 'index','page' => 'user'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.myJournals"), $this);?>
</a></li>
							<?php endif; ?>
							<li class="navbar-main-menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'profile'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.myProfile"), $this);?>
</a></li>

							<li role="separator" class="divider"></li>

							<li class="navbar-main-menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'signOut'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.logout"), $this);?>
</a></li>
							<?php if ($this->_tpl_vars['userSession']->getSessionVar('signedInAs')): ?>
							<li class="navbar-main-menu-item"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'signOutAsUser'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.user.signOutAsUser"), $this);?>
</a></li>
							<?php endif; ?>				

						</ul>
					</li>
					<?php else: ?>
					<li id="login"><a class="btn btn-default btn-sm" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.login"), $this);?>
</a></li>
					<?php if (! $this->_tpl_vars['hideRegisterLink']): ?>
					<li id="register"><a class="btn btn-default btn-sm" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.register"), $this);?>
</a></li>
					<?php endif; ?>
					<?php endif; ?>
				</ul>
			</div> <!-- end .collapse .navbar-collapse -->

		</div> <!-- end .container -->

            </nav> <!-- end nav -->