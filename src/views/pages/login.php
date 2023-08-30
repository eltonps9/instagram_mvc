<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-clone_Insta</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/login.css">
</head>

<body>
    <div id="container">
        <!--slides-->
        <div class="slide">
            <div class="containerImages" style="background-image: url('<?=$base;?>/assets/images/iphone.jpg');">
                <div class="contImages" >
                    <img src="<?=$base;?>/assets/images/screenshot1.png" alt="" class="imag">
                    <!--
                    <img src="<?=$base;?>/assets/images/screenshot2.png" alt="" class="imag">
                    <img src="<?=$base;?>/assets/images/screenshot3.png" alt="" class="imag">
                    <img src="<?=$base;?>/assets/images/screenshot4.png" alt="" class="imag">
                    -->
                </div>
            </div>
        </div>

        <!--formulario-->
        <section class="section">
            <div class="containerdown">
                <div class="enterContainer">
                    <div class="logo">
                        Clone Insta
                    </div>
                        
                    <?php
                        if(!empty($_SESSION['error'])){
                            echo '<p style=" font-size:15px; color: white; background-color: red; width:60%;
                            height:22px;">'. $_SESSION['error'].'</p>';
                            echo $_SESSION['error']="";
                        }
                        if(!empty($_SESSION['logout'])){
                            echo '<p style=" font-size:13px; color: white; background-color: red; width:60%;
                            height:22px;">'. $_SESSION['logout'].'</p>';
                            echo $_SESSION['logout']="";
                        }
                    ?>
                        
                    <form action="<?=$base;?>/loginAction" method="post" id="formulario">
                        <input type="text" name="email" id="email" required placeholder="E-mail ou Usuario" autofocus>
                        <input type="password" name="senha" id="senha" required placeholder="Senha">

                        <input type="submit" value="Iniciar Sessão" id="submit">
                    </form>
                    <div class="containerInt">
                        <div class="separar">
                            <div class="linha"></div>
                            <p>OU</p>
                            <div class="linha"></div>
                        </div>
                        <strong><a href="facebook.php">Iniciar sessão com facebook</a></strong>

                    </div>
                </div>
                <div class="cadastro">
                    <p>Não tem uma conta? <a href="<?=$base;?>/cadastro">Registra-te</a></p>
                </div>
            </div>

        </section>

    </div>
    <script src="<?=$base;?>/assets/js/sliderScript.js"></script>
</body>

</html>