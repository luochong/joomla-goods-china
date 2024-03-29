<?php
/**
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 * 艾斯沃
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$cfg = new JConfig();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<jdoc:include type="head" />

<link href="<?php echo $this->baseurl ?>/templates/aisiwo/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/aisiwo/js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/aisiwo/js/main.js"></script>
<!--[if IE 6]><link href="../css/ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body>
    <div id="wrap">
	    <div id="head">
		    <div class="logo"></div>
			<div class="navgation">
				<jdoc:include type="modules" name="top" />
			</div>
		</div>
		<div id="middle">
			<jdoc:include type="modules" name="breadcrumb" />
			<div class="content">
			    <div class="main">
			        <jdoc:include type="component" />
				    <jdoc:include type="modules" name="main1" />
				    <jdoc:include type="modules" name="main2" />
                    <jdoc:include type="modules" name="main3" />
				</div>
			    <div class="side">
				    <jdoc:include type="modules" name="side1" />
				    <jdoc:include type="modules" name="side2" />
                    <jdoc:include type="modules" name="side3" />
					<div class="side-con">
					    <div class="service-t"><h2>服务热线</h2></div>
						<ul class="service-details">
						    <li><p class="order">A</p><p><span>客服热线</span><span><?php echo $cfg->kfTel?> </span></p></li>
							<li><p class="order">B</p><p><span>销售热线</span><span><?php echo $cfg->xsTel?></span></p></li>
							<li><p class="order">C</p><p style="padding-top:10px;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $cfg->qq?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $cfg->qq?>:42" alt="点击这里给我发消息" title="点击这里给我发消息"></a></p></li>
						</ul>
						<div class="service-b"></div>
					</div>						
				</div>				
                <div class="clear"></div>				
			</div>
            <div class="sponsor">
                <div class="radius-t"></div>
                    <jdoc:include type="modules" name="footer" />  
				<div class="clear"></div>				
				<div class="radius-b"></div>
			</div>			
		</div>
		<div id="foot">
				<p>copright 2010 isord.cn &nbsp;&nbsp;&copy;&nbsp;&nbsp;版权所有 不得转载 &nbsp;&nbsp;&nbsp;&nbsp;技术支持：春哥工作室</p>
				<ul>
					<li><a href="index.php">首页</a><span>|</span></li>
					<li><a href="index.php/corporation-profile">企业简介</a><span>|</span></li>
					<li><a href="index.php/news">新闻资讯</a><span>|</span></li>
					<li><a href="index.php/goodscat">商品分类</a><span>|</span></li>
					<li><a href="index.php/tjcx">特价促销</a><span>|</span></li>
					<li><a href="index.php/design">设计风格</a><span>|</span></li>
					<li><a href="index.php/contact">联系我们</a></li>
				</ul>
                <div class="clear"></div>				
		</div>
	</div>
</body>
</html>
