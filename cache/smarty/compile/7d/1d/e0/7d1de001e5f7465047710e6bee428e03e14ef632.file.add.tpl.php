<?php /* Smarty version Smarty-3.1.19, created on 2017-09-18 11:35:55
         compiled from "/var/www/44.dev.dfx.fr/www/override/controllers/admin/templates/categories/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50432602459bf937b2b31c5-43687768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d1de001e5f7465047710e6bee428e03e14ef632' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/override/controllers/admin/templates/categories/add.tpl',
      1 => 1504262020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50432602459bf937b2b31c5-43687768',
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
  'unifunc' => 'content_59bf937b2b9547_32101757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf937b2b9547_32101757')) {function content_59bf937b2b9547_32101757($_smarty_tpl) {?>

<?php if (class_exists('JsComposer')&&Module::isInstalled('jscomposer')&&Module::isEnabled('jscomposer')&&JsComposer::condition()) {?>

    <?php $_smarty_tpl->tpl_vars['jscomposer'] = new Smarty_variable(Module::getInstanceByName('jscomposer'), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['jscomposer']->value instanceof JsComposer) {?>        
        <?php echo $_smarty_tpl->tpl_vars['jscomposer']->value->renderEditor();?>
        
    <?php }?>
<?php }?>


<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>
