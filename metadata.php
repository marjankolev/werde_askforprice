
<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.0';
/**
 * Module information
 */
$aModule = array(
    'id'           => 'werde_askforprice',
    'title'        => 'Ask for Price for Specific Products',
    'description'  => 'Ask for Price for the products which price is 0',
    'thumbnail'    => 'logo.png',
    'version'      => '1.0',
    'author'       => 'Marjan Kolev',
    'url'          => 'http://marjankolev.com/',
    'email'        => 'marjankolev1994@yahoo.com',

    // Extend Oxemail CORE Class to define function inside for sending emails
    'extend'       => array(
        'oxemail'  => 'werde/askforprice/Core/werde_sendaskforpriceemail',
    ),

    // Controller Class where parameters from the Pop-up form 'Ask for Price' are sent
    'files' => array(
       'werde_email'              => 'werde/askforprice/Application/Controller/werde_email.php',
    ),      
    'blocks' => array(

       // Block for Product Price in product details page
        array(
              'template' => 'page/details/inc/productmain.tpl',
              'block'    => 'details_productmain_price',
              'file'     => 'Application/views/blocks/werde_details_productmain_price.tpl',
        ),

        // Block for Product Retail Price in product details page
        array(
              'template' => 'page/details/inc/productmain.tpl',
              'block'    => 'details_productmain_tprice',
              'file'     => 'Application/views/blocks/werde_details_productmain_tprice.tpl',
        ),

        // Block for the 'To Cart' button in product details page
        array(
              'template' => 'page/details/inc/productmain.tpl',
              'block'    => 'details_productmain_tobasket',
              'file'     => 'Application/views/blocks/werde_details_productmain_tobasket.tpl',
        ),

        // Block for Product Price on the Home page
        array(
              'template' => 'widget/product/listitem_grid.tpl',
              'block'    => 'widget_product_listitem_grid_price',
              'file'     => 'Application/views/blocks/werde_widget_product_listitem_grid_price.tpl',
        ),

        // Block for the 'To Cart' button on the Home page
        array(
              'template' => 'widget/product/listitem_grid.tpl',
              'block'    => 'widget_product_listitem_grid_tobasket',
              'file'     => 'Application/views/blocks/werde_widget_product_listitem_grid_tobasket.tpl',
        ),

        // Block for Product Price on the Category page ex. Categories -> Kiteboarding -> Kites
        array(
              'template' => 'widget/product/listitem_infogrid.tpl',
              'block'    => 'widget_product_listitem_infogrid_price',
              'file'     => 'Application/views/blocks/werde_widget_product_listitem_infogrid_price.tpl',
        ),

        // Block for the 'To Cart' button on the Category page ex. Categories -> Kiteboarding -> Kites
        array(
              'template' => 'widget/product/listitem_infogrid.tpl',
              'block'    => 'widget_product_listitem_infogrid_tobasket',
              'file'     => 'Application/views/blocks/werde_widget_product_listitem_infogrid_tobasket.tpl',
        ),
    ),       

    // Settings for the module: to which address email 'Ask for Price' to be sent
    'settings' => array(
        array(
            'group'     => 'werde_askforprice_settings',
            'name'      => 'werdeAskForPriceSendEmailTo',
            'type'      => 'str',
            'value'     => '',
        ),
    ),             
);