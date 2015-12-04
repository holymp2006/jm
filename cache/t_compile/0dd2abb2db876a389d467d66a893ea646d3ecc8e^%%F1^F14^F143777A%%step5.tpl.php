<?php /* Smarty version 2.6.26, created on 2015-12-01 16:35:27
         compiled from manager/setup/step5.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/setup/step5.tpl', 94, false),array('function', 'fieldLabel', 'manager/setup/step5.tpl', 100, false),array('function', 'form_language_chooser', 'manager/setup/step5.tpl', 103, false),array('function', 'translate', 'manager/setup/step5.tpl', 104, false),array('modifier', 'assign', 'manager/setup/step5.tpl', 102, false),array('modifier', 'escape', 'manager/setup/step5.tpl', 118, false),array('modifier', 'date_format', 'manager/setup/step5.tpl', 130, false),)), $this); ?>
<?php $this->assign('pageTitle', "manager.setup.customizingTheLook"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "manager/setup/setupHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<?php echo '
<!--

// Swap the given entries in the select field.
function swapEntries(field, i, j) {
	var tmpLabel = field.options[j].label;
	var tmpVal = field.options[j].value;
	var tmpText = field.options[j].text;
	var tmpSel = field.options[j].selected;
	field.options[j].label = field.options[i].label;
	field.options[j].value = field.options[i].value;
	field.options[j].text = field.options[i].text;
	field.options[j].selected = field.options[i].selected;
	field.options[i].label = tmpLabel;
	field.options[i].value = tmpVal;
	field.options[i].text = tmpText;
	field.options[i].selected = tmpSel;
}

// Move selected items up in the given select list.
function moveUp(field) {
	var i;
	for (i=0; i<field.length; i++) {
		if (field.options[i].selected == true && i>0) {
			swapEntries(field, i-1, i);
		}
	}
}

// Move selected items down in the given select list.
function moveDown(field) {
	var i;
	var max = field.length - 1;
	for (i = max; i >= 0; i=i-1) {
		if(field.options[i].selected == true && i < max) {
			swapEntries(field, i+1, i);
		}
	}
}

// Move selected items from select list a to select list b.
function jumpList(a, b) {
	var i;
	for (i=0; i<a.options.length; i++) {
		if (a.options[i].selected == true) {
			bMax = b.options.length;
			b.options[bMax] = new Option(a.options[i].text);
			b.options[bMax].value = a.options[i].value;
			a.options[i] = null;
			i=i-1;
		}
	}
}

function prepBlockFields() {
	var i;
	var theForm = document.getElementById(\'setupForm\');

	theForm.elements["blockSelectLeft"].value = "";
	for (i=0; i<theForm.blockSelectLeftWidget.options.length; i++) {
		theForm.blockSelectLeft.value += encodeURI(theForm.blockSelectLeftWidget.options[i].value) + " ";
	}

	theForm.blockSelectRight.value = "";
	for (i=0; i<theForm.blockSelectRightWidget.options.length; i++) {
		theForm.blockSelectRight.value += encodeURI(theForm.blockSelectRightWidget.options[i].value) + " ";
	}

	theForm.blockUnselected.value = "";
	for (i=0; i<theForm.blockUnselectedWidget.options.length; i++) {
		theForm.blockUnselected.value += encodeURI(theForm.blockUnselectedWidget.options[i].value) + " ";
	}
	return true;
}

// -->
'; ?>

</script>

<form id="setupForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSetup','path' => '5'), $this);?>
" enctype="multipart/form-data">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
<div width="100%" class="data" class="form-horizontal">
	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage",'class' => "col-sm-2"), $this);?>

		<div width="80%" class="col-sm-10">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','path' => '5','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'setupFormUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'setupFormUrl'));?>

			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'setupForm','url' => $this->_tpl_vars['setupFormUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</div>
	</div>
</div>
<?php endif; ?>
<div id="journalHomepageHeader">
<h3>5.1 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalHomepageHeader"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalHomepageHeaderDescription"), $this);?>
</p>
<div id="journalTitleAndLogo">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalTitle"), $this);?>
</h4>

<div width="100%" class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-2"><input type="radio" name="homeHeaderTitleType[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="homeHeaderTitleType-0" value="0"<?php if (! $this->_tpl_vars['homeHeaderTitleType'][$this->_tpl_vars['formLocale']]): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "homeHeaderTitleType-0",'key' => "manager.setup.useTextTitle"), $this);?>
</div>
		<div class="col-sm-10"><input type="text" name="homeHeaderTitle[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderTitle'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="form-control" /></div>
	</div>

	<div class="form-group">
		<div class="col-sm-2"><input type="radio" name="homeHeaderTitleType[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="homeHeaderTitleType-1" value="1"<?php if ($this->_tpl_vars['homeHeaderTitleType'][$this->_tpl_vars['formLocale']]): ?> checked="checked"<?php endif; ?> /><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "homeHeaderTitleType-1",'key' => "manager.setup.useImageTitle"), $this);?>
</div>
		<p><div class="col-sm-10"><input type="file" name="homeHeaderTitleImage" class="uploadField" /> </p><input type="submit" name="uploadHomeHeaderTitleImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="btn btn-primary" /></div>
	</div>
</div>

<p>
<?php if ($this->_tpl_vars['homeHeaderTitleImage'][$this->_tpl_vars['formLocale']]): ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderTitleImage'][$this->_tpl_vars['formLocale']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderTitleImage'][$this->_tpl_vars['formLocale']]['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteHomeHeaderTitleImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="btn btn-primary" />
</p>


<p>
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderTitleImage'][$this->_tpl_vars['formLocale']]['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderTitleImage'][$this->_tpl_vars['formLocale']]['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderTitleImage'][$this->_tpl_vars['formLocale']]['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" style="border: 0;" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.homePageHeader.altText"), $this);?>
" />
</p>

<!-- -->

<div class="form-horizontal">
	<div class="form-group">
		<strong><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'homeHeaderTitleImageAltText','key' => "common.altText",'class' => "col-sm-2 control-label"), $this);?>
</strong>
		<div width="80%" class="col-sm-10"><input type="text" name="homeHeaderTitleImageAltText[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderTitleImageAltText'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div valign="top">
		<div>&nbsp;</div>
		<div class="value"><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.altTextInstructions"), $this);?>
</span></div>
	</div>
</div>
<?php endif; ?>
</div>
<div id="journalLogoImage">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalLogo"), $this);?>
</h4>


<div width="100%" class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-2 control-label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useImageLogo"), $this);?>
</div>
		<p><div class="col-sm-10"><input type="file" name="homeHeaderLogoImage" class="uploadField" /> </p><input type="submit" name="uploadHomeHeaderLogoImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="btn btn-primary" /></div>
	</div>
</div>
<p>
<?php if ($this->_tpl_vars['homeHeaderLogoImage'][$this->_tpl_vars['formLocale']]): ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderLogoImage'][$this->_tpl_vars['formLocale']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderLogoImage'][$this->_tpl_vars['formLocale']]['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteHomeHeaderLogoImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="btn btn-primary" />
</p>
<p>
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderLogoImage'][$this->_tpl_vars['formLocale']]['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderLogoImage'][$this->_tpl_vars['formLocale']]['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderLogoImage'][$this->_tpl_vars['formLocale']]['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" style="border: 0;" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.homePageHeaderLogo.altText"), $this);?>
" />
</p>

<div class="form-horizontal">
	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'homeHeaderLogoImageAltText','key' => "common.altText",'class' => "col-sm-3 control-label"), $this);?>

		<div class="col-sm-9"><input type="text" name="homeHeaderLogoImageAltText[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['homeHeaderLogoImageAltText'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div>
		<td class="value"><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.altTextInstructions"), $this);?>
</span></td>
	</div>
</div>
<?php endif; ?>
</div>

<div id="journalThumbnail">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalThumbnail"), $this);?>
</h4>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-2 control-label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useThumbnail"), $this);?>
</div>
		<p><div class="col-sm-10"><input type="file" name="journalThumbnail" class="uploadField" /></p> <input type="submit" name="uploadJournalThumbnail" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="btn btn-primary" /></div>
	</div>
</div>
<p>
<?php if ($this->_tpl_vars['journalThumbnail'][$this->_tpl_vars['formLocale']]): ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['journalThumbnail'][$this->_tpl_vars['formLocale']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['journalThumbnail'][$this->_tpl_vars['formLocale']]['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteJournalThumbnail" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="btn btn-primary" />
</p>
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['journalThumbnail'][$this->_tpl_vars['formLocale']]['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['journalThumbnail'][$this->_tpl_vars['formLocale']]['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['journalThumbnail'][$this->_tpl_vars['formLocale']]['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" style="border: 0;" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.journalThumbnail.altText"), $this);?>
" />
<p>
<div class="form-horizontal">
	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'journalThumbnailAltText','key' => "common.altText",'class' => "col-sm-3 control-label"), $this);?>

		<div class="col-sm-9"><input type="text" name="journalThumbnailAltText[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['journalThumbnailAltText'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div>
		<div class="value"><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.altTextInstructions"), $this);?>
</span></div>
	</div>
</div>
</p>
<?php endif; ?>
</div>
</div>
<hr>

<div id="journalHomepageContent">
<h3>5.2 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalHomepageContent"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalHomepageContentDescription"), $this);?>
</p>
</div>

<div id="journalDescription">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalDescription"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalDescriptionDescription"), $this);?>
</p>
<div class="form-group journal-setup">
	<p><textarea id="description" name="description[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" rows="3" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['description'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></p>
</div>
</div>
<div id="homepageImage">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.homepageImage"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.homepageImageDescription"), $this);?>
</p>

<div width="100%" class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-3 control-label"><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.homepageImage"), $this);?>
</div></strong>
		<p><div class="col-sm-9"><input type="file" name="homepageImage" class="uploadField" /></p> <input type="submit" name="uploadHomepageImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="btn btn-primary" /></div>
	</div>
</div>

<?php if ($this->_tpl_vars['homepageImage'][$this->_tpl_vars['formLocale']]): ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage'][$this->_tpl_vars['formLocale']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage'][$this->_tpl_vars['formLocale']]['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteHomepageImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="btn btn-primary" />
<br />
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage'][$this->_tpl_vars['formLocale']]['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage'][$this->_tpl_vars['formLocale']]['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage'][$this->_tpl_vars['formLocale']]['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" style="border: 0;" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.journalHomepageImage.altText"), $this);?>
" />
<br />
<div class="form-horizontal">
	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'homepageImageAltText','key' => "common.altText",'class' => "col-sm-2 control-label"), $this);?>

		<div class="col-sm-10"><input type="text" name="homepageImageAltText[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImageAltText'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div>
		<div class="value"><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.altTextInstructions"), $this);?>
</span></div>
	</div>
</div>
<?php endif; ?>

<div id="currentIssue">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.currentIssue"), $this);?>
</h4>

<div class="form-group">
	<div class="col-sm-12 checkbox">
		<label for="displayCurrentIssue">
			<input type="checkbox" name="displayCurrentIssue" id="displayCurrentIssue" value="1" <?php if ($this->_tpl_vars['displayCurrentIssue']): ?> checked="checked"<?php endif; ?> /><strong>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.displayCurrentIssue"), $this);?>
</strong>
		</label>
	</div>
</div>
</div>

<div id="additionalContent">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.additionalContent"), $this);?>
</h4>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.additionalContentDescription"), $this);?>
</p>
<div class="form-group journal-setup">
	<p><textarea name="additionalHomeContent[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="additionalHomeContent" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['additionalHomeContent'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></p>
</div>
</div>
</div>
<hr>

<div id="journalPageHeaderInfo">
<h3>5.3 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalPageHeader"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalPageHeaderDescription"), $this);?>
</p>
<div id="pageHeaderTitle">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalTitle"), $this);?>
</h4>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-2"><input type="radio" name="pageHeaderTitleType[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="pageHeaderTitleType-0" value="0"<?php if (! $this->_tpl_vars['pageHeaderTitleType'][$this->_tpl_vars['formLocale']]): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "pageHeaderTitleType-0",'key' => "manager.setup.useTextTitle"), $this);?>
</div>
		<div class="col-sm-10"><input type="text" name="pageHeaderTitle[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderTitle'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div class="form-group">
		<div class="col-sm-2 control-label"><input type="radio" name="pageHeaderTitleType[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="pageHeaderTitleType-1" value="1"<?php if ($this->_tpl_vars['pageHeaderTitleType'][$this->_tpl_vars['formLocale']]): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "pageHeaderTitleType-1",'key' => "manager.setup.useImageTitle"), $this);?>
</div>
		<p><div class="col-sm-10"><input type="file" name="pageHeaderTitleImage" class="uploadField" /> </p><input type="submit" name="uploadPageHeaderTitleImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="btn btn-primary" /></div>
	</div>
</div>
<p>
<?php if ($this->_tpl_vars['pageHeaderTitleImage'][$this->_tpl_vars['formLocale']]): ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderTitleImage'][$this->_tpl_vars['formLocale']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderTitleImage'][$this->_tpl_vars['formLocale']]['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deletePageHeaderTitleImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" />
</p>
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderTitleImage'][$this->_tpl_vars['formLocale']]['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderTitleImage'][$this->_tpl_vars['formLocale']]['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderTitleImage'][$this->_tpl_vars['formLocale']]['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" style="border: 0;" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pageHeader.altText"), $this);?>
" />
<p>
<div class="form-horizontal">
	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'pageHeaderTitleImageAltText','key' => "common.altText",'class' => "col-sm-2 control-label"), $this);?>

		<div class="col-sm-10"><input type="text" name="pageHeaderTitleImageAltText[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderTitleImageAltText'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div class="form-group">
		<div class="value"><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.altTextInstructions"), $this);?>
</span></div>
	</div>
</div>
</p>
<?php endif; ?>
</div>
<div id="journalLogo">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalLogo"), $this);?>
</h4>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-2 control-label"><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useImageLogo"), $this);?>
</strong></div>
		<p><div class="col-sm-10"><input type="file" name="pageHeaderLogoImage" class="uploadField" /> </p><input type="submit" name="uploadPageHeaderLogoImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="btn btn-primary" /></div>
	</div>
</div>
<p>
<?php if ($this->_tpl_vars['pageHeaderLogoImage'][$this->_tpl_vars['formLocale']]): ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderLogoImage'][$this->_tpl_vars['formLocale']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderLogoImage'][$this->_tpl_vars['formLocale']]['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deletePageHeaderLogoImage" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="btn btn-primary" />
</p>
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderLogoImage'][$this->_tpl_vars['formLocale']]['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderLogoImage'][$this->_tpl_vars['formLocale']]['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderLogoImage'][$this->_tpl_vars['formLocale']]['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" style="border: 0;" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pageHeaderLogo.altText"), $this);?>
" />
<p>
<div width="100%" class="form-horizontal">
	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'pageHeaderLogoImageAltText','key' => "\"common.altText class=\"col-sm-2"), $this);?>

		<div class="col-sm-10"><input type="text" name="pageHeaderLogoImageAltText[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pageHeaderLogoImageAltText'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="form-control" /></div>
	</div>
	<div>
		<div class="value"><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.altTextInstructions"), $this);?>
</span></div>
	</div>
</div>
</p>
<?php endif; ?>
</div>

<div id="journalFavicon">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalFavicon"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalFaviconDescription"), $this);?>
</p>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-2 control-label"><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useImageLogo"), $this);?>
</strong></div>
		<p><div class="col-sm-10"><input type="file" name="journalFavicon" class="uploadField" /> </p><input type="submit" name="uploadJournalFavicon" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="btn btn-primary" /></div>
	</div>
</div>

<?php if ($this->_tpl_vars['journalFavicon'][$this->_tpl_vars['formLocale']]): ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['journalFavicon'][$this->_tpl_vars['formLocale']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['journalFavicon'][$this->_tpl_vars['formLocale']]['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteJournalFavicon" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="btn btn-primary" />

<p>&nbsp;</p
<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['journalFavicon'][$this->_tpl_vars['formLocale']]['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="16px" height="16px" style="border: 0;" alt="favicon" />
<?php endif; ?>
</div>

<div id="alternateHeader">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.alternateHeader"), $this);?>
</h4>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.alternateHeaderDescription"), $this);?>
</p>
<div class="form-group journal-setup">
	<p><textarea name="journalPageHeader[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="journalPageHeader" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalPageHeader'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></p>
</div>
</div>
</div>
<hr>

<div id="journalPageFooterInfo">
<h3>5.4 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalPageFooter"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalPageFooterDescription"), $this);?>
</p>
<div class="form-group journal-setup">
	<p><textarea name="journalPageFooter[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="journalPageFooter" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalPageFooter'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></p>
</div>
</div>

<hr>

<div id="navigationBar">
<h3>5.5 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.navigationBar"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.itemsDescription"), $this);?>
</p>





<div class="form-horizontal">
<?php $_from = $this->_tpl_vars['navItems'][$this->_tpl_vars['formLocale']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['navItems'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['navItems']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['navItemId'] => $this->_tpl_vars['navItem']):
        $this->_foreach['navItems']['iteration']++;
?>
	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "navItems-".($this->_tpl_vars['navItemId'])."-name",'key' => "manager.setup.labelName",'class' => "col-sm-2 control-label"), $this);?>

			<div class="col-sm-10"><input type="text" name="navItems[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][name]" id="navItems-<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="form-control" /></div><br></br> <div class="col-md-offset-2 col-sm-10"><input type="submit" name="delNavItem[<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="btn btn-primary" /></div>
			<div class="form-group">
				<div class="col-sm-10 col-md-offset-2 checkbox">
					<label for="navItems-<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-isLiteral">
						<input type="checkbox" name="navItems[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][isLiteral]" id="navItems-<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-isLiteral" value="1"<?php if ($this->_tpl_vars['navItem']['isLiteral']): ?> checked="checked"<?php endif; ?> /><strong>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.navItemIsLiteral"), $this);?>
</strong>
					</label>
				</div>
			</div>
	</div>


	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "navItems-".($this->_tpl_vars['navItemId'])."-url",'key' => "common.url",'class' => "col-sm-2 control-label"), $this);?>

			<div class="col-sm-10">
				<input type="text" name="navItems[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][url]" id="navItems-<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['navItem']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" maxlength="255" class="form-control" /> </div>		
			<div class="form-group">
				<div class="col-sm-10 col-md-offset-2 checkbox">
					<label for="navItems-<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-isAbsolute">
						<input type="checkbox" name="navItems[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][isAbsolute]" id="navItems-<?php echo ((is_array($_tmp=$this->_tpl_vars['navItemId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-isAbsolute" value="1"<?php if ($this->_tpl_vars['navItem']['isAbsolute']): ?> checked="checked"<?php endif; ?> /><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.navItemIsAbsolute"), $this);?>
</strong>
					</label>
				</div>
			</div>
	</div>

	<?php if (! ($this->_foreach['navItems']['iteration'] == $this->_foreach['navItems']['total'])): ?>
	<div>
		&nbsp;
	</div>
	<?php endif; ?>
<?php endforeach; else: ?>



	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "navItems-0-name",'key' => "\"manager.setup.labelName class=\"col-sm-2"), $this);?>

		<div class="col-sm-10">
			<input type="text" name="navItems[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][0][name]" id="navItems-0-name" size="30" maxlength="90" class="form-control" />
		</div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2 checkbox">
				<label for="navItems-0-isLiteral">
					<input type="checkbox" name="navItems[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][0][isLiteral]" id="navItems-0-isLiteral" value="1" /><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.navItemIsLiteral"), $this);?>
</strong>
				</label>
			</div>
		</div>
	</div>



	<div class="form-group">
		<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => "navItems-0-url",'key' => "common.url",'class' => "col-sm-2 control-label"), $this);?>

		<div class="col-sm-10">
			<input type="text" name="navItems[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][0][url]" id="navItems-0-url" size="60" maxlength="255" class="form-control" />
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2 checkbox">
				<label for="navItems-0-isAbsolute">
					<input type="checkbox" name="navItems[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
][0][isAbsolute]" id="navItems-0-isAbsolute" value="1" /><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.navItemIsAbsolute"), $this);?>
</strong>
				</label>
			</div>
		</div>
	</div>
<?php endif; unset($_from); ?>
</div>

<p><input type="submit" name="addNavItem" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.addNavItem"), $this);?>
" class="btn btn-primary" /></p>
</div>

<hr>

<div id="journalLayout">
<h3>5.6 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalLayout"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalLayoutDescription"), $this);?>
</p>

<div class="form-horizontal">
<div class="form-group">
	<div class="col-sm-3 control-label"><label for="journalTheme"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.journalTheme"), $this);?>
</label></div>
		<div class="col-sm-8">
			<select name="journalTheme" class="form-control" id="journalTheme"<?php if (empty ( $this->_tpl_vars['journalThemes'] )): ?> disabled="disabled"<?php endif; ?>>
				<option value=""><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</option>
				<?php $_from = $this->_tpl_vars['journalThemes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['path'] => $this->_tpl_vars['journalThemePlugin']):
?>
					<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['path'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['path'] == $this->_tpl_vars['journalTheme']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['journalThemePlugin']->getDisplayName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		</div>
		
</div>
<div>
	<div class="col-sm-3 control-label"><label for="journalStyleSheet"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.useJournalStyleSheet"), $this);?>
</label></div>
	<p><div class="col-sm-9"><input type="file" name="journalStyleSheet" id="journalStyleSheet" class="uploadField" /> </p><input type="submit" name="uploadJournalStyleSheet" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="btn btn-primary" /></div>
</div>
</div>

<p><br></br><br></br></p>

<?php if ($this->_tpl_vars['journalStyleSheet']): ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
: <a href="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['journalStyleSheet']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['journalStyleSheet']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['journalStyleSheet']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
 <input type="submit" name="deleteJournalStyleSheet" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="btn btn-primary" />
<?php endif; ?>

<table id="assignBlocksToSidebars" border="0" align="center" style="width: 100%;">
	<tr align="center">
		<td rowspan="2" id="assignBlocksToSidebarLeft" style="with: 30%;" class="text-success">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layout.leftSidebar"), $this);?>
<br/>
			<input class="btn btn-success" style="width: 100%;" type="button" value="&uarr;" onclick="moveUp(this.form.elements['blockSelectLeftWidget']);" /><br/>
			<select name="blockSelectLeftWidget" multiple="multiple" size="10" class="form-control" style="width: 100%; height:200px">
				<?php $_from = $this->_tpl_vars['leftBlockPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
					<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['block']->getName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['block']->getDisplayName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</option>
				<?php endforeach; else: ?>
					<option value=""></option>
				<?php endif; unset($_from); ?>
			</select><br/>
			<input class="btn btn-success" style="width: 100%;" type="button" value="&darr;" onclick="moveDown(this.form.elements['blockSelectLeftWidget']);" />
		</td>
		<td>
			<input class="btn btn-info" style="width: 100%;" type="button" value="&larr;" onclick="jumpList(this.form.elements['blockUnselectedWidget'],this.form.elements['blockSelectLeftWidget']);" /><br/>
			<input class="btn btn-info" style="width: 100%;" type="button" value="&rarr;" onclick="jumpList(this.form.elements['blockSelectLeftWidget'],this.form.elements['blockUnselectedWidget']);" />
		</td>
		<td valign="top" id="assignBlocksToSidebarUnselected" style="width: 30%;" class="text-success">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layout.unselected"), $this);?>
<br/>
			<select name="blockUnselectedWidget" multiple="multiple" size="10" class="form-control" style="width: 100%; height:180px;" >
				<?php $_from = $this->_tpl_vars['disabledBlockPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
					<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['block']->getName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['block']->getDisplayName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</option>
				<?php endforeach; else: ?>
					<option value=""></option>
				<?php endif; unset($_from); ?>
			</select>
		</td>
		<td>
			<input class="btn btn-info" style="width: 100%;" type="button" value="&larr;" onclick="jumpList(this.form.elements['blockSelectRightWidget'],this.form.elements['blockUnselectedWidget']);" /><br/>
			<input class="btn btn-info" style="width: 100%;" type="button" value="&rarr;" onclick="jumpList(this.form.elements['blockUnselectedWidget'],this.form.elements['blockSelectRightWidget']);" />
		</td>
		<td rowspan="2" id="assignBlocksToSidebarRight" style="width: 30%;" class="text-success">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.layout.rightSidebar"), $this);?>
<br/>
			<input class="btn btn-success" style="width: 100%;" type="button" value="&uarr;" onclick="moveUp(this.form.elements['blockSelectRightWidget']);" /><br/>
			<select name="blockSelectRightWidget" multiple="multiple" size="10" class="form-control" style="width: 100%; height:200px" >
				<?php $_from = $this->_tpl_vars['rightBlockPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
					<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['block']->getName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['block']->getDisplayName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</option>
				<?php endforeach; else: ?>
					<option value=""></option>
				<?php endif; unset($_from); ?>
			</select><br/>
			<input class="btn btn-success" style="width: 100%;" type="button" value="&darr;" onclick="moveDown(this.form.elements['blockSelectRightWidget']);" />
		</td>
	</tr>
	<tr align="center">
		<td colspan="3" valign="top" height="60px">
			<input class="btn btn-info" style="width: 100%;" type="button" value="&larr;" onclick="jumpList(this.form.elements['blockSelectRightWidget'],this.form.elements['blockSelectLeftWidget']);" /><br/>
			<input class="btn btn-info" style="width: 100%;" type="button" value="&rarr;" onclick="jumpList(this.form.elements['blockSelectLeftWidget'],this.form.elements['blockSelectRightWidget']);" />
		</td>
	</tr>
</table>
<input type="hidden" name="blockSelectLeft" value="" />
<input type="hidden" name="blockSelectRight" value="" />
<input type="hidden" name="blockUnselected" value="" />
</div>
<hr>
<div id="setupInfo">
<h3>5.7 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.information"), $this);?>
</h3>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.information.description"), $this);?>
</p>

<div id="infoForReaders"><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.information.forReaders"), $this);?>
</h4>
<div class="form-group journal-setup">
	<p><textarea name="readerInformation[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="readerInformation" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['readerInformation'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></p></div>
</div>
<div id="infoForAuth"><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.information.forAuthors"), $this);?>
</h4>
<div class="form-group journal-setup">
	<p><textarea name="authorInformation[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="authorInformation" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['authorInformation'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></p></div>
</div>
<div id="infoForLibs"><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.information.forLibrarians"), $this);?>
</h4>
<div class="form-group journal-setup">
	<p><textarea name="librarianInformation[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="librarianInformation" rows="12" cols="60" class="form-control"><?php echo ((is_array($_tmp=$this->_tpl_vars['librarianInformation'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></p></div>
</div>
</div>

<hr>

<div id="lists">
<h3>5.8 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.lists"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.listsDescription"), $this);?>
</p>

<div class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-3 control-label"><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.itemsPerPage"), $this);?>
</strong></div>
		<p><div class="col-sm-6"><input type="text" size="3" name="itemsPerPage" class="form-control" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['itemsPerPage'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" /></div>
	</div>
	<div class="form-group">
		<div class="col-sm-3 control-label"><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.numPageLinks"), $this);?>
</strong></div>
		<p><div class="col-sm-6"><input type="text" size="3" name="numPageLinks" class="form-control" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['numPageLinks'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" /></div>
	</div>
</div>

</div>

<hr>

<p><input type="submit" onclick="prepBlockFields()" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.saveAndContinue"), $this);?>
" class="btn btn-primary" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="btn btn-primary btn-warning" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setup','escape' => false), $this);?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form> <!-- end form -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>