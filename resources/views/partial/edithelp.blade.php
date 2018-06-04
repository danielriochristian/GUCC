@extends('admin.admin')
@section('edit_help')


  <div class="box box-primary">
      <div class="box-header">
        <form action="/help/{{$manages->id}}" method="post">
          {{csrf_field()}}
        <div class="form-group">
          <label> Question </label>
          <input type="text" class="form-control" name="question" value="{{$manages->question}}">
        </div>
        <div class="form-group">
          <label> Answer </label>
          <textarea rows="5" class="form-control" name="answer"> {{$manages->answer}} </textarea>
        </div>
        <div class="form-group">
          <input type="hidden" name="_method" value="put">
      		<input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button class="btn btn-primary" type="submit" id="add"> Edit </button>
          </form>
      </div>

  </div>
@endsection
