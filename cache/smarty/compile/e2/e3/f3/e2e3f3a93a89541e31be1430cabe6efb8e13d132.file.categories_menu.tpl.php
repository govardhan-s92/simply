<?php /* Smarty version Smarty-3.1.19, created on 2017-05-19 09:42:16
         compiled from "/opt/lampp/htdocs/simplybasket.com/prestashop/modules/leoblog/views/templates/hook/categories_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:370782102591ef6384469d7-17436367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e3f3a93a89541e31be1430cabe6efb8e13d132' => 
    array (
      0 => '/opt/lampp/htdocs/simplybasket.com/prestashop/modules/leoblog/views/templates/hook/categories_menu.tpl',
      1 => 1447747636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '370782102591ef6384469d7-17436367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tree' => 0,
    'currentCategory' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591ef63849a527_01575903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591ef63849a527_01575903')) {function content_591ef63849a527_01575903($_smarty_tpl) {?>

<!-- Block categories module -->
    <?php if ($_smarty_tpl->tpl_vars['tree']->value) {?>
    <div id="categories_blog_menu" class="block blog-menu">
      <h4 class="title_block"><?php if (isset($_smarty_tpl->tpl_vars['currentCategory']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentCategory']->value->title, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Blog Categories','mod'=>'leoblog'),$_smarty_tpl);?>
<?php }?></h4>
        <div class="block_content">
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </div>
    </div>
    <?php }?>
    <!-- /Block categories module -->
<?php }} ?>
