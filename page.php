<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main" class="col-mb-12">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="post-header">
            <h3 class="post-title"><a href="<?php $this->permalink() ?>" class="post-link"><?php $this->title() ?></a></h3>
            <div class="post-meta">
                <span class="post-meta-label post-meta-views"><?php Contents::getPostView($this); ?>次阅读</span>
                <span class="post-meta-label post-meta-date"><?php $this->date(); ?></span>
            </div> 
        </div>
        <div class="post-body">
            <div class="post-content">
                <?php $this->content(); ?>
            </div>
            <?php Contents::getPostOther($this); ?>
            <div class="post-update">© &nbsp; <?php $this->author(); ?> 版权所有</div>
        </div>
    </article>
    <?php $this->need('comments.php'); ?>

</div><!-- end #main-->
<?php if($this->fields->showTOC) $this->need('TOC.php'); ?>
<?php $this->need('footer.php'); ?>
