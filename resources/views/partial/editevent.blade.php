<!-- Falah 14 04 2018-->
{{-- calling admin \ admin.blade.php --}}
@extends('admin.admin')
@section('edit_event')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<div class="box box-warning">
    <div class="box-header">

    <form class="" action="/manageevent/{{ $manages->id }}" method="post">

      <div class="form-group">
    		<label> Tanggal</label>
    		<input type="date" class="form-control" name="date" id="date" placeholder="Tanggal Pelaksanaan" value="{{ $manages->date }}">
    	</div>

    <div class="form-group">
    	<label> Title </label>
		<input type="text" class="form-control" name="title" placeholder="Masukan title" value="{{ $manages->title }}">
	</div>

	<div class="form-group">
		<label> Status </label>
		<div class="form-check">
				 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
				 <label class="form-check-label" for="exampleRadios1"> Aktif </label>
				</div>
				<div class="form-check">
				 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
				 <label class="form-check-label" for="exampleRadios2"> Tidak Aktif </label>
			</div>
	</div>
  <div class="form-group">
		<label> Content</label>
		<textarea name="content"  placeholder="Masukan subject">{{ $manages->content }} </textarea>
	</div>
  <div class="form-group">
    <label> Tempat </label>
    <input type="text" class="form-control" name="place" id="place" placeholder="Tempat Pelaksanaan" value="{{ $manages->place }}">
  </div>
	<div class="form-group">
		<input type="hidden" name="_method" value="put">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<button class="btn btn-success" type="submit" id="new"> Edit </button>
	</form>
		<a href="/manageevent">
		<button class="btn btn-danger" type="submit" id="new"> Cancel </button>
		</a>
	</div>


    </div>
</div>

@endsection
