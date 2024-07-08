<!-- 代码高亮-->
<!-- /*
 * @Author: Eoyz369
 * @Date: 2024-07-08 21:08:55
 * @LastEditTime: 2024-07-08 21:09:22
 * @FilePath: \Ripples\module\code.php
 */ -->

<script src="<?php $this->options->themeUrl('assets/js/prism.js'); ?>"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('assets/css/prism.css'); ?>" />

<style>
    pre {
        position: relative;
        padding: 1.2rem;
        border-radius: 0.75rem;
        background: rgba(107, 114, 128, 0.75);
        backdrop-filter: blur(10px);
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
        background-color: #3b82f6;
        color: #ffffff;
        padding: 0.25rem 0.75rem;
        border-radius: 0.25rem;
        cursor: pointer;
        font-size: 0.75rem;
        display: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .copy-button:hover {
        background-color: #2563eb;
        transform: scale(1.1);
    }

    .copy-button:active {
        background-color: #1d4ed8;
        transform: scale(0.95);
    }

    pre:hover .copy-button {
        display: inline-block;
    }


    .post-content {
        font-size: 1.125rem;
        line-height: 1.6;
    }
</style>


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
