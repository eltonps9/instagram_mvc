<?php
namespace src\controllers;

use \core\Controller;

use\src\models\Usuario;
use\src\models\Post;
use\src\models\Seguidore;

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
        for($i=0;$i<=count($post);$i++)
        $publicacoes=$i;

        //seguindo
        $seguir=Seguidore::select()
        ->where([
            'id_user_seguindo'=>$usuario['id']
        ])
        ->execute();
        for($i=0;$i<=count($seguir);$i++)
        $seguidores=$i;

        //a seguidores
        $seguindo=Seguidore::select()
        ->where([
            'id_user_seguidor'=>$usuario['id']
        ])
        ->execute();
        for($i=0;$i<=count($seguindo);$i++)
        $Oseguindo=$i;
        
        $_SESSION['publi']=$publicacoes;
        $_SESSION['seguindo']=$seguidores;
        $_SESSION['seguir']=$Oseguindo;
        
        $this->render('perfil',[
            'usuario'=>$usuario,
            'post'=>$post
        ]);
    }

}