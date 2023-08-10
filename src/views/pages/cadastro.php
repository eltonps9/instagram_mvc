<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-clone_Insta</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/cadastro.css">
</head>

<body>
    <div id="container">


        <!--formulario-->
        <section class="section">
            <div class="containerdown">
                <div class="enterContainer">
                    <div class="logo">
                        <div class="nameLogo">
                            Clone Insta
                        </div>
                        <div class="p">
                            <p>
                                Regista-te para veres as fotos e os vídeos dos teus amigos.
                            </p>
                            <?php  
                                if(!empty($_SESSION['error'])){
                                    echo '<p style="font-size:15px; color: white; background-color: red; width:100%;
                                    height:22px;">'. $_SESSION['error'].'</p>';
                                    echo $_SESSION['error']="";
                                }
                                if(!empty($_SESSION['cadastro'])){
                                    echo '<p style="font-size:15px; color: white; background-color: green; width:100%;
                                    height:22px;">'.$_SESSION['cadastro'].'</p>';
                                    echo $_SESSION['cadastro']="";
                                }
                            ?>
                        </div>
                    </div>
                    <div class="containerInt">
                        <button class="button"><a href="facebook.php">Iniciar sessão com facebook</a></button>

                        <div class="separar">
                            <div class="linha"></div>
                            <p>OU</p>
                            <div class="linha"></div>
                        </div>

                    </div>
                    <form action="<?=$base;?>/cadastroAction" method="post" id="formulario">
                        <input type="text" name="email" id="email" required placeholder="Número de telemóvel ou e-mail" autofocus>
                        <input type="text" id="nome" name="nome" required placeholder="Nome completo">
                        <input type="text" id="utilizador" name="usuario" required placeholder="Nome de utilizador">
                        <input type="password" id="senha" name="senha" required placeholder="Palavra-passe">

                        <input type="submit" value="Registrar" id="submit">
                    </form>

                </div>
                <div class="cadastro">
                    <p>tem uma conta? <a href="<?=$base;?>/login">Iniciar Sessão</a></p>
                </div>
            </div>

        </section>

    </div>
</body>

</html>