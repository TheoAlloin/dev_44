<?php /* Smarty version Smarty-3.1.19, created on 2017-09-21 18:24:59
         compiled from "/var/www/44.dev.dfx.fr/www/modules/powerfulformgenerator/views/templates/front/form16.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3327745359c3e7dba1d387-50904554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ef443bb4f53564773056884717f43a8d62de115' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/modules/powerfulformgenerator/views/templates/front/form16.tpl',
      1 => 1501488600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3327745359c3e7dba1d387-50904554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmation' => 0,
    'success' => 0,
    'base_dir' => 0,
    'header' => 0,
    'form_id' => 0,
    'request_uri' => 0,
    'title' => 0,
    'fields' => 0,
    'field' => 0,
    'required' => 0,
    'label_btn' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c3e7dba51663_46822113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c3e7dba51663_46822113')) {function content_59c3e7dba51663_46822113($_smarty_tpl) {?>

 <?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

    <?php } else { ?>
    <p class="alert alert-success">
        <?php echo smartyTranslate(array('s'=>'Your message has been successfully sent to our team.','mod'=>'powerfulformgenerator'),$_smarty_tpl);?>

    </p>
    <?php }?>

    <ul class="footer_links clearfix">
        <li>
            <a class="btn btn-default button button-small" href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['base_dir']->value);?>
">
                <span>
                    <i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Home','mod'=>'powerfulformgenerator'),$_smarty_tpl);?>

                </span>
            </a>
        </li>
    </ul>
<?php } else { ?>

    <?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

    <?php }?>


	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <form id="pfg-form-<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['form_id']->value);?>
" action="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['request_uri']->value);?>
" method="post" class="contact-form-box pfg-forms" enctype="multipart/form-data">
        <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h3>
        <?php $_smarty_tpl->tpl_vars["required"] = new Smarty_variable("false", null, 0);?>
        <fieldset>
            <div class="clearfix">
                <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['required']==true) {?>
                    <?php $_smarty_tpl->tpl_vars["required"] = new Smarty_variable("true", null, 0);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='separator') {?>
                    <?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['field']->value['element']);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='legend') {?>
                    <legend><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</legend>
                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='hidden') {?>
                    <?php echo $_smarty_tpl->tpl_vars['field']->value['element'];?>

                <?php } else { ?>
                <div class="form-group <?php if ($_smarty_tpl->tpl_vars['field']->value['classname']) {?> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['classname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>">
                    <label for="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> <em class="required">*</em><?php }?></label>
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='static') {?>
                        <p class="form-control-static"><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['field']->value['value']);?>
</p>
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['field']->value['element'];?>

                    <?php }?>
                </div>
                <?php }?>
                <?php } ?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['required']->value==true) {?>
                <div id="required_fields">* champs obligatoire</div>
            <?php }?>
            <div class="submit">
                <input type="hidden" name="pfg_form_id" value="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['form_id']->value);?>
" />
                <button type="submit" name="submitMessage" id="submitMessage" class="button btn btn-default button-medium"><span><?php if ($_smarty_tpl->tpl_vars['label_btn']->value) {?><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['label_btn']->value);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Send','mod'=>'powerfulformgenerator'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span><?php }?></button>
            </div>
    	</fieldset>
    </form>


    <?php if (isset($_smarty_tpl->tpl_vars['footer']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

    <?php }?>
<?php }?>
<?php }} ?>
