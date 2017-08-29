@extends('layout.site')

@section('titulo','Cursos')


@section('conteudo')

<div class="container">
    <h3 class="center z-depth-1">Lista de Cursos</h3>
    <div class="row">
      
      @foreach($cursos as $curso)
         <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img height="160px" src="{{asset($curso->imagem)}}">
            </div>
            <div class="card-content" style="height: 130px;">
              <h5>{{$curso->titulo}}</h5>
              <p>{{$curso->descricao}}</p>
            </div>
            <div class="card-action">
              <a href="#">Veja Mais...</a>
            </div>
          </div>
        </div>
      @endforeach

    </div>
</div>
            
@endsection