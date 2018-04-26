<!-- 

Author : Hasan El Jabir
Date   : 17-09-2017 

-->

<!-- Slider -->
<div class="wm-main-banner"> 
    <div class="wm-banner-two">
        @foreach($slider as $slide)
            <div class="wm-banner-two-layer">
                <span class="wm-bannertwo-transparent"></span>
                <img src="{{ asset('img/8.jpg') }}">
                <div class="wm-caption-two">
                    <div class="container">
                        <div class="wm-caption-two-inner">
                            <h1>{{ $slide->title }}  </h1>
                            <p>{{ str_limit($slide->content, 300) }}</p>
                            <div class="clearfix"></div>
                            <a href="{{ url('slider/'.$slide->id) }}"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- End Slider -->