<?php
$db =& JFactory::getDBO();

$query = 'SELECT id,title FROM `#__categories` where section = "com_goods" order by ordering';
$db->setQuery($query);
$categories = $db->loadAssocList();


$query = 'SELECT name,market_price,shop_price,id,image,catid ' .
	' FROM #__goods ' .
	' WHERE  published = 1 ' .
	' ORDER BY id DESC';
$db->setQuery($query);
$goodses_tmp = $db->loadAssocList();
$goodses = array();
foreach($goodses_tmp as $v)
{
    $goodses[$v['catid']][] = $v;
}
//print_r($goodses);

?>
  
<div class="main-con">
    <div class="radius-t"><h1>商品分类</h1></div>
	<div class="mainpart" id="tab">
		<ul class="sub-nav">						    
			<?php foreach($categories as $i=>$v):?>
		    <li><a href="#" class="current" onmouseover="go_to(<?php echo $i+1?>,this);"><span><?php echo $v['title']?></span></a></li>
		    <?php endforeach;?>
		</ul>
		<p class="clear"></p>
		<?php 
		 $i = 0;
		foreach($categories as $cat):
		 $i++;
		?>
		<div <?php echo $i == 1? 'class="block"':''?>>
		      <ul class="pro-list">
	          <?php if(isset($goodses[$cat['id']])){?>
		          <?php 
		          foreach($goodses[$cat['id']] as $j => $goods):
		          ?>
<li><a href="index.php?option=com_goods&view=goods&layout=item&id=<?php echo $goods['id']?>"><img src="<?php echo JURI::base() ?>/<?php echo $goods['image'] ?>" alt="" width="138" height="108"/><span><?php echo $goods['name'] ?></span></a></li>    
		          <?php endforeach;}?>
								
			</ul>
			<p class="clear"></p>	
		</div>
		<?php endforeach;?>
			<script type="text/javascript">
			<!--
			var h=document.getElementById("tab").getElementsByTagName("a");
			var d=document.getElementById("tab").getElementsByTagName("div");
			function go_to(ao,obj){
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