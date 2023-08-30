
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
    <link rel="stylesheet" href="<?=$base;?>/assets/css/search.css">

</head>

<body>
    <div id="container">
        <!--menu navbar-->
        <?php $render('navbar');?>
    
        <section id="section_post">
            <!-- aviso de pesquisa -->
            <strong >
                <?php 
                    if(!empty($_SESSION['avisosearch'])){
                        echo $_SESSION['avisosearch'];
                        $_SESSION['avisosearch']="";
                    }
                ?>
            </strong>
            <?php foreach($searching as $search):?>
                <div class="userSearch">
                    <div class="imgSearch">
                        <img src="<?=$base;?>/assets/images/<?=$search['foto'];?>" alt="">
                    </div>
                    <div class="nomeSearch">
                        <h4><?=$search['nomeUsuario'];?></h4>
                    </div>
                    <div class="seguir">
                        +
                    </div>

                </div>
            <?php endforeach;?>
        </section>     
</div>

    </div>
</body>
<script src="<?=$base;?>/assets/js/script.js"></script>
</html>
