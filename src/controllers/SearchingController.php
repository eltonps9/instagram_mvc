<?php
namespace src\controllers;

use \core\Controller;

use\src\models\Usuario;
use\src\models\Post;
use \src\Config;

class SearchingController extends Controller {
    public function search(){
        $this->render('search');

    }
}