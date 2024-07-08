<!-- 文章内容显示
/*
 * @Author: Eoyz369
 * @Date: 2024-07-06 22:47:03
 * @LastEditTime: 2024-07-06 23:26:52
 * @FilePath: \Ripples\module\articles.php
 */

-->


    <!-- Prism.js 样式和脚本 -->



    <script src="<?php $this->options->themeUrl('assets/js/prism.js'); ?>"></script>
    <link rel="stylesheet" type="text/css" media="all"
        href="<?php $this->options->themeUrl('assets/css/prism.css'); ?>" />
    <!-- 自定义样式 -->
    <style>
        /* 自定义代码块样式 */
        pre {
            position: relative;
            padding: 1.2rem;
            border-radius: 0.75rem;
            background: rgba(107, 114, 128, 0.75); /* 半透明灰色 */
            backdrop-filter: blur(10px); /* 毛玻璃效果 */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: auto;
        }

        code {
            font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
            font-size: 0.875rem;
        }

        .copy-button {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            background-color: #3b82f6; /* bg-blue-500 */
            color: #ffffff; /* text-white */
            padding: 0.25rem 0.75rem;
            border-radius: 0.25rem;
            cursor: pointer;
            font-size: 0.75rem;
            display: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .copy-button:hover {
            background-color: #2563eb; /* bg-blue-600 */
            transform: scale(1.1);
        }

        .copy-button:active {
            background-color: #1d4ed8; /* bg-blue-700 */
            transform: scale(0.95);
        }

        pre:hover .copy-button {
            display: inline-block;
        }
    </style>

    <div class="m-3">
        <div class="relative max-w-4xl mx-auto my-8 p-6 bg-white rounded-lg shadow-md">
            <!-- 返回前一页按钮 -->
            <a href="javascript:history.back()"
                class="absolute top-0 left-0 transform -translate-x-1/2 -translate-y-1/2 bg-blue-500 text-white p-3 rounded-full shadow-md hover:bg-blue-600 z-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </a>

            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800"><?php $this->title()?></h1>
                    <div class="text-sm text-gray-500 mt-2">
                        <span>作者: <span class="text-gray-700"><?php $this->author();?></span></span>
                        <span class="mx-2">|</span>
                        <span>发布时间: <span
                                class="text-gray-700"><?php $this->date('Y-m-d');?></span></span>
                        <span class="mx-2">|</span>
                        <span>阅读量: <span
                                class="text-gray-700"><?php get_post_view($this);?></span></span>
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

    <script>
        // Prism.js 初始化和复制按钮功能
        document.addEventListener("DOMContentLoaded", function () {
            Prism.highlightAll();

            document.querySelectorAll('pre').forEach(pre => {
                const button = document.createElement('button');
                button.innerText = '复制';
                button.className = 'copy-button';
                button.addEventListener('click', function () {
                    copyToClipboard(button);
                });
                pre.appendChild(button);
            });
        });

        // 复制代码功能
        function copyToClipboard(button) {
            const codeElement = button.parentElement.querySelector('code');
            if (!codeElement) {
                console.error('Code element not found.');
                return;
            }
            const code = codeElement.innerText;

            // 创建临时的 textarea 元素来复制文本
            const textarea = document.createElement('textarea');
            textarea.value = code;
            textarea.setAttribute('readonly', '');
            textarea.style.position = 'absolute';
            textarea.style.left = '-9999px';
            document.body.appendChild(textarea);

            // 选择并复制文本
            textarea.select();
            document.execCommand('copy');

            // 清理临时元素
            document.body.removeChild(textarea);

            // 更新按钮状态
            button.innerText = '已复制';
            setTimeout(() => {
                button.innerText = '复制';
            }, 2000);
        }
    </script>
