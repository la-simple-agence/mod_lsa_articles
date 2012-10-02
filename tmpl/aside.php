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

<section id="latest-news">
    <header>
        <h1><span><?php echo $module->title; ?></span></h1>
        <ul id="news-pagination">
            <li class="prev"><a href="#">prev</a></li>
            <li class="next"><a href="#">next</a></li>
        </ul>
    </header>

    <div id="<?php echo $params->get('id-slider') ?>">
        <ul>
            <?php foreach ($list as $item) : ?>
                <li class="article">
                    <header class="title-aside animate-in">
                        <h2>
                            <?php if ($params->get('link_titles') && $item->link != '') : ?>
                                <a href="<?php echo $item->link; ?>">
                                <?php echo $item->title; ?></a>
                            <?php else : ?>
                                <?php echo $item->title; ?>
                            <?php endif; ?>
                        </h2>
                    </header>
                    <footer class="date-aside animate-in">
                        <abbr title="<?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_LC2')); ?>"><?php echo JHtml::_('date', $item->created, "d"); ?><br /> <span><?php echo JHtml::_('date', $item->created, "F"); ?></span></abbr>
                    </footer>
                    <div class="content-aside animate-in">
                        <?php
                        if (!$params->get('intro_only')) :
                            echo $item->afterDisplayTitle;
                        endif;
                        ?>

                        <?php echo $item->beforeDisplayContent; ?>

                        <p>
                            <?php echo strip_tags($item->introtext, '<span><a><br>'); ?>
                            <?php
                            if (isset($item->link) && $item->readmore && $params->get('readmore')) :
                                echo '<a class="savoir-plus-white" href="' . $item->link . '"> En savoir +</a>';
                            endif;
                            ?>
                        </p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>