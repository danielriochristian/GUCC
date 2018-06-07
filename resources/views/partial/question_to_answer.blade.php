@extends('partial.help')
@section('question')
<hr>
<div class="form-group">
  <h4>#Question To Answer</h1>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
    <th> Question </th>
    <th> Create At </th>
    <th> Action </th>
  </thead>
   @foreach ($manages as $manage)
   <tr>
    <td> {{ $manage-> question }} </td>
    <td> {{ $manage-> created_at }} </td>
    <td>
      <form action="/manageslider/{{ $manage->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn btn-danger" type="submit" id="new"> Delete </button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
@endsection
