
{{-- calling admin \ admin.blade.php --}}
@extends('admin.admin')
@section('admin')


<div class="box box-success">
        <div class="box-header">
<div class="row">
  <div class="col-md-12">
    <h1>Admin</h1>
  </div>
</div>


  <div class="table table-responsive">
    <table class="table table-bordered" id="table-data">
      <thead>
      <tr>
        <th width="150px">Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Create At</th>
        <th class="text-center" width="150px">
          <a href="#" class="create-modal btn btn-success btn-sm">
            <i class="glyphicon glyphicon-plus"></i>
          </a>
        </th>
      </tr>
      </thead>
      {{ csrf_field() }}

      @foreach ($post as $value)
        <tr class="post{{$value->id}}">
          <td>{{ $value->id }}</td>
          <td>{{ $value->name }}</td>
          <td>{{ $value->email }}</td>
          <td>{{ $value->created_at }}</td>
          <td>
            <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-title="{{$value->admin_user}}" data-body="{{$value->admin_role}}">
              <i class="fa fa-eye"></i>
            </a>
            <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-title="{{$value->admin_user}}" data-body="{{$value->admin_role}}">
              <i class="glyphicon glyphicon-pencil"></i>
            </a>
            <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-title="{{$value->admin_user}}" data-body="{{$value->admin_role}}">
              <i class="glyphicon glyphicon-trash"></i>
            </a>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
  {{$post->links()}}

{{-- Modal Form Create Post --}}
<div id="create" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group row add">
            <label class="control-label col-sm-2" for="title">Username </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="admin_user" name="admin_user"
              placeholder="Input Username" required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="body">Password </label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="admin_password" name="admin_password"
              placeholder="Input Password" required>
              <p class="error text-center alert alert-danger hidden"></p>
            </div></div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="body">Role </label>
            <div class="col-sm-10">
              <select class="form-control" id="admin_role">
                <option value="Manager">Manager</option>
                <option value="Super Admin">Super Admin</option>
                </select>
            </div>   </div>
             <div class="form-group">
            <label class="control-label col-sm-2" for="body">Status </label>
            <div class="col-sm-10">
              <input readonly="text" class="form-control" id="status" name="status" value="Aktif">
            </div>   </div>
        </form>
      </div>
          <div class="modal-footer">
            <button class="btn btn-warning" type="submit" id="add">
              <span class="glyphicon glyphicon-plus"></span>Save Post
            </button>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
          </div>
    </div>
  </div>
</div></div>
{{-- Modal Form Show POST --}}
<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
                  </div>
                    <div class="modal-body">
                    <div class="form-group">
                      <label for="">ID :</label>
                      <b id="i"/>
                    </div>
                    <div class="form-group">
                      <label for="">Username :</label>
                      <b id="ti"/>
                    </div>
                    <div class="form-group">
                      <label for="">Role :</label>
                      <b id="by"/>
                    </div>
                    </div>
                    </div>
                  </div>
                  </div>

{{-- Modal Form Edit and Delete Post --}}
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="modal">

          <div class="form-group">
            <label class="control-label col-sm-2" for="id">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fid" disabled>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="title">Username</label>
            <div class="col-sm-10">
            <input type="name" class="form-control" id="t">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="body">Role</label>
            <div class="col-sm-10">
            <textarea type="name" class="form-control" id="b"></textarea>
            </div>
          </div>
        </form>
                {{-- Form Delete Post --}}
        <div class="deleteContent">
          Are You sure want to delete <span class="title"></span>?
          <span class="hidden id"></span>
        </div>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn actionBtn" data-dismiss="modal">
          <span id="footer_action_button" class="glyphicon"></span>
        </button>

        <button type="button" class="btn btn-warning" data-dismiss="modal">
          <span class="glyphicon glyphicon"></span>close
        </button>

      </div>
    </div>
  </div>
</div>
</div>


@endsection
