<?php /*%%SmartyHeaderCode:130023704591ef5be257f66-16804202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f321572af3bad006c8b4c791921a0091ced62697' => 
    array (
      0 => '/opt/lampp/htdocs/simplybasket.com/prestashop/themes/leo_monica/modules/blocksearch/blocksearch-top.tpl',
      1 => 1447747628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130023704591ef5be257f66-16804202',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_592a34e4bdd1d4_33171754',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a34e4bdd1d4_33171754')) {function content_592a34e4bdd1d4_33171754($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top">
	<form id="searchbox" class="clearfix" method="get" action="//localhost/simplybasket.com/prestashop/en/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-outline-inverse fa fa-search">&nbsp;</button> 
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
