<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller

{

public function procurarFilmesId($id) {

    $filmes = [
        1 => "Toy Story",
        2 => "Procurando Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episódio V",
        5 => "Up",
        6 => "Mary e Max"
];

$nome = $filmes[$id];

return view('filmes')->with('nomeDoFilme', $nome);

 }


public function procurarFilmeNome($nome) {

    $filmes = [
        1 => "Toy Story",
        2 => "Procurando Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episódio V",
        5 => "Up",
        6 => "Mary e Max"
];

    foreach ($filmes as $value) {
        if ($value === $nome) {
         $resultado = $nome;
         break;
        } else {
         $resultado = "Não foram encontrados resultados";
        }
    }

return view('filmes')->with('resultado', $resultado);

 }


 public function lista() {

    $lista = [
        1 => "Toy Story",
        2 => "Procurando Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episódio V",
        5 => "Up",
        6 => "Mary e Max"
    ];

    return view('filmes')->with('listarfilmes', $lista);
}


public function adicionarFilme($filme) {

    $filmes = [
        1 => "Toy Story",
        2 => "Procurando Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episódio V",
        5 => "Up",
        6 => "Mary e Max"
    ];

        array_push($filmes, $filme);

        $adicionado = "Filme adicionado com sucessooooo!!!";


    return view('filmes')->with('adicionado', $adicionado);

}

public function listatodos() {

    $lista = [
        1 => "Toy Story",
        2 => "Procurando Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episódio V",
        5 => "Up",
        6 => "Mary e Max"
    ];

    return view('todosOsFilmes')->with('listarfilmes', $lista);
}

}
