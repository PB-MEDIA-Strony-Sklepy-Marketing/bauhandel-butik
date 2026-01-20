<?php /* Smarty version Smarty-3.1.19, created on 2017-09-26 06:04:38
         compiled from "D:\xampp\htdocs\pos_kavir\themes\theme_kavir4\templates\catalog\_partials\customize\button-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154559ca2636e92482-74388096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad79beb04e40e9823eb748d908e344f8adfccfef' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pos_kavir\\themes\\theme_kavir4\\templates\\catalog\\_partials\\customize\\button-cart.tpl',
      1 => 1506165021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154559ca2636e92482-74388096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'configuration' => 0,
    'urls' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ca2636eb9582_09418195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ca2636eb9582_09418195')) {function content_59ca2636eb9582_09418195($_smarty_tpl) {?>
 
<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']>0) {?>
<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
<div class="product-add-to-cart">	
 <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
   <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
   <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">
   <input type="hidden" name="qty" value="1">
   <button class="button ajax_add_to_cart_button add-to-cart btn-default" data-button-action="add-to-cart" type="submit" <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<1) {?>disabled<?php }?>>
  		 <?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

   </button>
 </form>
</div>
<?php }?> 
<?php } else { ?>
	<span class="ajax_add_to_cart_button disabled" title="<?php echo smartyTranslate(array('s'=>' Out of stock ','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
" ><?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
<?php }?>
<?php }} ?>
