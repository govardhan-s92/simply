<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 00:15:57
         compiled from "/opt/lampp/htdocs/simplybasket.com/prestashop/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApRow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308848399591fc2fdd7f986-30856207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a05e1c264cb6fde79eed95fc5af99f341f18adcf' => 
    array (
      0 => '/opt/lampp/htdocs/simplybasket.com/prestashop/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApRow.tpl',
      1 => 1447747635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308848399591fc2fdd7f986-30856207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apInfo' => 0,
    'formAtts' => 0,
    'apContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591fc2fddcbad5_25178821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591fc2fddcbad5_25178821')) {function content_591fc2fddcbad5_25178821($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApRow -->
<div <?php if (!isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>id="default_row"<?php }?> class="row group-row<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
    <div class="group-controll-left pull-left">
		<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Drag to sort group','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="group-action gaction-drag label-tooltip"><i class="icon-move"></i> </a>
		&nbsp;
		<div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				<span><?php echo smartyTranslate(array('s'=>'Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span> <span class="caret"></span>
			</button>
			<ul class="dropdown-menu for-group-row" role="menu">
				<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Edit Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="group-action btn-edit" data-type="ApRow"><i class="icon-edit"></i> <?php echo smartyTranslate(array('s'=>'Edit Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
				<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Delete Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
"  class="group-action btn-delete"><i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
				<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Export Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="group-action btn-export" data-type="group"><i class="icon-cloud-download"></i> <?php echo smartyTranslate(array('s'=>'Export Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
				<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Duplicate Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="group-action btn-duplicate "><i class="icon-paste"></i> <?php echo smartyTranslate(array('s'=>'Duplicate Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
				<li><a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Disable or Enable Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="group-action btn-status <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])&&$_smarty_tpl->tpl_vars['formAtts']->value['active']==0) {?> deactive<?php } else { ?> active<?php }?>"><i class="icon-ok"></i> <?php echo smartyTranslate(array('s'=>'Disable or Enable Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
</a></li>
			</ul>
		</div>        
    </div>
    <div class="group-controll-right pull-right">
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Add New Column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="group-action btn-add-column" tabindex="0" data-container="body" data-toggle="popover" data-placement="left" data-trigger="focus"><i class="icon-plus"></i></a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Set width for all column','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="group-action btn-custom" tabindex="0" data-container="body" data-toggle="popover" data-placement="left" data-trigger="focus" ><i class="icon-th"></i></a>
        <a href="javascript:void(0)" title="<?php echo smartyTranslate(array('s'=>'Expand or collapse Group','mod'=>'appagebuilder'),$_smarty_tpl);?>
" class="group-action gaction-toggle label-tooltip"><i class="icon-circle-arrow-down"></i></a>
    </div>
    <div class="group-content">
        <?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?><?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
<?php }?>
    </div>
</div><?php }} ?>
