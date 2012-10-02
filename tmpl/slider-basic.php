<?php
/**
 * 
 * @package     Joomla frontend
 * @subpackage  mod_lsa_articles
 * @author Fabien CANU <fabien.canu@gmail.com> 
 */
// no direct access
defined('_JEXEC') or die;

?>

<!--
<img class="prev" src="images/bt-prev.png" alt="Previous Frame" />
<img class="next" src="images/bt-next.png" alt="Next Frame" />
-->


<div id="sequence">
  <ul id="slider1" class="multiple captions <?php echo $params->get('moduleclass_sfx'); ?>">

      <?php foreach ($list as $item) : ?>

      	<?php 
      		$images = json_decode($item->images); 
      		//var_dump($images); 
      	?>

        <li>
            <h2 class="title animate-in"><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h2>
            <h3 class="subtitle animate-in"><a href="<?php echo $item->link; ?>"><?php echo strip_tags($item->introtext, '<img>'); ?> </a></h3>
            <img class="model animate-in" src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" />
          
        </li>
          
      <?php endforeach; ?>


  </ul>
</div>  
