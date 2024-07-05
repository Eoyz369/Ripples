<?php
/*
 * @Author: Eoyz369
 * @Date: 2024-07-05 14:22:36
 * @LastEditTime: 2024-07-05 14:50:33
 * @FilePath: \Ripples\category.php
 */

if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>

<?php $this->need('header.php');?>
<link rel="stylesheet" type="text/css" media="all"
    href="<?php $this->options->themeUrl('assets/css/category.css'); ?>" />

<body class="bg-gray-100 font-sans tracking-normal ">

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="mb-8 text-center ">
            <h1
                class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl xl:text-9xl font-extrabold gradient-text no-line-height">
                <?php $this->archiveTitle(array(
            'category'  =>  _t(' %s '),

        ), '', ''); ?></h1>
        </div>




    </main>
    <!--文章卡片-->
    <?php $this->need('/module/card.php');?>
