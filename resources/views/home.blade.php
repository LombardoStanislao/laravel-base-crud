@extends('layout.app')


@section('content')
  <div class="container">
    <div class="row">
      <div class="col-3 col-offset-4">
        <h1>homepage</h1>
        <a href="{{route('cars.create')}}" class="btn btn-info">Aggiungi una nuova auto</a>
      </div>

    </div>
  </div>




@endsection
