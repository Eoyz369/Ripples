<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="<?php $this->options->charset();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="//unpkg.com/layui@2.9.11/dist/css/layui.css" rel="stylesheet">

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- bootstrap -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>-->
      
    <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
    
          
    <link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('assets/css/post.css'); ?>" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title><?php $this->archiveTitle(array(
    'category' => _t('分类:%s'),
), '', ' - ');?><?php $this->options->title();?></title>


</head>

<body>
    <header class="navbar bg-base-100 shadow-lg">
        <!-- LOGO -->
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <?php $this->widget('Widget_Metas_Category_List')
    ->parse('<li><a href="{permalink}">{name}</a></li>');?>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl" href="/">daisyUI</a>
        </div>

        <!-- 菜单 -->
        <div class="navbar-center">
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">

                    <?php $this->widget('Widget_Metas_Category_List')
    ->parse('<li><a href="{permalink}">{name}</a></li>');?>

                </ul>
            </div>
        </div>




        <div class="navbar-end">
<!-- 搜索 -->
            <button class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
            </button>
<!-- 用户登录 -->
            <div class="dropdown dropdown-end bg-base-100">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component"
                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>

                <ul tabindex="0"
                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a class="justify-between">
                            Profile
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>

    </header>

</body>

</html>