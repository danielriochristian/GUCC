@extends('admin.admin')
@section('manage_article')

  <div class="box box-warning">
      <div class="box-header">

        <form action="/addfaq" method="post">
          <div class="form-group">
            {{csrf_field()}}
            <label> Question </label>
        		<input type="text" name="question" class="form-control" placeholder="Bagaimana cara upload foto">
            <label> Answer </label>
          	<textarea name="answer" class="form-control"> </textarea>
          </div>
          <div class="form-group">
          <button class="btn btn-primary" type="submit" id="add"> Save </button>
          <a href="/help">
          <button class="btn btn-danger" type="submit"> Cancel </button>
        </a>
          </div>
        </form>

      </div>
  </div>


@endsection
