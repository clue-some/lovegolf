<?php

function smarty_function_shop_whats_new($params, &$smarty) {
	chdir('../');
	require_once('includes/application_top.php');

	$random_product = tep_random_select("select products_id, products_image, products_tax_class_id, products_price from " . TABLE_PRODUCTS . " where products_status = '1' order by products_date_added desc limit " . MAX_RANDOM_SELECT_NEW);
//	$name = tep_get_products_name($random_product['products_id']);
//	$price = $currencies->display_price($random_product['products_price'], tep_get_tax_rate($random_product['products_tax_class_id']));
	$link = '/' . FILENAME_PRODUCT_INFO . '?products_id=' . $random_product['products_id'];
	$image = '/' . DIR_WS_IMAGES . $random_product['products_image'];
	
	// assign template variable
	$smarty->assign($params['assign'], array(
		'name' => $name, 
		'price' => $price,
		'link' => $link,
		'image' => $image
		)
	);
		
	chdir('tracker');
}

?>