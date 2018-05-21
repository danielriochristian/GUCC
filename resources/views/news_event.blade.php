<!--

Author : Hasan El Jabir
Date   : 17-09-2017
Falah : 14-05-2018

-->

<!-- News and Event -->
<div class="wm-main-section wm-tocolumn-spacer">
    <div class="container">
        <div class="row">
            <!-- News -->
            <div class="col-md-6">
                <div class="wm-fancytitle-two wm-align-left"> <h2>Latest News</h2> </div>
                <div class="wm-news wm-latest-news">
                    <ul class="row">
                        @foreach($news as $new)
                            <li class="col-md-12">
                                <div class="wm-latest-news-wrap">
                                    <figure><img src="{{ asset('img/6.jpg') }}" alt=""></figure>
                                    <div class="wm-latestnews-text">
                                        <time style="color:#3498db;"><small>{{ $new->created_at->format('M') }}</small>{{ $new->created_at->format('d') }}</time>
                                        <h5 style="color:#3498db;"><a href="{{ url('news/'. $new->id) }}">{{ str_limit($new->title, 30) }}</a></h5>
                                        <p style="color: #fff;">{{ str_limit($new->content, 100) }}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- End News -->

            <!-- Event -->
          <div class="col-md-6">
            <div class="wm-fancytitle-two wm-align-left"> <h2>Upcoming Events</h2> </div>
            <div class="wm-thumb-testimonial">
              @foreach ($event as $evnt)
                <div class="wm-upcoming-event-layer">
                    <div class="wm-banner-addswrap">
                        <div class="wm-banner-adds-inner">

                            <i style="color:#fff;" class="wmicon-time2">{{ str_limit($evnt->date, 100) }} </i> <!--</time>-->
                          <h2 style="color:#fff;">{{ str_limit($evnt->title, 30) }}</h2>
                            <p style="color:#fff;">{{ str_limit($evnt->content, 100) }}</p>
                          </div>
                          <span style="color:#424242;">{{ str_limit($evnt->place, 50) }}</span>
                          <div class="wm-banner-adds-inner"> <a href="{{ url('Event/'.$evnt->id) }}" class="wm-classic-button wm-bgcolor-two">See Event</a> </div>
                        </div>
                    </div>
              @endforeach
        <!--  <div class="col-md-6">
              <div class="wm-fancytitle-two wm-align-left">
                  <h2>Upcoming Events</h2>
              </div>
              <div class="wm-thumb-testimonial">
                  <div class="wm-upcoming-event-layer">
                      <div class="wm-banner-addswrap">
                          <div class="wm-banner-adds-inner">
                              <time style="color:#fff;" datetime="2008-02-14 20:00">
                                  <i style="color:#fff;" class="wmicon-time2"></i> 24 April, 2017
                              </time>
                              <h2 style="color:#fff;"">Convocation Recital</h2>
                              <p style="color:#fff;">We are pleased to offer a live-stream of this concert. The concert will not be archived for future viewing.</p>
                          </div>
                          <span style="color:#424242;">3220 Terry Lane Orlando, FL 32801</span>
                          <div class="wm-banner-adds-inner"> <a href="#" class="wm-classic-button wm-bgcolor-two">See Event</a> </div>
                      </div>
                  </div>
                  <div class="wm-upcoming-event-layer">
                      <div class="wm-banner-addswrap">
                          <div class="wm-banner-adds-inner">
                              <time style="color:#fff;" datetime="2008-02-14 20:00"><i style="color:#fff;" class="wmicon-time2"></i> 22 April, 2016</time>
                              <h2 style="color:#fff;">Percussion Ensemble</h2>
                              <p style="color:#fff;">Performing contemporary works for percussion and marimba ensemble with a diverse array.</p>
                          </div>
                          <span style="color:#424242;">3198 Hill Street Wapakoneta, OH 45895</span>
                          <div class="wm-banner-adds-inner"> <a href="#" class="wm-classic-button wm-bgcolor-two">See Event</a> </div>
                      </div>
                  </div>
                  <div class="wm-upcoming-event-layer">
                      <div class="wm-banner-addswrap">
                          <div class="wm-banner-adds-inner">
                              <time style="color:#fff;" datetime="2008-02-14 20:00"><i style="color:#fff;" class="wmicon-time2"></i> 10 April, 2016</time>
                              <h2 style="color:#fff;">Dean's Showcase Event</h2>
                              <p style="color:#fff;">Music students who've been selected by faculty to participate in the Dean's Showcase.</p>
                          </div>
                          <span style="color:#424242;">2013 Webster Street Woodbridge, NJ 07095</span>
                          <div class="wm-banner-adds-inner"> <a href="#" class="wm-classic-button wm-bgcolor-two">See Event</a> </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- End Event -->

      </div>
  </div>
</div>
<!-- End Event -->
