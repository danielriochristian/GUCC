@extends('admin.admin')
@section('help')

  {{-- <div class="col-md-4">
    <ul class="list-group help-group">
      <div class="faq-list list-group nav nav-tabs">
        <a href="#tab1" class="list-group-item active" role="tab" data-toggle="tab">Frequently Asked Questions</a>
        <a href="#tab2" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-account"></i> My profile</a>
        <a href="#tab3" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-account-settings"></i> My account</a>
        <a href="#tab4" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-star"></i> My favorites</a>
        <a href="#tab5" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-cart"></i> Checkout</a>
        <a href="#tab6" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-heart"></i> Lorem ipsum</a>
        <a href="#tab7" class="list-group-item" role="tab" data-toggle="tab"><i class="mdi mdi-check"></i> Dolor sit amet</a>
      </div>
    </ul>
  </div> --}}

<div class="box box-warning">
    <div class="box-header">
      <div class="container">
        <h2> Frequently Asked Questions </h2>
      </div>

@foreach ($manages as $manage)

<div class="container">
  <div class="panel panel-default panel-help" style="width:91%;">
    <a href="" data-toggle="collapse">
      <div class="panel-heading">
        <h2>{{$manage->question}}</h2>
      </div>
    </a>
    <div class="collapse in">
      <div class="panel-body">
        {{-- <p>{{$manage->answer}}</p> --}}
        <p><strong>Answer: </strong>{{$manage->answer}}</p>
        <a href="/help/{{ $manage->id }}/edit">
        <button class="btn btn-success" type="submit" id="new" style="float:left;"> Edit </button> </a>

        <form action="/help/{{ $manage->id }}" method="post">
          <input type="hidden" name="_method" value="delete">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button class="btn btn-danger" type="submit" id="new" style="margin-left:1%;"> Delete </button>
        </form>
      </div>

    </div>
  </div>
</div>

@endforeach
<div class="form-group">
<a href="help/create">
<button class="btn btn-primary" type="submit" id="new" > New FAQ </button>
</a>
</div>

{{-- <hr>
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
   @foreach ($questions as $question)
   <tr>
    <td> {{ $question-> question }} </td>
    <td> {{ $question-> created_at }} </td>
    <td>
      <form action="/manageslider/{{ $question->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn btn-danger" type="submit" id="new"> Delete </button>
      </form>
    </td>
  </tr>
  @endforeach
</table> --}}
  </div>
</div>


@endsection
