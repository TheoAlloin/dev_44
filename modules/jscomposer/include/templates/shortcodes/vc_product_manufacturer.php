<?php

extract(JsComposer::shortcode_atts(
    array(
      'id_manufacturer'=> null ,
      'title' => '',
        'page' => '1',
        'per_page' => '12',
        'orderby' => 'position',
        'order' => 'DESC',
        'display_type' => 'grid',
    ),$atts
));
$context = Context::getContext();

//,$per_page, $context->language->id, null, false, $orderby ,$order);
if(empty($id_manufacturer)) return ;

$products =  Manufacturer::getProducts($id_manufacturer, $context->language->id, $page, $per_page, $orderby, $order);

$context->controller->addCSS(_THEME_CSS_DIR_ . 'product.css');
$context->controller->addCSS(_THEME_CSS_DIR_ . 'product_list.css');
$context->controller->addCSS(_THEME_CSS_DIR_ . 'print.css', 'print');
$context->controller->addJqueryPlugin(array('fancybox', 'idTabs', 'scrollTo', 'serialScroll', 'bxslider'));
$context->controller->addJS(array(
    _THEME_JS_DIR_ . 'tools.js', // retro compat themes 1.5
//    _THEME_JS_DIR_ . 'product.js'
));

$context->smarty->assign(
        array(
            'vc_products' => $products,
            'vc_title' => $title,
            'elementprefix' => 'productbycat',
        )
);
if ($display_type == 'sidebar')
    $output = $context->smarty->fetch(JsComposer::getTPLPath('blockviewed.tpl'));
else
    $output = $context->smarty->fetch(JsComposer::getTPLPath('blocknewproducts.tpl'));

echo $output;