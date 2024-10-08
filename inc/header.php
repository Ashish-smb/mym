<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ManavYogManch</title>
<!-- Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- Font Awesome 6.6.0 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<!-- fancy box -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"/>

<!-- Lightbox2 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">

<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    
<!-- Topbar -->
<header class="px-6 lg:px-14 lg:block hidden">
    <div class="flex justify-between items-center w-full">
        <a href="index.php">
            <img src="assets/imgs/logo-demo.png" alt="" class="w-[200px] ">
        </a>

        <div class="flex gap-20">
            <div class="flex items-center gap-2">
                <img src="assets/imgs/fonts/manav-yog-manch-phone-no.png" class="w-8" alt="">
                <div class="leading-5" >
                    Call Us
                    <a href="tel:956516223" class="block">
                        (+91) 9565-16223
                    </a>
                </div>
            </div>
    
    
            <div class="flex items-center gap-2">
                <img src="assets/imgs/fonts/manav-yog-manch-email.png" class="w-8" alt="">
                <div class="leading-5">
                    Mail Us
                    <a href="mailto:manavyogmanchngo2005@gmail.com" class="block">
                    manavyogmanchngo2005@gmail.com
                    </a>
                </div>
            </div>
    
            <a href="donate.php" class="border bg-orange-500 text-white font-bold py-2  gap-1 items-center px-4 rounded text-lg hover:bg-danger-light duration-500">
                <i class="fa-solid fa-indian-rupee-sign"></i>
                Donate Us
            </a>
        </div>
    </div>
</header>

<!-- Navbar -->
<nav class="hidden lg:block px-6 lg:px-14 sticky bg-gradient-to-r to-danger-light from-yellow-600 top-0 z-20">
    <div class="hidden lg:flex justify-between text-white items-center relative">
        <ul class="flex gap-6 uppercase">
            <li>
                <a href="index.php"
                    class="block font-semibold text-sm uppercase py-3 px-4 border-slate-400 duration-300 hover:text-red-200">
                    Home
                </a>
            </li>

            <li class="group">
                <a href="about.php"
                    class="block text-sm font-semibold py-3 px-4 border-slate-400 duration-300 hover:text-red-200">
                     About us
                    <i class="fa-solid fa-chevron-down group-hover:-rotate-180 duration-300 ml-2 text-xs"></i>
                </a>
                <ul class="absolute hidden w-40 leading-8 border-danger-light text-white font-semibold m-0 group-hover:block bg-dark text-sm uppercase duration-1000">
                    <li class="hover:bg-black font-semibold border-l-4 border-danger-light duration-300">
                        <a href="mission.php" class="block pl-4 py-3 text-xs">Mission</a>
                    </li>
                    <li class="hover:bg-black font-semibold border-l-4 border-danger-light duration-300">
                        <a href="vision.php" class="block pl-4 py-3 text-xs">Vision</a>
                    </li>
                </ul>
            </li>

            <li class="group">
                <a href="our-projects.php"
                    class="block font-semibold text-sm uppercase py-3 px-4 border-slate-400 duration-300 hover:text-red-200">
                    Our Projects
                </a>
                
                
            </li>

            <li>
                <a href="gallery.php"
                    class="block font-semibold text-sm uppercase py-3 px-4 border-slate-400 duration-300 hover:text-red-200">
                    Gallery
                </a>
            </li>

            <li>
                <a href="contact.php"
                    class="block font-semibold text-sm uppercase py-3 px-4 border-slate-400 duration-300 hover:text-red-200">
                    Contact Us
                </a>
            </li>

            <li class="group">
                <a href="join-us.php"
                    class="block text-sm font-semibold py-3 px-4 border-slate-400 duration-300 hover:text-red-200">
                    Join Us
                    <i class="fa-solid fa-chevron-down group-hover:-rotate-180 duration-300 ml-2 text-xs"></i>
                </a>
                <ul class="absolute hidden w-40 leading-8 border-danger-light text-white font-semibold m-0 group-hover:block bg-dark text-sm uppercase duration-1000">
                    <li class="hover:bg-black font-semibold border-l-4 border-danger-light duration-300">
                        <a href="join-us.php?type=volunteer" class="block pl-4 py-3 text-xs">As Volunteer</a>
                    </li>
                    <li class="hover:bg-black font-semibold border-l-4 border-danger-light duration-300">
                        <a href="join-us.php?type=member" class="block pl-4 py-3 text-xs">As Member</a>
                    </li>
                </ul>
            </li>

        </ul>

        <div x-data="{showSidebar: false}" class="flex items-center ">
            <button
                @click="showSidebar = !showSidebar"
            >
                <img src="assets/imgs/fonts/manav-yog-manch-sidebar.png" alt="" class="w-6">
            </button>
            <div class="fixed bg-slate-100 top-0 w-1/4 p-4 h-screen duration-500 shadow overflow-y-auto"
                    :class="showSidebar ? 'right-0' : '-right-full'"
            >
                <button 
                @click="showSidebar = !showSidebar"
                class="px-3 bg-danger hover:bg-danger-light duration-500 text-slate-100 absolute right-2 top-2">
                    <i class="fas fa-x fa-sm"></i>
                </button>
                
                <?php  include('inc/sidebar.php') ?>
                
            </div>
        </div>
        
    </div>
</nav>

<!-- Navbar Mobile -->
<nav class="flex lg:hidden" x-data="{showSidebar: false}">
    <!-- Header -->
    <div class="flex justify-between items-center px-8 w-full">
        <a href="index.php">
            <img src="assets/imgs/logo.png" alt="" class=" lg:w-1/3">
        </a>
        <button @click="showSidebar = !showSidebar" class="text-xl md:text-2xl">
            <i class="fas" :class="showSidebar ? 'fa-xmark' : 'fa-bars'"></i>
        </button>
    </div>

    <!-- Nav -->
    <div class="fixed top-0 bg-white text-slate-800 h-screen w-full md:w-1/2 z-50 duration-300"
        :class="showSidebar ? 'left-0' : '-left-full'">
        <button class="absolute right-4 top-4 px-4 bg-danger text-white" @click="showSidebar = false">
            <i class="fas fa-xmark"></i>
        </button>
        <img src="assets/imgs/logo.png" alt="" class="py-3 px-8">
        
        <ul class="uppercase">                
            <li>
                <a href="index.php" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-danger-light">
                    Home
                </a>
            </li>
            <li>
                <a href="about.php" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-danger-light">
                    About Us
                </a>
            </li>

            <li>
                <a href="vision.php" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-danger-light">
                    vision
                </a>
            </li>

            
            
            <li>
                <a href="mission.php" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-danger-light">
                    mission
                </a>
            </li>

            <li>
                <a href="gallery.php" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-danger-light">
                    gallery
                </a>
            </li>

            <li>
                <a href="our-projects.php" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-danger-light">
                    Our Project
                </a>
            </li>
            
            
           
            <li>
                <a href="donate.php" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-danger-light">
                    Donate us
                </a>
            </li>
            <li>
                <a href="contact.php" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-danger-light">
                    Contact Us
                </a>
            </li>
            <li>
                <a href="join-us.php" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-danger-light">
                    Join Us
                </a>
            </li>
        </ul>
    </div>
</nav>