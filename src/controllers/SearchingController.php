<?php
namespace src\controllers;

use \core\Controller;

use\src\models\Usuario;
use\src\models\Post;
use\src\Config;

class SearchingController extends Controller {

    public function search(){
        $search = $_POST['search'];
        
        if(!empty($search)){           
            $searching=Usuario::select()
            ->where(
                'email','like','%'.$search.'%'
            )
            ->orWhere(
                'nomeUsuario','like','%'.$search.'%'
            )
            ->orWhere(
                'usuario','like','%'.$search.'%'
            )
            ->execute();

            
            $this->render('search',[
                'searching'=>$searching
            ]);
        }else{
           $_SESSION['avisosearch']="nenhum usuario encontrado";
           $this->redirect('/search');
        }
        

    }
}