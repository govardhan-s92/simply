<?php /* Smarty version Smarty-3.1.19, created on 2017-05-19 09:40:16
         compiled from "/opt/lampp/htdocs/simplybasket.com/prestashop/themes/leo_monica/modules/appagebuilder/views/templates/hook/ApManuFacturersCarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36689757591ef5c0b6be62-08235355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94a7a30682800c8b61c011ce1aa4bd0956996168' => 
    array (
      0 => '/opt/lampp/htdocs/simplybasket.com/prestashop/themes/leo_monica/modules/appagebuilder/views/templates/hook/ApManuFacturersCarousel.tpl',
      1 => 1447747626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36689757591ef5c0b6be62-08235355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'formAtts' => 0,
    'manufacturers' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591ef5c0c6b122_75898924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591ef5c0c6b122_75898924')) {function content_591ef5c0c6b122_75898924($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApManuFacturersCarousel -->
<div class="block manufacturers_block exclusive appagebuilder">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php if (!empty($_smarty_tpl->tpl_vars['manufacturers']->value)) {?>
			<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type']=="boostrap") {?>
				<?php echo $_smarty_tpl->getSubTemplate ('./manufacturers_carousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('./manufacturers_owl_carousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
		<?php } else { ?>
			<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No manufacturer at this time.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

</div><?php }} ?>
