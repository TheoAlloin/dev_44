<?php /* Smarty version Smarty-3.1.19, created on 2017-09-21 13:11:31
         compiled from "/var/www/44.dev.dfx.fr/www/modules/ph_simpleblog/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28245206959c39e637edd09-17585075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ec1dde41e852999a58c47d4cfe5632e55fc32c' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/modules/ph_simpleblog/views/templates/hook/header.tpl',
      1 => 1462917600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28245206959c39e637edd09-17585075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post_title' => 0,
    'post_description' => 0,
    'post_image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c39e63816d17_92740897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c39e63816d17_92740897')) {function content_59c39e63816d17_92740897($_smarty_tpl) {?>
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:type" content="article" />
<meta property="og:site_name" content="<?php echo htmlspecialchars(Configuration::get('PS_SHOP_NAME'), ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['post_image']->value)&&!empty($_smarty_tpl->tpl_vars['post_image']->value)) {?>
<meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_image']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<meta property="fb:admins" content="<?php echo intval(Configuration::get('PH_BLOG_FACEBOOK_MODERATOR'));?>
"/>
<meta property="fb:app_id" content="<?php echo intval(Configuration::get('PH_BLOG_FACEBOOK_APP_ID'));?>
"/><?php }} ?>
