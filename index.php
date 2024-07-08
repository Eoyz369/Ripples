<?php
/**
 * Ripples 
 *
 * @package Ripples Theme
 * @author Eoyz369
 * @version 1.0.0
 * @link https://github.com/Eoyz369/Ripples
 */
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php $this->need('header.php');?>

<!-- 首图 -->
<div class="flex flex-wrap mx-auto  ">
    <div class="card lg:card-side bg-base-100 shadow-xl flex-grow m-3 rounded-lg  ">
        <div class="card-body">
            <h2 class="card-title">New album is released!</h2>
            <p>Click the button to listen on Spotiwhy app.</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Listen</button>
            </div>
        </div>
    </div>
    <div class="card lg:card-side bg-base-100 shadow-xl m-3 rounded-lg">
        <figure class="rounded-lg overflow-hidden">
            <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
        </figure>
    </div>
</div>

<!-- 用户数量 -->
<section class="text-gray-600 body-font shadow-xl rounded-lg m-3">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
            <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Moon hashtag pop-up try-hard offal
                    truffaut</h1>
                <div class="leading-relaxed">Pour-over craft beer pug drinking vinegar live-edge gastropub, keytar
                    neutra sustainable fingerstache kickstarter.</div>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
                <p class="leading-relaxed">Users</p>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                <h2 class="title-font font-medium text-3xl text-gray-900">1.8K</h2>
                <p class="leading-relaxed">Subscribes</p>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                <h2 class="title-font font-medium text-3xl text-gray-900">35</h2>
                <p class="leading-relaxed">Downloads</p>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                <h2 class="title-font font-medium text-3xl text-gray-900">4</h2>
                <p class="leading-relaxed">Products</p>
            </div>
        </div>
        <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0 shadow-xl">
            <img class="object-cover object-center w-full h-full" src="https://dummyimage.com/600x300" alt="stats">
        </div>
    </div>
</section>

<div class="p-12">

    <h1 class="text-3xl font-bold text-center mb-10">最新动态</h1>
</div>


<!-- 最新资讯 -->
<?php $this->need('/module/card.php');?>



<div class="p-12">


    <h1 class="text-3xl font-bold text-center mb-10">精彩案例</h1>
</div>


<div id="gallery" class="columns-1 md:columns-2 lg:columns-3 xl:columns-4 gap-4 px-4  m-8"></div>

<script>
    const gallery = document.getElementById('gallery');
    const imageCount = 10;
    const imageUrls = [
        "https://via.placeholder.com/300x400",
        "https://via.placeholder.com/300x500",
        "https://via.placeholder.com/300x300",
        "https://via.placeholder.com/300x450",
        "https://via.placeholder.com/300x350",
        "https://via.placeholder.com/300x400",
        "https://via.placeholder.com/300x600",
        "https://via.placeholder.com/300x450",
        "https://via.placeholder.com/300x300",
        "https://via.placeholder.com/300x500"
    ];

    function getRandomSize() {
        const minHeight = 300;
        const maxHeight = 600;
        return Math.floor(Math.random() * (maxHeight - minHeight + 1)) + minHeight;
    }

    function createImageElement(url) {
        const div = document.createElement('div');
        div.className = 'mb-4 break-inside-avoid fade-in';
        const img = document.createElement('img');
        img.src = `${url}?height=${getRandomSize()}`;
        img.alt = 'Placeholder';
        img.className = 'w-full h-auto rounded-lg shadow-md hover-effect';
        div.appendChild(img);
        return div;
    }

    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }

    function loadImages() {
        gallery.innerHTML = '';
        const shuffledUrls = shuffleArray(imageUrls);
        for (let i = 0; i < imageCount; i++) {
            const imgElement = createImageElement(shuffledUrls[i]);
            gallery.appendChild(imgElement);
        }
    }

    window.onload = loadImages;
</script>


<div class="p-12">
    <h1 class="text-3xl font-bold text-center mb-10">我们团队</h1>
</div>

<div class="teams">
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 lg:w-1/2">
                    <div
                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                            src="https://dummyimage.com/200x200">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">Holden Caulfield</h2>
                            <h3 class="text-gray-500 mb-3">UI Developer</h3>
                            <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.
                            </p>
                            <span class="inline-flex">
                                <a class="text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </a>
                                <a class="ml-2 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="ml-2 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="p-4 lg:w-1/2">
                    <div
                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                            src="https://dummyimage.com/201x201">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">Alper Kamu</h2>
                            <h3 class="text-gray-500 mb-3">Designer</h3>
                            <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.
                            </p>
                            <span class="inline-flex">
                                <a class="text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </a>
                                <a class="ml-2 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="ml-2 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="p-4 lg:w-1/2">
                    <div
                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                            src="https://dummyimage.com/204x204">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">Atticus Finch</h2>
                            <h3 class="text-gray-500 mb-3">UI Developer</h3>
                            <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.
                            </p>
                            <span class="inline-flex">
                                <a class="text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </a>
                                <a class="ml-2 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="ml-2 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="p-4 lg:w-1/2">
                    <div
                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team"
                            class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                            src="https://dummyimage.com/204x204">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">Atticus Finch</h2>
                            <h3 class="text-gray-500 mb-3">UI Developer</h3>
                            <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.
                            </p>
                            <span class="inline-flex">
                                <a class="text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </a>
                                <a class="ml-2 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="ml-2 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

</div>


<div class="p-12">
    <h1 class="text-3xl font-bold text-center mb-10">用户评价</h1>
</div>
<!-- Reviews -->
<div class="container mx-auto mt-10 p-5">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        <!-- User Review 1 -->
        <div class="bg-white p-5 rounded-lg shadow-lg">
            <div class="flex items-center mb-4">
                <img class="w-12 h-12 rounded-full" src="user-avatar1.jpg" alt="User Avatar">
                <div class="ml-3">
                    <h3 class="text-lg font-semibold">Jane Doe</h3>
                    <p class="text-gray-600">June 15, 2024</p>
                </div>
            </div>
            <div class="flex items-center mb-3">
                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927C9.394 2.03 10.606 2.03 10.951 2.927l1.215 3.724a1 1 0 00.95.69h3.904c1.021 0 1.451 1.24.7 1.81l-3.156 2.3a1 1 0 00-.364 1.118l1.215 3.724c.345.898-.755 1.64-1.55 1.118l-3.156-2.3a1 1 0 00-1.176 0l-3.156 2.3c-.794.523-1.894-.22-1.55-1.118l1.215-3.724a1 1 0 00-.364-1.118L2.18 9.151c-.75-.57-.32-1.81.7-1.81h3.904a1 1 0 00.95-.69L9.049 2.927z" />
                </svg>
                <!-- Repeat the star SVG for the rating -->
            </div>
            <p class="text-gray-700">
                This is a great product! I have been using it for a few months now and it has significantly improved my
                productivity. Highly recommend it to anyone looking for a reliable solution.
            </p>
        </div>
        <!-- User Review 2 -->
        <div class="bg-white p-5 rounded-lg shadow-lg">
            <div class="flex items-center mb-4">
                <img class="w-12 h-12 rounded-full" src="user-avatar2.jpg" alt="User Avatar">
                <div class="ml-3">
                    <h3 class="text-lg font-semibold">John Smith</h3>
                    <p class="text-gray-600">May 20, 2024</p>
                </div>
            </div>
            <div class="flex items-center mb-3">
                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927C9.394 2.03 10.606 2.03 10.951 2.927l1.215 3.724a1 1 0 00.95.69h3.904c1.021 0 1.451 1.24.7 1.81l-3.156 2.3a1 1 0 00-.364 1.118l1.215 3.724c.345.898-.755 1.64-1.55 1.118l-3.156-2.3a1 1 0 00-1.176 0l-3.156 2.3c-.794.523-1.894-.22-1.55-1.118l1.215-3.724a1 1 0 00-.364-1.118L2.18 9.151c-.75-.57-.32-1.81.7-1.81h3.904a1 1 0 00.95-.69L9.049 2.927z" />
                </svg>
                <!-- Repeat the star SVG for the rating -->
            </div>
            <p class="text-gray-700">
                Excellent quality and fast delivery. I am very satisfied with this product and will definitely purchase
                again.
            </p>
        </div>
        <!-- User Review 3 -->
        <div class="bg-white p-5 rounded-lg shadow-lg">
            <div class="flex items-center mb-4">
                <img class="w-12 h-12 rounded-full" src="user-avatar3.jpg" alt="User Avatar">
                <div class="ml-3">
                    <h3 class="text-lg font-semibold">Emily Johnson</h3>
                    <p class="text-gray-600">April 10, 2024</p>
                </div>
            </div>
            <div class="flex items-center mb-3">
                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927C9.394 2.03 10.606 2.03 10.951 2.927l1.215 3.724a1 1 0 00.95.69h3.904c1.021 0 1.451 1.24.7 1.81l-3.156 2.3a1 1 0 00-.364 1.118l1.215 3.724c.345.898-.755 1.64-1.55 1.118l-3.156-2.3a1 1 0 00-1.176 0l-3.156 2.3c-.794.523-1.894-.22-1.55-1.118l1.215-3.724a1 1 0 00-.364-1.118L2.18 9.151c-.75-.57-.32-1.81.7-1.81h3.904a1 1 0 00.95-.69L9.049 2.927z" />
                </svg>
                <!-- Repeat the star SVG for the rating -->
            </div>
            <p class="text-gray-700">
                Not what I expected, but still a decent product. It could use some improvements, but overall it's okay.
            </p>
        </div>
        <!-- User Review 4 -->
        <div class="bg-white p-5 rounded-lg shadow-lg">
            <div class="flex items-center mb-4">
                <img class="w-12 h-12 rounded-full" src="user-avatar3.jpg" alt="User Avatar">
                <div class="ml-3">
                    <h3 class="text-lg font-semibold">Emily Johnson</h3>
                    <p class="text-gray-600">April 10, 2024</p>
                </div>
            </div>
            <div class="flex items-center mb-3">
                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927C9.394 2.03 10.606 2.03 10.951 2.927l1.215 3.724a1 1 0 00.95.69h3.904c1.021 0 1.451 1.24.7 1.81l-3.156 2.3a1 1 0 00-.364 1.118l1.215 3.724c.345.898-.755 1.64-1.55 1.118l-3.156-2.3a1 1 0 00-1.176 0l-3.156 2.3c-.794.523-1.894-.22-1.55-1.118l1.215-3.724a1 1 0 00-.364-1.118L2.18 9.151c-.75-.57-.32-1.81.7-1.81h3.904a1 1 0 00.95-.69L9.049 2.927z" />
                </svg>
                <!-- Repeat the star SVG for the rating -->
            </div>
            <p class="text-gray-700">
                Not what I expected, but still a decent product. It could use some improvements, but overall it's okay.
            </p>
        </div>

        <!-- User Review 5 -->
        <div class="bg-white p-5 rounded-lg shadow-lg">
            <div class="flex items-center mb-4">
                <img class="w-12 h-12 rounded-full" src="user-avatar3.jpg" alt="User Avatar">
                <div class="ml-3">
                    <h3 class="text-lg font-semibold">Emily Johnson</h3>
                    <p class="text-gray-600">April 10, 2024</p>
                </div>
            </div>
            <div class="flex items-center mb-3">
                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927C9.394 2.03 10.606 2.03 10.951 2.927l1.215 3.724a1 1 0 00.95.69h3.904c1.021 0 1.451 1.24.7 1.81l-3.156 2.3a1 1 0 00-.364 1.118l1.215 3.724c.345.898-.755 1.64-1.55 1.118l-3.156-2.3a1 1 0 00-1.176 0l-3.156 2.3c-.794.523-1.894-.22-1.55-1.118l1.215-3.724a1 1 0 00-.364-1.118L2.18 9.151c-.75-.57-.32-1.81.7-1.81h3.904a1 1 0 00.95-.69L9.049 2.927z" />
                </svg>
                <!-- Repeat the star SVG for the rating -->
            </div>
            <p class="text-gray-700">
                Not what I expected, but still a decent product. It could use some improvements, but overall it's okay.
            </p>
        </div>

        <!-- User Review 6 -->
        <div class="bg-white p-5 rounded-lg shadow-lg">
            <div class="flex items-center mb-4">
                <img class="w-12 h-12 rounded-full" src="user-avatar3.jpg" alt="User Avatar">
                <div class="ml-3">
                    <h3 class="text-lg font-semibold">Emily Johnson</h3>
                    <p class="text-gray-600">April 10, 2024</p>
                </div>
            </div>
            <div class="flex items-center mb-3">
                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927C9.394 2.03 10.606 2.03 10.951 2.927l1.215 3.724a1 1 0 00.95.69h3.904c1.021 0 1.451 1.24.7 1.81l-3.156 2.3a1 1 0 00-.364 1.118l1.215 3.724c.345.898-.755 1.64-1.55 1.118l-3.156-2.3a1 1 0 00-1.176 0l-3.156 2.3c-.794.523-1.894-.22-1.55-1.118l1.215-3.724a1 1 0 00-.364-1.118L2.18 9.151c-.75-.57-.32-1.81.7-1.81h3.904a1 1 0 00.95-.69L9.049 2.927z" />
                </svg>
                <!-- Repeat the star SVG for the rating -->
            </div>
            <p class="text-gray-700">
                Not what I expected, but still a decent product. It could use some improvements, but overall it's okay.
            </p>
        </div>
    </div>
</div>





<div class="p-12">
    <h1 class="text-3xl font-bold text-center mb-10">合作机构</h1>
</div>
<div class="partners">
    <div class="container mx-auto py-10">

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <!-- Logo 1 -->
            <div class="flex justify-center items-center p-4 bg-white shadow-lg">
                <img src="logo1.png" alt="Logo 1" class="max-h-16">
            </div>
            <!-- Logo 2 -->
            <div class="flex justify-center items-center p-4 bg-white shadow-lg">
                <img src="logo2.png" alt="Logo 2" class="max-h-16">
            </div>
            <!-- Logo 3 -->
            <div class="flex justify-center items-center p-4 bg-white shadow-lg">
                <img src="logo3.png" alt="Logo 3" class="max-h-16">
            </div>
            <!-- Logo 4 -->
            <div class="flex justify-center items-center p-4 bg-white shadow-lg">
                <img src="logo4.png" alt="Logo 4" class="max-h-16">
            </div>
            <!-- Logo 5 -->
            <div class="flex justify-center items-center p-4 bg-white shadow-lg">
                <img src="logo5.png" alt="Logo 5" class="max-h-16">
            </div>
            <!-- Logo 6 -->
            <div class="flex justify-center items-center p-4 bg-white shadow-lg">
                <img src="logo6.png" alt="Logo 6" class="max-h-16">
            </div>
            <!-- 继续添加更多 logo 按照相同的结构 -->
        </div>
    </div>
</div>


<?php $this->need('footer.php');?>


</body>
