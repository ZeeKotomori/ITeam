<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Sign-Up</title>
</head>
<body class="bg-gradient-to-br from-gradient-dark to-gradient-light font-manrope">
    <div class="flex flex-col bg-cover bg-no-repeat p-10 align-center min-h-screen max-h-full" style="background-image: url('svg/background style.svg')">
    <div class="opacity-0 hidden md:opacity-100 md:pt-4 md:pl-4 md:block md:mb-10 ">
        <img class="md:w-36" src="svg/title.svg" alt="Title ITeam">
    </div>
        <div class="md:justify-center md:flex">
            <div class="form flex flex-col rounded-xl md:bg-form md:relative md:p-8">
                <div class="flex flex-col items-center md:pt-0 md:left-0 md:p-5 md:top-5">
                    <img class="w-16 mb-4 md:w-12" src="svg/Vector.svg" alt="Vector">
                    <span class="text-text text-3xl font-bold">Sign Up</span>
                </div>
                <form class="text-text flex flex-col justify-center gap-y-2 pt-8 md:px-10" action="">
                    <div class="flex flex-col pt-4 md:pt-3 md:w-80">
                        <label for="email">Email</label>
                        <Input class="py-2 bg-transparent border-b-2 border-form outline-0 w-full" type="text" name="email" id="email" autocomplete="off"></Input>
                    </div>
                    <div class="sm:flex flex-col pt-4 md:pt-3">
                        <label for="password">Password</label>
                        <Input class="py-2 bg-transparent border-b-2 border-form outline-0 w-full" type="password" name="password" id="password" autocomplete="off"></Input>
                    </div>
                    <div class="sm:flex flex-col pt-4 md:pt-3">
                        <label for="jenis_kelamin">Gender</label>
                        <select class="py-2 bg-transparent border-b-2 border-form outline-0 w-full" name="jenis_kelamin" id="jenis_kelamin" autocomplete="off">
                            <option value="" default hidden></option>
                            <option class="bg-primary" value="Pria">Pria</option>
                            <option class="bg-primary" value="Wanita">Wanita</option>
                            <option class="bg-primary" value="Tidak ingin memberi tahu">Tidak ingin memberi tahu</option>
                        </select>
                    </div>
                    <div class="sm:flex flex-col pt-4 md:pt-3">
                        <label for="no_telp">Phone</label>
                        <Input class="py-2 bg-transparent border-b-2 border-form outline-0 w-full no-inner-spin-button" type="number" name="no_telp" id="no_telp" autocomplete="off"></Input>
                    </div>
                    <div class="flex justify-between pt-8">
                        <button class="bg-line rounded-xl w-24 h-10 shadow-sm" type="submit">Sign Up</button>
                        <span class="w-32 text-sm text-right">have an account? <a class="text-link underline" href="login">login</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
