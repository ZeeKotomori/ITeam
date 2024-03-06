<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>
    <title>ITeam - Add Product</title>
</head>
<body class="bg-gradient-dark">
    <div class="max-w-[95%] m-auto flex">
        <aside class="hamberg bg-gradient-to-t from-primary to-link flex flex-col justify-start w-72 h-dashboard my-8 rounded-lg hb-max:fixed hb-max:w-60 hb-max:-translate-x-80 z-10 duration-300">
            <img src="{{ asset('svg/title.svg') }}" class="mx-12 mt-6 mb-3" alt="ITeam Logo">
            <div class="h-0.5 shade-c opacity-15 my-4"></div>
            <ul>
                <a href="{{ route("admin.dashboard") }}" class="hover:bg-secondary rounded-lg m-3 flex items-center text-slate-300 hover:text-text opacity-60 hover:opacity-100 duration-300">
                    <i data-feather="trending-up" class="m-4"></i>
                    <span class="font-semibold text-lg py-4">Dashboard</span>
                </a>
                <a href="{{ route("admin.listProduct") }}" class="hover:bg-secondary rounded-lg m-3 flex items-center text-slate-300 hover:text-text opacity-60 hover:opacity-100 duration-300">
                    <i data-feather="shopping-bag" class="m-4"></i>
                    <span class="font-semibold text-lg py-4">Product List</span>
                </a>
                <a href="" class="bg-primary rounded-lg m-3 flex items-center text-text">
                    <i data-feather="upload" class="m-4"></i>
                    <span class="font-semibold text-lg py-4">Add Product</span>
                </a>
            </ul>
            <a href="{{ route("logOut") }}" class="bg-link rounded-lg mx-3 mb-3 mt-auto p-2 flex justify-center text-text font-semibold">
                <p>Log Out</p>
            </a>
        </aside>
        <div class="fixed z-10 top-0 mr-[2.5%] right-0 mt-4">
            @error('image')
                <div class="text-text bg-primary flex justify-between p-3 mb-3 rounded-md duration-300"><i class="text-text bg-red-700 rounded-md mr-2 p-1" data-feather="x"></i>{{ $message }}<button class="closeBtn ml-2"><i class="text-text" data-feather="x"></i></button></div>
            @enderror
            @error('nama')
                <div class="text-text bg-primary flex justify-between p-3 mb-3 rounded-md duration-300"><i class="text-text bg-red-700 rounded-md mr-2 p-1" data-feather="x"></i>{{ $message }}<button class="closeBtn ml-2"><i class="text-text" data-feather="x"></i></button></div>
            @enderror
            @error('desk')
                <div class="text-text bg-primary flex justify-between p-3 mb-3 rounded-md duration-300"><i class="text-text bg-red-700 rounded-md mr-2 p-1" data-feather="x"></i>{{ $message }}<button class="closeBtn ml-2"><i class="text-text" data-feather="x"></i></button></div>
            @enderror
            @error('link')
                <div class="text-text bg-primary flex justify-between p-3 rounded-md duration-300"><i class="text-text bg-red-700 rounded-md mr-2 p-1" data-feather="x"></i>{{ $message }}<button class="closeBtn ml-2"><i class="text-text" data-feather="x"></i></button></div>
            @enderror
        </div>
        <div class="text-text hb:h-dashboard ml-8 my-8 w-full h-full hb-max:ml-0">
            <div class="flex items-baseline justify-between">
                <h3 class="font-bold text-xl">Add Product</h3>
                <div class="flex items-center gap-x-8">
                    <div class="w-8 h-8 hidden hb-max:block">
                        <button class="text-white" id="hamburger">
                            <svg class="w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full h-fit mt-[5%]">
                <form class="grid grid-cols-2 grid-rows-[42px_auto_auto_50px_auto] gap-4 gap-x-12  rounded-lg py-8 h-[32rem] md-max:grid-cols-1 md-max:grid-rows-[auto_42px_auto_auto_auto] md-max:h-fit" action="{{ route("admin.upImg") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid place-content-center row-span-4 h-full bg-form rounded-md md-max:order-1 md-max:row-span-1 md-max:h-56">
                        <input class="text-transparent file:w-full file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-link file:text-text file:hover:bg-indigo-600/70" type="file" id="files" name="image">
                        <label class="cursor-pointer text-center mt-2" for="files" id="imgUpload">Tidak ada file yang dipilih</label>
                    </div>
                    <input class="h-fit p-2 bg-transparent border-b-2 border-link outline-none md-max:order-2" placeholder="Title" type="text" name="nama">
                    <textarea class="h-full p-2 bg-transparent border-b-2 border-link outline-none resize-none md-max:order-3" placeholder="Description" rows="8" cols="50" id="textArea" name="desk"></textarea>
                    <input class="h-fit p-2 bg-transparent border-b-2 border-link outline-none md-max:order-4" placeholder="Link" type="text" name="link">
                    <button class="bg-link p-2 px-4 rounded-lg md-max:order-5 hover:bg-indigo-600/70" type="submit">Upload</button>
                </form>
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

        // Rows Description
        const mediaQuery = window.matchMedia('(max-width: 768px)');
        const textArea = document.getElementById('textArea');

        window.addEventListener('load', () => {
            if (mediaQuery.matches) {
                textArea.setAttribute('rows', '5')
            } else {
                textArea.setAttribute('rows', '8')
            }
        });

        // Image Upload Text
        files.addEventListener('input', () => {
            if (files.value == "") {
                imgUpload.innerHTML = "Tidak ada file yang dipilih";
            } else {
                let Spliter = files.value.split('\\');
                imgUpload.innerHTML = Spliter[Spliter.length - 1];
            }
        });

        // Close Toast
        const closeBtn = document.querySelectorAll('.closeBtn');

        closeBtn.forEach(Button => {
            Button.addEventListener('click', () => {
                const toast = Button.parentElement;
                toast.classList.add('opacity-0');
                
                setInterval(() => {
                    toast.classList.add('hidden');
                }, 300);
            });
        });
    </script>
</body>
</html>
