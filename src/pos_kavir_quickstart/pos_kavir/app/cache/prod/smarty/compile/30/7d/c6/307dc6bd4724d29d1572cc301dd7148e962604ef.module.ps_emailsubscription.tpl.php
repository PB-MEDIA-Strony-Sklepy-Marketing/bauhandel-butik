<?php /* Smarty version Smarty-3.1.19, created on 2017-09-26 06:04:30
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2811259ca262cd7e986-17569370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1505586719,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2811259ca262cd7e986-17569370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ca262cd92208_97438731',
  'variables' => 
  array (
    'conditions' => 0,
    'urls' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ca262cd92208_97438731')) {function content_59ca262cd92208_97438731($_smarty_tpl) {?><div class="ft_newsletter col-sm-12 col-md-6 col-lg-6 col-xs-12">
	<div class="content_newsletter">
		<div class="title_newsletter"><h2><?php echo smartyTranslate(array('s'=>'Sign up to newsletter','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h2></div>
		 <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
		  <p class="desc"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
		<?php }?>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
			<div class="input-wrapper">
			  <input
				name="email"
				class="input_txt"
				type="text"
				value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
				placeholder="<?php echo smartyTranslate(array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
"
			  >
			</div>
			<input
			  class="btn btn-primary"
			  name="submitNewsletter"
			  type="submit"
			  value="<?php echo smartyTranslate(array('s'=>'Submit','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
			>
			<input type="hidden" name="action" value="0">
		</form>
	</div>
</div><?php }} ?>
