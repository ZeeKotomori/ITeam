<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>
    <title>ITeam - Product List</title>
</head>
<body class="bg-gradient-dark">
    <div class="max-w-[95%] m-auto flex">
        <aside class="hamberg bg-gradient-to-t from-primary to-link flex flex-col justify-start w-72 h-dashboard my-8 rounded-lg hb-max:fixed hb-max:w-60 hb-max:-translate-x-80 z-10 duration-300">
            <img src="{{asset("svg/title.svg")}}" class="mx-12 mt-6 mb-3" alt="ITeam Logo">
            <div class="h-0.5 shade-c opacity-15 mt-4"></div>
            <ul>
                <form class="flex items-center justify-center my-8 hb:hidden" action="{{ route('admin.listProduct') }}" method="GET">
                    <input class="w-2/3 p-2 bg-transparent border-2 rounded-md outline-none text-text" placeholder="Search here" type="search" name="search" autocomplete="off">
                    <button class="bg-link rounded-md ml-4 w-9 h-9 hover:bg-link/70 duration-300" type="submit"><i class="w-9 text-text" data-feather="search"></i></button>
                </form>
                <a href="{{ route("admin.dashboard") }}" class="hover:bg-secondary rounded-lg m-3 flex items-center text-slate-300 hover:text-text opacity-60 hover:opacity-100 duration-300">
                    <i data-feather="trending-up" class="m-4"></i>
                    <span class="font-semibold text-lg py-4">Dashboard</span>
                </a>
                <a href="" class="bg-primary rounded-lg m-3 flex items-center text-text">
                    <i data-feather="shopping-bag" class="m-4"></i>
                    <span class="font-semibold text-lg py-4">Product List</span>
                </a>
                <a href="{{ route("admin.addProduct") }}" class="hover:bg-secondary rounded-lg m-3 flex items-center text-slate-300 hover:text-text opacity-60 hover:opacity-100 duration-300">
                    <i data-feather="upload" class="m-4"></i>
                    <span class="font-semibold text-lg py-4">Add Product</span>
                </a>
            </ul>
            <a href="{{ route( "logOut" )}}" class="bg-link hover:bg-link/80 duration-300 rounded-lg mx-3 mb-3 mt-auto p-2 flex justify-center text-text font-semibold">
                <p>Log Out</p>
            </a>
        </aside>
        <div class="text-text hb:h-dashboard ml-8 my-8 w-full h-full hb-max:ml-0">
            <div class="flex items-baseline justify-between">
                <h3 class="font-bold text-xl">Product List</h3>
                <div class="flex items-center gap-x-8">
                    <form class="hidden items-center hb:flex" action="{{ route('admin.listProduct') }}" method="GET">
                        <input class="2/3 p-2 bg-transparent border-2 rounded-md outline-none" placeholder="Search here" type="search" name="search" autocomplete="off">
                        <button class="bg-link rounded-md ml-4 w-9 h-9 hover:bg-link/80 duration-300" type="submit"><i class="w-9 text-text" data-feather="search"></i></button>
                    </form>
                    <div class="w-8 h-8 hidden hb-max:block">
                        <button class="text-white" id="hamburger">
                            <svg class="w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full mt-16 mb-8">
                <div class="mt-12 bg-line py-2 px-4 rounded-lg">
                    <div class="bg-link w-fit px-8 py-2 rounded-xl -mt-8 mb-8 drop-shadow-link">
                        <h3 class="font-semibold text-xl">Product List</h3>
                    </div>
                    <div class="grid gap-6 gap-y-10 text-text md:grid-cols-2 hb:grid-cols-3 sm-max:grid-cols-1">
                        @foreach ($produk as $item)
                        <div class="">
                            <img class="rounded-lg w-full mb-1 shadow-xl" src="{{ asset('storage/post-images/' . $item->image_path) }}" alt="Product Image">
                            <h4 class="font-semibold text-xl mb-1">{{ $item->nama }}</h4>
                            <p>{{ $item->desk }}</p>
                            <div class="flex gap-2 text-center mt-4">
                                <a class="bg-link p-2 rounded-md grow text-text hover:bg-link/80 duration-300" href="{{ route('admin.editProduct', $item->id) }}">
                                    <button type="button">EDIT</button>
                                </a>
                                <form class="flex justify-center" action="{{ route('admin.deleteProduct' , $item->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <i class="m-auto text-text w-8 h-8 p-1 hover:drop-shadow-[0_1px_5px_rgba(255,255,255,0.3)] hover:scale-110 duration-300" data-feather="trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Icon
        feather.replace();

        // Hamburger
        const menuToggle = document.getElementById('hamburger');
        const menuItems = document.querySelector('.hamberg');

        menuToggle.addEventListener('click', () => {
            menuItems.classList.toggle('hb-max:transform-none')
        });
    </script>
</body>
</html>
