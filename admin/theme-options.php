<?php
include 'header.php';
include 'menu.php';
?>

<div class="main">
    <div class="body container">
        <div class="row">
            <div class="col-mb-12 col-tb-8 col-tb-offset-2">
                <div class="typecho-page-title">
                    <h2><?php _e('主题设置'); ?></h2>
                </div>
                <form action="<?php $security->index('/action/options-theme'); ?>" method="post" enctype="multipart/form-data">
                    <div class="typecho-edit-title">
                        <h3><?php _e('首页大图'); ?></h3>
                    </div>
                    <textarea name="slider" rows="10" cols="80"><?php echo htmlspecialchars($this->options->slider); ?></textarea>
                    <button type="submit" class="btn primary"><?php _e('保存设置'); ?></button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
