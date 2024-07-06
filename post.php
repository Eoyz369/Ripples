<?php

/*
 * @Author: Eoyz369
 * @Date: 2024-06-29 01:34:09
 * @LastEditTime: 2024-07-06 23:28:53
 * @FilePath: \Ripples\post.php
 */

if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>

<?php $this->need('header.php');?>

<body class="bg-gray-100 flex flex-col min-h-screen">
  <main class="flex-grow m-3 relative">
    <?php $this->need('/module/articles.php');?>
    <?php $this->need('comments.php');?>
  </main>

  <!-- 回到顶部按钮 -->
  <a href="#top" id="back-to-top" class="hidden fixed bottom-5 right-5 bg-green-500 text-white px-4 py-2 rounded-full shadow-lg hover:bg-green-600">
      ↑
  </a>

  <?php $this->need('footer.php');?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const backToTopButton = document.getElementById("back-to-top");

    window.addEventListener("scroll", function() {
        // 当页面向下滚动 300px 时显示按钮，否则隐藏
        if (window.scrollY > 300) {
            backToTopButton.classList.remove("hidden");
        } else {
            backToTopButton.classList.add("hidden");
        }
    });
});
</script>

</body>