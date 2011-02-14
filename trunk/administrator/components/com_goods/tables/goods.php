<?php
defined('_JEXEC') or die('Restricted access');

class TableGoods extends JTable
{
	var $id = null;   
	var $category_id = null;
	var $goods_sn = null; 
	var $parent_id = null;
	var $goods_quantity = null; 
	var $goods_weight = null;	
	var $store_id = null;
	var $brand_id = null;
	var $market_price = null;	//原价
	var $shop_price = null;     //现价
	var $is_promotion = null;  //是否促销
	var $is_discount = null;
	var $is_best = null;	
	var $goods_discount = null;
	var $up_time = null;
	var $goods_rating = null;
	var $promote_price = null; //促销价
	var $promotion_etime = null; //促销结束时间	
	var $promotion_stime = null; //促销开始时间	
	var $image = null; //图片
	var $big_img = null;
	var $photo_sn = null;
	var $slide_img = null;
    var $intro = null; //介绍
    var $name = null; //商品名称
    var $published = 0;

	function __construct(&$db)
	{
		parent::__construct( '#__goods', 'id', $db );
	}
}

?>