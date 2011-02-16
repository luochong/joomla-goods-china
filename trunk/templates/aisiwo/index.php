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
			    <ul>
				    <li><a href="index.html" class="current"><span>首页</span></a></li>
					<li><a href="enterprise-brief.html"><span>企业简介</span></a></li>
					<li><a href="news-list.html"><span>新闻资讯</span></a></li>
					<li><a href="product-list.html"><span>商品分类</span></a></li>
					<li><a href="bargain-price.html"><span>特价促销</span></a></li>
					<li><a href="design-style.html"><span>设计风格</span></a></li>
					<li><a href="#"><span>商家招聘</span></a></li>
					<li><a href="#"><span>联系我们</span></a></li>
				</ul>
			</div>
		</div>
		<div id="middle">
			<div class="banner">
			    <div class="radius-t"><h1>企业品牌</h1></div>
				<div class="show-area">
				    <div class="picture screen">
					    <div class="info" id="info">
					        <div><a href="#nogo"><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/banner1.gif" alt=""/></a></div>
					        <div><a href="#nogo"><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/banner2.jpg" alt=""/></a></div>
					        <div><a href="#nogo"><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/banner3.jpg" alt=""/></a></div>
						</div>
					</div>
					<div class="list">
						<ul class="pic-list" id="list">
							<li class="cur"><a href="#nogo"><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/ban1.gif" alt=""/></a></li>
							<li><a href="#nogo"><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/ban2.gif" alt=""/></a></li>
							<li><a href="#nogo"><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/ban3.gif" alt=""/></a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			    <div class="radius-b"></div>				
			</div>
			<div class="content">
			    <div class="main">
				    <div class="main-con">
					    <div class="radius-t"><h1>最新活动</h1></div>
						<div class="mainpart">
						    <div class="category r-margin b-margin">
							    <img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product.gif" alt=""/>
								<ul>
								    <li class="bold">产品名称</li>
									<li class="prime-cost">原价:300元;</li>
									<li class="now-cost">现价:200元;</li>
									<li>活动时间:01月20日-01月25日</li>
								</ul>
							</div>
						    <div class="category b-margin">
							    <img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product2.gif" alt=""/>
								<ul>
								    <li class="bold">产品名称</li>
									<li class="prime-cost">原价:300元;</li>
									<li class="now-cost">现价:200元;</li>
									<li>活动时间:01月20日-01月25日</li>
								</ul>
							</div>
						    <div class="category r-margin">
							    <img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product.gif" alt=""/>
								<ul>
								    <li class="bold">产品名称</li>
									<li class="prime-cost">原价:300元;</li>
									<li class="now-cost">现价:200元;</li>
									<li>活动时间:01月20日-01月25日</li>
								</ul>
							</div>
						    <div class="category">
							    <img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product2.gif" alt=""/>
								<ul>
								    <li class="bold">产品名称</li>
									<li class="prime-cost">原价:300元;</li>
									<li class="now-cost" >现价:200元;</li>
									<li>活动时间:01月20日-01月25日</li>
								</ul>
							</div>
                            <div class="clear"></div>		
						</div>
						<div class="radius-b"></div>
					</div>
				    <div class="main-con">
					    <div class="radius-t"><h1>商品分类</h1></div>
						<div class="mainpart" id="tab">
							<ul class="sub-nav">						    
								<li><a href="#" class="current" onmouseover="go_to(1);"><span>瓷砖</span></a></li>
								<li><a href="#" onmouseover="go_to(2);"><span>地板</span></a></li>	
								<li><a href="#" onmouseover="go_to(3);"><span>洁具</span></a></li>	
								<li><a href="#" onmouseover="go_to(4);"><span>衣柜</span></a></li>	
								<li><a href="#" onmouseover="go_to(5);"><span>橱柜</span></a></li>
								<li><a href="#" onmouseover="go_to(6);"><span>灯饰开关</span></a></li>
								<li><a href="#" onmouseover="go_to(7);"><span>厨房电器</span></a></li>
								<li><a href="#" onmouseover="go_to(8);"><span>家具</span></a></li>
								<li><a href="#" onmouseover="go_to(9);"><span>饰品</span></a></li>
								<li><a href="#" onmouseover="go_to(10);"><span>五金</span></a></li>					
							</ul>
							<p class="clear"></p>
							<div class="block">
								<ul class="pro-list">
									<li><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product.gif" alt=""/><span>产品名称</span></li>    
									<li><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product2.gif" alt=""/><span>产品名称</span></li>
									<li><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product.gif" alt=""/><span>产品名称</span></li>
									<li class="margin-r first"><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product2.gif" alt=""/><span>产品名称</span></li>
									<li><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product.gif" alt=""/><span>产品名称</span></li>
									<li><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product2.gif" alt=""/><span>产品名称</span></li>
									<li><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product.gif" alt=""/><span>产品名称</span></li>
									<li class="margin-r"><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product2.gif" alt=""/><span>产品名称</span></li>						
								</ul>
								<p class="clear"></p>	
							</div>
							<div>
								<ul class="pro-list">
									<li><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product.gif" alt=""/><span>产品名称</span></li>    
									<li><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product2.gif" alt=""/><span>产品名称</span></li>
									<li><img src="<?php echo $this->baseurl ?>/templates/aisiwo/images/product.gif" alt=""/><span>产品名称</span></li>				
								</ul>
								<p class="clear"></p>	
							</div>	
							<div>
								<ul class="pro-list">
									<li><img src="images/product.gif" alt=""/><span>产品名称</span></li>    
									<li><img src="images/product2.gif" alt=""/><span>产品名称</span></li>			
								</ul>
								<p class="clear"></p>	
							</div>							
								<script type="text/javascript">
								<!--
								var h=document.getElementById("tab").getElementsByTagName("a");
								var d=document.getElementById("tab").getElementsByTagName("div");
								function go_to(ao){
									for(var i=0;i<h.length;i++){
										if(ao-1==i){
										h[i].className+=" current";
										d[i].className+=" block";
										}
										else {
										h[i].className=" ";
										d[i].className=" ";
										}
									}
								}
								//-->
								</script>								
						</div>						
						<div class="radius-b"></div>
					</div>
					<div class="main-con">
					    <div class="radius-t"><h1>设计风格</h1></div>
						<div class="mainpart">
							<div class="designstyle">
								<img src="images/design.gif" alt=""/>
								<ul>
									<li class="bold">本杰明摩尔</li>
									<li>同样属于欧式简约中的一员，镜面效果贯穿了本杰明摩尔的整个设计，玻璃质餐桌，
	透明房门，后现代风格画，理石厨房台面，抛光的板式家具。</li>
									<li class="more"><a href="design-style.html">了解更多<<</a></li>
								</ul>
							</div>
							<div class="designstyle">
								<img src="images/design.gif" alt=""/>
								<ul>
									<li class="bold">桑姆安哥拉</li>
									<li>桑姆安哥拉是欧式简约系列中最新的一款设计，整个房间通明透亮，白色餐桌椅配合
	原木方桌，白色镂花窗帘体现出欧洲简约而不简单的风格。</li>
									<li class="more"><a href="design-style.html">了解更多<<</a></li>
								</ul>
							</div>
							<div class="designstyle margin-b">
								<img src="images/design.gif" alt=""/>
								<ul>
									<li class="bold">安迪安奈列斯</li>
									<li>安迪安奈列斯是最新的一款美式庄园系列，由设计师美国室内设计师安迪设计。不同
	于以往美式庄园的厚重风格，这一款设计显得轻巧许多，水晶灯饰的挑选也别具心裁，
	用相片代替装...</li>
									<li class="more"><a href="design-style.html">了解更多<<</a></li>
								</ul>
							</div>
							<div class="clear"></div>
                        </div>
                        <div class="radius-b"></div>						
					</div>
				</div>
			    <div class="side">
				    <div class="side-con">
					    <div class="radius-t"><h2>企业简介</h2></div>
						<div class="details">
							<p class="enterprise"><img src="images/introduction.gif" alt=""/></p>
							<p class="abstruct">艾斯沃整体家是J&amp;H集体旗下,由Hidde授
	权的一家整体家综合性卖场旗下整合了优质的
	建材家具以及配饰等家居品牌,让会员的购物步
	骤简化成一步.同时还提供了整体设计等搭配方
	案,除了能够体现完整...</p>
	                       <p class="more"><a href="enterprise-brief.html">更多<<</a></p>
	                    </div>
						<div class="radius-b"></div>
					</div>
					<div class="side-con">
					    <div class="radius-t"><h2>企业动态</h2></div>
						<ul class="details">
						    <li><a href="#">艾斯沃整体家长沙店盛大开业。</a></li>
							<li><a href="#">10月23日艾斯沃整体家团购活动活动!</a></li>
							<li><a href="#">ISORD整体家居0利润抢购。</a></li>
							<li><a href="#">ISORD整体家居0利润抢购</a></li>
							<li><a href="#">10月23日艾斯沃整体家团购活动活动!</a></li>
							<li class="more"><a href="#">更多<<</a></li>
						</ul>
						<div class="radius-b"></div>
					</div>
					<div class="side-con">
					    <div class="radius-t"><h2>行业新闻</h2></div>
						<ul class="details">
						    <li><a href="#">艾斯沃整体家长沙店盛大开业。</a></li>
							<li><a href="#">10月23日艾斯沃整体家团购活动活动!</a></li>
							<li><a href="#">ISORD整体家居0利润抢购。</a></li>
							<li><a href="#">ISORD整体家居0利润抢购</a></li>
							<li><a href="#">10月23日艾斯沃整体家团购活动活动!</a></li>
							<li class="more"><a href="news-list.html">更多<<</a></li>
						</ul>
						<div class="radius-b"></div>	
					</div>
					<div class="side-con">
					    <div class="radius-t"><h2>商家招聘</h2></div>
						<ul class="details">
						    <li><a href="#">艾斯沃整体家长沙店盛大开业。</a></li>
							<li><a href="#">10月23日艾斯沃整体家团购活动活动!</a></li>
							<li><a href="#">ISORD整体家居0利润抢购。</a></li>
							<li><a href="#">ISORD整体家居0利润抢购</a></li>
							<li><a href="#">10月23日艾斯沃整体家团购活动活动!</a></li>
							<li class="more"><a href="#">更多<<</a></li>
						</ul>
						<div class="radius-b"></div>
					</div>
					<div class="side-con">
					    <div class="service-t"><h2>服务热线</h2></div>
						<ul class="service-details">
						    <li><p class="order">A</p><p><span>客服热线</span><span>0731-84612345</span></p></li>
							<li><p class="order">B</p><p><span>销售热线</span><span>0731-84612345</span></p></li>
							<li><p class="order">C</p><p><a class="qq-number" href="#">734857908</a></p></li>
						</ul>
						<div class="service-b"></div>
					</div>						
				</div>				
                <div class="clear"></div>				
			</div>
            <div class="sponsor">
                <div class="radius-t"></div>
			    <ul>
				    <li><a href="#"><img src="images/1.gif" alt=""/></a></li>
                    <li><a href="#"><img src="images/2.gif" alt=""/></a></li>
                    <li><a href="#"><img src="images/1.gif" alt=""/></a></li>
					<li><a href="#"><img src="images/2.gif" alt=""/></a></li>
					<li class="margin-r"><a href="#"><img src="images/1.gif" alt=""/></a></li>
				</ul>
				<div class="clear"></div>				
				<div class="radius-b"></div>
			</div>			
		</div>
		<div id="foot">
				<p>copright 2010 Isord.com.cn &nbsp;&nbsp;@&nbsp;&nbsp;版权所有 不得转载</p>
				<ul>
					<li><a href="#">首页</a><span>|</span></li>
					<li><a href="#">企业简介</a><span>|</span></li>
					<li><a href="#">新闻资讯</a><span>|</span></li>
					<li><a href="#">商品分类</a><span>|</span></li>
					<li><a href="#">特价促销</a><span>|</span></li>
					<li><a href="#">设计风格</a><span>|</span></li>
					<li><a href="#">商家招聘</a><span>|</span></li>
					<li><a href="#">联系我们</a></li>
				</ul>
                <div class="clear"></div>				
		</div>
	</div>
</body>
</html>
