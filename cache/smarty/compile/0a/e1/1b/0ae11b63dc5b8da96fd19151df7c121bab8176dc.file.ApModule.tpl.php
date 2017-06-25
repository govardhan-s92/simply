<?php /* Smarty version Smarty-3.1.19, created on 2017-05-19 09:40:14
         compiled from "/opt/lampp/htdocs/simplybasket.com/prestashop/modules/appagebuilder/views/templates/hook/ApModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:291933872591ef5be18ea03-49008698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ae11b63dc5b8da96fd19151df7c121bab8176dc' => 
    array (
      0 => '/opt/lampp/htdocs/simplybasket.com/prestashop/modules/appagebuilder/views/templates/hook/ApModule.tpl',
      1 => 1447747635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291933872591ef5be18ea03-49008698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'apContent' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591ef5be1ac589_55010675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591ef5be1ac589_55010675')) {function content_591ef5be1ac589_55010675($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

<?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
<?php }} ?>
