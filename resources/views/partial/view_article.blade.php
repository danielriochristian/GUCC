@extends('admin.admin')
@section('manage_article')

  <div class="box box-warning">
      <div class="box-header" style="overflow:auto;">
        <div class="wm-main-section wm-tocolumn-spacer">
        <div class="container">
            <div class="row">
                <div class="wm-fancytitle-two wm-align-left"> <h2>News</h2> </div>
                    <div class="wm-news wm-latest-news">
                      @foreach($manages as $manage)
                        <figure><img src="{{ asset('extra-images/latest-news-thumb-1.jpg') }}" alt=""></figure>
                        <div class="wm-latestnews-text">
                        <time><small>{!! $manage->created_at->format('M') !!}</small>{!! $manage->created_at->format('d') !!}</time>
                        <h5><a href="#">{!! $manage->title !!}</a></h5>
                        <p>{!! $manage->content !!}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <hr>
            <a href="/managearticle/" method="post">
              <button class="btn btn-danger" type="submit" id="new"> Back </button>
        </div>
      </div>
@endsection
