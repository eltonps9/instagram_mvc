<?php
namespace src\controllers;

use \core\Controller;

use\src\models\Usuario;
use\src\models\Post;
use \src\Config;

class PostController extends Controller {

    public function feedAction($id) {

        $post=Post::select()
        ->execute();
        $usuario =Usuario::select()
        ->where([
            'id'=>$id
        ])
        ->execute();

        $legenda = $_POST['legenda'];
        $data=date('Y-m-d');
        $horas=date('H:i:s');
        $arquivo = $_FILES['arquivo'];


        // ver qual tipo de arquivo é

        switch ( $arquivo['type']) {

            case  "image/png" :
        
                $img=md5(time())."_".$arquivo['name'];
        
                break;
        
        
            case "video/mp4" :
        
                echo "agora vou querer saber se vai ser um rells";
        
                break;
            default:
            echo "nenhuma das alternativas";
            exit;
        
        }
        exit;

        //var_dump(is_dir('../public/assets/images'));
        

        if(!empty($arquivo) ){
            
            $postagem=Post::insert([
                'post'=>$img,
                'date'=>$data,
                'hours'=>$horas,
                'legenda'=>$legenda,
                'id_user'=>$usuario['0']['id'],  
                'name_usuario'=>$usuario['0']['nomeUsuario']
            ])
            ->execute();
            

            move_uploaded_file($_FILES['arquivo']['tmp_name'],"../public/assets/images/".$img);
        }

        $post=Post::select()
        ->where([
            'id_user'=>$usuario['0']['id']
        ])
        ->orderBy('id','desc')
        ->execute();

        $_SESSION['post']=$post;
        $this->render('/home',[
            'post'=>$post
        ]);
        exit;  
    }

    public function storyAction() {
        echo "postada no story";
        
    }

    public function reelsAction() {
        echo "postada no reel";
        
    }
    


}