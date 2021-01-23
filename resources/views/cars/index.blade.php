@extends('layout.app')


@section('content')

  <div class="container">
    <div class="row">
      <div class="col-3 col-offset-4">
        <a href="{{route('cars.create')}}" class="btn btn-info add-car">Aggiungi una nuova auto</a>
      </div>
    </div>
    <div class="row">

      @foreach ($cars as $car)
        <div class="col-4">

          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title text-center">{{ $car->casa_produttrice }}</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Modello: {{ $car->modello }}</li>
              <li class="list-group-item">Prezzo: {{ $car->prezzo}}€</li>
            </ul>
            <div class="card-body">
              <a href="{{ route('cars.show', ['car' => $car->id])}}" class="card-link btn btn-info">Maggiori informazioni</a>
            </div>
            <div class="card-body">
              <a href="{{ route('cars.edit', ['car' => $car->id])}}" class="card-link btn btn-warning">Modifica</a>
              <form class="" action="{{route('cars.destroy', ['car' => $car->id])}}" method="POST" style="display: inline; margin-left: 10px;">
                @csrf
                @method('DELETE')
                <button type="submit" name="button" class="btn btn-danger">Elimina</button>
              </form>
            </div>

          </div>

        </div>
      @endforeach


    </div>

  </div>

@endsection
