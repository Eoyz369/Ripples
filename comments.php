
<script src="<?php $this->options->themeUrl('assets/js/comments.js'); ?>"></script>
<?php
/*
 * @Author: Eoyz369
 * @Date: 2024-06-29 01:34:09
 * @LastEditTime: 2024-07-01 04:18:59
 * @FilePath: \Ripples\comments.php
 */
function threadedComments($comments, $options)
{
    // 定义评论类，根据作者ID设置不同的类
    $commentClass = $comments->authorId ? ($comments->authorId == $comments->ownerId ? ' comment-by-author' : ' comment-by-user') : '';
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';

    // 随机选择一个样式类
    $styles = ['chat-bubble-primary', 'chat-bubble-secondary', 'chat-bubble-accent', 'chat-bubble-info', 'chat-bubble-success', 'chat-bubble-warning', 'chat-bubble-error'];
    $randomStyle = $styles[array_rand($styles)];
    ?>

<li id="<?php $comments->theId(); ?>"
    class="comment-body<?php echo $commentLevelClass; ?><?php $comments->alt(' comment-odd', ' comment-even'); echo $commentClass; ?>">
    <div id="<?php echo str_replace('comment-', '', $comments->theId()); ?>"
        class="chat <?php echo $comments->parent ? 'chat-end' : 'chat-start'; ?>">
        <!-- 显示头像 -->
        <div class="chat-image avatar">
            <div class="w-10 rounded-full">
                <?php $comments->gravatar('40', ''); ?>
            </div>
        </div>
        <!-- 显示评论作者和回复链接 -->
        <div class="chat-header">
            <?php echo $comments->author; ?>
            <?php if ($comments->parent) : ?>
            <span class="reply-to text-sm text-gray-500">
                <a href="#comment-<?php echo $comments->parent; ?>" class="hover:underline"
                    onclick="return TypechoComment.reply('<?php echo $comments->theId(); ?>', <?php echo $comments->theId(); ?>);">回复
                    <?php echo str_replace('comment-', '', $comments->parent); ?> 楼</a>
            </span>
            <?php endif; ?>
        </div>
        <!-- 显示评论内容 -->
        <div class="chat-bubble font-bold flex items-center justify-center <?php echo $randomStyle; ?>">
            <?php $comments->content(); ?>
        </div>
        <!-- 显示评论时间和回复按钮 -->
        <div class="chat-footer text-xs text-gray-500 flex justify-between items-center">
            <span class="comment-level text-xs text-gray-500"><?php echo $comments->theId(); ?> 楼 </span>
            <time><?php $comments->date('Y-m-d H:i'); ?></time>
            <a href="<?php echo $comments->replyUrl(); ?>?replyTo=<?php echo $comments->theId(); ?>"
                class="text-blue-500 hover:underline"><?php $comments->reply(); ?></a>
        </div>
    </div>
    <!-- 如果有子评论，递归调用显示子评论 -->
    <?php if ($comments->children) : ?>
    <?php $comments->threadedComments($options); ?>
    <?php endif; ?>
</li>

<?php
}

$this->comments()->to($comments);
?>

<?php if ($this->allow('comment')) : ?>
<!-- 如果有评论，显示评论列表 -->

<?php if ($comments->have()) : ?>
<div class="m-3">
    <div id="comments" class="max-w-4xl mx-auto my-8 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">
            <?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('%d 条评论')); ?>
        </h2>
        <div class="space-y-6" id="comment-list">
            <ul class="comment-list">
                <?php $comments->listComments(array('before' => '', 'after' => '', 'avatarSize' => 40, 'dateFormat' => 'Y-m-d H:i', 'replyWord' => '回复')); ?>
            </ul>
        </div>
    </div>
</div>

<!-- 如果没有评论，显示暂无评论 -->
<?php else : ?>
<div id="comments" class="max-w-4xl mx-auto my-8 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">
        <?php _e('暂无评论'); ?>
    </h2>
</div>
<?php endif; ?>

<!-- 评论表单 -->
<div class="m-3">
    <div id="<?php $this->respondId(); ?>" class="respond max-w-4xl mx-auto my-8 p-6 bg-white rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h3 id="response" class="text-2xl font-bold text-gray-800">
                <!-- 无论是否登录或回复，始终显示添加新评论 -->
                <?php _e('添加新评论'); ?>
            </h3>
            <div class="cancel-comment-reply">
                <?php $comments->cancelReply(); ?>
            </div>
        </div>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form" class="space-y-4">
            <!-- 如果用户已登录，显示登录信息 -->
            <?php if ($this->user->hasLogin()) : ?>
            <p class="text-gray-700"><?php _e('登录身份: '); ?><a class="text-blue-500"
                    href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a
                    href="<?php $this->options->logoutUrl(); ?>" title="Logout" class="text-red-500"><?php _e('退出'); ?>
                    &raquo;</a>
            </p>
            <!-- 如果用户未登录，显示输入框 -->
            <?php else : ?>
            <p>
                <label for="author" class="block text-sm font-medium text-gray-700 required"><?php _e('称呼'); ?></label>
                <input type="text" name="author" id="author"
                    class="text-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    value="<?php $this->remember('author'); ?>" required />
            </p>
            <p>
                <label for="mail"
                    class="block text-sm font-medium text-gray-700 <?php if ($this->options->commentsRequireMail) : ?> required<?php endif; ?>"><?php _e('Email'); ?></label>
                <input type="email" name="mail" id="mail"
                    class="text-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    value="<?php $this->remember('mail'); ?>" <?php if ($this->options->commentsRequireMail) : ?>
                    required<?php endif; ?> />
            </p>
            <p>
                <label for="url"
                    class="block text-sm font-medium text-gray-700 <?php if ($this->options->commentsRequireURL) : ?> required<?php endif; ?>"><?php _e('网站'); ?></label>
                <input type="url" name="url" id="url"
                    class="text-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"
                    <?php if ($this->options->commentsRequireURL) : ?> required<?php endif; ?> />
            </p>
            <?php endif; ?>
            <p>
                <label for="textarea"
                    class="block text-sm font-medium text-gray-700 required"><?php _e('内容'); ?></label>
                <textarea rows="8" cols="50" name="text" id="textarea"
                    class="textarea mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    required><?php $this->remember('text'); ?></textarea>
            </p>
            <div class="flex justify-between items-center">
                <button type="submit"
                    class="submit inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-400 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-600 disabled:opacity-25 transition"><?php _e('提交评论'); ?></button>
                <div class="cancel-comment-reply">
                    <?php $comments->cancelReply(); ?>
                </div>
            </div>
        </form>
    </div>
</div>
  <script src="<?php $this->options->themeUrl('assets/js/comments.js'); ?>">document.addEventListener('DOMContentLoaded', function() {
    var commentLevels = document.querySelectorAll('.comment-level');
    commentLevels.forEach(function(level) {
        var text = level.textContent.trim(); // 获取元素内容并去除首尾空格
        var newContent = text.replace('comment-', ''); // 去掉 comment- 前缀
        level.textContent = newContent; // 更新元素内容
    });
});
</script>

<?php else : ?>

<?php endif; ?>
