{{-- calling admin \ admin.blade.php --}}
@extends('admin.admin')
@section('view_slider')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<div class="box box-warning" >
    <div class="box-header">

      <div class="form-group">
        <textarea name="image" class="form-control my-editor">  <img src="/photos/1/{{ $manages->image }}"> </textarea>
      </div>
      <hr>
      <div class="form-group">
        <h4> Title Slider :  {{ $manages-> title }} </h4>
        <h4> Waktu input :  {{ $manages-> created_at }} </h4>
        <h4> Keterangan Link :  {{ $manages-> link }} </h4>
        <h4> Deskripsi :  {{ $manages-> content }} </h4>
      </div>
      <div class="form-group">
        <a href="/manageslider">
    		<button class="btn btn-danger" type="submit" id="new"> Back </button>
    		</a>
      </div>






    </div>
</div>



<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    min_height: 300,
    relative_urls: false,
    menubar: false,
    statusbar: false,
    toolbar: false,
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
