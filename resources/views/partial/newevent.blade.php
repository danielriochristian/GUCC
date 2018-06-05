<!-- Falah 14 04 2018-->
{{-- calling admin \ admin.blade.php --}}

@extends('admin.admin')
@section('new_event')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<form action="/addevent" method="post">
<div class="box box-warning">
    <div class="box-header">
        {{csrf_field()}}
    <div class="form-group">
  		<label> Tanggal</label>
  		<input type="date" class="form-control" name="date" id="date" placeholder="Tanggal Pelaksanaan">
  	</div>
		<div class="form-group">
			<label> Title</label>
			<input type="text" class="form-control" name="title" id="title" placeholder="Judul Event">
		</div>
		<!--<div class="form-group">
			<label> Kategori </label>
			<select class="form-control" id="kategori">
		        <option value="event">Event</option>
		        </select>
		</div> -->
		<!--<div class="form-group">
			<label>Status</label>
				<div class="form-check">
				 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
				 <label class="form-check-label" for="exampleRadios1"> Aktif </label>
				</div>
				<div class="form-check">
				 <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
				 <label class="form-check-label" for="exampleRadios2"> Tidak Aktif </label>
			</div>
		</div> -->
    <div class="form-group">
      <label> Content </label>
			<textarea name="content" id="content"> </textarea>
		</div>
    <div class="form-group">
			<label> Tempat </label>
			<input type="text" class="form-control" name="place" id="place" placeholder="Tempat Pelaksanaan">
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit" id=""> Save Post </button>
			<button class="btn btn-danger" type="submit" id=""> Cancel </button>
		</div>


	</div>
</div>


@endsection
