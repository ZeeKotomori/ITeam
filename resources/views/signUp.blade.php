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
<body class="w-screen bg-gradient-to-br from-gradient-dark to-gradient-light    ">
    <div class="h-screen w-screen flex flex-col bg-cover bg-no-repeat p-10 align-center " style="background-image: url('svg/background style.svg')">
        <div class="title">
            <img src="svg/title.svg" alt="">
        </div>
        <div class="flex h-screen items-center justify-center">
            <div class="form flex flex-col md:flex-row md:bg-form md:relative p-10 max-w-xl rounded-xl">
                <div class="flex pt-16 md:pt-0 md:absolute md:left-0 md:p-5 md:top-5">
                    <img class="w-16 md:w-12" src="svg/Vector.svg" alt="">
                </div>
                <form class="text-text flex md:px-10 flex-col justify-center gap-y-2 pt-14" action="">
                    <div class="flex flex-col pt-4 md:pt-3 md:w-80">
                        <label class="font-manrope" for="email">Email</label>
                        <Input class="bg-transparent border-b-2 border-form outline-0 w-full" type="text" name="email" id="email"></Input>
                    </div>
                    <div class="sm:flex flex-col pt-4 md:pt-3">
                        <label class="font-manrope" for="password">Password</label>
                        <Input class="bg-transparent border-b-2 border-form outline-0 w-full" type="password" name="password" id="password"></Input>
                    </div>
                    <div class="sm:flex flex-col pt-4 md:pt-3">
                        <label class="font-manrope" for="gender">Gender</label>
                        <select class="bg-transparent border-b-2 border-form outline-0 w-full" name="jenis_kelamin" id="jenis_kelamin">
                            <option class="bg-primary" value="Pria">Pria</option>
                            <option class="bg-primary" value="Wanita">Wanita</option>
                            <option class="bg-primary" value="Tidak ingin memberi tahu">Tidak ingin memberi tahu</option>
                        </select>
                    </div>
                    <div class="sm:flex flex-col pt-4 md:pt-3">
                        <label class="font-manrope" for="no_telp">Phone</label>
                        <Input class="bg-transparent border-b-2 border-form outline-0 w-full" type="text" name="no_telp" id="no_telp"></Input>
                    </div>
                    <div class="flex justify-between pt-8">
                        <button class="bg-line p-3 rounded-xl w-24" type="submit">Sign Up</button>
                        <span class="w-32 text-right">have an account? <a class="text-link" href="login">login</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
