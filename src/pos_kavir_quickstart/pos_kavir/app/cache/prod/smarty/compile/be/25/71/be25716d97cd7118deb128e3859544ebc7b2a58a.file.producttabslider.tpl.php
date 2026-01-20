<?php /* Smarty version Smarty-3.1.19, created on 2017-09-26 06:04:28
         compiled from "modules\postabproductslider\producttabslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2529259ca262c7d1626-68329897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be25716d97cd7118deb128e3859544ebc7b2a58a' => 
    array (
      0 => 'modules\\postabproductslider\\producttabslider.tpl',
      1 => 1505015903,
      2 => 'file',
    ),
    '537ae7b37b08c1285655baecba24d14dd76ee147' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pos_kavir\\themes\\theme_kavir1\\templates\\catalog\\_partials\\variant-links.tpl',
      1 => 1500135843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2529259ca262c7d1626-68329897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productTabslider' => 0,
    'productTab' => 0,
    'count' => 0,
    'config' => 0,
    'countss' => 0,
    'rows' => 0,
    'product' => 0,
    'flag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ca262c8b7de0_03133616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ca262c8b7de0_03133616')) {function content_59ca262c8b7de0_03133616($_smarty_tpl) {?>
<div class="product-tabs-container-slider product_block_container">
<div class="container-fluid">
	<ul class="tabs_slider"> 
		<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['productTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productTabslider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['productTab']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['productTab']->iteration=0;
 $_smarty_tpl->tpl_vars['productTab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['productTab']->key => $_smarty_tpl->tpl_vars['productTab']->value) {
$_smarty_tpl->tpl_vars['productTab']->_loop = true;
 $_smarty_tpl->tpl_vars['productTab']->iteration++;
 $_smarty_tpl->tpl_vars['productTab']->index++;
 $_smarty_tpl->tpl_vars['productTab']->first = $_smarty_tpl->tpl_vars['productTab']->index === 0;
 $_smarty_tpl->tpl_vars['productTab']->last = $_smarty_tpl->tpl_vars['productTab']->iteration === $_smarty_tpl->tpl_vars['productTab']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabProduct']['first'] = $_smarty_tpl->tpl_vars['productTab']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabProduct']['last'] = $_smarty_tpl->tpl_vars['productTab']->last;
?>
			<li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productTab']->value['id'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['posTabProduct']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['posTabProduct']['last']) {?>last_item<?php } else { ?><?php }?> item <?php if ($_smarty_tpl->tpl_vars['count']->value==0) {?> active <?php }?>" rel="tab_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productTab']->value['id'], ENT_QUOTES, 'UTF-8');?>
"  >
				<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productTab']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>

			</li>
			<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
		<?php } ?>	
	</ul>
	<?php $_smarty_tpl->tpl_vars['rows'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['POS_HOME_PRODUCTTAB_ROWS'], null, 0);?>
	<div class="row pos_content"> 
	<?php $_smarty_tpl->tpl_vars['countss'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['productTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productTabslider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['productTab']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['productTab']->iteration=0;
 $_smarty_tpl->tpl_vars['productTab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['productTab']->key => $_smarty_tpl->tpl_vars['productTab']->value) {
$_smarty_tpl->tpl_vars['productTab']->_loop = true;
 $_smarty_tpl->tpl_vars['productTab']->iteration++;
 $_smarty_tpl->tpl_vars['productTab']->index++;
 $_smarty_tpl->tpl_vars['productTab']->first = $_smarty_tpl->tpl_vars['productTab']->index === 0;
 $_smarty_tpl->tpl_vars['productTab']->last = $_smarty_tpl->tpl_vars['productTab']->iteration === $_smarty_tpl->tpl_vars['productTab']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabProduct']['first'] = $_smarty_tpl->tpl_vars['productTab']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['posTabProduct']['last'] = $_smarty_tpl->tpl_vars['productTab']->last;
?>
			<div id="tab_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productTab']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="tab_content">
				<div class="productTabContent<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['countss']->value, ENT_QUOTES, 'UTF-8');?>
">
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productTab']->value['productInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%$_smarty_tpl->tpl_vars['rows']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>
					<div class="item-product">
				<?php }?>
				
				<article class="js-product-miniature item_in" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
					<div class="img_block">
						<div class="img_inner">
							
							  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
								<img
								  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
								  alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
								  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
								>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"rotatorImg",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
		
							  </a>
							
							
							  <ul class="product-flag">
								<?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['flag']->value['type']=="discount") {?>
										<?php continue 1?>
									<?php }?>
									<li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></li>
								<?php } ?>
							  </ul>
							
							<div class="countdown" >
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'timecountdown','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

								<span class="future_date_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_category_default'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
 id_countdown"></span>
								<div class="clearfix"></div>
							</div>
						</div>	
					</div>
					<div class="product_desc">
					  
					   <h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" itemprop="name" class="product_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
					  
						
							<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
							  <div class="product-price-and-shipping">
								<span itemprop="price" class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?> price_sale <?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
								<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
								  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>


								  <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
								  <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
									<span class="discount-percentage"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span></span>
								  <?php }?>
								<?php }?>

								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>


								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>


								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

							  </div>
							<?php }?>
						
						
						<div class="hook-reviews">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

						</div>
					  
					  <ul class="add-to-links">
							<li class="cart">
								<?php echo $_smarty_tpl->getSubTemplate ('catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

							</li>
							<li>
								<a href="#" class="quick-view" data-link-action="quickview" title="<?php echo smartyTranslate(array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
							</li>
							<li>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="links-details" title="<?php echo smartyTranslate(array('s'=>'Details','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Details','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
							</li>
						
						</ul>
					
						<div class="product-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
					
					
							<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
							  <?php /*  Call merged included template "catalog/_partials/variant-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '2529259ca262c7d1626-68329897');
content_59ca262c88ce59_42089507($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/variant-links.tpl" */?>
							<?php }?>
					  
					</div>
				</article>

					
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%$_smarty_tpl->tpl_vars['rows']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>
					</div>
				<?php }?>	
				<?php } ?>
				</div>
			</div>
			<?php $_smarty_tpl->tpl_vars['countss'] = new Smarty_variable($_smarty_tpl->tpl_vars['countss']->value+1, null, 0);?>
	<?php } ?>	
	</div>
</div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-26 06:04:28
         compiled from "D:\xampp\htdocs\pos_kavir\themes\theme_kavir1\templates\catalog\_partials\variant-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59ca262c88ce59_42089507')) {function content_59ca262c88ce59_42089507($_smarty_tpl) {?><div class="variant-links">
  <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
       class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
       
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
    ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
  <?php } ?>
  <span class="js-count count"></span>
</div>
<?php }} ?>
