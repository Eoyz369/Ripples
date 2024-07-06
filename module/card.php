<!--
/*
 * @Author: Eoyz369
 * @Date: 2024-07-06 10:22:58
 * @LastEditTime: 2024-07-06 23:03:35
 * @FilePath: \Ripples\module\card.php
 */

-->


<div class="container mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 m-8">
        <?php $count = 0;while ($this->next() && $count < 6):$count++;?>
        <!--  -->
        <div class="card w-full bg-base-100 shadow-xl post hover:shadow-2xl transition duration-300 transform hover:-translate-y-1 hover:scale-105">
            <!-- 文章封面 -->
            <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">
                    <ul>
                        <!-- 文章标题 -->
                        <?php $this->title()?>
                    </ul>
                </h2>
                <!-- 文章摘要 -->
                <p><?php $this->excerpt(100);?></p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <a href="<?php $this->permalink()?>" class="inline-flex items-center">
                            更多内容
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M13.75 4.75a.75.75 0 0 1 .743.648l.007.102v9a.75.75 0 0 1-1.493.102L13 14.5v-9a.75.75 0 0 1 .75-.75m-8.28.22a.75.75 0 0 1 .976-.073l.084.073l4.5 4.5a.75.75 0 0 1 .073.976l-.073.084l-4.5 4.5a.75.75 0 0 1-1.133-.976l.073-.084L9.44 10L5.47 6.03a.75.75 0 0 1 0-1.06" />
                            </svg>
                        </a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <!-- 浏览数量 -->
                        <div class="eye-num flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M5.09 14.781c1.749 1.368 3.219 1.806 4.91 1.806c1.471 0 3.391-.613 5.238-1.919c1.332-.942 2.433-2.315 3.3-4.13c-.94-1.632-2.028-2.968-3.263-4.013c-1.71-1.448-3.582-2.112-5.312-2.112c-1.79 0-3.85.798-5.608 2.474c-1.266 1.206-2.225 2.42-2.88 3.638c1.065 1.789 2.27 3.206 3.614 4.256M10 18c-1.974 0-3.735-.525-5.741-2.094c-1.577-1.232-2.964-2.901-4.164-5a.724.724 0 0 1-.021-.678c.734-1.493 1.851-2.95 3.347-4.377C5.438 3.928 7.833 3 9.963 3c2.043 0 4.223.775 6.184 2.434c1.449 1.226 2.703 2.802 3.763 4.722c.11.198.12.439.027.645c-.988 2.2-2.295 3.882-3.921 5.032C13.94 17.3 11.749 18 9.999 18m.234-3.6a3.7 3.7 0 1 1 0-7.4a3.7 3.7 0 0 1 0 7.4m0-1.4a2.3 2.3 0 1 0 0-4.6a2.3 2.3 0 0 0 0 4.6" />
                            </svg>

                            <span class="text-sm ml-1"><?php get_post_view($this); ?></span>
                        </div>
                        <!-- 分割线 -->
                        <div class="w-px h-6 bg-gray-300"></div>
                        <!-- 评论数量 -->
                        <div class="chat-num flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M5 12a5 5 0 0 1 7 7m-7-7a4.993 4.993 0 0 0-2 4a5 5 0 0 0 .224 1.483c.272.88.076 1.86-.099 2.784a.468.468 0 0 0 .592.539c.848-.232 1.691-.43 2.557-.112A4.99 4.99 0 0 0 8 21a4.991 4.991 0 0 0 4-2m-7-7c0-4.685 2.875-9 8-9a8 8 0 0 1 7.532 10.7c-.476 1.326.037 3.102.337 4.568a.451.451 0 0 1-.584.526c-1.312-.41-2.852-.986-4.085-.466c-1.334.562-2.736.672-4.2.672" />
                            </svg>
                            <span class="text-sm ml-1"><?php $this->commentsNum();?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;?>

        <!-- 永远排在最后的更多资讯卡 -->
        <div class="card w-full bg-base-100 shadow-xl post hover:shadow-2xl transition duration-300 transform hover:-translate-y-1 hover:scale-105">
            <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    </div>

</div>
