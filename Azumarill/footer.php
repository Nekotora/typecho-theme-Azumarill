<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="card footer">
    <p>
	    <a href="<?php $this->options->siteUrl(); ?>">©  2015 <?php $this->options->title() ?>. </a> &nbsp;&nbsp; / &nbsp;&nbsp;
	    <a href="http://creativecommons.org/licenses/by-nc/4.0/deed.zh"><i class="icon-cc"></i>CC-BY-NC-4.0</a> &nbsp;&nbsp; / &nbsp;&nbsp;
	    <a href="<?php $this->options->feedUrl(); ?>"><i class="icon-rss"></i>RSS</a>
    </p>
    <!--<p class="s"># <a href="javascript:void(0)" onclick="getkoto()" id="hitokoto">Loading...</a></p>-->
    <p class="s">
        <a href="http://typecho.org/">Powered by Typecho</a> &nbsp;&nbsp; / &nbsp;&nbsp;
        <a href="http://flag.moe/">Theme 'Azumarill' by 哞菇</a> &nbsp;&nbsp; / &nbsp;&nbsp;
        <a href="http://oott123.com">Hosted by oott123</a>
        <script type="text/javascript" src="http://tajs.qq.com/stats?sId=30582263" charset="UTF-8"></script>
    </p>
</div>

<?php $this->footer(); ?>