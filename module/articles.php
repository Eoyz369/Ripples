<!-- 文章内容显示
/*
 * @Author: Eoyz369
 * @Date: 2024-07-06 22:47:03
 * @LastEditTime: 2024-07-08 21:20:43
 * @FilePath: \Ripples\module\articles.php
 */

-->
<!-- 代码高亮 -->
<?php $this->need('/module/code.php');?>

<div class="m-3">
    <div class="relative max-w-4xl mx-auto my-8 p-6 bg-white rounded-lg shadow-md">
        <!-- 返回前一页按钮 -->
        <a href="javascript:history.back()"
            class="absolute top-0 left-0 transform -translate-x-1/2 -translate-y-1/2 bg-blue-500 text-white p-3 rounded-full shadow-md hover:bg-blue-600 z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
        </a>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800"><?php $this->title()?></h1>
                <div class="text-sm text-gray-500 mt-2">
                    <span>作者: <span class="text-gray-700"><?php $this->author();?></span></span>
                    <span class="mx-2">|</span>
                    <span>发布时间: <span class="text-gray-700"><?php $this->date('Y-m-d');?></span></span>
                    <span class="mx-2">|</span>
                    <span>阅读量: <span class="text-gray-700"><?php get_post_view($this);?></span></span>
                </div>
            </div>
            <div class="mt-4 md:mt-0 text-sm text-gray-500">
                <span class="bg-blue-100 text-blue-500 px-2 py-1 rounded">分类: <?php $this->category(', ');?></span>
            </div>
        </div>
        <div class="mt-4 post-content">
            <?php $this->content(); ?>
        </div>
        <div class="mt-6">
            <span class="text-sm text-gray-500">标签:</span>
            <div class="flex flex-wrap mt-2">
                <?php if ($this->tags): ?>
                <?php foreach ($this->tags as $tag): ?>
                <a href="<?php echo $tag['permalink']; ?>"
                    class="bg-green-100 text-green-500 px-2 py-1 rounded-full text-xs mr-2 mb-2"><?php echo $tag['name']; ?></a>
                <?php endforeach;?>
                <?php else: ?>
                <span
                    class="bg-green-100 text-green-500 px-2 py-1 rounded-full text-xs mr-2 mb-2">没有标签</span>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

