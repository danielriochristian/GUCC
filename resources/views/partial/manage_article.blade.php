{{-- calling admin \ admin.blade.php --}}
@extends('admin.admin')
@section('manage_article')


<div class="box box-warning">
    <div class="box-header">

    	<div class="form-group">
    	<a href="managearticle/create">
    	<button class="btn btn-primary" type="submit" id="new" > New Article </button>
    	</a>
		</div>
    <label> Daftar News </label>
		    <table class="table table-bordered" id="table-data">
		      <thead>
			      <tr>
			        <th>#</th>
			        <th>Judul</th>
			        <th>Status</th>
              <th>Keyword</th>
			        <th>Tanggal</th>
			        <th colspan="3">Aksi</th>
			      </tr>
		      </thead>
		      @foreach($manages as $manage)
		      <tr>
		      	<td> {{ $manage-> id }} </td>
		      	<td> {{ $manage-> title }} </td>
		      	<td> @if ($manage->status==1) Aktif
                 @else tidak aktif
                 @endif
            </td>
            <td> {{ $manage -> keyword }}
		      	<td> {{ $manage-> created_at }} </td>
		      	<td>
		      		<a href="/managearticle/{{ $manage->id }}/edit">
		      		<button class="btn btn-success" type="submit" id="new"> Edit </button> </a>

		      	</td>
		      	<td>
		      		<form action="/managearticle/{{ $manage->id }}" method="post">
      					<input type="hidden" name="_method" value="delete">
      					<input type="hidden" name="_token" value="{{ csrf_token() }}">
		      		  <button class="btn btn-danger" type="submit" id="new"> Delete </button>
		      		</form>
		      	</td>
            <td>
		      		<a href="/managearticle/{{ $manage->id }}/view" method="post">
		      		  <button class="btn btn-info" type="submit" id="new"> View </button>
		      	</td>
		      </tr>
		      @endforeach
		    </table>
	</div>
</div>



@endsection
