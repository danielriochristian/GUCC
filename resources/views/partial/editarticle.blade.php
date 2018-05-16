{{-- calling admin \ admin.blade.php --}}
@extends('admin.admin')
@section('edit_article')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea'});</script>

<div class="box box-warning">
    <div class="box-header">

    <form class="" action="/managearticle/{{ $manages->id }}" method="post">

    <div class="form-group">
    	<label> Title </label>
		<input type="text" class="form-control" name="title" placeholder="Masukan title" value="{{ $manages->title }}">
	</div>

	<div class="form-group">
		<label> Content</label>
		<textarea name="content"  placeholder="Masukan subject">{{ $manages->content }} </textarea>
	</div>
  <div class="form-group">
		<label> Keyword </label>
		<input type="text" class="form-control" name="keyword" placeholder="Universitas , Gunadarma" value="{{ $manages->keyword }}">
	</div>

	<div class="form-group">
		<input type="hidden" name="_method" value="put">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<button class="btn btn-success" type="submit" id="new"> Edit </button>
	</form>
		<a href="/managearticle">
		<button class="btn btn-danger" type="submit" id="new"> Cancel </button>
		</a>
	</div>


    </div>
</div>
tinymce.init({
  height:300;
});
@endsection
