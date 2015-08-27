<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="sidebar">
    <a href="<?php $this->options->siteUrl(); ?>"><div class="my clear">
        <img src="<?php $this->options->themeUrl('/img/avatar.png'); ?>" alt="哞菇">
        <h1><?php $this->options->title() ?></h1>
        <h2><?php $this->options->description() ?></h2>
    </div></a>
    <div class="nav">
        <div class="half">
            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while ($category->next()): ?><a href="<?php $category->permalink(); ?>"><?php $category->name(); ?></a><?php endwhile; ?>
        </div>
        <a href="http://flag.moe/"><i class="icon-info"></i>关于哞菇</a>
        <a href="http://lab.flag.moe/"><i class="icon-beaker"></i>实验室</a>
        <a href="http://flag.moe/#friends"><i class="icon-link"></i>小伙伴们</a>
        <a href="http://flag.moe/"><i class="icon-box"></i>神社的宝藏</a>
        <a>
            <form id="search" method="post" action="./" role="search">
            <i class="icon-search"></i><input name="s" value="搜索" class="search">
            </form>
        </a>
    </div>
</div>