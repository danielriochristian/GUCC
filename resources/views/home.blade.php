<!-- 

Author : Hasan El Jabir
Date   : 17-09-2017 

-->

<!DOCTYPE html>
<html lang="en">
<head>
    @include('script.meta')
    @yield('meta')

    @include('partial.title')
    @yield('title')

    @include('script.css')
    @yield('css')
</head>

<body>
    <div class="wm-main-wrapper">   
        
        @include('partial.header')

        @include('partial.menu')

        @include('slider')

        @include('news_event')

        @include('study_program')

	    @include('staffsite')

        @include('student')

        @include('partial.footer')
        
    </div>

    @include('script.js')
    @yield('js')

</body>

</html>