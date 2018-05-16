{{-- calling admin \ admin.blade.php --}}
@extends('admin.admin')
@section('manage_slider')
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<!-- import css -->
<body>
<div class="box box-primary">
    <div class="box-header">
    <form action="/manageslider" method="post">
    	<div class="form-group">
		<label> Title Slider </label>
		<input type="text" id="title" name="title" class="form-control" placeholder="Slider Title">
		</div>
    <label> Description </label>
		<input type="text" id="content" name="content" class="form-control" placeholder="gunadarma">
		<div class="form-group">
		<label> Image </label> <br>
		<label> <b>*Hanya gambar yang dapat dimasukkan </b> </label> <br>
		<textarea name="image" class="form-control my-editor"> </textarea>
		</div>
		<div class="form-group">
		<label> Link </label>
		<input type="text" id="link" name="link" class="form-control" placeholder="http://gunadarma.ac.id">
		</div>
		<div class="form-group">
		</div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
		<button class="btn btn-primary" type="submit" id="add"> Save </button>
		</div>
	</form>
		<hr>
		<div class="form-group">
			<h4>#Slider</h1>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th> id </th>
				<th> Title </th>
				<th> Content </th>
        <th> Link </th>
				<th> Create At </th>
        <th colspan="2" class="text-justify"> Action </th>
			</thead>
			 @foreach ($manages as $manage)
			 <tr>
				<td> {{ $manage-> id }} </td>
				<td> {{ $manage-> title }} </td>
				<td> {{ $manage-> content }} </td>
        <td> {{ $manage-> link }} </td>
				<td> {{ $manage-> created_at }} </td>
        <td>
          <a href="/manageslider/{{ $manage->id }}/edit">
          <button class="btn btn-success" type="submit" id="new"> Edit </button> </a>
        </td>
        <td>
          <form action="/manageslider/{{ $manage->id }}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger" type="submit" id="new"> Delete </button>
          </form>
        </td>
        <td>
          <a href="/manageslider/{{ $manage->id }}">
          <button class="btn btn-primary" type="submit" id="new"> View </button> </a>
        </td>
      </tr>
			@endforeach
		</table>

	</div>
</div>

</body>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    min_height: 300,
    menubar: false,
    statusbar: false,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "image",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>

@endsection
