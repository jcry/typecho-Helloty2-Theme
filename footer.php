<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
    </div>
</div><!-- end #body -->

<div class="container">
<?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
<ul class="tags-list">
<?php while($tags->next()): ?>
    <li><a href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a></li>
<?php endwhile; ?>
</ul>
</div>

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.zzfly.net">Rytia</a> 设计. Typecho 驱动'); ?>.<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261174344'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/stat.php%3Fid%3D1261174344' type='text/javascript'%3E%3C/script%3E"));</script>
</footer><!-- end #footer -->

<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
<!--<script src="<?php $this->options->themeUrl();?>js/jquery.pjax.js"></script>-->

<?php $this->footer(); ?>
</body>
</html>
