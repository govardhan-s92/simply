<?php /*%%SmartyHeaderCode:824630652591ef5be936723-16321431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f198dbadb6d00680ede357c8bef96b47d7b09c69' => 
    array (
      0 => '/opt/lampp/htdocs/simplybasket.com/prestashop/modules/appagebuilder/views/templates/hook/appagebuilder.tpl',
      1 => 1447747635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '824630652591ef5be936723-16321431',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_592a34e6168303_58119331',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a34e6168303_58119331')) {function content_592a34e6168303_58119331($_smarty_tpl) {?><!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
<div class="wrapper" style="background: transparent no-repeat"     >
	                     <div class=" padding-width">
    <div        class="row ApRow has-bg bg-fullwidth-container"
	                        style=""        >
        
                            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn "
		    >
                <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

<!-- Block currencies module -->

<div class="popup-over pull-left e-translate-top">
	<div data-toggle="dropdown" class="popup-title">
		<span>
			<i class="fa fa-gear"></i>
																										₹INR
										<i class="fa fa-angle-down"></i>
		</span>
	</div>
	<div class="popup-content">
		<div id="currencies-block-top">
			<form id="setCurrency" action="/simplybasket.com/prestashop/en/" method="post">
		 	
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
	 
				<ul id="first-currencies" class="currencies_ul toogle_content">
											<li >
							<a href="javascript:setCurrency(2);" rel="nofollow" title="Dollar">
								$ Dollar
							</a>
						</li>
											<li >
							<a href="javascript:setCurrency(1);" rel="nofollow" title="Euro">
								€ Euro
							</a>
						</li>
											<li class="selected">
							<a href="javascript:setCurrency(3);" rel="nofollow" title="Indian Rupee">
								₹ Indian Rupee
							</a>
						</li>
									</ul>
			</form>
		</div>
	</div>	
</div>


	
<!-- /Block currencies module -->

<!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

<!-- Block languages module -->
	<div class="popup-over pull-left e-translate-top">
		<div class="popup-title" data-toggle="dropdown">
												 
						<a href="#"><span><i class="fa fa-globe"></i>English<i class="fa fa-angle-down"></i></span></a>				 
																																																			</div>
		<div class="popup-content">
			<div id="languages-block-top" class="languages-block">
				<ul id="first-languages" class="languages-block_ul">
											<li class="selected">
														<span><img src="http://localhost/simplybasket.com/prestashop/img/l/1.jpg" alt="en" width="16" height="11" />&nbsp;English</span>
												</li>
											<li >
																										<a href="http://localhost/simplybasket.com/prestashop/fr/" title="Français (French)" rel="alternate" hreflang="fr">
																					<span><img src="http://localhost/simplybasket.com/prestashop/img/l/2.jpg" alt="fr" width="16" height="11" />&nbsp;Français</span>
													</a>
												</li>
											<li >
																										<a href="http://localhost/simplybasket.com/prestashop/br/" title="Português BR (Portuguese)" rel="alternate" hreflang="br">
																					<span><img src="http://localhost/simplybasket.com/prestashop/img/l/3.jpg" alt="br" width="16" height="11" />&nbsp;Português BR</span>
													</a>
												</li>
											<li >
																										<a href="http://localhost/simplybasket.com/prestashop/de/" title="Deutsch (German)" rel="alternate" hreflang="de">
																					<span><img src="http://localhost/simplybasket.com/prestashop/img/l/4.jpg" alt="de" width="16" height="11" />&nbsp;Deutsch</span>
													</a>
												</li>
											<li >
																										<a href="http://localhost/simplybasket.com/prestashop/es/" title="Español (Spanish)" rel="alternate" hreflang="es">
																					<span><img src="http://localhost/simplybasket.com/prestashop/img/l/5.jpg" alt="es" width="16" height="11" />&nbsp;Español</span>
													</a>
												</li>
											<li >
																										<a href="http://localhost/simplybasket.com/prestashop/it/" title="Italiano (Italian)" rel="alternate" hreflang="it">
																					<span><img src="http://localhost/simplybasket.com/prestashop/img/l/6.jpg" alt="it" width="16" height="11" />&nbsp;Italiano</span>
													</a>
												</li>
											<li >
																										<a href="http://localhost/simplybasket.com/prestashop/ar/" title="اللغة العربية (Arabic)" rel="alternate" hreflang="ar">
																					<span><img src="http://localhost/simplybasket.com/prestashop/img/l/7.jpg" alt="ar" width="16" height="11" />&nbsp;اللغة العربية</span>
													</a>
												</li>
									</ul>
			</div>
		</div>	
	</div>
			
<!-- /Block languages module -->

<!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

<script type="text/javascript">
/* Blockusreinfo */
	
$(document).ready( function(){
	if( $(window).width() < 991 ){
			 $(".header_user_info").addClass('popup-over');
			 $(".header_user_info .links").addClass('popup-content');
		}
		else{
			$(".header_user_info").removeClass('popup-over');
			 $(".header_user_info .links").removeClass('popup-content');
		}
	$(window).resize(function() {
		if( $(window).width() < 991 ){
			 $(".header_user_info").addClass('popup-over');
			 $(".header_user_info .links").addClass('popup-content');
		}
		else{
			$(".header_user_info").removeClass('popup-over');
			 $(".header_user_info .links").removeClass('popup-content');
		}
	});
});
</script>
<!-- Block user information module NAV  -->
<div class="header_user_info pull-right e-translate-top">
	<div data-toggle="dropdown" class="popup-title"><a href="#"><i class="fa fa-cog"></i><span>Top links </span></a></div>	
		<ul class="links">
					<li><a class="login" href="http://localhost/simplybasket.com/prestashop/en/my-account" rel="nofollow" title="Login to your customer account">
				<i class="fa fa-unlock-alt"></i>Sign in
			</a></li>
		
		<li>
			<a href="http://localhost/simplybasket.com/prestashop/en/my-account" title="My account"><i class="fa fa-user"></i>My Account</a>
		</li>

		<li>
			<a class="ap-btn-wishlist" id="wishlist-total" href="http://localhost/simplybasket.com/prestashop/en/module/blockwishlist/mywishlist" title="My wishlists">
			
				<i class="fa fa-heart"></i>Wish List<span class="ap-total-wishlist ap-total"></span>
			</a>
		</li>
		<li>
			<a class="ap-btn-compare" href="http://localhost/simplybasket.com/prestashop/en/products-comparison" title="Compare" rel="nofollow">
				
				<i class="fa fa-compress"></i>Compare<span class="ap-total-compare ap-total"></span>
			</a>
		</li>

				
		</ul>
	
</div>	

    </div>
            </div>
</div>
</div>
<?php }} ?>
