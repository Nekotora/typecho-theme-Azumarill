<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<?php $this->need('sidebar.php'); ?>

<div class="main">
    <div class="inner">
        <div class="card status">
            <h2>404 - Not Found</h2>
            <br>
            <p>啊咧，这个页面不见了呢...</p>
        </div>
        <?php $this->need('footer.php'); ?>
    </div>
</div>
<div id="loadbox"></div>
</body>
</html>