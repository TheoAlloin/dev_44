<?php /* Smarty version Smarty-3.1.19, created on 2017-09-21 11:41:42
         compiled from "/var/www/44.dev.dfx.fr/www/themes/jlcw/contact-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110650693659c38956b6dfe0-21721414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38f1217d052cad861faec0e55f9fca8a73f69b27' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/themes/jlcw/contact-form.tpl',
      1 => 1505311745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110650693659c38956b6dfe0-21721414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customerThread' => 0,
    'confirmation' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'alreadySent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c38956b82811_39389898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c38956b82811_39389898')) {function content_59c38956b82811_39389898($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="container">
    <h1 class="page-heading bottom-indent">
            <?php echo smartyTranslate(array('s'=>'Customer service'),$_smarty_tpl);?>
 - <?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value)&&$_smarty_tpl->tpl_vars['customerThread']->value) {?><?php echo smartyTranslate(array('s'=>'Your reply'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Contact us'),$_smarty_tpl);?>
<?php }?>
    </h1>
<div class="background_white container">
        <?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
            <p class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Your message has been successfully sent to our team.'),$_smarty_tpl);?>
</p>
            <ul class="footer_links clearfix">
                    <li>
                            <a class="btn btn-default button button-small" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>">
                                    <span>
                                            <i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>

                                    </span>
                            </a>
                    </li>
            </ul>
    <?php } elseif (isset($_smarty_tpl->tpl_vars['alreadySent']->value)) {?>
            <p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Your message has already been sent.'),$_smarty_tpl);?>
</p>
            <ul class="footer_links clearfix">
                    <li>
                            <a class="btn btn-default button button-small" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>">
                                    <span>
                                            <i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>

                                    </span>
                            </a>
                    </li>
            </ul>
    <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div id="info_contact" class="col-xs-12 col-md-4">

                <div class="content_contact_info">
                    <div id="email" class="contact_label"><span class="contact_heading">Email :</span><span class="contact_values"><a href="mailto:contact@boldoduc.fr">contact@boldoduc.fr</a></span></div>
                    <div id="tel" class="contact_label"><span class="contact_heading">T&eacute;l&eacute;phone :</span><span class="contact_values"><a href="tel:+33478800016">04 78 80 00 16</a></span></div>
                    <div id="fax" class="contact_label"><span class="contact_heading">Fax :</span><span class="contact_values">04 78 80 97 91</span></div>
                    <div id="adresse" class="contact_label">
                        <span class="contact_heading">Adresse :</span>
                        <span class="contact_values"> 15 chemin du plateau 69570 DARDILLY</span>
                        <div id="maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.4855886440246!2d4.760257815982391!3d45.80153257910646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eccdb9293f1b%3A0xf81e1f38317da167!2s15+Chemin+du+Plateau%2C+69570+Dardilly!5e0!3m2!1sfr!2sfr!4v1504694067004" width="360" height="257" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    </div>

                </div>
            </div>
            <div id="contact_form" class="col-xs-12 col-md-8">   
                <p class="incite_contact">Pour toutes question, demandes de devis, conseils n'h&eacute;sitez pas &agrave; nous contacter !</p>  
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayPowerfulForm','mod'=>'powerfulformgenerator','id'=>1),$_smarty_tpl);?>

            </div>

    <?php }?>
    </div>
</div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'contact_fileDefaultHtml')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileDefaultHtml'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No file selected','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileDefaultHtml'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'contact_fileButtonHtml')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileButtonHtml'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Choose File','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileButtonHtml'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
