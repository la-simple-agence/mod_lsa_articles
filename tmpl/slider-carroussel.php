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

<div class="reponses-a-tout encarts encart-orange">
    <h3><a href="#"><img src="/images/structure/reponse-a-tout.png" alt="Réponses à tout" /></a></h3>

    <ul id="slider2" class="multiple <?php echo $params->get('moduleclass_sfx'); ?>">

        <?php foreach ($list as $item) : ?>

            <li>
                <a href="<?php echo $item->link; ?>"><?php echo strip_tags($item->introtext, '<img>, <br>'); ?> </a>
            </li>

        <?php endforeach; ?>

    </ul>
</div>   