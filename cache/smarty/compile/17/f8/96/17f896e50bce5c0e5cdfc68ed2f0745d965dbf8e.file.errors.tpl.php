<?php /* Smarty version Smarty-3.1.19, created on 2017-09-22 16:06:21
         compiled from "/var/www/44.dev.dfx.fr/www/themes/jlcw/errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126416804359c518dd735ca6-65970664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17f896e50bce5c0e5cdfc68ed2f0745d965dbf8e' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/themes/jlcw/errors.tpl',
      1 => 1505292439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126416804359c518dd735ca6-65970664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'img_dir' => 0,
    'error' => 0,
    'request_uri' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c518dd7506e6_13424032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c518dd7506e6_13424032')) {function content_59c518dd7506e6_13424032($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value) {?>
	<div class="alert alert-danger">
                <p><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
error.png" /></p>
		<p>ERREUR</p>
		<ol>
		<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value=="Category not found") {?>
			<li>Cat&eacute;gorie non trouv&eacute;e</li>
                    <?php } else { ?>
                        <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                    <?php }?>

		<?php } ?>
		</ol>
		<?php if (isset($_SERVER['HTTP_REFERER'])&&!strstr($_smarty_tpl->tpl_vars['request_uri']->value,'authentication')&&preg_replace('#^https?://[^/]+/#','/',$_SERVER['HTTP_REFERER'])!=$_smarty_tpl->tpl_vars['request_uri']->value) {?>
			<p class="lnk"><a class="alert-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['secureReferrer'][0][0]->secureReferrer(htmlspecialchars($_SERVER['HTTP_REFERER'], ENT_QUOTES, 'UTF-8', true));?>
" title="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
">&laquo; <?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
</a></p>
		<?php }?>
                <?php if (($_smarty_tpl->tpl_vars['page_name']->value=="product"||$_smarty_tpl->tpl_vars['page_name']->value=="category")) {?>
                    <div class="buttons">
                        <a class="btn btn-default button button-medium" href="/" title="Accueil">
                            <span>Page d'accueil</span>
                        </a>
                    </div>
                <?php }?>
            </div>
<?php }?>
<?php }} ?>
