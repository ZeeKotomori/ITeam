<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>
    <title>ITeam - Dashboard</title>
</head>
<body class="bg-gradient-dark">
    <div class="max-w-[95%] m-auto flex">
        <aside class="hamberg bg-gradient-to-t from-primary to-link flex flex-col justify-start w-72 h-dashboard my-8 rounded-lg hb-max:fixed hb-max:w-60 hb-max:-translate-x-80 z-10 duration-300">
            <img src="{{asset("svg/title.svg")}}" class="mx-12 mt-6 mb-3" alt="ITeam Logo">
            <div class="h-0.5 shade-c opacity-15 mt-4"></div>
            <ul>
                <form class="flex items-center justify-center my-8 hb:hidden" id="search" action="{{ route('admin.dashboard') }}" method="GET">
                    <input class="w-2/3 p-2 bg-transparent border-2 rounded-md outline-none text-text" placeholder="Search here" type="search" name="search" autocomplete="off">
                    <button class="bg-link rounded-md ml-4 w-9 h-9 hover:bg-link/70 duration-300" type="submit"><i class="w-9 text-text" data-feather="search"></i></button>
                </form>
                <a href="" class="bg-primary rounded-lg m-3 flex items-center text-text">
                    <i data-feather="trending-up" class="m-4"></i>
                    <span class="font-semibold text-lg py-4">Dashboard</span>
                </a>
                <a href="{{ route("admin.listProduct") }}" class="hover:bg-secondary rounded-lg m-3 flex items-center text-slate-300 hover:text-text opacity-60 hover:opacity-100 duration-300">
                    <i data-feather="shopping-bag" class="m-4"></i>
                    <span class="font-semibold text-lg py-4">Product List</span>
                </a>
                <a href="{{ route('admin.addProduct') }}" class="hover:bg-secondary rounded-lg m-3 flex items-center text-slate-300 hover:text-text opacity-60 hover:opacity-100 duration-300">
                    <i data-feather="upload" class="m-4"></i>
                    <span class="font-semibold text-lg py-4">Add Product</span>
                </a>
                <a href="{{ route('user.index') }}" class="hover:bg-secondary rounded-lg m-3 flex items-center text-slate-300 hover:text-text opacity-60 hover:opacity-100 duration-300">
                    <i data-feather="home" class="m-4"></i>
                    <span class="font-semibold text-lg py-4">Home Page</span>
                </a>
            </ul>
            <a href="{{ route( "logOut" )}}" class="bg-link hover:bg-link/80 duration-300 rounded-lg mx-3 mb-3 mt-auto p-2 flex justify-center text-text font-semibold"><p>Log Out</p></a>
        </aside>
        <div class="text-text h-dashboard ml-8 my-8 w-full hb-max:ml-0">
            <div class="flex items-baseline justify-between">
                <h3 class="font-bold text-xl">Dashboard</h3>
                <div class="flex items-center gap-x-8">
                    <form class="hidden items-center hb:flex" action="{{ route('admin.dashboard') }}" method="GET">
                        <input class="p-2 bg-transparent border-2 rounded-md outline-none" placeholder="Search here" type="search" name="search" autocomplete="off">
                        <button class="bg-link rounded-md ml-4 w-9 h-9 hover:bg-link/80 duration-300" type="submit"><i class="w-9" data-feather="search"></i></button>
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
            <div class="flex gap-x-12 md-max:block">
                <div class="flex justify-between mt-12 bg-line w-1/3 p-2 rounded-lg md-max:w-full">
                    <div class="bg-link p-4 rounded-xl -mt-8 mb-auto ml-2 drop-shadow-link">
                        <i data-feather="shopping-bag"></i>
                    </div>
                    <div class="text-right mr-2">
                        <span>Total Products</span>
                        <h3 class="text-3xl font-semibold">{{ $produk }}</h3>
                    </div>
                </div>
                <div class="flex justify-between mt-12 bg-line w-1/3 p-2 rounded-lg md-max:w-full">
                    <div class="bg-link p-4 rounded-xl -mt-8 mb-auto ml-2 drop-shadow-link">
                        <i data-feather="heart"></i>
                    </div>
                    <div class="text-right mr-2">
                        <span>Total Likes</span>
                        <h3 class="text-3xl font-semibold">{{ $likes }}</h3>
                    </div>
                </div>
                <div class="flex justify-between mt-12 bg-line w-1/3 p-2 rounded-lg md-max:w-full">
                    <div class="bg-link p-4 rounded-xl -mt-8 mb-auto ml-2 drop-shadow-link">
                        <i data-feather="user"></i>
                    </div>
                    <div class="text-right mr-2">
                        <span>Total Users</span>
                        <h3 class="text-3xl font-semibold">{{ $userlist }}</h3>
                    </div>
                </div>
            </div>
            <div class="w-full mt-16 mb-8">
                <div class="mt-12 bg-line py-2 px-4 rounded-lg">
                    <div class="bg-link w-fit px-8 py-2 rounded-xl -mt-8 mb-8 drop-shadow-link">
                        <h3 class="font-semibold text-xl">User List</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-center table-auto min-w-full">
                            <tr class="even:bg-evens">
                                <th class="p-4">Email</th>
                                <th class="p-4">Name</th>
                                <th class="p-4">Gender</th>
                                <th class="p-4">Phone Number</th>
                                <th class="p-4">Action</th>
                            </tr>
                            @foreach ( $user as $data )
                            <tr class="even:bg-evens">
                                <td class="p-4">{{ $data->email }}</td>
                                <td class="p-4">{{ $data->nama }}</td>
                                <td class="p-4">{{ $data->jenis_kelamin }}</td>
                                <td class="p-4">{{ $data->no_telp }}</td>
                                <td class="p-4 flex justify-center col-span-2">
                                    <form class="flex px-2 justify-center col-span-2" action="{{ route('admin.delete' , $data->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="m-auto text-text w-8 h-8 p-1 rounded-md drop-shadow-2xl hover:drop-shadow-[0_1px_5px_rgba(255,255,255,0.3)] hover:scale-110 duration-300" data-feather="trash"></i>
                                        </button>
                                    </form>
                                    <form class="flex px-2 justify-center" action="{{ route('admin.makeAdmin' , $data->id)}}">
                                        @csrf
                                        <button class="flex flex-col justify-center items-center m-auto text-text w-auto h-auto p-1 rounded-md drop-shadow-2xl hover:drop-shadow-[0_1px_5px_rgba(255,255,255,0.3)] hover:scale-110 duration-300" type="submit flex">
                                            <i data-feather="user-check"></i>
                                            <p>Make As Admin</p>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    {{ $user->appends(['searchTerm' => $searchTerm])->links('pagination.default') }}
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
