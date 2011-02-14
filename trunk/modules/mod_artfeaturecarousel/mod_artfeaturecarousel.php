<?php
/**
* @module		Art Feature Carousel
* @copyright	Copyright (C) 2010 artetics.com
* @license		GPL
*/

defined('_JEXEC') or die('Restricted access');

$moduleId = $module->id;

$loadJQuery = $params->get('loadJQuery', 1);
$autoPlay = $params->get('autoPlay', 0);
$width = $params->get('width', 960);
$height = $params->get('height', 280);
$largeFeatureWidth = $params->get('largeFeatureWidth', 0);
$largeFeatureHeight = $params->get('largeFeatureHeight', 0);
$smallFeatureWidth = $params->get('smallFeatureWidth', 0);
$smallFeatureHeight = $params->get('smallFeatureHeight', 0);
$linksNewWindow = $params->get('linksNewWindow', 0);
$document = &JFactory::getDocument();
?>
<style type="text/css">
.featureCarousel {
width:<?php echo $width;?>px;
height: <?php echo $height;?>px;
}
</style>
<?php
if ($loadJQuery) {
	$document->addScript( JURI::root() . 'modules/mod_artfeaturecarousel/js/jquery.js' );
}
$document->addScript( JURI::root() . 'modules/mod_artfeaturecarousel/js/jquery.featureCarousel.js' );
$document->addStyleSheet( JURI::root() . 'modules/mod_artfeaturecarousel/css/featureCarousel.css' );
echo '<div id="featureCarousel' . $moduleId . '" class="featureCarousel">';
for ($i = 1; $i <=14; $i++) {
	$image = $params->get('image' . $i, '');
	if ($image) {
		$link = $params->get('link' . $i, '');
		$description = $params->get('description' . $i, '');
		echo '<div class="feature">';
          if ($link) {
            echo '<a href="' . $link . '"';
            if ($linksNewWindow) {
              echo ' target="_blank"';
            }
            echo ' ><img alt="Image Caption" src="' . $image . '"></a>';
          } else {
            echo '<img alt="Image Caption" src="' . $image . '">';
          }
					echo '<div>';
          if ($description) {
						echo '<p>' . $description . '</p>';
          }
          
					echo '</div>
				</div>';
	}
}
echo '</div>';
?>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery("#featureCarousel<?php echo $moduleId; ?>").featureCarousel({
  <?php if ($autoPlay) {
    echo 'autoPlay:' . $autoPlay . ',';
  }
  ?>
  <?php echo 'largeFeatureWidth:' . $largeFeatureWidth; ?>,
  <?php echo 'largeFeatureHeight:' . $largeFeatureHeight; ?>,
  <?php echo 'smallFeatureWidth:' . $smallFeatureWidth; ?>,
  <?php echo 'smallFeatureHeight:' . $smallFeatureHeight; ?>
  });
});
</script>