<?php /* Smarty version Smarty-3.1.19, created on 2017-09-22 16:12:16
         compiled from "/var/www/44.dev.dfx.fr/www/modules/jscomposer/views/templates/admin/tinymce-jscomposer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11032952759c51a409b3453-97453919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db506fb4db364addaa642460e7fa9dafef9b3b28' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/modules/jscomposer/views/templates/admin/tinymce-jscomposer.tpl',
      1 => 1486952238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11032952759c51a409b3453-97453919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugings' => 0,
    'plugin' => 0,
    'plugings_css' => 0,
    'plugin_css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c51a409bcfd5_08796327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c51a409bcfd5_08796327')) {function content_59c51a409bcfd5_08796327($_smarty_tpl) {?>
<script type="text/javascript">
function tinySetup(config)
{
    if(!config)
        config = {};
  
    var editor_selector = 'rte';
    //if (typeof config['editor_selector'] !== 'undefined')
    //var editor_selector = config['editor_selector'];
    if (typeof config['editor_selector'] != 'undefined')
        config['selector'] = '.'+config['editor_selector'];
  
        //safari,pagebreak,style,table,advimage,advlink,inlinepopups,media,contextmenu,paste,fullscreen,xhtmlxtras,preview
        default_config = {
        selector: ".rte" ,
        plugins : "visualblocks,<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
<?php } ?>, preview searchreplace print insertdatetime, hr charmap colorpicker anchor code link image paste pagebreak table contextmenu filemanager table code media autoresize textcolor emoticons",
        toolbar2 : "newdocument,print,|,bold,italic,underline,|,strikethrough,superscript,subscript,|,forecolor,colorpicker,backcolor,|,bullist,numlist,outdent,indent",
        toolbar1 : "styleselect,|,formatselect,|,fontselect,|,fontsizeselect,", 
        toolbar3 : "code,<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
<?php } ?>,|,table,|,cut,copy,paste,searchreplace,|,blockquote,|,undo,redo,|,link,unlink,anchor,|,image,emoticons,media,|,inserttime,|,preview ",
        toolbar4 : "visualblocks,|,charmap,|,hr,",
        external_filemanager_path: ad+"/filemanager/",
        filemanager_title: "File manager" ,
        external_plugins: { "filemanager" : ad+"/filemanager/plugin.min.js"},
        skin: "prestashop",
        statusbar: false,
        entity_encoding: "raw",
        extended_valid_elements: 'pre[*],script[*],style[*]',
        content_css: '<?php  $_smarty_tpl->tpl_vars['plugin_css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin_css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugings_css']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin_css']->key => $_smarty_tpl->tpl_vars['plugin_css']->value) {
$_smarty_tpl->tpl_vars['plugin_css']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['plugin_css']->value;?>
<?php } ?>',
        valid_children: "+body[style|script|iframe|section],pre[iframe|section|script|div|p|br|span|img|style|h1|h2|h3|h4|h5],*[*]",
        valid_elements : '*[*]',
        force_p_newlines : false,
        cleanup: false,
        forced_root_block : false,
        force_br_newlines : true,
        verify_html : false,
        remove_linebreaks : false,
        remove_trailing_nbsp : false,
        convert_urls:true,
        relative_urls:false,
        remove_script_host:false,
           
        menu: {
            edit: {title: 'Edit', items: 'undo redo | cut copy paste | selectall'},
            insert: {title: 'Insert', items: 'media image link | pagebreak'},
            view: {title: 'View', items: 'visualaid'},
            format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'},
            table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'},
            tools: {title: 'Tools', items: 'code'}
        }
  
    }
  
    $.each(default_config, function(index, el)
    {
        if (config[index] === undefined )
            config[index] = el;
    });
    if (typeof tinyMCE === 'undefined') {
		var path = $(location).attr('pathname');
		var path_array = path.split('/');
		path_array.splice((path_array.length - 2), 2);
		var final_path = path_array.join('/');
		$('head').append($('<script>').attr('type', 'text/javascript').attr('src', final_path + '/js/tiny_mce/tinymce.min.js'));
        setTimeout(function() {
            tinyMCE.init(config);
        }, 100);

    }else{
        tinyMCE.init(config);
    }
    

}

</script>
<?php }} ?>
