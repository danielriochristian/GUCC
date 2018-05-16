{{-- calling admin \ admin.blade.php --}}
@extends('admin.admin')
@section('manage_event')

  <div class="box box-warning">
      <div class="box-header">

      	<div class="form-group">
      	<a href="/manageevent/new">
      	<button class="btn btn-primary" type="submit" id="new" > New Event</button>
      	</a>
  		</div>
  		    <table class="table table-bordered" id="table-data">
  		      <thead>
  			      <tr>
  			        <th>no</th>
  			        <th>Id Category</th>
  			        <th>Judul</th>
  			        <th>Status</th>
  			        <th>Created At</th>
  			        <th colspan="2">Aksi</th>
  			      </tr>
  		      </thead>
  		      @foreach($manages as $manage)
  		      <tr>
  		      	<td> {{ $manage-> id }} </td>
  		      	<td> {{ $manage-> id_category }} </td>
  		      	<td> {{ $manage-> title }} </td>
  		      	<td> {{ $manage-> status }} </td>
  		      	<td> {{ $manage-> created_at }} </td>
  		      	<td>
  		      		<a href="/manageevent/{{ $manage->id }}/edit">
  		      		<button class="btn btn-success" type="submit" id="new"> Edit </button> </a>

  		      	</td>
  		      	<td>
  		      		<form action="/manageevent/{{ $manage->id }}" method="post">
  					<input type="hidden" name="_method" value="delete">
  					<input type="hidden" name="_token" value="{{ csrf_token() }}">
  		      		 <button class="btn btn-danger" type="submit" id="new"> Delete </button>
  		      		</form>
  		      	</td>
  		      </tr>
  		      @endforeach
  		    </table>
  	</div>
  </div>

  @endsection
