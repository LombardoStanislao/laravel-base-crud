@extends('layout.app')


@section('content')

  <div class="container">
    <div class="row">

    <div class="col-12">
      <form action="{{route('cars.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label >Casa Produttrice</label>
          <input type="text" class="form-control" placeholder="Casa Produttrice" name="casa_produttrice">
        </div>
        <div class="form-group">
          <label>Modello</label>
          <input type="text" class="form-control" placeholder="Modello" name="modello">
        </div>
        <div class="form-group">
          <label>Anno</label>
          <input type="text" class="form-control" placeholder="Anno" name="anno">
        </div>
        <div class="form-group">
          <label>Cilindrata</label>
          <input type="text" class="form-control" placeholder="Cilindrata" name="cilindrata">
        </div>
        <div class="form-group">
          <label>Prezzo</label>
          <input type="text" class="form-control" placeholder="Prezzo" name="prezzo">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Aggiungi auto</button>
        </div>
      </form>

    </div>


    </div>

  </div>

@endsection
