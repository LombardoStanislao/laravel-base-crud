@extends('layout.app')


@section('content')

  <div class="container">
    <div class="row">

    <div class="col-12">
      <form action="{{route('cars.store')}}" method="POST" >
        @csrf
        <div class="form-group">
          <label >Example label</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
        <div class="form-group">
          <label>Another label</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
      </form>

    </div>


    </div>

  </div>

@endsection
