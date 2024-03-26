<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>OTP</title>
</head>
<body class="bg-gradient-to-br from-gradient-dark to-gradient-light font-manrope">
    <div class="flex flex-col bg-cover bg-no-repeat p-10 align-center min-h-screen max-h-full" style="background-image: {{ asset('svg/background style.svg') }}">
        <div class="opacity-0 hidden md:opacity-100 md:pt-4 md:pl-4 md:block md:mb-10">
            <img class="md:w-36" src="{{ asset('svg/title.svg') }}" alt="Title ITeam">
        </div>
        <div class="md:justify-center md:flex">
            <div class="form flex flex-col rounded-xl md:bg-form md:relative md:p-8">
                <div class="flex flex-col items-center md:pt-0 md:left-0 md:p-5 md:top-5">
                    <img class="w-16 mb-4 md:w-12" src="{{ asset('svg/Vector.svg') }}" alt="Vector">
                    <span class="text-text text-3xl font-bold">OTP CODE</span>
                </div>
                <form class="text-text flex flex-col justify-center gap-y-2 pt-8 md:px-10" action="{{ route('otp.validation', ['user_id' => $user->id]) }}" method="POST">
                    @csrf
                    <div class="flex items-center flex-col pt-4 md:pt-3 md:w-80">
                        <input class="py-2 bg-transparent border-b-2 border-form outline-0 w-full" type="text" name="otp_code" required autofocus>
                        @error('otp_code')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <div class="flex justify-between pt-8">
                            <button class="bg-line rounded-xl w-44 h-10 shadow-sm" type="submit">Validate Otp Code</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
