<!DOCTYPE html>
<html lang="en" class="scrolling">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite('resources/css/app.css')
    <title>Iteam - Main</title>
</head>
<body class="bg-gradient-to-b from-gradient-dark to-gradient-light font-manrope overflow-x-hidden">
    <nav class="sticky top-0 left-0 right-0 z-50 bg-blue-100/10 backdrop-blur-lg pt-4 mb-24 after:h-[.6px] after:opacity-10 after:w-screen after:shade-c after:block after:mt-4">
        <div class="flex justify-between m-auto w-10/12 md:w-9/12 hb:justify-center">
            <img class="w-24" src="svg/title.svg" alt="Title ITeam">
            <button class="text-white hb:hidden" id="hamburger">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <div class="hamberg hb-max:absolute hb-max:-z-10 hb-max:flex hb-max:flex-col md-max:-right-32 md:hb-max:-right-32 hb-max:top-24 hb-max:gap-y-3 hb-max:bg-gradient-dark hb-max:p-4 hb-max:items-start hb-max:rounded-lg hb-max:border hb-max:border-slate-50/10
            hb:flex justify-start items-center m-auto gap-x-20 duration-300" id="hamburger">
                <a class="text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="#">Home</a>
                <a class="text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="">Product</a>
                <a class="text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="#aboutUs">About Us</a>
                <a class="hb:hidden hb-max:pt-3 text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="">Log In</a>
                <a class="hb:hidden text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="">Sign Up</a>
            </div>
            <div class="hidden hb:flex items-center gap-x-8">
                <a class="text-text text-sm font-semibold border border-slate-700 hover:border-slate-50 p-1.5 px-4 rounded-md duration-700" href="">Sign Up</a>
                <a class="text-text text-sm font-semibold border border-blue-600 p-1.5 px-4 rounded-md bg-blue-600 duration-300 hover:pulse focus:pulse" href="">Log In</a>
            </div>
        </div>
    </nav>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide w-10/12 md:w-9/12">
                <img class="w-full rounded-lg block md:hidden" src="svg/Casio Piano m.svg" alt="Carousel Casio Piano">
                <img class="m-auto rounded-lg hidden md:block" src="svg/Casio Piano.svg" alt="Carousel Casio Piano">
            </div>
            <div class="swiper-slide w-10/12 md:w-9/12">
                <img class="w-full rounded-lg block md:hidden" src="svg/Kerg Analogue Performan m.svg" alt="Carousel Kerg Analogue">
                <img class="m-auto rounded-lg hidden md:block" src="svg/Kerg Analogue Performan.svg" alt="Carousel Kerg Analogue">
            </div>
            <div class="swiper-slide w-10/12 md:w-9/12">
                <img class="w-full rounded-lg block md:hidden" src="svg/Yamaha Keyboard m.svg" alt="Carousel Yamaha Keyboard">
                <img class="m-auto rounded-lg hidden md:block" src="svg/Yamaha Keyboard.svg" alt="Carousel Yamaha Keyboard">
            </div>
            <div class="swiper-slide w-10/12 md:w-9/12">
                <img class="w-full rounded-lg block md:hidden" src="svg/Casio Piano m.svg" alt="Carousel Casio Piano">
                <img class="m-auto rounded-lg hidden md:block" src="svg/Casio Piano.svg" alt="Carousel Casio Piano">
            </div>
            <div class="swiper-slide w-10/12 md:w-9/12">
                <img class="w-full rounded-lg block md:hidden" src="svg/Kerg Analogue Performan m.svg" alt="Carousel Kerg Analogue">
                <img class="m-auto rounded-lg hidden md:block" src="svg/Kerg Analogue Performan.svg" alt="Carousel Kerg Analogue">
            </div>
            <div class="swiper-slide w-10/12 md:w-9/12">
                <img class="w-full rounded-lg block md:hidden" src="svg/Yamaha Keyboard m.svg" alt="Carousel Yamaha Keyboard">
                <img class="m-auto rounded-lg hidden md:block" src="svg/Yamaha Keyboard.svg" alt="Carousel Yamaha Keyboard">
            </div>
        </div>
    </div>
    <div class="w-10/12 m-auto mt-24 md:w-9/12">
        <h1 class="before:block before:h-0.5  before:w-1/2 before:shade-l md:before:w-1/2
            after:block after:h-0.5 after:w-1/2 after:shade-r md:after:w-1/2
             flex justify-center items-center gap-x-4 text-3xl text-center text-text font-bold pb-8 
            hb-max:text-3xl md:text-5xl">Partners</h1>
        <div class="flex justify-between pb-8 md:justify-center md:gap-x-32">
            <img class="w-1/4 md:w-[14%]" src="svg/korg.svg" alt="Korg logo">
            <img class="w-1/4 p-4 md:w-[14%]" src="svg/yamaha.svg" alt="Yamaha logo">
            <img class="w-1/4 md:w-[14%]" src="svg/casio.svg" alt="Casio logo">
        </div>
        <div class="h-0.5 shade-c"></div>
    </div>
    <div class="h-0.5 opacity-10 shade-c mt-36"></div>
    <div class="bg-gradient-to-b from-gradient-dark to-gradient-light">
        <div class="bg-no-repeat bg-cover bg-center" style="background-image: url('svg/sirkel.svg');">
            <div class="recommend text-text w-10/12 m-auto md:w-9/12">
                <div class="flex justify-center text-center text-2xl pt-32 font-bold hb-max:text-3xl md:text-5xl">
                    <h1>Recommend For You</h1>
                </div>
                <div class="pt-20">
                    <div class="text-right mb-24 hb:mb-48 hb:flex">
                        <img class="w-full rounded-lg hb:w-1/2 hb:max-w-[60%]" src="svg/Yamaha_img.svg" alt="Yamaha Keyboard">
                        <div class="my-auto hb:pl-8 hb:w-1/2">
                            <h2 class="text-2xl pt-4 font-medium md:text-3xl hb:pt-0">Yamaha Keyboard</h2>
                            <p class="pt-2 w-3/4 ml-auto hb:w-auto md:text-lg">Unleash your musical creativity with the Yamaha keyboard series!
                            Immerse yourself in a world of endless possibilities
                                as you play, compose, and express your unique style</p>
                            <a href=""><button class="bg-link px-6 py-1 rounded-lg mt-4">Buy -></button></a>
                        </div>
                    </div>
                    <div class="mb-24 hb:mb-48 hb:flex flex-row-reverse">
                        <img class="w-full rounded-lg hb:w-1/2 hb:max-w-[60%]" src="svg/Korg_img.svg" alt="Korg Volca Mix">
                        <div class="my-auto hb:pr-8 hb:w-1/2">
                            <h2 class="text-2xl pt-4 font-medium md:text-3xl hb:pt-0">Korg Volca Mix</h2>
                            <p class="pt-2 w-3/4 mr-auto hb:w-auto md:text-lg">Elevate your music production game with KORG VOLCA MIX!
                            The ultimate mixer designed for your VOLCA series instruments.
                                Unleash the power of seamless connectivity and take control of your sonic masterpiece.</p>
                            <a href=""><button class="bg-link px-6 py-1 rounded-lg mt-4">Buy -></button></a>
                        </div>
                    </div>
                    <div class="text-right pb-24 hb:pb-32 hb:flex">
                        <img class="w-full rounded-lg hb:w-1/2 hb:max-w-[60%]" src="svg/Celviano_img.svg" alt="Celviano Grand Hybrid">
                        <div class="my-auto hb:pl-8 hb:w-1/2">
                            <h2 class="text-2xl pt-4 font-medium md:text-3xl hb:pt-0">Celviano Grand Hybrid</h2>
                            <p class="pt-2 w-3/4 ml-auto hb:w-auto md:text-lg">Unleash your musical passion with the Casio Celviano Grand Hybrid. With its impressive
                            combination of acoustic grand piano authenticity and digital innovation, this instrument
                                is a masterpiece that resonates with both beginners and seasoned pianists alike.</p>
                            <a href=""><button class="bg-link px-6 py-1 rounded-lg mt-4">Buy -></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="h-0.5 opacity-10 shade-c"></div>
    <div class="w-10/12 m-auto mt-32 text-text md:w-9/12 hb:flex hb:justify-between hb:mb-4" id="aboutUs">
        <div class="hb:max-w-[50%]">
            <h1 class="text-2xl font-bold">About Us</h1>
            <div class="h-1 opacity-6 shade-r w-28 my-6"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam at labore asperiores cum beatae, voluptate nemo voluptates neque iste
                 fugit nostrum? Eaque, distinctio neque consequatur beatae, cumque nihil qui ad vero cupiditate illum quae? Quisquam expedita placeat vero autem saepe?
            </p>
        </div>
        <div class="mt-12 hb:mt-0">
            <h1 class="text-2xl font-bold">Contact</h1>
            <div class="h-1 opacity-6 shade-r w-28 my-6"></div>
            <div class="flex gap-x-2 my-8">
                >
                <img src="svg/fb.svg" alt="Facebook Logo">
                <p class="pl-2">ITeam Official</p>
            </div>
            <div class="flex gap-x-2 my-8">
                >
                <img src="svg/mail.svg" alt="Facebook Logo">
                <p class="pl-2">ITeam@gmail.com</p>
            </div>
            <div class="flex gap-x-2 my-8">
                >
                <img src="svg/telp.svg" alt="Facebook Logo">
                <p class="pl-2">+62 8870 7860</p>
            </div>
        </div>
    </div>
    <div class="bg-gradient-dark text-text text-sm p-2">
        <p class="w-10/12 m-auto md:w-9/12">© Copyright 2024 <span class="text-link">ITeam.</span> All Rights Reserved. Designed by <span class="text-link">ITeam</span></p>
    </div>
    <script>
        // Carousel
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            loop: true,
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            spaceBetween: 110,
            coverflowEffect: {
                rotate: 0,
            },
            autoplay: {
                delay: 2000,
                pauseOnMouseEnter: true,
            }
        });

        // Hamburger
        const menuToggle = document.getElementById('hamburger');
        const menuItems = document.querySelector('.hamberg');
        const mediaQuery = window.matchMedia('(max-width: 768px)');
            
        menuToggle.addEventListener('click', () => {
                if (mediaQuery.matches) {
                    console.log('a');
                    menuItems.classList.toggle('md-max:right-[8%]');
                } else {
                    console.log('b');
                    menuItems.classList.toggle('md:hb-max:right-[12%]');
                }
            });
    </script>
</body>
</html>