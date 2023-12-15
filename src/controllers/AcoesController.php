<?php
namespace src\controllers;

use \core\Controller;

use\src\models\Usuario;
use\src\models\Post;
use\src\models\Like;
use\src\models\Seguidore;


class AcoesController extends Controller {

    public function seguir(){

        $idUser=$_POST['id'];
        
        if(!empty($idUser)){
            $usuarios=Usuario::select()
            ->where([
                'nomeUsuario'=>$_SESSION['usuario']['nomeUsuario']
            ])
            ->execute();
            $seguidores=Seguidore::insert([
                'id_user_seguidor'=>$usuarios['0']['id'],
                'id_user_seguindo'=>$idUser
            ])
            ->execute();

            //mudar esse redirect, ta dando erro
            $this->redirect('/search');

        }
    }

}