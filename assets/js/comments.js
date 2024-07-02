/*
 * @Author: Eoyz369
 * @Date: 2024-06-30 22:32:01
 * @LastEditTime: 2024-06-30 22:32:14
 * @FilePath: \MHWeb\assets\js\comments.js
 */


document.addEventListener('DOMContentLoaded', function() {
    var commentLevels = document.querySelectorAll('.comment-level');
    commentLevels.forEach(function(level) {
        var text = level.textContent.trim(); // 获取元素内容并去除首尾空格
        var newContent = text.replace('comment-', ''); // 去掉 comment- 前缀
        level.textContent = newContent; // 更新元素内容
    });
});
