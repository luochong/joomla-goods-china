<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<?php for($i =1 ;$i<4;$i++):
    $name = 'lists_'.$i;
    $lists = $$name;
    if(empty($lists))
        continue;
?>
<div class="side-con">
    <div class="radius-t"><h2><?php echo $lists[0]->category ?></h2></div>
	<ul class="details">
	    <?php foreach($lists as $list):?>
	    <li><a href="/index.php/news/1/<?php echo $list->id;?>"><?php echo $list->title ?></a></li>
	    <?php endforeach;?>
		<li class="more"><a href="#">更多<<</a></li>
	</ul>
	<div class="radius-b"></div>
</div>
<?php endfor;?>

