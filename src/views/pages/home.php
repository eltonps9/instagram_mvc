<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram | feed</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/paginaInicial.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/header.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/navbar.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/global.css">

</head>

<body>
    <div id="container">
        <!--menu navbar-->
        <?php $render('navbar');?>
    
        <div id="container_section">
            <div id="esq">
                <section id="section_story">
                    <!--foreach dos story seguidos-->
                    <?php $render('header');?>
                   
                </section>
                <section id="section_post">
                    <?php if(!empty($_SESSION['post'])): foreach($_SESSION['post'] as $logado):?>
                            <div class="post">
                                <!-- foto e nome do usuario -->
                                <div id="usuario">
                                    <div class="perfil_usuario">
                                        <img src="<?=$base;?>/assets/images/<?=$_SESSION['usuario']['foto'];?>" alt="usuario">
                                        <strong><?=$_SESSION['usuario']['nomeUsuario'];?></strong>
                                    </div>
                                    <p><?=$logado['date'];?>||<?=$logado['hours'];?></p>
                                </div>
                                <!-- post do  usuario -->
                                <div id="post">
                                    <img src="<?=$base;?>/assets/images/<?=$logado['post'];?>" alt="foto">
                                </div>
                                <!-- legenda e comentarios do post-->
                                <div id="postComent">
                                    <div class="linkUsuario">
                                        <a href=""><?=$logado['name_usuario'];?></a>
                                        <p><?=$logado['legenda'];?></p>
                                    </div>
                                    <div class="comentarioUsuarios">
                                        <a href="">ver outros comentarios ...</a>
                                    </div>
                                        <div class="comentario">
                                            <div class="p">
                                                <a href="">kelly.lobo</a>
                                                <p> lindo</p>
                                            </div>
                                            <div class="p">
                                                <a href="">robertt.lobo</a>
                                                <p> massa</p>
                                            </div>
                                            <input type="text" name="comentario" placeholder="Adicionar comentario..." id="comentario">
                                        </div>
                                </div>
                            </div>
                            <?php endforeach; else: ?>
                                <div id="postar">Criar postagem</div>
                                
                            <?php  endif;?>
                </section>
            </div>
            <section id="dir">
                <!--trocar imagem quando atualizar no perfil pessoal-->
                <a class="perfil_link"><img src="<?=$base;?>/assets/images/<?=$_SESSION['usuario']['foto'];?>" 
                alt="perfil" id="perfil_img"><?=$_SESSION['usuario']['nomeUsuario'];?></a>
                
            </section>
        </div>

    </div>
</body>
<script src="<?=$base;?>/assets/js/script.js"></script>
</html>