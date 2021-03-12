<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>            
        @include('_partials.ogtags')
    </head>
    <body class="font-sans antialiased text-gray-900">
        @include('_partials.header')
        <div class="w-full text-gray-700 bg-gray-50 bg dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div class="flex px-4 mx-auto max-w-screen-2xl md:px-6 lg:px-8">                
                <div>                    
                    @yield('body')                    
                </div>
            </div>
        </div>    
        @include('_partials.footer')
        @include('_partials.scripts')
    </body>
</html>
