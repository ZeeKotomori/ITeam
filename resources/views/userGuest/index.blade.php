<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    @vite('resources/css/app.css')
    <title>Iteam - Main</title>
</head>
<body class="relative bg-gradient-dark font-manrope overflow-x-hidden" data-scroll-container>
    <nav class="sticky top-0 left-0 right-0 z-10 backdrop-blur-lg py-4">
        <div class="flex justify-between m-auto w-10/12 md:w-9/12 hb:justify-center">
<<<<<<< Updated upstream
            <img class="w-24" src="svg/title.svg" alt="Title ITeam">
=======
            <img class="w-24" src="{{ asset('svg/title.svg') }}" alt="Title ITeam">
>>>>>>> Stashed changes
            <button class="text-white hb:hidden" id="hamburger">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <div class="hamberg hb-max:absolute hb-max:-z-10 hb-max:flex hb-max:flex-col md-max:-right-32 md:hb-max:-right-32 hb-max:top-24 
              hb-max:gap-y-3 hb-max:bg-gradient-dark hb-max:p-4 hb-max:items-start hb-max:rounded-lg hb-max:border hb-max:border-slate-50/10
                hb:flex justify-start items-center m-auto gap-x-20 duration-300" id="hamburger">
                <a class="text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="#">Home</a>
                <a class="text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="#product">Product</a>
                <a class="text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="#aboutUs">About Us</a>
                <a class="hb:hidden hb-max:pt-3 text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="">Log In</a>
                <a class="hb:hidden text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="">Sign Up</a>
            </div>
            <div class="hidden hb:flex items-center gap-x-8">
<<<<<<< Updated upstream
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
=======
                <a class="text-text text-sm font-semibold border border-blue-600 p-1.5 px-4 rounded-md bg-blue-600 duration-300 hover:pulse focus:pulse" href="{{ route( 'logOut' )}}">Log Out</a>
            </div>
        </div>
    </nav>
    <header class="w-10/12 m-auto h-header-hamb grid place-content-center md:w-9/12 lrg:w-6/12" data-scroll-section>
        <div class="translate-y-40 duration-[2s] opacity-0" data-scroll data-scroll-class="showY">
            <h1 class="text-text text-4xl font-bold text-center md:text-6xl lrg:text-7xl">Find any <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-fuchsia-600">musical instrument</span>  you're looking for!</h1>
            <p class="text-text opacity-50 font-semibold text-center mt-10 md:text-lg lrg:text-xl md:px-8">Explore a symphony of options as you browse through our virtual shelves,
              showcasing a harmonious collection of guitars, pianos, drums, and more.</p>
            <i class="text-text size-10 w-full mt-24 animate-bounce hb:mt-16 hb:size-14 hb:w-full" data-feather="arrow-down"></i>
        </div>
    </header>
    <div class="hidden top-0 bottom-0 right-0 left-0 bg-slate-950/80 z-10" id="overlay"></div>
    <div class="hidden top-0 w-screen h-screen z-20 bg-slate-900 text-text overflow-y-auto max-h-screen
      hb:w-[70%] hb:h-auto hb:top-1/2 hb:left-1/2 hb:-translate-x-1/2 hb:-translate-y-1/2 hb:shadow-2xl hb:shadow-white/5 hb:rounded-md" id="commentSection">
        <div class="hb:grid hb:grid-cols-2 hb:grid-rows-[55px_auto_auto]">
            <img class="w-full h-full row-span-3 bg-indigo-950/40 hb-max:hidden" src="{{ asset('svg/Celviano_img.svg') }}" alt="">
            <div class="sticky top-0 left-0 right-0 backdrop-blur-lg hb:static">
                <div class="w-10/12 m-auto flex justify-end items-center py-3 md:w-9/12 hb:w-full hb:px-[5%]">
                    <div class="w-6 h-0"></div>
                    <h2 class="grow text-center font-semibold text-lg">Comment</h2>
                    <button id="close"><i data-feather="x"></i></button>
                </div>
                <div class="h-[1px] opacity-30 shade-c mb-3"></div>
            </div>
            <div class="w-10/12 m-auto my-2 md:w-9/12 hb:w-full hb:min-h-96 hb:max-h-96 hb:px-[5%] hb:overflow-y-scroll">
                <div class="mb-5">
                    <h3 class="font-medium mb-1">Asep Suryana</h3>
                    <p class="font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione excepturi consequuntur hic. Odit obcaecati sapiente voluptas veritatis, et excepturi placeat.</p>
                </div>
            </div>
            <div class="fixed bottom-0 left-0 right-0 mr-[11px] z-20 text-text hb:static">
                <div class="h-[1px] opacity-30 shade-c"></div>
                <form class="w-10/12 m-auto flex gap-x-[27px] items-center py-6 md:w-9/12 md:gap-x-[38px] hb:gap-x-8 hb:w-full hb:px-[5%]" action="">
                    <textarea class="resize-none bg-transparent border-[.5px] border-text py-1 px-2 grow rounded-md outline-none" name="" id="" rows="2" placeholder="Type a comment..."></textarea>
                    <button><i class="opacity-30 hover:opacity-100 duration-300" data-feather="arrow-right"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="w-10/12 m-auto mb-24 pt-[66px] md:w-9/12" id="product">
        <h2 class="before:block before:h-[1px] before:w-1/2 before:shade-l md:before:w-1/2 after:block after:h-[1px] after:w-1/2 after:shade-r md:after:w-1/2
          flex justify-center items-center gap-x-4 text-xl text-center text-text font-bold mb-8 pb-2
            md:text-3xl">Product</h2>
        <div class="grid gap-8 sm-card:grid-cols-2 md-card:grid-cols-3 lg-card:grid-cols-4">
            <div class="bg-slate-700/30 text-text rounded-sm shadow-lg translate-y-40 duration-[2s] opacity-0" data-scroll data-scroll-class="showY">
                <img class="w-screen" src="{{ asset('svg/Celviano_img.svg') }}" alt="Product Image">
                <div class="p-5">
                    <h3 class="font-semibold">Celviano Piano</h3>
                    <p class="opacity-70 py-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum ipsa ad laborum nobis placeat? Sapiente blanditiis quisquam recusandae deleniti omnis.</p>
                    <div class="grid grid-cols-5 mt-2 gap-2">
                        <a class="col-span-2 p-2 rounded-md duration-300 bg-red-500 hover:bg-red-800" href=""><button class="w-full flex gap-x-[30%]"><i data-feather="heart"></i>14</button></a>
                        <button class="comment w-full text-center col-span-3 p-2 rounded-md duration-300 bg-link hover:bg-indigo-600/80">Comment</button>
                        <a class="col-span-5 p-2 rounded-md duration-300 bg-indigo-700 hover:bg-indigo-800" href=""><button class="w-full flex justify-center gap-x-2">Link <i data-feather="arrow-right"></i></button></a>
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="h-0.5 opacity-30 shade-c"></div>
    <div class="w-10/12 m-auto mt-24 text-text md:w-9/12 hb:flex hb:justify-between hb:mb-4" id="aboutUs">
        <div class="hb:max-w-[50%] translate-x-40 duration-[1s] opacity-0" data-scroll data-scroll-class="showX">
            <h1 class="text-2xl font-bold">About Us</h1>
            <div class="h-0.5 opacity-6 shade-r w-28 my-6"></div>
            <p>At ITeam, we're passionate about helping musicians find their perfect instruments. With a curated selection of guitars, pianos, drums, and more,
              we strive to be your go-to destination for all things musical. Whether you're a beginner or a seasoned pro, we're here to provide expert guidance and quality instruments to inspire your creativity.
                Explore our catalog and let the music begin!
            </p>
        </div>
        <div class="mt-12 hb:mt-0 -translate-x-40 duration-[1s] opacity-0" data-scroll data-scroll-class="showX">
            <h1 class="text-2xl font-bold">Contact</h1>
            <div class="h-0.5 opacity-6 shade-r w-28 my-6"></div>
            <div class="flex gap-x-2 my-8">
                >
<<<<<<< Updated upstream
                <img src="svg/fb.svg" alt="Facebook Logo">
=======
                <img src="{{ asset('svg/fb.svg') }}" alt="Facebook Logo">
>>>>>>> Stashed changes
                <p class="pl-2">ITeam Official</p>
            </div>
            <div class="flex gap-x-2 my-8">
                >
<<<<<<< Updated upstream
                <img src="svg/mail.svg" alt="Facebook Logo">
=======
                <img src="{{ asset('svg/mail.svg') }}" alt="Mail Logo">
>>>>>>> Stashed changes
                <p class="pl-2">ITeam@gmail.com</p>
            </div>
            <div class="flex gap-x-2 my-8">
                >
<<<<<<< Updated upstream
                <img src="svg/telp.svg" alt="Facebook Logo">
                <p class="pl-2">+62 8870 7860</p>
=======
                <img src="{{ asset('svg/telp.svg') }}" alt="Phone Logo">
                <p class="pl-2">+62 8870 7860 072</p>
>>>>>>> Stashed changes
            </div>
        </div>
    </div>
    <div class="bg-slate-950 text-text text-sm p-2">
        <p class="w-10/12 m-auto md:w-9/12">© Copyright 2024 <span class="text-link">ITeam.</span> All Rights Reserved. Designed by <span class="text-link">ITeam</span></p>
    </div>
    <div class="sirkel -z-10 absolute w-[600px] h-[600px] -top-10 -left-[400px] hb:w-[1000px] hb:h-[1000px] hb:-top-96 hb:-left-[700px]"></div>
    <div class="sirkel-2 -z-10 absolute w-[900px] h-[900px] top-[200px] -right-[500px]"></div>
    <div class="sirkel -z-10 absolute w-[700px] h-[700px] top-[45%] -right-[420px] hb:top-[60%]"></div>
    <div class="sirkel-2 -z-10 absolute w-[600px] h-[600px] bottom-[5%] -left-[320px] opacity-65"></div>
    <script>
        // Icon
        feather.replace();

        // Hamburger
        const menuToggle = document.getElementById('hamburger');
        const menuItems = document.querySelector('.hamberg');
        const mediaQuery = window.matchMedia('(max-width: 768px)');
            
        menuToggle.addEventListener('click', () => {
                if (mediaQuery.matches) {
                    menuItems.classList.toggle('md-max:right-[8%]');
                } else {
                    menuItems.classList.toggle('md:hb-max:right-[12%]');
                }
        });

        // Comment Section
        const comment = document.querySelectorAll('.comment');
        const commentSection = document.getElementById('commentSection');
        const closeBtn = document.getElementById('close');
        const overlay = document.getElementById('overlay');
        
        function openComment() {
            commentSection.classList.remove('hidden');
            commentSection.classList.add('fixed');
            overlay.classList.remove('hidden');
            overlay.classList.add('fixed');
        };

        function closeComment() {
            commentSection.classList.remove('fixed');
            commentSection.classList.add('hidden');
            overlay.classList.remove('fixed');
            overlay.classList.add('hidden');
        };

        setInterval(() => {
            const commentPosition = window.getComputedStyle(commentSection).getPropertyValue('position');
            const body = document.querySelector('body');

            if (commentPosition === 'fixed') {
                body.style.overflowY = 'hidden';
            } else {
                body.style.overflowY = 'auto';
            }
        }, 10);

        comment.forEach(button => {
            button.addEventListener('click', openComment);
        });
        
        closeBtn.addEventListener('click', closeComment);

        // Parallax
        const scroller = new LocomotiveScroll({});
    </script>
</body>
</html>