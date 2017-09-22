<?php /* Smarty version Smarty-3.1.19, created on 2017-09-18 14:30:57
         compiled from "/var/www/44.dev.dfx.fr/www/override/controllers/admin/templates/products/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141788436859bfbc8136eb23-06016338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efffcb41e3b2f34de4240793f610493e6004baf5' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/override/controllers/admin/templates/products/edit.tpl',
      1 => 1504262020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141788436859bfbc8136eb23-06016338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jscomposer' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59bfbc81376538_78803035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bfbc81376538_78803035')) {function content_59bfbc81376538_78803035($_smarty_tpl) {?>

<?php if (class_exists('JsComposer')&&Module::isInstalled('jscomposer')&&Module::isEnabled('jscomposer')&&JsComposer::condition()) {?>

    <?php $_smarty_tpl->tpl_vars['jscomposer'] = new Smarty_variable(Module::getInstanceByName('jscomposer'), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['jscomposer']->value instanceof JsComposer) {?>        
        <?php echo $_smarty_tpl->tpl_vars['jscomposer']->value->renderEditor();?>
        
    <?php }?>
<?php }?>


<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>
