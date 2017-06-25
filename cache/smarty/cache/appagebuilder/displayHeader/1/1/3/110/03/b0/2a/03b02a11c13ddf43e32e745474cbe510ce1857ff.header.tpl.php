<?php /*%%SmartyHeaderCode:773349923591ef5bb8e83c9-96845787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03b02a11c13ddf43e32e745474cbe510ce1857ff' => 
    array (
      0 => '/opt/lampp/htdocs/simplybasket.com/prestashop/modules/appagebuilder/views/templates/hook/header.tpl',
      1 => 1447747635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '773349923591ef5bb8e83c9-96845787',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_592a34f5b56142_97914730',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a34f5b56142_97914730')) {function content_592a34f5b56142_97914730($_smarty_tpl) {?><!-- @file modules\appagebuilder\views\templates\hook\header -->
<script type='text/javascript'>
        var leoOption = {
		productNumber:1,
		productInfo:0,
		productTran:1,
		productCdown: 1,
		productColor: 1,
		homeWidth: 279,
		homeheight: 279,
	}

        $(document).ready(function(){	
            var leoCustomAjax = new $.LeoCustomAjax();
            leoCustomAjax.processAjax();
        });
	// Javascript code
</script>
<?php }} ?>
