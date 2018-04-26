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
            <div class="wm-fancytitle-two wm-align-left"> <h2>News</h2> </div>
                <div class="wm-news wm-latest-news">  
                    <figure><img src="{{ asset('extra-images/latest-news-thumb-1.jpg') }}" alt=""></figure>
                    <div class="wm-latestnews-text">
                    <time><small>{!! $data->created_at->format('M') !!}</small>{!! $data->created_at->format('d') !!}</time>
                    <h5><a href="#">{!! $data->title !!}</a></h5>
                    <p>{!! $data->content !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partial.footer')