<div class="card comments">

<?php $this->comments()->to($comments); ?>


    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
<div class="comment-form">
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份：'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p class="userinfo clear">
    			<input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required placeholder="昵称" />
    			<input type="email" name="mail" id="mail" placeholder="E-Mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    			<input type="url" name="url" id="url" placeholder="网站" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p class="content">
                <textarea rows="8" cols="50" name="text" placeholder="说点什么吧 (。・`ω´・)" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <button type="submit" class="submit"><?php _e('评论  \(•ㅂ•)/'); ?></button>
            </p>
    	</form>
</div>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>

<div class="card comments" id="comments">
    


    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('还没有评论'), _t('只有 1 条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>


</div>