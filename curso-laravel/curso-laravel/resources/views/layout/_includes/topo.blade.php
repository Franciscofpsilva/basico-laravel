<!DOCTYPE html>
  <html>
    <head>
	    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('titulo')</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <script type="tex/javascript">
		function deletar(){
			alert('Desaja mesmo deletar esse arquivo?');
		}	
    </script>

	<style>
		.logo-small h5{margin-left: 0px;}
		.logo-small h6{font-size: 16px;}
		h3{border-bottom: 1px solid #ccc;}
	</style>
    <body>
	<header>
	<div class="navbar-fixed">
	<nav class="deep-orange">
		<div class="container">
		    <div class="nav-wrapper logo-small">
		      <a href="#!" class="brand-logo show-on-small hide-on-med-and-up">
		      	<h5>Curso Laravel</h5>
		      </a>
		      <a href="#!" class="brand-logo hide-on-small-only">Curso de Laravel</a>
		      <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="/">Home</a></li>
		        @if(Auth::guest()) {{-- mostra apenas quando usuario não estiver logado--}}
					 <li><a href="{{route('Site.login')}}">Login</a></li>
		        @else
		            <li class=""><a href="#">{{Auth::user()->name}}</a></li>
					<li><a href="{{route('admin.cursos')}}">Cursos</a></li>
					<li class="red accent-4"><a href="{{route('Site.login.sair')}}">Sair</a></li>
		        @endif
		        
		        
		      </ul>
		      
		    </div>
	    </div>
  </nav>
  </div>
  <ul class="side-nav" id="mobile">
	<li><a href="/">Home</a></li>
		@if(Auth::guest()) {{-- mostra apenas quando usuario não estiver logado--}}
		<li><a href="{{route('Site.login')}}">Login</a></li>
		@else
		<li class=""><a href="#">{{Auth::user()->name}}</a></li>{{-- Traz o nome do usuario cadastrado--}}
		<li><a href="{{route('admin.cursos')}}">Cursos</a></li>
		<li class="red accent-4"><a href="{{route('Site.login.sair')}}">Sair</a></li>
		@endif
  </ul>        
	</header>
    
        
