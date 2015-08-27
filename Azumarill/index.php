<?php
/**
 * 简单清爽的蓝色风格。
 * 
 * @package Azumarill
 * @author 哞菇
 * @version 1.0
 * @link https://github.com/NekoTora/Azumarill
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<?php $this->need('sidebar.php'); ?>

<div class="main">
    <div class="inner">
	    <?php if ($this->is('archive')) : ?>
		    <div class="card status">
                <h3><?php $this->archiveTitle(array(
			            'category'  =>  _t('分类： %s'),
			            'search'    =>  _t('搜索： %s'),
			            'tag'       =>  _t('标签： %s'),
			            'author'    =>  _t('作者： %s')
			        ), '', ''); ?>
				</h3>
            </div>
		<?php endif; ?>
        <?php while($this->next()): ?>
        <div class="card post">
            <a href="<?php $this->permalink() ?>">
                <h2 class="title"><?php $this->title() ?></h2>
            </a>
            <div class="preview">
                <p><?php $this->excerpt(300, '……'); ?></p>
            </div>
            <div class="sub">
                <span><i class="icon-clock-1"></i><?php $this->date('Y.m.d'); ?></span>
                <span><i class="icon-folder"></i><?php $this->category(','); ?></span>
                <span><i class="icon-eye-1"></i><?php $this->views();?></span>
                <span><i class="icon-comment"></i><?php $this->commentsNum('%d'); ?></span>
                <span><i class="icon-tag"></i><?php $this->tags(', ', true, ''); ?></span>
            </div>
        </div>
        <?php endwhile; ?>
		<div class="card page clear">
			<?php $this->pageLink('上一页'); ?>
			<?php $this->pageLink('下一页','next'); ?>
		</div>

        <?php $this->need('footer.php'); ?>
    </div>
</div>
<div id="loadbox"></div>
</body>
</html>