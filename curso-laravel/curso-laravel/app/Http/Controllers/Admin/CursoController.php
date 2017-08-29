<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    //FUNÇÃO INDEX EXIBE OS DADOS DA PAGINA INDEX
    public function index()
    {
    	$registros = Curso::all();
    	 
    	return view('admin.cursos.index', compact('registros'));
    }

    //FUNÇÃO ADICIONAR
    public function adicionar()
    {
    	return view('admin.cursos.adicionar');
    }

    //FUNÇÃO SALVAR
    public function salvar(Request $req)
    {
        $dados = $req->all();
        if(isset($dados['publicado'])){
           $dados['publicado'] = 'sim'; 
        }else{
            $dados['publicado'] = 'nao';
        }
        if($req->hasfile('imagem')){//verificar se já existir uma imagem
           $imagem = $req->file('imagem');
           $nome = rand(1111,9999);//gera um nome aliatório para imagem
           $dir = "img/cursos"; //diretório onde vai salvar as imagens
           $ext = $imagem->guessClientExtension();//pega a extensão da imagem
           $nomeImagem = "imagem_".$nome.".".$ext;//definido o nome da imagem
           $imagem->move($dir,$nomeImagem);//move a imagem para o diretório especificado anterior
           $dados['imagem'] = $dir."/".$nomeImagem;//como vai salvar no bando de dados
        }
        Curso::create($dados);//salvar imagem no banco e no diretório pronto só isso!

        return redirect()->route('admin.cursos');
    }

    //FUNÇÃO EDITAR
    public function editar($id)
    {
      $registro = Curso::find($id);
      return view('admin.cursos.editar', compact('registro'));
    }

    //FUNÇÃO ATUALIZAR
     public function atualizar(Request $req, $id) //acrescenta o id que será atualizado
    {
        $dados = $req->all();
        if(isset($dados['publicado'])){
           $dados['publicado'] = 'sim'; 
        }else{
            $dados['publicado'] = 'nao';
        }
        if($req->hasfile('imagem')){//verificar se já existir uma imagem
           $imagem = $req->file('imagem');
           $nome = rand(1111,9999);//gera um nome aliatório para imagem
           $dir = "img/cursos"; //diretório onde vai salvar as imagens
           $ext = $imagem->guessClientExtension();//pega a extensão da imagem
           $nomeImagem = "imagem_".$nome.".".$ext;//definido o nome da imagem
           $imagem->move($dir,$nomeImagem);//move a imagem para o diretório especificado anterior
           $dados['imagem'] = $dir."/".$nomeImagem;//como vai salvar no bando de dados
        }
        Curso::find($id)->update($dados);//atualiza todos os dados!

        return redirect()->route('admin.cursos');//retorna para página cursos
    }

    //FUNÇÃO DELETAR
    public function deletar($id) //deletar precisa do id que será deletado
    {
        Curso::find($id)->delete();//deleta todos os dados!

        return redirect()->route('admin.cursos');//retorna para página cursos
    }
}
