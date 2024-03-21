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
            <img class="w-24" src="{{ asset('svg/title.svg') }}" alt="Title ITeam">
            <button class="text-white hb:hidden" id="hamburger">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <div class="hamberg hb-max:absolute hb-max:-z-10 hb-max:flex hb-max:flex-col md-max:-right-32 md:hb-max:-right-32 hb-max:top-24 hb-max:gap-y-3 hb-max:bg-gradient-dark hb-max:p-4 hb-max:items-start hb-max:rounded-lg hb-max:border hb-max:border-slate-50/10
                hb:flex justify-start items-center m-auto gap-x-20 duration-300" id="hamburger">
                <a class="text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="#">Home</a>
                <a class="text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="#product">Product</a>
                <a class="text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="#aboutUs">About Us</a>
                <a class="hb:hidden hb-max:pt-3 text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="{{ route('logIn') }}">Log In</a>
                <a class="hb:hidden text-text text-sm font-semibold opacity-60 hover:opacity-100 duration-300 hover:text-shadow-white" href="{{ route('signUp') }}">Sign Up</a>
            </div>
            <div class="hidden hb:flex items-center gap-x-8">
                <a class="text-text text-sm font-semibold border border-blue-600 p-1.5 px-4 rounded-md bg-blue-600 duration-300 hover:pulse focus:pulse" href="{{ route( 'logOut' )}}">Log Out</a>
            </div>
        </div>
    </nav>
    <header class="w-10/12 m-auto h-header-hamb grid place-content-center md:w-9/12 lrg:w-6/12" data-scroll-section>
        <div class="translate-y-40 duration-[2s] opacity-0" data-scroll data-scroll-class="showY">
            <h1 class="text-text text-4xl font-bold text-center md:text-6xl lrg:text-7xl">Find any <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-fuchsia-600">musical instrument</span>  you're looking for!</h1>
            <p class="text-text opacity-50 font-semibold text-center mt-10 md:text-lg lrg:text-xl md:px-8">Explore a symphony of options as you browse through our virtual shelves, showcasing a harmonious collection of guitars, pianos, drums, and more.</p>
            <a href="#product"><i class="text-text size-10 w-full mt-24 animate-bounce hb:mt-16 hb:size-14 hb:w-full" data-feather="arrow-down"></i></a>
        </div>
    </header>
    <div class="w-10/12 m-auto mb-24 pt-[66px] md:w-9/12" id="product">
        <h2 class="before:block before:h-[1px] before:w-1/2 before:shade-l md:before:w-1/2 after:block after:h-[1px] after:w-1/2 after:shade-r md:after:w-1/2 flex justify-center items-center gap-x-4 text-xl text-center text-text font-bold mb-8 pb-2
            md:text-3xl">Product</h2>
        <div class="grid gap-8 sm-card:grid-cols-2 md-card:grid-cols-3 lg-card:grid-cols-4">
            @foreach ( $produk as $produk )
            <div class="hidden top-0 bottom-0 right-0 left-0 bg-slate-950/80 z-10" id="overlay"></div>
            <div class="commentSection hidden top-0 w-screen h-screen z-20 bg-slate-900 text-text overflow-y-auto max-h-screen hb:w-[70%] hb:h-auto hb:top-1/2 hb:left-1/2 hb:-translate-x-1/2 hb:-translate-y-1/2 hb:shadow-2xl hb:shadow-white/5 hb:rounded-md" id="{{$produk->id}}">
                <div class="hb:grid hb:grid-cols-2 hb:grid-rows-[55px_auto_auto]">
                    <img class="w-full h-full row-span-3 bg-indigo-950/40 hb-max:hidden" src="{{ asset('storage/post-images/' . $produk->image_path) }}" alt="">
                    <div class="sticky top-0 left-0 right-0 backdrop-blur-lg hb:static">
                        <div class="w-10/12 m-auto flex justify-end items-center py-3 md:w-9/12 hb:w-full hb:px-[5%]">
                            <div class="w-6 h-0"></div>
                            <h2 class="grow text-center font-semibold text-lg">Comment</h2>
                            <button data-id="{{ $produk->id }}" onclick="closeComment(this);"><i data-feather="x"></i></button>
                        </div>
                        <div class="h-[1px] opacity-30 shade-c mb-3"></div>
                    </div>
                    <div class="w-10/12 m-auto my-2 md:w-9/12 hb:w-full hb:min-h-96 hb:max-h-96 hb:px-[5%] hb:overflow-y-scroll">
                        @foreach ($produk->comments as $comment)
                        <div class="pb-5 flex justify-between">
                            <div class="">
                                <h3 class="font-medium mb-1 text-lg">{{ $comment->user->nama }}</h3>
                                <p class="font-light">{{ $comment->komentar }}</p>
                            </div>
                            <p class="font-thin">{{ $comment->created_at->format('Y-m-d') }}</p>
                        </div>
                        @endforeach
                    </div>
                    <div class="fixed bottom-0 left-0 right-0 mr-[11px] z-20 text-text hb:static">
                        <div class="h-[1px] opacity-30 shade-c"></div>
                        <form class="w-10/12 m-auto flex gap-x-[27px] items-center py-6 md:w-9/12 md:gap-x-[38px] hb:gap-x-8 hb:w-full hb:px-[5%]" action="{{ route('user.comment', $produk->id) }}" method="POST" id="komentar-{{ $produk->id }}">
                            @csrf
                            <textarea class="resize-none bg-transparent border-[.5px] border-text py-1 px-2 grow rounded-md outline-none" name="komentar" rows="2" placeholder="Type a comment..."></textarea>
                            <button>
                                <i class="opacity-30 hover:opacity-100 duration-300" data-feather="arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-slate-700/30 text-text rounded-sm shadow-lg translate-y-40 duration-[2s] opacity-0" data-scroll data-scroll-class="showY">
                <img class="w-screen" src="{{ asset('storage/post-images/' . $produk->image_path) }}" alt="Product Image">
                <div class="p-5">
                    <h3 class="font-semibold">{{ $produk->nama }}</h3>
                    <p class="opacity-70 py-2">{{ $produk->desk }}</p>
                    <div class="grid grid-cols-5 mt-2 gap-2">
                        <form class="col-span-2 p-2 rounded-md duration-300 bg-red-500 hover:bg-red-800" action="{{ route("user.like", $produk->id) }}" method="POST"  id="like-form-{{ $produk->id }}" >
                            @csrf
                            <div class="flex">
                                <button id="like-button-{{ $produk->id }}" data-id="{{ $produk->id }}" type="button" value="add" class="w-full flex gap-x-[30%]">
                                    <i data-feather="heart"></i>
                                    <p id="likesCount-{{ $produk->id }}">{{ count($produk->likes) }}</p>
                                </button>
                            </div>
                        </form>
                        <button onclick="openComment(this);" data-id="{{ $produk->id }}" class="comment w-full text-center col-span-3 p-2 rounded-md duration-300 bg-link hover:bg-indigo-600/80">Comment</button>
                        <a class="col-span-5 p-2 rounded-md duration-300 bg-indigo-700 hover:bg-indigo-800" href="{{ $produk->link }}"><button class="w-full flex justify-center gap-x-2"> Link <i data-feather="arrow-right"></i></button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="h-0.5 opacity-30 shade-c"></div>
    <div class="w-10/12 m-auto mt-24 text-text md:w-9/12 hb:flex hb:justify-between hb:mb-4" id="aboutUs">
        <div class="hb:max-w-[50%] translate-x-40 duration-[1s] opacity-0" data-scroll data-scroll-class="showX">
            <h1 class="text-2xl font-bold">About Us</h1>
            <div class="h-0.5 opacity-6 shade-r w-28 my-6"></div>
            <p>At ITeam, we're passionate about helping musicians find their perfect instruments. With a curated selection of guitars, pianos, drums, and more, we strive to be your go-to destination for all things musical. Whether you're a beginner or a seasoned pro, we're here to provide expert guidance and quality instruments to inspire your creativity. Explore our catalog and let the music begin!
            </p>
        </div>
        <div class="mt-12 hb:mt-0 -translate-x-40 duration-[1s] opacity-0" data-scroll data-scroll-class="showX">
            <h1 class="text-2xl font-bold">Contact</h1>
            <div class="h-0.5 opacity-6 shade-r w-28 my-6"></div>
            <div class="flex gap-x-2 my-8">
                >
                <img src="{{ asset('svg/fb.svg') }}" alt="Facebook Logo">
                <p class="pl-2">ITeam Official</p>
            </div>
            <div class="flex gap-x-2 my-8">
                >
                <img src="{{ asset('svg/mail.svg') }}" alt="Mail Logo">
                <p class="pl-2">ITeam@gmail.com</p>
            </div>
            <div class="flex gap-x-2 my-8">
                >
                <img src="{{ asset('svg/telp.svg') }}" alt="Phone Logo">
                <p class="pl-2">+62 8870 7860 072</p>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        const closeBtn = document.getElementById('close');
        const overlay = document.getElementById('overlay');

        function openComment(open) {
            const id = open.getAttribute('data-id');
            const commentSection = document.getElementById(id);
            commentSection.classList.remove('hidden');
            commentSection.classList.add('fixed');
            overlay.classList.remove('hidden');
            overlay.classList.add('fixed');
        };

        function closeComment(close) {
            const id = close.getAttribute('data-id');
            const commentSection = document.getElementById(id);
            commentSection.classList.remove('fixed');
            commentSection.classList.add('hidden');
            overlay.classList.remove('fixed');
            overlay.classList.add('hidden');
        };

        // Parallax
        const scroller = new LocomotiveScroll({});
        $(document).ready(function() {
            $('[id^="like-button-"]').on('click', function() {
                var formId = $(this).closest('form').attr('id');
                var formAction = $('#' + formId).attr('action');
                var formMethod = $('#' + formId).attr('method');
                var dataId = $(this).data('id');

                $.ajax({
                    type: formMethod,
                    url: formAction.replace(':id', dataId),
                    data: $('#' + formId).serialize(),
                    success: function(response) {
                        $('#likesCount-' + response.productId).text(response.likesCount);
                    }
                });
            });
        });
    </script>

</body>
</html>
