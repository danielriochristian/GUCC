<!-- Falah 14 04 2018-->
{{-- calling admin \ admin.blade.php --}}

@extends('admin.admin')
@section('past_event')

  <div class="box box-warning">
      <div class="box-header">

      	{{-- <div class="form-group"> --}}
      	{{-- <a href="/pastevent/create"> --}}
      	{{-- <button class="btn btn-primary" type="submit" id="new" > New Event</button> --}}
      	{{-- </a> --}}
  		</div>
  		    <table class="table table-bordered" id="table-data">
  		      <thead>
  			      <tr>
  			        <th>#</th>
                <th>Tanggal</th>
  			        <th>Judul</th>
                <th>Content</th>
  			        <th>Status</th>
                <th>Tempat</th>
  			        <th>Created At</th>
  			        <th colspan="2">Aksi</th>
  			      </tr>
  		      </thead>
  		      @foreach($manages as $manage)
  		      <tr>
  		      	<td> {{ $manage-> id }} </td>
  		      	<td> {{ $manage-> date }} </td>
  		      	<td> {{ $manage-> title }} </td>
  		      	<td> {!! $manage-> content !!} </td>
              <td> @if ($manage->status==1) Aktif
                   @else tidak aktif
                   @endif
              </td>
              <td> {{ $manage-> place }} </td>
              <td> {{ $manage-> created_at }} </td>
              <td>
  		      		<a href="/pastevent/{{ $manage->id }}/edit">
  		      		<button class="btn btn-success" type="submit" id="new"> Edit </button> </a>

  		      	</td>
  		      	<td>
  		      		<form action="/pastevent/{{ $manage->id }}" method="post">
  					<input type="hidden" name="_method" value="delete">
  					<input type="hidden" name="_token" value="{{ csrf_token() }}">
  		      		 <button class="btn btn-danger" type="submit" id="new"> Delete </button>
  		      		</form>
  		      	</td>
              <td>
                <a href="/pastevent/{{ $manage->id }}">
                <button class="btn btn-primary" type="submit" id="new"> View </button> </a>
              </td>
  		      </tr>
  		      @endforeach
  		    </table>
  	</div>
  </div>

  @endsection
