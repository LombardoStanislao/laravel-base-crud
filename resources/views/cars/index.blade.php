@extends('layout.app')


@section('content')

  <div class="container">
    <div class="row">
      <div class="col-3 col-offset-4">
        <a href="{{route('cars.create')}}" class="btn btn-info">Aggiungi una nuova auto</a>
      </div>
    </div>
    <div class="row">

      @foreach ($cars as $car)
        <div class="col-4">

          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title text-center">{{ $car->Modello }}</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Anno di immatricolazione: {{ $car->Anno }}</li>
              <li class="list-group-item">Cilindrata: {{ $car->Cilindrata}}cc</li>
              <li class="list-group-item">Prezzo: {{ $car->Prezzo}}€</li>
            </ul>
            <div class="card-body">
              <a href="{{ route('cars.show', ['car' => $car->id])}}" class="card-link">Maggiori informazioni</a>
            </div>
          </div>

        </div>
      @endforeach


    </div>

  </div>

@endsection
