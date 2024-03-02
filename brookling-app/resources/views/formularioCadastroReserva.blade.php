@extends('layout')
@section('content')

<section class="container mt-5">

  <form class="row g-3" method="post" action="{{route('envia-db-clie')}}">

    @csrf

    <div class="col-md-3">
      <label for="inputcodclie" class="form-label">Código do Cliente:</label>
      <input name="codclie" type="number" class="form-control" id="inputcodclie" placeholder="101">
    </div>

    <div class="col-md-9">
      <label for="inputnomeclie" class="form-label">Nome do cliente::</label>
      <input name="nomeclie" disabled type="text" class="form-control" id="inputnomeclie">
    </div>

    <div class="col-md-3">
      <label for="inputcodclie" class="form-label">Código do Funcionario:</label>
      <input name="codclie" type="number" class="form-control" id="inputcodclie" placeholder="101">
    </div>

    <div class="col-md-9">
      <label for="inputnomeclie" class="form-label">Nome do Funcionario::</label>
      <input name="nomeclie" disabled type="text" class="form-control" id="inputnomeclie">
    </div>

    <div class="col-md-3">
      <label for="inputNumQuarto" class="form-label">Número do Quarto:</label>
      <input name="NumQuarto" type="text" class="form-control" id="inputNumQuarto" placeholder="306">
    </div>

    <div class="col-md-3">
      <label for="inputvDiaria" class="form-label">Valor da diária</label>
      <input name="vDiaria" type="text" class="form-control" id="inputvDiaria" placeholder="R$150,00">
    </div>

    <div class="col-md-6">
      <label for="Tipo" class="form-label">Tipo do quarto:</label>
      <select name=Tipo class="form-select form-select-md mb-3" aria-label="Large select example">
        <option value="classeA">Classe A+</option>
        <option value="comercial">Comercial</option>
        <option value="suite">Suíte</option>
      </select>
    </div>

    <div class="col-md-6">
      <label for="inputEntrada" class="form-label">Data entrada:</label>
      <input name="Entrada" type="date" class="form-control" id="inputEntrada" placeholder="Leonardo Lucas">
    </div>

    <div class="col-6">
      <label for="inputSaida" class="form-label">Data saída:</label>
      <input name="Saida" type="date" class="form-control" id="inputSaida" placeholder="leo007@gmail.com">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">R$</span>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-text">.00</span>
    </div>

    <div class="col-md-12">
      <label for="Situacao" class="form-label">Situação:</label>
      <select name=Situacao class="form-select form-select-md mb-3" aria-label="Large select example">
        <option value="pago">Pago</option>
        <option value="pendente">Pendente</option>
      </select>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </form>

</section>

@endsection