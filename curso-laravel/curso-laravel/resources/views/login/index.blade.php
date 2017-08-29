@extends('layout.site')

@section('titulo','Cursos')


@section('conteudo')

<div class="container">
	<h3 class="center">Login</h3>
	<div class="row">
		<form action="{{route('Site.login.entrar')}}" method="post">
			{{ csrf_field() }}
			
			<div class="input-field">
				<input type="text" name="email">
				<label>E-mail</label>
			</div>
			<div class="input-field">
				<input type="password" name="senha">
				<label>Senha</label>
			</div>

			<button class="btn teal lighten-1">Entrar</button>
		</form>
	</div>
	
</div>
		
@endsection