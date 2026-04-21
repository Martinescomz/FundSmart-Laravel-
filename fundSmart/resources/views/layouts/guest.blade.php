<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | FundSmart</title>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;600&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[linear-gradient(135deg,#e9f5ee,#f4f6f8)] px-2">
            
            <div class="w-full sm:max-w-[420px] mt-6 px-7 py-8 bg-white border-2 border-[#014e0740] shadow-[0_8px_25px_rgba(0,0,0,0.08)] overflow-hidden rounded-[22px] animate-[fadeUp_0.6s_ease]">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>