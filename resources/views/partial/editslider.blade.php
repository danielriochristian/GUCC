{{-- calling admin \ admin.blade.php --}}
@extends('admin.admin')
@section('edit_article')


<div class="box box-warning">
    <div class="box-header">

    <form class="" action="/manageslider/{{ $manages->id }}" method="post">

  <div class="form-group">
    <label> Title </label>
		<input type="text" class="form-control" name="title" placeholder="Slider Title" value="{{ $manages->title }}">
	</div>
  <div class="form-group">
    <label> Description </label>
		<input type="text" class="form-control" name="content" placeholder="Gunadarma" value="{{ $manages->content }}">
	</div>
	<div class="form-group">
		<label> Image </label>
    <img src="{{$manages->image}}" alt="" height="200px;">
	</div>
  <div class="form-group">
		<label> Link </label>
		<input type="text" class="form-control" name="link" placeholder="http://gunadarma.ac.id" value="{{ $manages->link }}">
	</div>
	<div class="form-group">
		<input type="hidden" name="_method" value="put">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<button class="btn btn-success" type="submit" id="new"> Edit </button>
	</form>
		<a href="/managearticle/">
		<button class="btn btn-danger" type="submit" id="new"> Cancel </button>
		</a>
	</div>


    </div>
</div>


@endsection
