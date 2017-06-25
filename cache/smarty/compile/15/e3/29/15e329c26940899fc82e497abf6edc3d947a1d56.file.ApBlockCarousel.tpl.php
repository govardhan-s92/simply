<?php /* Smarty version Smarty-3.1.19, created on 2017-05-19 09:40:16
         compiled from "/opt/lampp/htdocs/simplybasket.com/prestashop/themes/leo_monica/modules/appagebuilder/views/templates/hook/testimonials-h3/ApBlockCarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1199185202591ef5c08e1332-80470574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15e329c26940899fc82e497abf6edc3d947a1d56' => 
    array (
      0 => '/opt/lampp/htdocs/simplybasket.com/prestashop/themes/leo_monica/modules/appagebuilder/views/templates/hook/testimonials-h3/ApBlockCarousel.tpl',
      1 => 1447747626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1199185202591ef5c08e1332-80470574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'formAtts' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591ef5c09203f7_90492871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591ef5c09203f7_90492871')) {function content_591ef5c09203f7_90492871($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApBlockCarousel -->
<div class="block block_carousel exclusive appagebuilder">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value;?>

	<div class="block_content">
		<?php if (!empty($_smarty_tpl->tpl_vars['formAtts']->value['slides'])) {?>
			<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type']=='boostrap') {?>
				<?php echo $_smarty_tpl->getSubTemplate ('./ApBlockCarouselItem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('./ApBlockOwlCarouselItem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
		<?php } else { ?>
			<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No slide at this time.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value;?>

</div><?php }} ?>
