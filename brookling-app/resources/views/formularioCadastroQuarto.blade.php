@extends('layout')
@section('content')

<section class="container mt-5">

  <form class="row g-3" method="post" action="{{route('envia-db-clie')}}">
  
  @csrf  



      <div class="col-md-12">
        <label for="inputNumero" class="form-label">Número:</label>
        <input name="Numero" type="number" class="form-control" id="inputNumero" placeholder="136">
      </div>

      <label for="Tipo">Tipo:</label>
      <select name=Tipo class="form-select form-select-lg mb-3" aria-label="Large select example">
        <option value="classeA">Classe A+</option>
        <option value="comercial">Comercial</option>
        <option value="suite">Suíte</option>
      </select>

      <div class="col-md-6">
        <label for="inputValor" class="form-label">Valor:</label>
        <input name="Valor" type="number" class="form-control" id="inputValor" placeholder="200,00">
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
  </form>

</section>

@endsection