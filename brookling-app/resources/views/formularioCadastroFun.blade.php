@extends('layout')
@section('content')

<section class="container mt-5">

  <form class="row g-3">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Senha</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Endereço</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Av. Guarulhos, 1112">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Complemento</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, estúdio ou piso">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Estado</label>
      <select id="inputState" class="form-select">
        <option selected>Escolha...</option>
        <option>SP</option>
        <option>RJ</option>
        <option>MG</option>
        <option>BA</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">CEP</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Cobertura na banana?
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Entrar</button>
    </div>
  </form>

</section>

@endsection