<?php /* Smarty version Smarty-3.1.19, created on 2017-09-26 06:04:39
         compiled from "D:\xampp\htdocs\pos_kavir\themes\theme_kavir4\modules\poslogo\logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3127959ca26377a4f72-92001637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be09d5fef489e049ebc939413ad9d94445a0399a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pos_kavir\\themes\\theme_kavir4\\modules\\poslogo\\logo.tpl',
      1 => 1506334069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3127959ca26377a4f72-92001637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logos' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ca26377acc76_26024757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ca26377acc76_26024757')) {function content_59ca26377acc76_26024757($_smarty_tpl) {?><div class="pos_logo product_block_container">
	<div class="container">
		<div class="pos_content row">
			<div class="logo-slider">
				<?php  $_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['logo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->key => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->_loop = true;
?>
					<div class="item_logo">
						<a href ="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
							<img class="img-responsive" src ="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt ="" />
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
