<?php /* Smarty version Smarty-3.1.19, created on 2017-05-19 09:40:17
         compiled from "/opt/lampp/htdocs/simplybasket.com/prestashop/themes/leo_monica/modules/appagebuilder/views/templates/hook/BlogItem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1571075893591ef5c1069e95-05927289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2495fdc33e3bd3acf1f416a5ce1119b3da0317d0' => 
    array (
      0 => '/opt/lampp/htdocs/simplybasket.com/prestashop/themes/leo_monica/modules/appagebuilder/views/templates/hook/BlogItem.tpl',
      1 => 1447747626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1571075893591ef5c1069e95-05927289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog' => 0,
    'formAtts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591ef5c124b344_35242155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591ef5c124b344_35242155')) {function content_591ef5c124b344_35242155($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/simplybasket.com/prestashop/tools/smarty/plugins/modifier.date_format.php';
?>
<!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
<div class="blog-container" itemscope itemtype="https://schema.org/Blog">
    <div class="left-block">
        <div class="blog-image-container">
            <a class="blog_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima']) {?>
				<img class="replace-2x img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['preview_url'];?>
" 
					 alt="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" 
					 title="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" 
					 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width'])) {?>width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width'], ENT_QUOTES, 'UTF-8', true);?>
" <?php }?>
					 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height'])) {?> height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>
					 itemprop="image" />
			<?php }?>
            </a>
        </div>
    </div>
    <div class="right-block">
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['show_title']) {?>
        <h5 class="blog-title" itemprop="name"><a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['title']),80,'...');?>
</a></h5>
        <?php }?>
		
		<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut']) {?>
		<span class="author">
			<span class="icon-author"> <?php echo smartyTranslate(array('s'=>'Author','mod'=>'appagebuilder'),$_smarty_tpl);?>
:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['author'], ENT_QUOTES, 'UTF-8', true);?>

		</span>
		<?php }?>
		
		<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat']) {?>
		<span class="cat"> <span class="icon-list"><?php echo smartyTranslate(array('s'=>'In','mod'=>'appagebuilder'),$_smarty_tpl);?>
</span> 
			<a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['category_link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['category_title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
		</span>
		<?php }?>
		
		<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre']) {?>
		<span class="created"><span class=""></span>
			<span class="icon-calendar"> <?php echo smartyTranslate(array('s'=>'On','mod'=>'appagebuilder'),$_smarty_tpl);?>
 </span> 
			<time class="date" datetime="<?php echo smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y");?>
">
				<?php echo smartyTranslate(array('s'=>smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%A"),'mod'=>'appagebuilder'),$_smarty_tpl);?>
,	<!-- day of week -->
				<?php echo smartyTranslate(array('s'=>smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%B"),'mod'=>'appagebuilder'),$_smarty_tpl);?>
		<!-- month-->
				<?php echo smartyTranslate(array('s'=>smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%e"),'mod'=>'appagebuilder'),$_smarty_tpl);?>
,	<!-- day of month -->
				<?php echo smartyTranslate(array('s'=>smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"),'mod'=>'appagebuilder'),$_smarty_tpl);?>
		<!-- year -->
			</time>
		</span>
		<?php }?>
		
		<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun']) {?>
		<span class="nbcomment">
			<span class="icon-comment"> <?php echo smartyTranslate(array('s'=>'Comment','mod'=>'appagebuilder'),$_smarty_tpl);?>
:</span> <?php echo intval($_smarty_tpl->tpl_vars['blog']->value['comment_count']);?>

		</span>
		<?php }?>
		
		<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits']) {?>
		<span class="hits">
			<span class="icon-hits"> <?php echo smartyTranslate(array('s'=>'Hits','mod'=>'appagebuilder'),$_smarty_tpl);?>
:</span> <?php echo intval($_smarty_tpl->tpl_vars['blog']->value['hits']);?>

		</span>	
		<?php }?>
		
		<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_desc'])&&$_smarty_tpl->tpl_vars['formAtts']->value['show_desc']) {?>
        <p class="blog-desc" itemprop="description">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),160,'...');?>

        </p>
        <?php }?>
		
    </div>
</div>

<!---
	Translation Day of Week - NOT REMOVE
	<?php echo smartyTranslate(array('s'=>'Sunday','mod'=>'appagebuilder'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Monday','mod'=>'appagebuilder'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Tuesday','mod'=>'appagebuilder'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Wednesday','mod'=>'appagebuilder'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Thursday','mod'=>'appagebuilder'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Friday','mod'=>'appagebuilder'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Saturday','mod'=>'appagebuilder'),$_smarty_tpl);?>

-->
<!---
	Translation Month - NOT REMOVE
		<?php echo smartyTranslate(array('s'=>'January','mod'=>'appagebuilder'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'February','mod'=>'appagebuilder'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'March','mod'=>'appagebuilder'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'April','mod'=>'appagebuilder'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'May','mod'=>'appagebuilder'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'June','mod'=>'appagebuilder'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'July','mod'=>'appagebuilder'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'August','mod'=>'appagebuilder'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'September','mod'=>'appagebuilder'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'October','mod'=>'appagebuilder'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'November','mod'=>'appagebuilder'),$_smarty_tpl);?>

		<?php echo smartyTranslate(array('s'=>'December','mod'=>'appagebuilder'),$_smarty_tpl);?>

--><?php }} ?>
