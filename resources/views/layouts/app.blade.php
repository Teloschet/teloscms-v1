<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <b>Início</b>
                        <button style="float:right;margin-top:-5px;padding:5px 10px;background:#138918;color:#fff;border-radius:5px;box-shadow:0px 0px 4px 1px rbga(0, 0, 0, 0.1);">Entrar &rarr;</button>
                    </div>
                    
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}

                <footer class="bg-white shadow" style="box-shadow:0px 0px 4px 1px rgba(0, 0, 0, 0.1);">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <center><b>TelosCMS &copy; 2021 &rarr; Desenvolvido por Telos</b></center>
                    </div>
                    
                </footer>
            </main>
            
        </div>
        

        @stack('modals')

        @livewireScripts
    </body>
</html>
