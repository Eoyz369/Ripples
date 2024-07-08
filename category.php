<?php
/*
 * @Author: Eoyz369
 * @Date: 2024-07-05 14:22:36
 * @LastEditTime: 2024-07-08 21:55:34
 * @FilePath: \Ripples\category.php
 */

if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>

<?php $this->need('header.php');?>
<link rel="stylesheet" type="text/css" media="all"
    href="<?php $this->options->themeUrl('assets/css/category.css'); ?>" />

<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- 标题 -->
    <main class="container mx-auto px-4 pt-8">
        <div class="mb-8 text-center ">
            <h1
                class="text-8xl sm:text-9xl md:text-10xl lg:text-11xl xl:text-12xl font-extrabold gradient-text no-line-height">
                <?php $this->archiveTitle(array(
            'category'  =>  _t(' %s '),

        ), '', ''); ?></h1>
        </div>
    </main>
    <!--文章卡片-->
    <?php $this->need('/module/card_list.php');?>

    <?php $this->need('footer.php');?>

    <style>
        body {
            --x: 50%;
            --y: 50%;
        }

        h1 {
            font-size: 8em;
            background: radial-gradient(circle at var(--x) var(--y), #f06, #48f);
            -webkit-background-clip: text;
            color: transparent;
            text-align: center;
            transition: transform 0.3s ease-in-out, background 0.3s ease-in-out;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 5em;
            }
        }

        .no-line-height {
            line-height: initial;
        }
    </style>

    <script>
        document.addEventListener('mousemove', (e) => {
            const x = e.clientX / window.innerWidth * 100;
            const y = e.clientY / window.innerHeight * 100;
            document.body.style.setProperty('--x', `${x}%`);
            document.body.style.setProperty('--y', `${y}%`);
        });
    </script>
</body>
