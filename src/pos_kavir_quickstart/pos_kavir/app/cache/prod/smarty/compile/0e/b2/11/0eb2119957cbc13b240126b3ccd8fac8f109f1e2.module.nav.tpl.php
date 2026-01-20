<?php /* Smarty version Smarty-3.1.19, created on 2017-09-26 06:04:24
         compiled from "module:ps_contactinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58259ca262871ccb3-22051775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfo/nav.tpl',
      1 => 1500396720,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '58259ca262871ccb3-22051775',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ca262875b4c6_43852534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ca262875b4c6_43852534')) {function content_59ca262875b4c6_43852534($_smarty_tpl) {?>
  <div class="contact-link">
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
	<div class="info_box phone">
	  
	  <?php echo smartyTranslate(array('s'=>'Call us : [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme'),$_smarty_tpl);?>

	 </div>
	 <?php }?>
	 <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
		<div class="info_box fax">
			<?php echo smartyTranslate(array('s'=>'fax : [1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme'),$_smarty_tpl);?>

		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
		<div class="info_box email">
			<?php echo smartyTranslate(array('s'=>'email :','d'=>'Shop.Theme'),$_smarty_tpl);?>
  <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
		</div>
    <?php } else { ?>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact us','d'=>'Shop.Theme'),$_smarty_tpl);?>
</a>
    <?php }?>
  </div>

<?php }} ?>
