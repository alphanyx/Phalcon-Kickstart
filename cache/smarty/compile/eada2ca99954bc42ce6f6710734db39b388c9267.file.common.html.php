<?php /* Smarty version Smarty-3.1.15, created on 2013-10-14 23:26:02
         compiled from "/www/framework_compare/phalcon/app/views/layouts/common.html" */ ?>
<?php /*%%SmartyHeaderCode:130993734525c616a545682-25697043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eada2ca99954bc42ce6f6710734db39b388c9267' => 
    array (
      0 => '/www/framework_compare/phalcon/app/views/layouts/common.html',
      1 => 1381785960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130993734525c616a545682-25697043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_525c616a57a825_34031274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525c616a57a825_34031274')) {function content_525c616a57a825_34031274($_smarty_tpl) {?><h1>Hallo Welt</h1>


<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
<p>
	<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
: <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

</p>
<?php } ?><?php }} ?>
