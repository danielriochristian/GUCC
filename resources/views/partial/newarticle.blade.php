{{-- calling admin \ admin.blade.php --}}
@extends('admin.admin')
@section('new_article')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<form action="/addarticle" method="post">
<div class="box box-warning">
    <div class="box-header">
		<div class="form-group">
			<label> Title</label>
      {{csrf_field()}}
			<input type="text" class="form-control" name="title" id="title" placeholder="Judul Article">
		</div>
		<!--<div class="form-group">
			<label>Status</label>
				<div class="form-check">
				 <input class="form-check-input" type="radio" name="status" id="status" value="Aktif" checked>
				 <label class="form-check-label" for="exampleRadios1"> Aktif </label>
				</div>
				<div class="form-check">
				 <input class="form-check-input" type="radio" name="status" id="status" value="Tidak Aktif">
				 <label class="form-check-label" for="exampleRadios2"> Tidak Aktif </label>
			</div>
		</div> -->
		<div class="form-group">
      <label> Content </label>
			<textarea name="content" id="content"> </textarea>
		</div>
    <div class="form-group">
      <label> Keyword </label>
			<input type="text" class="form-control" id="keyword" name="keyword" placeholder="Universitas , Gunadarma">
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit" id=""> Save Post </button>
			<button class="btn btn-danger" type="submit" id=""> Cancel </button>
		</div>


	</div>
</div>

tinymce.init({
  min-height:300;
});
@endsection
