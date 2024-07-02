<?php

/*
 * @Author: Eoyz369
 * @Date: 2024-06-29 01:34:09
 * @LastEditTime: 2024-07-02 01:52:26
 * @FilePath: \Ripples\post.php
 */

if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>

<?php $this->need('header.php');?>

<body class="bg-gray-100 flex flex-col min-h-screen">

  <main class="flex-grow m-3">

    <div class="max-w-4xl mx-auto my-8 p-6 bg-white rounded-lg shadow-md">
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
        <p class="text-gray-700 leading-relaxed">
          <?php $this->content();?>
        </p>
      </div>
      <div class="mt-6">
        <span class="text-sm text-gray-500">标签:</span>
        <div class="flex flex-wrap mt-2">
          <?php if ($this->tags): ?>
            <?php foreach ($this->tags as $tag): ?>
              <a href="<?php echo $tag['permalink']; ?>" class="bg-green-100 text-green-500 px-2 py-1 rounded-full text-xs mr-2 mb-2"><?php echo $tag['name']; ?></a>
            <?php endforeach;?>
          <?php else: ?>
            <span class="bg-green-100 text-green-500 px-2 py-1 rounded-full text-xs mr-2 mb-2">没有标签</span>
          <?php endif;?>
        </div>
      </div>
    </div>
    <?php $this->need('comments.php');?>
  </main>

<?php $this->need('footer.php');?>
</body>
