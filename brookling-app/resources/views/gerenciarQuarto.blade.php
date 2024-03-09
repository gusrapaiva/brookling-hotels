@extends('layout')
@section('content')

<h1 class="text-center">Gerenciar dados dos Quartos</h1>

<section class="container m-5">
  <div class="container m-5">
    <form >
      <div class="row center">
        <div class="col">
          <input type="text" id="marca" name="marca" class="form-control" placeholder="Digite dados do Quarto" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Número quarto</th>
        <th scope="col">Tipo do quarto</th>
        <th scope="col">Preço</th>
        <th scope="col">Editar</th>
        <th scope="col">Exluir</th>
      </tr>
    </thead>
    <tbody>
     
      <tr>
        <th scope="row">01</th>
        <td>119897-999</td>
        <td>Samsung</td>
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        
        <td>
         xxx
        </td>
      </tr>
   
    </tbody>
  </table>
</section>

@endsection
