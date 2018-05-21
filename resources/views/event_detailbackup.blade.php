<!--

Falah : 14-05-2018

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
          <div class="wm-fancytitle-two wm-align-left"> <h2>Events</h2> </div>
          <div class="wm-upcoming-event-layer">
              <div class="wm-banner-addswrap">
                  <div class="wm-banner-adds-inner">
                  <!--  <time style="color:#fff;"><small>{!! $data->created_at->format('M') !!}</small>{!! $data->created_at->format('d') !!} -->
                      <i style="color:#fff;" class="wmicon-time2"></i> {!! $data->date !!}</time>
                    <h2 style="color:#fff;">{!! $data->title !!}</h2>
                      <p style="color:#fff;">{!! $data->content !!}</p>
                    </div>
                    <span style="color:#424242;">{!! $data->place !!}</span>
                    <div class="wm-banner-adds-inner"> <a href="{{ url('Event/'.$evnt->id) }}" class="wm-classic-button wm-bgcolor-two">See Event</a> </div>
                  </div>
              </div>
            </div>
        </div>
    </div>

@include('partial.footer')
