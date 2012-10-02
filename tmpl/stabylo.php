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
<div class="newsflash<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :?>
	<?php if ($params->get('item_title')) : ?>

		<<?php echo $params->get('item_heading'); ?> class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
		<?php if ($params->get('link_titles') && $item->link != '') : ?>
			<a href="<?php echo $item->link; ?>">
			<?php echo $item->title; ?></a>
			<?php else : ?>
				<?php echo $item->title; ?>
		<?php endif; ?>
		</<?php echo $params->get('item_heading'); ?>> 

	<?php endif; ?>

	<?php
	if (!$params->get('intro_only')) :
		echo $item->afterDisplayTitle;
	endif;
	?>

	<?php echo $item->beforeDisplayContent; ?>

	<p>
		<span class="stabylo"><?php echo strip_tags($item->introtext, '<span><a><br>'); ?></span> 

		<?php
		if (isset($item->link) && $item->readmore && $params->get('readmore')) :
			echo '<a class="savoir-plus-white" href="' . $item->link . '"> En savoir +</a>';
		endif;
		?>
	</p>
<?php endforeach; ?>
</div>
