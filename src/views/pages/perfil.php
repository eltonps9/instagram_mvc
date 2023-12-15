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

    
        <div class="container_imagem"  >
            <!-- estilizar; deixar a tela inteira, imagem selecionada para ser visiolizada com javascript-->
            <img src="" alt="" class="imagemView">
        </div>
    
        <div id="container_section">
            <div id="container_infor">
                <div class="foto">
                    <!-- colocar evento de clique para escolher se vai mudar ou excluir a foto-->
                    <img src="<?=$base;?>/assets/images/<?=$_SESSION['usuario']['foto'];?>" alt="foto_perfil">

                </div>
                <div class="info">
                    <div class="infor_usuario">
                        <div class="infor_up inforUp">
                            <strong><?=$_SESSION['usuario']['usuario'];?></strong>
                            <button>Editar perfil</button>
                        </div>
                        <div class="infor_up">
                            <p><?=$_SESSION['publi'];?> publicações</p>
                            <p><?=$_SESSION['seguindo'];?> seguidores</p09>
                            <p>A seguir <?=$_SESSION['seguir'];?></p>
                        </div>
                    </div>
                    <div class="detalhes_usuario">
                        <!-- fazer como area editavel-->
                        <p class="bold"><?=$_SESSION['usuario']['nomeUsuario'];?></p>
                        <p>Brumado-BA</p>
                        <p>@elton.dev</p>
                        <p><a >github.com/eltonps9</a></p>
                    </div>
                </div>
            </div>
            
            <!-- area dos storys salvos -->
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
                    <a class="postou">
                        <img class="select"  src="<?=$base;?>/assets/images/<?=$postada['post'];?>" alt="" >

                    </a>
                
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