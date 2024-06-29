<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php define('__TYPECHO_DEBUG__', true); ?>
<div id="comments" class="max-w-2xl mx-auto my-8 p-6 bg-white rounded-lg shadow-md">
    <?php $this->comments()->to($comments); ?>
    
    <?php if ($comments->have()): ?>
        <h2 class="text-2xl font-bold text-gray-800 mb-4">
            <?php $this->commentsNum(_t('暂无评论'), _t('1 条评论'), _t('%d 条评论')); ?>
        </h2>
        
        <div class="space-y-6" id="comment-list">
            <?php while($comments->next()): ?>
                <div id="<?php $comments->theId(); ?>" class="border-b border-gray-200 pb-4 mb-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img class="w-10 h-10 rounded-full" src="<?php echo $comments->gravatar(48); ?>" alt="<?php $comments->author(); ?>" />
                            <div>
                                <h3 class="text-md font-semibold text-gray-900"><?php $comments->author(); ?></h3>
                                <p class="text-sm text-gray-500"><?php $comments->date('Y-m-d H:i'); ?></p>
                            </div>
                        </div>
                        <div>
                            <a href="<?php $comments->replyUrl(); ?>" class="text-sm text-blue-500 hover:underline">回复</a>
                        </div>
                    </div>
                    <p class="mt-2 text-gray-700"><?php $comments->content(); ?></p>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="mt-6">
            <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
        </div>
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
        <div class="mt-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">发表评论</h2>
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" class="space-y-4">
                <?php if($this->user->hasLogin()): ?>
                    <p class="text-gray-700">已登录为 <a href="<?php $this->options->profileUrl(); ?>" class="text-blue-500 hover:underline"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" class="text-blue-500 hover:underline" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
                <?php else: ?>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="author" class="block text-sm font-medium text-gray-700">姓名</label>
                            <input type="text" name="author" id="author" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required />
                        </div>
                        <div>
                            <label for="mail" class="block text-sm font-medium text-gray-700">邮箱</label>
                            <input type="email" name="mail" id="mail" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required />
                        </div>
                        <div>
                            <label for="url" class="block text-sm font-medium text-gray-700">网站</label>
                            <input type="url" name="url" id="url" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                        </div>
                    </div>
                <?php endif; ?>
                <div>
                    <label for="textarea" class="block text-sm font-medium text-gray-700">评论</label>
                    <textarea name="text" id="textarea" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required></textarea>
                </div>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    提交评论
                </button>
            </form>
        </div>
    <?php else: ?>
        <h3 class="text-lg font-bold text-gray-800">评论已关闭</h3>
    <?php endif; ?>
</div>

<script>
$(document).ready(function() {
    $('#comment-form').submit(function(event) {
        event.preventDefault(); // 防止表单默认提交
        $.ajax({
            url: $(this).attr('action'),
            type: 'post',
            data: $(this).serialize(),
            success: function(response) {
                // 成功提交评论后的处理
                alert('评论提交成功！');
                $('#comment-list').prepend($(response).find('#comment-list').html());
                $('#comment-form')[0].reset();
            },
            error: function(xhr, status, error) {
                // 提交失败后的处理
                alert('评论提交失败：' + error);
            }
        });
    });
});
</script>
