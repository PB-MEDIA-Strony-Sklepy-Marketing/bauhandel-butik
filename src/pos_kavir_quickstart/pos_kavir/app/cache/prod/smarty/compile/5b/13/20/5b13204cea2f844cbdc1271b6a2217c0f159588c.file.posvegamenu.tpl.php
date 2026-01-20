<?php /* Smarty version Smarty-3.1.19, created on 2017-09-26 06:04:29
         compiled from "modules\posvegamenu\posvegamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1365659ca262da90c65-87479593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b13204cea2f844cbdc1271b6a2217c0f159588c' => 
    array (
      0 => 'modules\\posvegamenu\\posvegamenu.tpl',
      1 => 1500428992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1365659ca262da90c65-87479593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'megamenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ca262da98966_57857848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ca262da98966_57857848')) {function content_59ca262da98966_57857848($_smarty_tpl) {?><div class="navleft-container hidden-md-down ">
	<div class="pt_vegamenu">
		<div class="pt_vmegamenu_title">
			<h2><i class="ion-navicon"></i><?php echo smartyTranslate(array('s'=>'All categories','mod'=>'posvegamenu'),$_smarty_tpl);?>
</h2>
		</div>
		<div id="pt_vmegamenu" class="pt_vmegamenu pt_vegamenu_cate">
			<?php echo $_smarty_tpl->tpl_vars['megamenu']->value;?>

		</div>
		<div class="clearfix"></div>
	</div>	
</div><?php }} ?>
