<?php /* Smarty version Smarty-3.1.19, created on 2017-09-26 06:04:28
         compiled from "modules\poslogo\logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2994359ca262cc22ea4-93018054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93ebdea164df30dc9eb2fd3141c62c8816cc6400' => 
    array (
      0 => 'modules\\poslogo\\logo.tpl',
      1 => 1504709810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2994359ca262cc22ea4-93018054',
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
  'unifunc' => 'content_59ca262cc2abb3_11764106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ca262cc2abb3_11764106')) {function content_59ca262cc2abb3_11764106($_smarty_tpl) {?><div class="pos_logo product_block_container">
	<div class="container-fluid">
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
