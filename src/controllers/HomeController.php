<?php
namespace src\controllers;

use \core\Controller;

use\src\models\Usuario;
use\src\models\Post;

class HomeController extends Controller {

    public function index() {
        $this->redirect('/login');
    }

    public function home(){

        $usuario=Usuario::select()
        ->where([
            'email'=>$_SESSION['usuario']['email'],
            'senha'=>$_SESSION['usuario']['senha']
        ])
        ->one();

        $post=Post::select()
        ->where([
            'id_user'=>$usuario['id']
        ])
        ->execute();

        $this->render('home',[
            'usuario'=>$usuario,
            'post'=>$post
        ]);
    }

    public function perfil(){
        $usuario=Usuario::select()
        ->where([
            'email'=>$_SESSION['usuario']['email'],
            'senha'=>$_SESSION['usuario']['senha']
        ])
        ->one();

        $post=Post::select()
        ->where([
            'id_user'=>$usuario['id']
        ])
        ->execute();

        $this->render('perfil',[
            'usuario'=>$usuario,
            'post'=>$post
        ]);
    }

}