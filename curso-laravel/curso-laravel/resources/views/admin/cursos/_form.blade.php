<div class="input-field">
	<input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
	<label>Titulo</label>
</div>
<div class="input-field">
	<input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
	<label>Descrição</label>
</div>
<div class="file-field input-field">
	<div class="btn danger">
		<span>Imagem</span>
	<input type="file" name="imagem">
	</div>
	  <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
     </div>
</div>
{{-- verificando se exiti imagem --}}
@if(isset($registro->imagem))
<div class="input-field">
	<img width="120" src="{{asset($registro->imagem)}}">
	{{--busca a imagem no endereço certo asset($registro->imagem) --}}
</div>
@endif

<div class="input-field">
	<input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
	<label>Valor</label>
</div>
<div class="input-field">
	<p>
     <input type="checkbox" name="publicado" class="filled-in" id="filled-in-box" checked="{{isset($registro->publicado) && $registro->publicado =='sim' ? 'checked' : ''}}" 
     value="true"/>
      <label for="filled-in-box">Publicado</label>
    </p>
    <br>
</div>
{{-- {{isset($registro->publicado) && $registro->publicado =='sim' ? 'checked' : ''}} --}}