<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<?php $this->need('sidebar.php'); ?>

<div class="main">
    <div class="inner">
        <div class="card detail">
            <h2 class="title"><?php $this->title() ?></h2>
            <div class="sub">
                <span><?php $this->date('Y.m.d'); ?></span> / 
                <span><?php $this->category(','); ?></span> / 
                <span>点击 <?php $this->views();?></span> / 
                <span>回复 <?php $this->commentsNum('%d'); ?></span> / 
                <span><?php $this->tags(', ', true, ''); ?></span>
            </div>
            <div class="content">
                <?php $this->content(''); ?>
            </div>
        </div>
        <?php include('comments.php'); ?>
        <?php $this->need('footer.php'); ?>
    </div>
</div>
<div id="loadbox"></div>
</body>
</html>