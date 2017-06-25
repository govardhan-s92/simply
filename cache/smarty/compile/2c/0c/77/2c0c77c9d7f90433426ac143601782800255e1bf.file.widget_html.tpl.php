<?php /* Smarty version Smarty-3.1.19, created on 2017-05-19 09:40:12
         compiled from "/opt/lampp/htdocs/simplybasket.com/prestashop/modules/leobootstrapmenu/views/widgets/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1518920678591ef5bca6bff8-92415096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c0c77c9d7f90433426ac143601782800255e1bf' => 
    array (
      0 => '/opt/lampp/htdocs/simplybasket.com/prestashop/modules/leobootstrapmenu/views/widgets/widget_html.tpl',
      1 => 1447747636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1518920678591ef5bca6bff8-92415096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591ef5bcad5918_20594034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591ef5bcad5918_20594034')) {function content_591ef5bcad5918_20594034($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
