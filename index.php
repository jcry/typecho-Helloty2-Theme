<?php
/**
 * 这是基于官方模板二次设计的一套皮肤，用于66a.biz网站
 * 
 * @package Helloty
 * @author TypechoTeam & Ryita
 * @version 2.0
 * @link http://www.zzfly.net
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div id="main" class="col-mb-12 col-9" role="main">
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
            <div class="post-content" itemprop="articleBody">
    			<?php $this->excerpt('100','...');  ?>
            </div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

</div><!-- end #main-->



<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
