<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'My Orders - Love Golf');

$ogt->assign('current', 'my');

$ogt->requireLogin();

$ogtuserid = $ogt->getCurrentUser()->getUserid();

$orders = array();
$sql = "select o.orders_id, o.date_purchased, o.delivery_name, o.delivery_country, o.billing_name, o.billing_country, ot.text as order_total, s.orders_status_name from " . TABLE_ORDERS . " o, " . TABLE_ORDERS_TOTAL . " ot, " . TABLE_ORDERS_STATUS . " s where o.customers_id = '" . (int)$ogtuserid . "' and o.orders_id = ot.orders_id and ot.class = 'ot_total' and o.orders_status = s.orders_status_id and s.language_id = '" . (int)$languages_id . "' and s.public_flag = '1' order by orders_id desc";
$orders_query = tep_db_query($sql);
while ($order = tep_db_fetch_array($orders_query)) {
	$orders[] = $order; 
}

foreach ($orders as $k => $v) {
	$products = array();
	$sql = "select * from " . TABLE_ORDERS_PRODUCTS . " where orders_id = '" . (int)$v['orders_id'] . "'";
	$products_query = tep_db_query($sql);
	while ($product = tep_db_fetch_array($products_query)) {
		  $products[] = $product;
	}
	$orders[$k]['products'] = $products;
	$orders[$k]['numproducts'] = count($orders[$k]['products']);
}
//echo '<pre>';
//print_r($orders);
//echo '</pre>';
//exit();

$ogt->assign('orderhistory', $orders);

$ogt->display('my-orders.tpl');

?>