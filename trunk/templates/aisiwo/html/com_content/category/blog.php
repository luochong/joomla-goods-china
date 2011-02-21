<div class="main-con">
					    <div class="radius-t"><h1>设计风格</h1></div>
						<div class="mainpart">
<?php foreach($this->items as $i => $item):?>
							<div class="designstyle <?php echo $i == count($items)-1?'margin-b':''?>">
								<?php $a = array();
			if(!preg_match('#<img (.*?) />#',$item->introtext,$a))
			{
			    $a[0] = '<img src="/images/stories/nopic.jpg" />';
			}
			
			preg_match('#src=[\'|"](.*?)[\'|"]#',$a[0],$a);
			?>
			<img <?php echo $a[0]?> width="138" height="108" alt="<?php echo $item->title?>" />
								<ul>
									<li class="bold"><a href="index.php/design/<?php echo $item->id?>"><?php echo $item->title?></a></li>
									<li><?php echo mb_substr(strip_tags( $item->introtext ), 0, 100, 'UTF-8'); ?>......</li>
								</ul>
							</div>
<?php endforeach;?>
							<div class="clear"></div>
							<?php echo $this->pagination->getPagesLinks(); ?>
                        </div>
                        <div class="radius-b"></div>						
</div>