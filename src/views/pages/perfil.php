<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram | <?=$usuario['name_usuario'];?></title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/perfil.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/navbar.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/global.css">


</head>

<body>
    <div id="container">
        <!--menu navbar-->
        <?php $render('navbar');?>
    
        <div id="container_section">
            <div id="container_infor">
                <div class="foto">
                        <!-- colocar evento de clique para escolher se vai mudar ou excluir a foto-->

                    <img src="<?=$base;?>/assets/images/<?=$_SESSION['usuario']['foto'];?>" alt="foto_perfil">
                </div>
                <div class="info">
                    <div class="infor_usuario">
                        <div class="inforUp">
                            <strong><?$_SESSION['usuario']['nomeUsuario'];?></strong>
                            <button>Editar perfil</button>
                        </div>
                        <div class="inforDown">
                            <p>00 publicacoes</p>
                            <p>09 seguidores</p09>
                            <p>A seguir 45</p>
                        </div>
                    </div>
                    <div class="detalhes_usuario">
                        <!-- fazer como area editavel-->
                        <p>Elton Passos</p>
                        <p>Brumado-BA</p>
                        <p>@elton.dev</p>
                        <p><a >github.com/eltonps9</a></p>
                    </div>
                </div>
            </div>

            <div id="destaques">
                <div class="destaques"><img src="<?=$base;?>/assets/images/avatar1.png" alt=""></div>
                <div class="destaques"><img src="<?=$base;?>/assets/images/avatar.png" alt=""></div>
                <div class="destaques"><img src="<?=$base;?>/assets/images/post.jpg" alt=""></div>
            </div>
            <div class="escolher">
                <div class="container_int">
                    <a href=""><img src="" alt="">publicacoes</a>
                    <a href=""><img src="" alt="">reels</a>
                    <a href=""><img src="" alt="">guardados</a>
                </div>
            </div>
            <div id="container_postagens">
                <?php if($_SESSION['post']): foreach($_SESSION['post'] as $postada): ?>
                    <div class="postou">
                        <img src="<?=$base;?>/assets/images/<?=$postada['post'];?>" alt="">
                    </div>
                
                <?php endforeach; else: ?>
                    <div style="display:flex;justify-content:center; width:100%;align-items:center;height:300px;" >
                    <h1>Nenhuma postagem feita</h1>
                    </div>
                                
                <?php  endif;?>
            </div>
            
        </div>

    </div>
</body>
<script src="<?=$base;?>/assets/js/script.js"></script>
</html>