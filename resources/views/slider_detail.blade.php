<!-- 

Author : Hasan El Jabir
Date   : 17-09-2017 

-->

@include('script.css')
@yield('css')

@include('script.js')
@yield('js')

@include('partial.header')

@include('partial.menu')

<div class="wm-main-section wm-tocolumn-spacer">
    <div class="container">
        <div class="row">
            <div class="wm-fancytitle-two wm-align-left"> <h2>{!! $data->title !!}</h2> </div>
                <div class="wm-news wm-latest-news">  
                    <div class="wm-latestnews-text">
                    <p>{!! $data->content !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partial.footer')