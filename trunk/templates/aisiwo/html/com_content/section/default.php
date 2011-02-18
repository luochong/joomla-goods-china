<div class="main-con">
    <div class="radius-t"><h1>新闻资讯</h1></div>
	<div class="mainpart">
		<ul class="list">
		     <?php 
		     foreach($this->items as $item):?>
			<li><a href="index.php/news/1/<?php echo $item->id?>"><?php echo $item->title?></a></li>
			<?php  endforeach;?>
		</ul>
        <div class="clear"></div>		
	</div>
	<div class="radius-b"></div>
</div>
