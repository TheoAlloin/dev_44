<?php /* Smarty version Smarty-3.1.19, created on 2017-09-18 11:36:32
         compiled from "/var/www/44.dev.dfx.fr/www/override/controllers/admin/templates/categories/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209186019959bf93a09654d3-61616627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d476694633e4184d483a4a628c2fd69d710e18f' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/override/controllers/admin/templates/categories/edit.tpl',
      1 => 1504262020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209186019959bf93a09654d3-61616627',
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
  'unifunc' => 'content_59bf93a096b493_25523054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf93a096b493_25523054')) {function content_59bf93a096b493_25523054($_smarty_tpl) {?>

<?php if (class_exists('JsComposer')&&Module::isInstalled('jscomposer')&&Module::isEnabled('jscomposer')&&JsComposer::condition()) {?>

    <?php $_smarty_tpl->tpl_vars['jscomposer'] = new Smarty_variable(Module::getInstanceByName('jscomposer'), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['jscomposer']->value instanceof JsComposer) {?>        
        <?php echo $_smarty_tpl->tpl_vars['jscomposer']->value->renderEditor();?>
        
    <?php }?>
<?php }?>


<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>
