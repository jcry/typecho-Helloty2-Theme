<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="col-mb-12 col-3 kit-hidden-tb" id="secondary" role="complementary">

    <section class="widget search-widget">
        <form id="search" method="post" action="./" role="search">
            <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
            <input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
            <button type="submit" class="submit"><?php _e('搜索'); ?></button>
        </form>
    </section>

    <section class="widget bg">
		<h3 class="widget-title"><?php _e('最新文章'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>


    <section class="widget">
		<h3 class="widget-title"><?php _e('分类'); ?></h3>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
    </section>

    <section class="widget">
		<h3 class="widget-title"><?php _e('归档'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
	</section>



</div><!-- end #sidebar -->
