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

@foreach($data as $val)
<div class="wm-main-section wm-tocolumn-spacer">
    <div class="container">
        <div class="row">
            <div class="wm-fancytitle-two wm-align-left"> <h2>{!! $val->title !!}</h2> </div>
                <div class="wm-news wm-latest-news">  
                    <figure><img src="{{ asset('extra-images/latest-news-thumb-1.jpg') }}" alt=""></figure>
                    <div class="wm-latestnews-text">
                    <p>{!! $val->content !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@include('partial.footer')