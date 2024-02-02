<!doctype html>
<html lang="en" data-theme="fantasy">
<head>
    <meta charset="utf-8" />
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content="width=device-width,height=device-height, initial-scale=1, shrink-to-fit=yes">

    <div itemscope itemtype="https://schema.org/CreativeWork">
        <meta itemprop="name" content="" />
        <link itemprop="url" href="" />
        <meta itemprop="description" content="" />
        <div itemprop="author" itemscope itemtype="https://schema.org/Person">
            <meta itemprop="name" content="" />
        </div>
        <meta itemprop="datePublished" content="2022-05-23" />
        <meta itemprop="keywords" content="" />
        <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
            <meta itemprop="name" content=""/>
            <link itemprop="url" href="">
        </div>
        <link itemprop="image" href="">
        <meta itemprop="inLanguage" content="en">
    </div>

    <!--theme colors -->
    <meta name="theme-color" content="" />
    <meta name="apple-mobile-web-app-status-bar-style" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!--Basic meta info -->
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="description" content="">

    <!--OpenGraph meta -->
    <meta property="og:description" content=""/>
    <meta property="og:title" content="" />
    <meta property="og:image" content=""/>
    <meta property="og:url" content="" />
    <meta property="og:type" content="" />

    <!--meta for twitter -->
    <meta name="twitter:card" content="">
    <meta name="twitter:creator" content=">">
    <meta name="twitter:title" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:description" content=""">

    <meta name="robots" content="index, follow">

    <link rel="dns-prefetch" href="//wrensitefx.com">

    <!--Favicon-->
    <link rel="icon" type="image/webp" href="assets/images/icons/logo/favicon-192x192.webp" sizes="192x192"/>
    <link rel="icon" type="image/webp" href="assets/images/icons/logo/favicon-160x160.webp" sizes="160x160"/>
    <link rel="icon" type="image/webp" href="assets/images/icons/logo/favicon-96x96.webp" sizes="96x96"/>
    <link rel="icon" type="image/webp" href="assets/images/icons/logo/favicon-32x32.webp" sizes="32x32"/>
    <link rel="icon" type="image/webp" href="assets/images/icons/logo/favicon-16x16.webp" sizes="16x16"/>
    <link rel="apple-touch-icon" type="image/webp" href="assets/images/icons/logo/apple-touch-icon-180x180.webp" sizes="180x180"/>
    <link rel="apple-touch-icon" type="image/webp" href="assets/images/icons/logo/apple-touch-icon-152x152.webp" sizes="152x152"/>
    <link rel="apple-touch-icon" type="image/webp" href="assets/images/icons/logo/apple-touch-icon-144x144.webp" sizes="144x144"/>
    <link rel="apple-touch-icon" type="image/webp" href="assets/images/icons/logo/apple-touch-icon-120x120.webp" sizes="120x120"/>
    <link rel="apple-touch-icon" type="image/webp" href="assets/images/icons/logo/apple-touch-icon-114x114.webp" sizes="114x114"/>
    <link rel="apple-touch-icon" type="image/webp" href="assets/images/icons/logo/apple-touch-icon-76x76.webp" sizes="76x76"/>
    <link rel="apple-touch-icon" type="image/webp" href="assets/images/icons/logo/apple-touch-icon-72x72.webp" sizes="72x72"/>
    <link rel="apple-touch-icon" type="image/webp" href="assets/images/icons/logo/apple-touch-icon-60x60.webp" sizes="60x60"/>
    <link rel="apple-touch-icon" type="image/webp" href="assets/images/icons/logo/apple-touch-icon-52x52.webp" sizes="52x52"/>
    <link rel="icon" href="assets/images/icons/logo/favicon.ico?v=2" type="image/x-icon">

    <title>Home of Organic Farming and Healthy Living | Health Food Store</title>

    <!-- stylesheets -->
    <link rel="preload" href="assets/css/styles.css" as="style">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preload" href="assets/css/additional-styles.css" as="style">
    <link rel="stylesheet" href="assets/css/additional-styles.css">

    <script rel="preload" src="assets/js/darkModeToggle.min.js"></script>

<body class="antialiased overflow-x-hidden transition-all duration-500">
<div id="toggleButton" class="dark:bg-white bg-black text-white rounded-full p-4 shadow-lg fixed bottom-8 right-8 z-50">
    <button id="theme-toggle" type="button" class="relative group flex max-w-[2.25rem] h-9 w-9 items-center justify-center before:absolute before:inset-0 before:rounded-full before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 disabled:before:bg-gray-300 disabled:before:scale-100">
        <div id="theme-toggle-light-icon" class="relative hidden">
            <i class="fa fa-sun-o w-8 h-8 text-supernova-700 duration-300 group-hover:-rotate-90"></i>
        </div>
        <div id="theme-toggle-dark-icon" class="relative hidden">
            <i class="fa fa-moon-o w-8 h-8 text-gray-300 duration-300 group-hover:-rotate-90"></i>
        </div>
    </button>
</div>
<!-- ====== Navbar Section Start -->
<header id="navbar" x-data="{navbarOpen: false,}" class="h-32 flex justify-center items-center top-0 left-0 z-50 w-full transition-all duration-500">
    <div class="container mx-auto">
        <div class="relative flex justify-between -mx-4">
            <div class="max-w-full px-4 w-auto">
                <a href="javascript:void(0)" class="block w-full py-5 dark:p-5 dark:bg-white dark:rounded-full dark:mt-6">
                    <img id="siteLogo" src="assets/images/icons/apple-touch-icon-114x114.png" alt="logo" class="block w-full transition-all duration-300" />
                </a>
            </div>
            <div class="flex items-center justify-between w-full px-4">
                <div>
                    <button
                            @click="navbarOpen = !navbarOpen"
                            :class="navbarOpen && 'navbarTogglerActive'"
                            id="navbarToggler"
                            class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
                    >
               <span
                       class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
               ></span>
                        <span
                                class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                        ></span>
                        <span
                                class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                        ></span>
                    </button>
                    <nav
                            x-transition
                            :class="!navbarOpen && 'hidden'"
                            id="navbarCollapse"
                            class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white dark:bg-dark-2 py-5 px-6 shadow transition-all lg:static lg:bg-transparent lg:dark:bg-transparent lg:block lg:w-full lg:max-w-full lg:shadow-none xl:ml-11"
                    >
                        <ul id="navbarList" class="block lg:flex">
                            <li>
                                <a href="javascript:void(0)" class="flex py-2 px-2 text-primary text-dark dark:text-white bg-bottom bg-gradient-to-r from-merino-500 to-merino-500 bg-[length:100%_2px] bg-no-repeat transition-all duration-500 ease-out hover:text-primary lg:ml-10 lg:inline-flex"
                                >
                                    Home
                                </a>
                            </li>
                            <li>
                                <a
                                        href="javascript:void(0)"
                                        class="flex py-2 text-base text-dark dark:text-white bg-bottom bg-gradient-to-r from-merino-500 to-merino-500 bg-[length:0%_2px] bg-no-repeat transition-all duration-500 ease-out hover:bg-[length:100%_2px] hover:text-primary lg:ml-10 lg:inline-flex"
                                >
                                    About LIFI
                                </a>
                            </li>
                            <li>
                                <a
                                        href="javascript:void(0)"
                                        class="flex py-2 text-base text-dark dark:text-white bg-bottom bg-gradient-to-r from-merino-500 to-merino-500 bg-[length:0%_2px] bg-no-repeat transition-all duration-500 ease-out hover:bg-[length:100%_2px] hover:text-primary lg:ml-10 lg:inline-flex"
                                >
                                    Donnabelle Products
                                </a>
                            </li>
                            <li>
                                <a
                                        href="javascript:void(0)"
                                        class="flex py-2 text-base text-dark dark:text-white bg-bottom bg-gradient-to-r from-merino-500 to-merino-500 bg-[length:0%_2px] bg-no-repeat transition-all duration-500 ease-out hover:bg-[length:100%_2px] hover:text-primary lg:ml-10 lg:inline-flex"
                                >
                                    The Farm
                                </a>
                            </li>
                            <li>
                                <a
                                        href="javascript:void(0)"
                                        class="flex py-2 text-base text-dark dark:text-white bg-bottom bg-gradient-to-r from-merino-500 to-merino-500 bg-[length:0%_2px] bg-no-repeat transition-all duration-500 ease-out hover:bg-[length:100%_2px] hover:text-primary lg:ml-10 lg:inline-flex"
                                >
                                    Donnabelle Bakeshop
                                </a>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)" class="flex py-2 text-base text-dark dark:text-white bg-bottom bg-gradient-to-r from-merino-500 to-merino-500 bg-[length:0%_2px] bg-no-repeat transition-all duration-500 ease-out hover:bg-[length:100%_2px] hover:text-primary lg:ml-10 lg:inline-flex">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <ul class="justify-end hidden pr-16 sm:flex lg:pr-0 items-center gap-6">
                    <li><a
                                href="javascript:void(0)"
                                class="py-3 text-base font-medium px-7 text-dark dark:text-white hover:text-primary"
                        >
                            Login
                        </a></li>
                    <li><a
                                href="javascript:void(0)"
                                class="py-3 text-base font-medium text-white rounded-md bg-primary px-7 hover:bg-blue-dark"
                        >
                            Sign Up
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->
<!-- ====== Hero Section Start -->

<main class="min-h-screen bg-white dark:bg-dark pt-[120px] pb-[110px] lg:pt-[150px] flex items-center justify-center -mt-32">
    <div class="container mx-auto">
        <div class="flex flex-wrap items-center justify-center -mx-4">
            <div class="w-full px-4 xs:pt-12 lg:w-5/12">
                <div class="hero-content">
                    <h1 class="mb-2 text-4xl font-bold !leading-[1.208] text-greenhaze-700 dark:text-greenhaze-600 xs:text-6xl sm:text-[42px] lg:text-[40px] xl:text-5xl 2xl:text-7xl">
                        L<span class="text-greenhaze-600 dark:text-gray-300">ife's</span><br /> A<span class="text-greenhaze-600 dark:text-gray-300">mazing with</span> <br /> O<span class="text-greenhaze-600 dark:text-gray-300">rganics</span>
                    </h1>
                    <div class="xs:py-4"></div>
                    <p class="mb-8 xs:w-full xs:text-3xl sm:text-2xl max-w-[480px] text-primary dark:text-dark-6">
                        Advocate of <br class="sm:hidden xs:block" /> Organic Farming <br class="sm:hidden xs:block" />and Healthy Living
                    </p>
                    <ul class="flex flex-grow items-center gap-8 xs:w-full xs:flex-none xs:grid xs:grid-cols-2">
                        <li class="xs:text-center">
                            <a href="javascript:void(0)" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-center text-white rounded-r-full rounded-l-full bg-primary hover:bg-greenhaze-600 transition-all duration-500 lg:px-7">
                                <span class="mr-2">
                                    <i class="fa fa-list"></i>
                                </span>
                                History
                            </a>
                        </li>
                        <li class="xs:text-center">
                            <a href="javascript:void(0)" class="inline-flex items-center justify-center py-3 px-5 text-center text-base font-medium text-[#464646] dark:text-white hover:text-white hover:bg-supernova-700 rounded-r-full rounded-l-full transition-all duration-300" >
                                <span class="mr-2">
                                    <i class="fa fa-cart-shopping"></i>
                                </span>
                                Products
                            </a>
                        </li>
                    </ul>
                    <div class="clients pt-16">
                        <h6
                                class="flex items-center mb-6 text-xs font-normal text-body-color dark:text-dark-6"
                        >
                            <span class="inline-block w-8 h-px ml-3 bg-body-color"></span>
                        </h6>
                        <div class="grid xs:grid-cols-6 xl:grid-cols-6 items-center gap-4 xl:gap-6">
                            <a href="javascript:void(0)" class="block py-3">
                                <img
                                        class="hover:scale-150 transition-all duration-500"
                                        src="assets/images/haccp-500x414-240x115.png"
                                        alt="HACCP Certified"/>
                            </a>
                            <a href="javascript:void(0)" class="block py-3">
                                <img
                                        class="hover:scale-150 transition-all duration-500"
                                        src="assets/images/usda-nop-500x414-240x199.png"
                                        alt="USDA Organic"
                                />
                            </a>
                            <a href="javascript:void(0)" class="block py-3">
                                <img
                                        class="hover:scale-150 transition-all duration-500"
                                        src="assets/images/nl-fahne-oben-rgb-500x414-240x284.png"
                                        alt="Naturland"
                                />
                            </a>
                            <a href="javascript:void(0)" class="block py-3">
                                <img
                                        class="hover:scale-150 transition-all duration-500"
                                        src="assets/images/ecocert-w500-240x179.png"
                                        alt="HACCP Certified"
                                />
                            </a>
                            <a href="javascript:void(0)" class="block py-3">
                                <img
                                        class="hover:scale-150 transition-all duration-500"
                                        src="assets/images/star-k-kosher-75x75.png"
                                        alt="USDA Organic"
                                />
                            </a>
                            <a href="javascript:void(0)" class="block py-3">
                                <img
                                        class="hover:scale-150 transition-all duration-500"
                                        src="assets/images/proud-to-be-part-ifoam-asia-500x414-240x199.webp"
                                        alt="proud to be part of ifoam asia"
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden px-4 lg:block lg:w-1/12"></div>
            <div class="w-full px-4 lg:w-6/12 xl-only:w-5/12 2xl:w-6/12">
                <div class="lg:ml-auto lg:text-right">
                    <div class="relative z-10 inline-block pt-11 lg:pt-0">
                        <img
                                src="assets/images/240597042_5324022677614131_8979772433666088757_n.jpg"
                                alt="hero"
                                class="max-w-full lg:ml-auto"
                        />
                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                     <svg
                             width="93"
                             height="93"
                             viewBox="0 0 93 93"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg"
                     >
                        <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                        <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                     </svg>
                  </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- ====== Hero Section End -->
<section class="flex items-center justify-center min-h-screen py-16 bg-merino-50 dark:bg-gradient-to-br dark:from-supernova-700 dark:to-merino-900">
    <div class="pt-20 pb-10 lg:pt-[120px] lg:pb-20">
        <div class="container mx-auto">
            <div class="flex items-stretch xs:flex-none xs:grid xs:grid-cols-1 xs:gap-8 -mx-4">
                <div class="w-full px-4 md:w-1/2 xl:w-1/3 flex-1">
                    <div class="h-full mb-10 overflow-hidden duration-300 bg-white dark:bg-supernova-900 rounded-lg shadow-1 hover:shadow-3 dark:shadow-card dark:hover:shadow-3"
                    >
                        <img
                                src="assets/images/donnabelle-turmeric-tea-promotion.webp"
                                alt="image"
                                class="w-full"
                        />
                        <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                            <h3>
                                <a href="javascript:void(0)" class="text-dark dark:text-greenhaze-600 hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]" >
                                    Donnabelle Products
                                </a>
                            </h3>
                            <p class="text-base leading-relaxed text-body-color dark:text-white mb-7">
                                LIFI is committed to providing healthy and high-quality products for its consumers.
                                <span class="xs:hidden sm:inline">The company specializes in the production of certified organic coconut sap sugar,
                                    coconut sap syrup, coconut aminos, and coconut sap-sweetened turmeric.
                                    LIFI is using Donnabelle as its brand name.
                                    The brand has been a local brand of choice to most people in Mindanao,
                                    particularly in Davao region.</span>
                            </p>
                            <a href="javascript:void(0)" class="inline-block py-2 text-base dark:text-white dark:hover:text-supernova-700 font-medium transition border rounded-full text-body-color hover:border-primary dark:hover:border-supernova-500 hover:bg-primary dark:hover:bg-supernova-300 border-gray-3 dark:border-gray-200 px-7 hover:text-white duration-300" >
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 xl:w-1/3  flex-1">
                    <div class="h-full mb-10 overflow-hidden duration-300 bg-white dark:bg-supernova-900 rounded-lg dark:bg-dark-2 shadow-1 hover:shadow-3 dark:shadow-card dark:hover:shadow-3">
                        <img src="assets/images/lao-integrated-farms-training-programs.webp" alt="image" class="w-full"/>
                        <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                            <h3>
                                <a
                                        href="javascript:void(0)"
                                        class="text-dark dark:text-greenhaze-600 hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                                >
                                    The Farm
                                </a>
                            </h3>
                            <p class="text-base leading-relaxed text-body-color dark:text-white mb-7">
                                Lao Integrated Farms, Inc. is a renowned organic farming systems practitioner in the Philippines.
                                <span class="xs:hidden sm:inline">LIFI is fully aware of its social responsibilities and looks into the sustainability of its business, using an Inclusive Business Model. This coconut project not only introduces coconut sap-based sweeteners as a healthy sweetener alternative to consumers but also helps elevate the standards of living of the people in its province.</span>
                            </p>
                            <a href="javascript:void(0)" class="inline-block py-2 text-base dark:text-white dark:hover:text-supernova-700 font-medium transition border rounded-full text-body-color hover:border-primary dark:hover:border-supernova-500 hover:bg-primary dark:hover:bg-supernova-300 border-gray-3 dark:border-gray-200 px-7 hover:text-white duration-300" >
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 xl:w-1/3  flex-1">
                    <div class="h-full mb-10 overflow-hidden duration-300 bg-white dark:bg-supernova-900 rounded-lg dark:bg-dark-2 shadow-1 hover:shadow-3 dark:shadow-card dark:hover:shadow-3"
                    >
                        <img
                                src="assets/images/donnabelle-bakeshop-digos-branch.webp"
                                alt="image"
                                class="w-full"
                        />
                        <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                            <h3>
                                <a
                                        href="javascript:void(0)"
                                        class="text-dark dark:text-greenhaze-600 hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                                >
                                    Donnabelle Bakeshop
                                </a>
                            </h3>
                            <p class="text-base leading-relaxed text-body-color dark:text-white mb-7">
                                Donnabelle Bakeshop is the sister company of LIFI. It is an alternative bakeshop that primarily uses the coconut sugar which LIFI are producing.
                                <span class="xs:hidden sm:inline">Donnabelle inspires its community with a uniqueness borne out of its passion to create a bakery farm-to-table experience. The first bakeshop in the Philippines to use goat's milk in their breads, pastries, and cakes.</span>
                            </p>
                            <a href="javascript:void(0)" class="inline-block py-2 text-base dark:text-white dark:hover:text-supernova-700 font-medium transition border rounded-full text-body-color hover:border-primary dark:hover:border-supernova-500 hover:bg-primary dark:hover:bg-supernova-300 border-gray-3 dark:border-gray-200 px-7 hover:text-white duration-300" >
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dark:bg-gradient-to-bl dark:from-merino-900 dark:to-supernova-700 py-32">
    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
            <div>
                <img class="rounded-xl" src="assets/images/laointegratedfarms.com-header-image-coconut-sugar.webp" alt="Image Description">
            </div>
            <!-- End Col -->

            <div class="mt-5 sm:mt-10 lg:mt-0">
                <div class="space-y-6 sm:space-y-8">
                    <!-- Title -->
                    <div class="space-y-2 md:space-y-4">
                        <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-greenhaze-500">
                            LIFI is a renowned organic farming system practitioner in the Philippines
                        </h2>
                        <p class="text-gray-500 dark:text-gray-100">
                            We are a comprehensive business operation that includes various components. We encompass farming, manufacturing, and bakery operation altogether to cater various markets.
                        </p>
                    </div>
                    <!-- End Title -->

                    <!-- List -->
                    <ul role="list" class="space-y-2 sm:space-y-4">
                        <li class="flex space-x-3">
                            <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-500 dark:text-blue-100">
                                <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            <span class="text-sm sm:text-base text-gray-500 dark:text-gray-200">
                                <span class="font-medium leading-loose">Demo Farm</span> witness and learn about organic agricultural farming and techniques
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-500 dark:text-blue-100">
                                <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            <span class="text-sm sm:text-base text-gray-500 dark:text-gray-200">
                                <span class="font-medium leading-loose">Manufacturing factories</span> that produce goods for distribution both local internation markets
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-500 dark:text-blue-100">
                                <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>

                            <span class="text-sm sm:text-base text-gray-500 dark:text-gray-200">
                                <span class="font-medium leading-loose">Bakery Operations</span> - the first in the country to use fresh goat's milk in breads, cakes, and pastries.
                            </span>
                        </li>
                    </ul>
                    <!-- End List -->
                    <div class="md:mt-24 group">
                        <a class="flex items-center gap-2 group-hover:gap-3 text-md text-gray-800 hover:text-gray-500 dark:text-white dark:hover:text-supernova-300 bg-bottom bg-gradient-to-r from-supernova-500 to-supernova-500 bg-[length:0%_2px] bg-no-repeat transition-all duration-500 ease-out hover:bg-[length:100%_2px] max-w-max" href="#">
                            <i class="fa fa-chevron-right group-hover:scale-125 transition-all duration-300"></i>
                            learn more about LIFI
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Features -->
</section>

<section class="sm:min-h-screen xs:py-8 py-32 dark:bg-gradient-to-br dark:from-supernova-700 dark:to-merino-900">
    <!-- Features -->
    <div class="max-w-6xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="min-h-[35vh] bg-[url('../images/lifi-history-meta.jpg')] bg-center bg-cover bg-no-repeat relative rounded-xl md:min-h-[75vh]">
            <div class="absolute bottom-0 start-0 end-0 max-w-xs text-center mx-auto p-6 md:start-auto md:text-start md:mx-0">
                <!-- Card -->
                <div class="px-5 py-4 inline-block bg-white rounded-lg md:p-7 dark:bg-merino-900">
                    <div class="hidden md:block">
                        <h3 class="text-lg font-bold text-gray-800 sm:text-2xl dark:text-greenhaze-600">How did we start?</h3>
                        <p class="mt-2 text-gray-800 dark:text-gray-200">Learn more about LIFI.</p>
                    </div>

                    <div class="md:mt-24 group">
                        <a class="flex items-center gap-2 group-hover:gap-3 text-md text-gray-800 hover:text-gray-500 dark:text-white dark:hover:text-supernova-300 bg-bottom bg-gradient-to-r from-supernova-500 to-supernova-500 bg-[length:0%_2px] bg-no-repeat transition-all duration-500 ease-out hover:bg-[length:100%_2px] max-w-max" href="#">
                            <i class="fa fa-chevron-right group-hover:scale-125 transition-all duration-300"></i>
                            Our Story
                        </a>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
    <!-- End Features -->
</section>

<section class="py-32 dark:bg-gradient-to-bl dark:from-merino-900 dark:to-supernova-700">
    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
            <div class="lg:col-span-7">
                <!-- Grid -->
                <div class="grid grid-cols-12 gap-2 sm:gap-6 items-center lg:-translate-x-10">
                    <div class="col-span-5">
                        <img class="rounded-xl" src="assets/images/alema-825x418.png" alt="Image Description">
                    </div>
                    <!-- End Col -->

                    <div class="col-span-7">
                        <img class="rounded-xl" src="assets/images/vision-and-mission-bg.jpg" alt="Image Description">
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Col -->

            <div class="mt-5 sm:mt-10 lg:mt-0 lg:col-span-5">
                <div class="space-y-6 sm:space-y-8">
                    <!-- Title -->
                    <div class="space-y-2 md:space-y-4">
                        <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-greenhaze-500">
                            Corporate <br /> Social<br /> Responsibility
                        </h2>
                        <p class="text-gray-500 dark:text-gray-100">
                            Imprinted in the philosophy of LIFI is its particular attention to the triple bottom line: people, planet, and profit to ensure sustainability. LIFI's bottom-up strategy in doing business morally and financially helps its farmers and its employees who belong to the marginalized sector of the society. This in turn promotes inclusive growth. Utilizing an Inclusive Business model, LIFI guarantees to employ the highest standards in its processing, producing high-quality coconut sap-based products.
                        </p>
                    </div>
                    <!-- End Title -->

                    <!-- List -->
                    <ul role="list" class="space-y-2 sm:space-y-4">
                        <li class="flex space-x-3">
                            <!-- Solid Check -->
                            <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-500 dark:text-blue-100">
                                <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            <!-- End Solid Check -->

                            <span class="text-sm sm:text-base text-gray-500 dark:text-gray-200">
                                Under the pillar of <span class="font-medium">"People"</span>, we prioritize employee well-being and development. We provide a safe and inclusive work environment where all employees are treated with respect and fairness.
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <!-- Solid Check -->
                            <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-500 dark:text-blue-100">
                                <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            <!-- End Solid Check -->

                            <span class="text-sm sm:text-base text-gray-500 dark:text-gray-200">
                                As for the <span class="font-medium">"Planet"</span>, we recognize the importance of environmental stewardship. We are dedicated to minimizing our ecological footprint and mitigating climate change.
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <!-- Solid Check -->
                            <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-500 dark:text-blue-100">
                                <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            </span>
                            <!-- End Solid Check -->

                            <span class="text-sm sm:text-base text-gray-500 dark:text-gray-200">
                                The element of <span class="font-medium">"Profitability"</span> plays a vital role in our CSR strategy. We believe that doing well financially enables us to do good for both people and the planet.
                            </span>
                        </li>
                        
                    </ul>
                    <div class="md:mt-24 group">
                        <a class="flex items-center gap-2 group-hover:gap-3 text-md text-gray-800 hover:text-gray-500 dark:text-white dark:hover:text-supernova-300 bg-bottom bg-gradient-to-r from-supernova-500 to-supernova-500 bg-[length:0%_2px] bg-no-repeat transition-all duration-500 ease-out hover:bg-[length:100%_2px] max-w-max" href="#">
                            <i class="fa fa-chevron-right group-hover:scale-125 transition-all duration-300"></i>
                            learn more about our CSR
                        </a>
                    </div>
                    <!-- End List -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Features -->
</section>
<section class="py-32 dark:bg-gradient-to-br dark:from-supernova-700 dark:to-merino-900">
    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="relative p-6 md:p-16">
            <!-- Grid -->
            <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
                    <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl dark:text-greenhaze-600">
                        Attend our TESDA-Accredited Training Programs
                    </h2>

                    <!-- Tab Navs -->
                    <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist">
                        <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-slate-900 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 active" id="tabs-with-card-item-1" data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1" role="tab">
                            <span class="flex">
                                <svg class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z"/><path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z"/><path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z"/><path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z"/><path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z"/></svg>
                                <span class="grow ms-6">
                                    <span class="block text-lg hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">Vermicomposting</span>
                                    <span class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-gray-200">This training program focuses on the art and science of vermicomposting, a sustainable and efficient way of recycling organic waste through the use of earthworms</span>
                                </span>
                            </span>
                        </button>

                        <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-slate-900 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" id="tabs-with-card-item-2" data-hs-tab="#tabs-with-card-2" aria-controls="tabs-with-card-2" role="tab">
                            <span class="flex">
                                <svg class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>
                                <span class="grow ms-6">
                                    <span class="block text-lg hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">Organic Native Chicken Production</span>
                                    <span class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-gray-200">This training program is designed to provide participants with the knowledge and skills to successfully raise native chickens using organic farming methods.</span>
                                </span>
                            </span>
                        </button>

                        <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-slate-900 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" id="tabs-with-card-item-3" data-hs-tab="#tabs-with-card-3" aria-controls="tabs-with-card-3" role="tab">
                            <span class="flex">
                                <svg class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>
                                <span class="grow ms-6">
                                    <span class="block text-lg hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">Organic Vegetable Production</span>
                                    <span class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-gray-200">This training program is designed to educate participants about sustainable and environmentally-friendly practices for growing organic vegetables.</span>
                                </span>
                            </span>
                        </button>
                    </nav>
                    <!-- End Tab Navs -->
                    <div class="md:mt-24 group">
                        <a class="flex items-center gap-2 group-hover:gap-3 text-md text-gray-800 hover:text-gray-500 dark:text-white dark:hover:text-supernova-300 bg-bottom bg-gradient-to-r from-supernova-500 to-supernova-500 bg-[length:0%_2px] bg-no-repeat transition-all duration-500 ease-out hover:bg-[length:100%_2px] max-w-max" href="#">
                            <i class="fa fa-chevron-right group-hover:scale-125 transition-all duration-300"></i>
                            sign up to our Training Programs
                        </a>
                    </div>
                </div>
                <!-- End Col -->

                <div class="lg:col-span-6">
                    <div class="relative">
                        <!-- Tab Content -->
                        <div>
                            <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                                <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]" src="assets/images/laointegratedfarms.com-traning-program-vermicomposting.webp" alt="Image Description">
                            </div>

                            <div id="tabs-with-card-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-2">
                                <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]" src="assets/images/laointegratedfarms.com-training-program-organic-native-chicken-production.webp" alt="Image Description">
                            </div>

                            <div id="tabs-with-card-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-3">
                                <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]" src="assets/images/laointegratedfarms.com-training-program-organic-vegetable-production.webp" alt="Image Description">
                            </div>
                        </div>
                        <!-- End Tab Content -->

                        <!-- SVG Element -->
                        <div class="hidden absolute top-0 end-0 translate-x-20 md:block lg:translate-x-20">
                            <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
                                <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
                                <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <!-- End SVG Element -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->

            <!-- Background Color -->
            <div class="absolute inset-0 grid grid-cols-12 w-full h-full">
                <div class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full dark:bg-white/[.075]"></div>
            </div>
            <!-- End Background Color -->
        </div>
    </div>
    <!-- End Features -->
</section>
<!-- ====== Footer Section Start -->
<footer
        class="relative z-10 bg-light dark:bg-dark pt-20 pb-10 lg:pt-[120px] lg:pb-20"
>
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 sm:w-2/3 lg:w-3/12">
                <div class="w-full mb-10">
                    <a
                            href="javascript:void(0)"
                            class="mb-6 inline-block max-w-[160px] bg-white p-6 rounded-full"
                    >
                        <img
                                src="assets/images/icons/favicon-192x192.png"
                                alt="logo"
                                class="max-w-full"
                        />
                    </a>
                    <p class="text-greenhaze-600 dark:text-dark-6 mb-7">
                        Home of Organic Farming and Healthy Living
                    </p>
                    <p
                            class="flex items-center text-sm font-medium text-dark dark:text-white"
                    >
                  <span class="mr-3 text-primary">
                     <svg
                             width="20"
                             height="20"
                             viewBox="0 0 20 20"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg"
                     >
                        <g clip-path="url(#clip0_941_15626)">
                           <path
                                   d="M15.1875 19.4688C14.3438 19.4688 13.375 19.25 12.3125 18.8438C10.1875 18 7.84377 16.375 5.75002 14.2813C3.65627 12.1875 2.03127 9.84377 1.18752 7.68752C0.250019 5.37502 0.343769 3.46877 1.43752 2.40627C1.46877 2.37502 1.53127 2.34377 1.56252 2.31252L4.18752 0.750025C4.84377 0.375025 5.68752 0.562525 6.12502 1.18752L7.96877 3.93753C8.40627 4.59378 8.21877 5.46877 7.59377 5.90627L6.46877 6.68752C7.28127 8.00002 9.59377 11.2188 13.2813 13.5313L13.9688 12.5313C14.5 11.7813 15.3438 11.5625 16.0313 12.0313L18.7813 13.875C19.4063 14.3125 19.5938 15.1563 19.2188 15.8125L17.6563 18.4375C17.625 18.5 17.5938 18.5313 17.5625 18.5625C17 19.1563 16.1875 19.4688 15.1875 19.4688ZM2.37502 3.46878C1.78127 4.12503 1.81252 5.46877 2.50002 7.18752C3.28127 9.15627 4.78127 11.3125 6.75002 13.2813C8.68752 15.2188 10.875 16.7188 12.8125 17.5C14.5 18.1875 15.8438 18.2188 16.5313 17.625L18.0313 15.0625C18.0313 15.0313 18.0313 15.0313 18.0313 15L15.2813 13.1563C15.2813 13.1563 15.2188 13.1875 15.1563 13.2813L14.4688 14.2813C14.0313 14.9063 13.1875 15.0938 12.5625 14.6875C8.62502 12.25 6.18752 8.84377 5.31252 7.46877C4.90627 6.81252 5.06252 5.96878 5.68752 5.53128L6.81252 4.75002V4.71878L4.96877 1.96877C4.96877 1.93752 4.93752 1.93752 4.90627 1.96877L2.37502 3.46878Z"
                                   fill="currentColor"
                           />
                           <path
                                   d="M18.3125 8.90633C17.9375 8.90633 17.6563 8.62508 17.625 8.25008C17.375 5.09383 14.7813 2.56258 11.5938 2.34383C11.2188 2.31258 10.9063 2.00008 10.9375 1.59383C10.9688 1.21883 11.2813 0.906333 11.6875 0.937583C15.5625 1.18758 18.7188 4.25008 19.0313 8.12508C19.0625 8.50008 18.7813 8.84383 18.375 8.87508C18.375 8.90633 18.3438 8.90633 18.3125 8.90633Z"
                                   fill="currentColor"
                           />
                           <path
                                   d="M15.2187 9.18755C14.875 9.18755 14.5625 8.93755 14.5312 8.56255C14.3437 6.87505 13.0312 5.56255 11.3437 5.3438C10.9687 5.31255 10.6875 4.93755 10.7187 4.56255C10.75 4.18755 11.125 3.9063 11.5 3.93755C13.8437 4.2188 15.6562 6.0313 15.9375 8.37505C15.9687 8.75005 15.7187 9.0938 15.3125 9.1563C15.25 9.18755 15.2187 9.18755 15.2187 9.18755Z"
                                   fill="currentColor"
                           />
                        </g>
                        <defs>
                           <clipPath id="clip0_941_15626">
                              <rect width="20" height="20" fill="white" />
                           </clipPath>
                        </defs>
                     </svg>
                  </span>
                        <span class="text-greenhaze-700 font-normal">+63.917.704.4819</span>
                    </p>
                </div>
            </div>
            <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
                <div class="w-full mb-10">
                    <h4 class="text-lg font-black text-primary dark:text-white mb-9">
                        Training Programs
                    </h4>
                    <ul class="space-y-3 text-sm text-greenhaze-800">
                        <li>
                            <a
                                    href="javascript:void(0)"
                                    class="inline-block leading-loose hover:text-primary dark:text-dark-6"
                            >
                                Vermicomposting
                            </a>
                        </li>
                        <li>
                            <a
                                    href="javascript:void(0)"
                                    class="inline-block leading-loose hover:text-primary dark:text-dark-6"
                            >
                                Organic Native Chicken Production
                            </a>
                        </li>
                        <li>
                            <a
                                    href="javascript:void(0)"
                                    class="inline-block leading-loose hover:text-primary dark:text-dark-6"
                            >
                                Organic Concoction Production
                            </a>
                        </li>
                        <li>
                            <a
                                    href="javascript:void(0)"
                                    class="inline-block leading-loose hover:text-primary dark:text-dark-6"
                            >
                                Organic Vegetable Production
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
                <div class="w-full mb-10">
                    <h4 class="text-lg font-black text-primary dark:text-white mb-9">
                        Company
                    </h4>
                    <ul class="space-y-3 text-sm text-greenhaze-800">
                        <li>
                            <a
                                    href="javascript:void(0)"
                                    class="inline-block leading-loose hover:text-primary dark:text-dark-6"
                            >
                                About LIFI
                            </a>
                        </li>
                        <li>
                            <a
                                    href="javascript:void(0)"
                                    class="inline-block leading-loose hover:text-primary dark:text-dark-6"
                            >
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a
                                    href="javascript:void(0)"
                                    class="inline-block leading-loose hover:text-primary dark:text-dark-6"
                            >
                                History
                            </a>
                        </li>
                        <li>
                            <a
                                    href="javascript:void(0)"
                                    class="inline-block leading-loose hover:text-primary dark:text-dark-6"
                            >
                                Corporate Social Responsibility
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
                <div class="w-full mb-10">
                    <h4 class="text-lg font-black text-primary dark:text-white mb-9">
                        Quick Links
                    </h4>
                    <ul class="space-y-3 text-sm text-greenhaze-800">
                        <li>
                            <a
                                    href="javascript:void(0)"
                                    class="inline-block leading-loose hover:text-primary dark:text-dark-6"
                            >
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a
                                    href="javascript:void(0)"
                                    class="inline-block leading-loose hover:text-primary dark:text-dark-6"
                            >
                                Cookie Policy
                            </a>
                        </li>
                        <li>
                            <a
                                    href="javascript:void(0)"
                                    class="inline-block leading-loose hover:text-primary dark:text-dark-6"
                            >
                                Training Registration
                            </a>
                        </li>
                        <li>
                            <a
                                    href="javascript:void(0)"
                                    class="inline-block leading-loose hover:text-primary dark:text-dark-6"
                            >
                                Download App
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
                <div class="w-full mb-10">
                    <h4 class="text-lg font-semibold text-primary dark:text-white mb-9">
                        Follow Us On
                    </h4>
                    <div class="flex items-center mb-6">
                        <a
                                href="javascript:void(0)"
                                class="flex items-center justify-center w-8 h-8 mr-3 border rounded-full text-dark hover:border-primary hover:bg-primary border-stroke dark:border-dark-3 dark:hover:border-primary dark:text-white hover:text-white sm:mr-4 lg:mr-3 xl:mr-4"
                        >

                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="javascript:void(0)" class="flex items-center justify-center w-8 h-8 mr-3 border rounded-full text-dark hover:border-primary hover:bg-primary border-stroke dark:border-dark-3 dark:hover:border-primary dark:text-white hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a
                                href="javascript:void(0)"
                                class="flex items-center justify-center w-8 h-8 mr-3 border rounded-full text-dark hover:border-primary hover:bg-primary border-stroke dark:border-dark-3 dark:hover:border-primary dark:text-white hover:text-white sm:mr-4 lg:mr-3 xl:mr-4"
                        >
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a
                                href="javascript:void(0)"
                                class="flex items-center justify-center w-8 h-8 mr-3 border rounded-full text-dark hover:border-primary hover:bg-primary border-stroke dark:border-dark-3 dark:hover:border-primary dark:text-white hover:text-white sm:mr-4 lg:mr-3 xl:mr-4"
                        >
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a
                                href="javascript:void(0)"
                                class="flex items-center justify-center w-8 h-8 mr-3 border rounded-full text-dark hover:border-primary hover:bg-primary border-stroke dark:border-dark-3 dark:hover:border-primary dark:text-white hover:text-white sm:mr-4 lg:mr-3 xl:mr-4"
                        >
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                    <p class="text-primary text-body-color dark:text-dark-6">
                        &copy; 2024 Lao Integrated Farms, Inc.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div>
      <span class="absolute left-0 bottom-0 z-[-1]">
         <svg
                 width="217"
                 height="229"
                 viewBox="0 0 217 229"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg"
         >
            <path
                    d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z"
                    fill="url(#paint0_linear_1179_5)"
            />
            <defs>
               <linearGradient
                       id="paint0_linear_1179_5"
                       x1="76.5"
                       y1="281"
                       x2="76.5"
                       y2="1.22829e-05"
                       gradientUnits="userSpaceOnUse"
               >
                  <stop stop-color="#3056D3" stop-opacity="0.08" />
                  <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
               </linearGradient>
            </defs>
         </svg>
      </span>
        <span class="absolute top-10 right-10 z-[-1]">
         <svg
                 width="75"
                 height="75"
                 viewBox="0 0 75 75"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg"
         >
            <path
                    d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z"
                    fill="url(#paint0_linear_1179_4)"
            />
            <defs>
               <linearGradient
                       id="paint0_linear_1179_4"
                       x1="-1.63917e-06"
                       y1="37.5"
                       x2="75"
                       y2="37.5"
                       gradientUnits="userSpaceOnUse"
               >
                  <stop stop-color="#13C296" stop-opacity="0.31"  offset=""/>
                  <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
               </linearGradient>
            </defs>
         </svg>
      </span>
    </div>
</footer>
<!-- ====== Footer Section End -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous" rel="preload"></script>
<script src="https://kit.fontawesome.com/fe6c44cf74.js" crossorigin="anonymous" rel="preload"></script>
<script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js" rel="preload"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js" rel="preload"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js" rel="preload"></script>
<script src="https://cdn.jsdelivr.net/npm/detect-browser@5.3.0/index.min.js" rel="preload"></script>
<script src="assets/js/preline.min.js" rel="preload"></script>
<script src="assets/js/darkMode.min.js" rel="preload"></script>
<script src="assets/js/smoothscroll.min.js"></script>
<script src="assets/js/navbar-effect.js" rel="preload"></script>
</body>
</html>