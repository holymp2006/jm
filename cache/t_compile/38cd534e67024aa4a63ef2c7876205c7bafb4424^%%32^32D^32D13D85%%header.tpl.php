<?php /* Smarty version 2.6.26, created on 2015-11-26 13:20:36
         compiled from common/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/header.tpl', 11, false),array('function', 'call_hook', 'common/header.tpl', 68, false),array('function', 'url', 'common/header.tpl', 121, false),array('modifier', 'assign', 'common/header.tpl', 11, false),array('modifier', 'escape', 'common/header.tpl', 25, false),array('modifier', 'replace', 'common/header.tpl', 151, false),)), $this); ?>
<?php echo ''; ?><?php if (! $this->_tpl_vars['pageTitleTranslated']): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['pageCrumbTitle']): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageCrumbTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageCrumbTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageCrumbTitleTranslated'));?><?php echo ''; ?><?php elseif (! $this->_tpl_vars['pageCrumbTitleTranslated']): ?><?php echo ''; ?><?php $this->assign('pageCrumbTitleTranslated', $this->_tpl_vars['pageTitleTranslated']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=$this->_tpl_vars['defaultCharset'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<meta name="description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaSearchDescription'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaSearchKeywords'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<meta name="generator" content="<?php echo $this->_tpl_vars['applicationName']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['currentVersionString'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	
	<title><?php echo $this->_tpl_vars['pageTitleTranslated']; ?>
</title>

	<?php echo $this->_tpl_vars['metaCustomHeaders']; ?>


	<?php if ($this->_tpl_vars['displayFavicon']): ?><link rel="icon" href="<?php echo $this->_tpl_vars['faviconDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayFavicon']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" type="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayFavicon']['mimeType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" /><?php endif; ?>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/pkp.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/compiled.css" type="text/css" />

	    <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/public/assets/css/bootstrap.min.css">
	
	    <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/public/assets/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	
	<!-- Base Jquery -->
	<?php if ($this->_tpl_vars['allowCDN']): ?><script type="text/javascript" src="//www.google.com/jsapi"></script>
		<script type="text/javascript"><?php echo '
			<!--
			// Provide a local fallback if the CDN cannot be reached
			if (typeof google == \'undefined\') {
				document.write(unescape("%3Cscript src=\''; ?>
<?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo '/lib/pkp/js/lib/jquery/jquery.min.js\' type=\'text/javascript\'%3E%3C/script%3E"));
				document.write(unescape("%3Cscript src=\''; ?>
<?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo '/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js\' type=\'text/javascript\'%3E%3C/script%3E"));
			} else {
				google.load("jquery", "'; ?>
<?php echo @CDN_JQUERY_VERSION; ?>
<?php echo '");
				google.load("jqueryui", "'; ?>
<?php echo @CDN_JQUERY_UI_VERSION; ?>
<?php echo '");
			}
			// -->
		'; ?>
</script>
	<?php else: ?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js"></script>
	<?php endif; ?>


	<?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::LeftSidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'leftSidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'leftSidebarCode'));?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::RightSidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'rightSidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'rightSidebarCode'));?>


		
	<?php if ($this->_tpl_vars['rightSidebarCode']): ?><link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/rightSidebar.css" type="text/css" /><?php endif; ?>
	<?php if ($this->_tpl_vars['leftSidebarCode'] && $this->_tpl_vars['rightSidebarCode']): ?><link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/bothSidebars.css" type="text/css" /><?php endif; ?>

		
	<!-- Default global locale keys for JavaScript -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/jsLocaleKeys.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<!-- Compiled scripts -->
	<?php if ($this->_tpl_vars['useMinifiedJavaScript']): ?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/js/pkp.min.js"></script>
	<?php else: ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/minifiedScripts.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

	<!-- Form validation -->
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/jquery/plugins/validate/jquery.validate.js"></script>
	<script type="text/javascript">
		<!--
		// initialise plugins
		<?php echo '
		$(function(){
			jqueryValidatorI18n("'; ?>
<?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo '", "'; ?>
<?php echo $this->_tpl_vars['currentLocale']; ?>
<?php echo '"); // include the appropriate validation localization
			'; ?>
<?php if ($this->_tpl_vars['validateId']): ?><?php echo '
				$("form[name='; ?>
<?php echo $this->_tpl_vars['validateId']; ?>
<?php echo ']").validate({
					errorClass: "error",
					highlight: function(element, errorClass) {
						$(element).parent().parent().addClass(errorClass);
					},
					unhighlight: function(element, errorClass) {
						$(element).parent().parent().removeClass(errorClass);
					}
				});
			'; ?>
<?php endif; ?><?php echo '
			$(".tagit").live(\'click\', function() {
				$(this).find(\'input\').focus();
			});
		});
		// -->
		'; ?>

	</script>

	<?php if ($this->_tpl_vars['hasSystemNotifications']): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'notification','op' => 'fetchNotification','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'fetchNotificationUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'fetchNotificationUrl'));?>

		<script type="text/javascript">
			$(function(){
				$.get('<?php echo $this->_tpl_vars['fetchNotificationUrl']; ?>
', null,
					function(data){
						var notifications = data.content;
						var i, l;
						if (notifications && notifications.general) {
							$.each(notifications.general, function(notificationLevel, notificationList) {
								$.each(notificationList, function(notificationId, notification) {
									$.pnotify(notification);
								});
							});
						}
				}, 'json');
			});
		</script>
	<?php endif; ?>
	<?php echo $this->_tpl_vars['additionalHeadData']; ?>


			<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/public/assets/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/public/assets/js/jm.js"></script>

	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/public/assets/css/jm.css" type="text/css" />
</head>
<body id="pkp-<?php echo ((is_array($_tmp=$this->_tpl_vars['pageTitle'])) ? $this->_run_mod_handler('replace', true, $_tmp, '.', '-') : smarty_modifier_replace($_tmp, '.', '-')); ?>
">

<!--<div id="container">-->
<div id="header" class="jumbotron masthead">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
					<a id="headerTitle" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index'), $this);?>
">
						<h1>
						<?php if ($this->_tpl_vars['displayPageHeaderLogo'] && is_array ( $this->_tpl_vars['displayPageHeaderLogo'] )): ?>
							<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogo']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" <?php if ($this->_tpl_vars['displayPageHeaderLogoAltText'] != ''): ?>alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderLogoAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?>alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pageHeaderLogo.altText"), $this);?>
"<?php endif; ?> />
						<?php endif; ?>
						<?php if ($this->_tpl_vars['displayPageHeaderTitle'] && is_array ( $this->_tpl_vars['displayPageHeaderTitle'] )): ?>
							<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitle']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitle']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitle']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" <?php if ($this->_tpl_vars['displayPageHeaderTitleAltText'] != ''): ?>alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayPageHeaderTitleAltText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?>alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pageHeader.altText"), $this);?>
"<?php endif; ?> />
						<?php elseif ($this->_tpl_vars['displayPageHeaderTitle']): ?>
							<?php echo $this->_tpl_vars['displayPageHeaderTitle']; ?>

						<?php elseif ($this->_tpl_vars['alternatePageHeader']): ?>
							<?php echo $this->_tpl_vars['alternatePageHeader']; ?>

						<?php elseif ($this->_tpl_vars['siteTitle']): ?>
							<?php echo $this->_tpl_vars['siteTitle']; ?>

						<?php else: ?>
							<?php echo $this->_tpl_vars['applicationName']; ?>

						<?php endif; ?>
						</h1>
					</a>
					<p>Journal Managers is committed to providing and discriminating World-Class Information Globally</p>
			</div>
			<div class="col-md-2">	
					<ul class="social-icons list-inline">
						<li><a class="fa fa-facebook"></a></li>
						<li><a class="fa fa-twitter"></a></li>	
						<li><a class="fa fa-google"></a></li>	
						<li><a class="fa fa-rss"></a></li> 
					</ul>
					<div class="clearfix clear"></div>
			</div>
		</div>
	</div>	</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/navbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="body" class="container">

<div class="row">


<div id="main" class="col-md-9">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/breadcrumbs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2 class="page-header page-title"><?php echo $this->_tpl_vars['pageTitleTranslated']; ?>
</h2>

<?php if ($this->_tpl_vars['pageSubtitle'] && ! $this->_tpl_vars['pageSubtitleTranslated']): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageSubtitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageSubtitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageSubtitleTranslated'));?>
<?php endif; ?>
<?php if ($this->_tpl_vars['pageSubtitleTranslated']): ?>
	<h3><?php echo $this->_tpl_vars['pageSubtitleTranslated']; ?>
</h3>
<?php endif; ?>

<div id="content">
