<?php /* Smarty version Smarty-3.1.19, created on 2017-05-19 09:53:28
         compiled from "/opt/lampp/htdocs/simplybasket.com/prestashop/themes/leo_monica/profiles/profile1443876875/id_gencode_55c9f34d01a8f_1439298381.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1271725383591ef8d81a7359-00284733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31ddebe2ff486416984b9f9a9980fd240efe3bd2' => 
    array (
      0 => '/opt/lampp/htdocs/simplybasket.com/prestashop/themes/leo_monica/profiles/profile1443876875/id_gencode_55c9f34d01a8f_1439298381.tpl',
      1 => 1495202008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1271725383591ef8d81a7359-00284733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591ef8d81f12e0_55526695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591ef8d81f12e0_55526695')) {function content_591ef8d81f12e0_55526695($_smarty_tpl) {?>                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">                                        <img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>                                    </a><?php }} ?>
