<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>
    <title>ITeam - Edit Product</title>
</head>
<body class="bg-gradient-dark">
    <div class="max-w-[95%] m-auto flex">
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
        <div class="text-text hb:h-dashboard my-8 w-full h-full hb-max:ml-0">
            <a href="{{ route('admin.listProduct') }}"><i data-feather="arrow-left"></i></a>
            <div class="w-[50%] h-fit mt-[2%] mx-auto hb-max:w-full md-max:mt-[5%]">
                <form class="grid grid-cols-1 grid-rows-[auto_42px_auto_auto_auto] gap-4 gap-x-12 rounded-lg py-8 h-fit md-max:grid-cols-1 md-max:grid-rows-[auto_42px_auto_auto_auto] md-max:h-fit" action="{{ route('admin.updateProduct', $produk->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid order-1 place-content-center row-span-1 h-56 bg-form rounded-md md-max:order-1 md-max:row-span-1 md-max:h-56">
                        <input class="text-transparent file:w-full file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-link file:text-text file:hover:bg-link/80 file:hover:cursor-pointer" name="image" type="file" id="files" accept="image/png, image/jpeg, image/jpg">
                        <label class="cursor-pointer text-center mt-2" for="files" id="imgUpload">Tidak ada file yang dipilih</label>
                    </div>
                    <input class="h-fit p-2 bg-transparent border-b-2 border-link outline-none order-2" placeholder="Title" name="nama" type="text" autocomplete="off">
                    <textarea class="h-full p-2 bg-transparent border-b-2 border-link outline-none resize-none order-3" name="desk" placeholder="Description" rows="7" cols="50" id="textArea"></textarea>
                    <input class="h-fit p-2 bg-transparent border-b-2 border-link outline-none order-4" name="link" placeholder="Link" type="text" autocomplete="off">
                    <button class="bg-link p-2 px-4 rounded-lg order-5 hover:bg-link/80 duration-300" type="submit">Upload</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Icon
        feather.replace();

        // Rows Description
        const mediaQuery = window.matchMedia('(max-width: 1150px)');
        const textArea = document.getElementById('textArea');

        window.addEventListener('load', () => {
            if (mediaQuery.matches) {
                textArea.setAttribute('rows', '5')
            } else {
                textArea.setAttribute('rows', '7')
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
