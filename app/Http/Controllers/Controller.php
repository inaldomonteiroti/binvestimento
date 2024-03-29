<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function homepage()
    {
    //helper que traz a rendereização de uma view passando variavel para view
    $variavel = "- Homepage do binvestimento";
    return view('welcome' ,[
        'title' => $variavel
    ]);
    }

    public function cadastrar()
    {
    echo "Fazer um cadastro";
    }

    public function fazerLogin()
    {
    echo "Tela de Login";
    }
}
