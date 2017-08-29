@extends('layout.site')

@section('titulo','Cursos')


@section('conteudo')

<div class="container">
	<h3 class="center">Lista de Cursos</h3>
	<div class="row">
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Titulo</th>
					<th>Descrição</th>
					<th>Imagem</th>
					<th>Valor</th>
					<th>Publicado</th>
					<th class="center">Ação</th>
				</tr>
			</thead>
			<tbody>
				@foreach($registros as $registro)
				<tr>
					<td>{{$registro->id}}</td>
					<td>{{$registro->titulo}}</td>
					<td>{{$registro->descricao}}</td>
					<td><img width="70" src="{{asset($registro->imagem)}}"></td>
					<td>{{$registro->valor}}</td>
					<td>{{$registro->publicado}}</td>
					<td class="center">
						<a class="btn deep-orange" href="{{ route('admin.cursos.editar',$registro->id) }}">Editar</a>
						<a class="btn red" href="{{ route('admin.cursos.deletar',$registro->id) }}" onclick="deletar()">Deletar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="row">
		<a type=""class="btn blue" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
										 

	</div>
</div>
			
@endsection