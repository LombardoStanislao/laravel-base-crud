@extends('layout.app')


@section('content')

  <div class="container">
    <div class="row">
      <div class="col-4 col-offset-3">
        <h1>Modifica  l'auto</h2>
      </div>

    <div class="col-12">
      <form action="{{route('cars.update',  ['car' => $car->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label >Casa Produttrice</label>
          <input type="text" class="form-control" placeholder="Casa Produttrice" name="casa_produttrice"
          value="{{$car->casa_produttrice}}">
        </div>
        <div class="form-group">
          <label>Modello</label>
          <input type="text" class="form-control" placeholder="Modello" name="modello" value="{{$car->modello}}">
        </div>
        <div class="form-group">
          <label>Anno</label>
          <input type="text" class="form-control" placeholder="Anno" name="anno" value="{{$car->anno}}">
        </div>
        <div class="form-group">
          <label>Cilindrata</label>
          <input type="text" class="form-control" placeholder="Cilindrata" name="cilindrata" value="{{$car->cilindrata}}">
        </div>
        <div class="form-group">
          <label>Prezzo</label>
          <input type="text" class="form-control" placeholder="Prezzo" name="prezzo" value="{{$car->prezzo}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Modifica auto</button>
        </div>
      </form>

    </div>


    </div>

  </div>

@endsection
