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
<ul class="newsflash-vert<?php echo $params->get('moduleclass_sfx'); ?>">
<?php for ($i = 0, $n = count($list); $i < $n; $i ++) :
	$item = $list[$i]; ?>
	<li class="newsflash-item">
	<?php require JModuleHelper::getLayoutPath('mod_lsa_articles', '_item');
	if ($n > 1 && (($i < $n - 1) || $params->get('showLastSeparator'))) : ?>
		<span class="article-separator">&#160;</span>
	<?php endif; ?>
	</li>
<?php endfor; ?>
</ul>
