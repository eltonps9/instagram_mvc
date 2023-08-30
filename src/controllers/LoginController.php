<?php
namespace src\controllers;

use \core\Controller;

use\src\models\Usuario;
use\src\models\Post;

class LoginController extends Controller {

    public function login() {
        $this->render('login');
    }

    public function cadastro() {
        $this->render('cadastro');

    }

    public function loginAction(){
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $token= md5(time(),10);

        if($email && $senha){           

            $usuario=Usuario::select()
            ->where([
                'email'=>$email,
                'senha'=>$senha
            ])
            ->execute();

            
            if(Count($usuario)>0){
                $usuarioUpdate=Usuario::update([
                    'token'=>$token
                ])
                ->where([
                    'email'=>$email,
                    'senha'=>$senha
                ])
                ->execute();

                $post=Post::select()
                ->where([
                    'id_user'=>$usuario['0']['id']
                ])
                ->orderBy('id','desc')
                ->execute();

                $_SESSION['token']=$token;
                $_SESSION['usuario']=$usuario['0'];
                $_SESSION['post']=$post;

                $this->render('/home',[
                    'usuario'=>$usuario,
                    'post'=>$post
                ]);
                exit;
            }
        }

        $_SESSION['error']="Senha/Usuario não existe";

        $this->redirect('/login',[
            'error'=>$_SESSION['error']
        ]);
        
    }

    public function cadastroAction(){
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $usuarios=$_POST['usuario'];
        $nome=$_POST['nome'];
        $data=date('d/m/y');
        $token = md5(100,time());
        $foto="avatar.png";
       
        

        if($email && $senha && $usuarios && $nome && $data){
            $usuario=Usuario::select()
            ->where([
                'email'=>$email
            ])
            ->execute();
            
            if(Count($usuario)>0){
                $_SESSION['error']="Usuário já existe.";
        
                $this->redirect('/cadastro',[
                    'error'=>$_SESSION['error']
                ]);
            }else{
                $usuario=Usuario::insert([
                    'email'=>$email,
                    'nomeUsuario'=>$nome,
                    'senha'=>$senha,
                    'usuario'=>$usuarios,
                    'data'=>$data,
                    'token'=>$token,
                    'foto'=>$foto
                ])
                ->execute();
                
                $usuario=Usuario::select()
                ->where([
                    'email'=>$email
                ])
                ->execute();

                if(Count($usuario)>0){

                    $_SESSION['token']=$token;
                    $_SESSION['usuario']=$usuario['0'];
                    $this->render('/home',[
                        'usuario'=>$usuario
                    ]);
                    exit;
                } 
            }
        }
        $_SESSION['error']="Preencha todos os campos corretamente.";
    
        $this->redirect('/cadastro',[
            'error'=>$_SESSION['error']
        ]);
        
            
            
    }

    public function logout(){
        // melhorar esse logout

       unset($_SESSION['token']);
       unset($_SESSION['error']);
       $_SESSION['logout']="Fazer login para poder usar novamente.";
       $this->redirect('/login');
    }
}
